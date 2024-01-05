<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions.php';

const BUILD_DIRECTORY = "./build";
const BUILD_ARCHIVE_FILE = "./build.zip";
const RED="\e[41m";
const GREEN="\e[42m";
const BLACK="\e[30m";
const ENDCOLOR="\e[0m";

echo BUILD_DIRECTORY;
echo BUILD_ARCHIVE_FILE;

if (file_exists(BUILD_DIRECTORY) || file_exists(BUILD_ARCHIVE_FILE)) {
    echo RED . "Директория " . BUILD_DIRECTORY . " или файл " . BUILD_ARCHIVE_FILE . " уже существут.\n" . ENDCOLOR;
    echo RED . "Операция не может быть выполнена так как могут быть потеряны файлы прошлого преобразования.\n" . ENDCOLOR; 
    echo RED . "Чтобы продолжить - удалите указанный файл и папку и повторите команду" . ENDCOLOR . "\n";

    exit();
}

$spreadsheet = new Spreadsheet();
$spreadsheet = IOFactory::load("excel.xlsx");
$workSheet = $spreadsheet->getActiveSheet();

$values = [];

// СЕКЦИЯ: ОБЩИЕ ПЕРЕМЕННЫЕ
$values['Домен'] = getSpecificCell($workSheet, 'B1');
$values['Логотип'] = getSpecificCell($workSheet, 'B2');
$values['Title'] = getSpecificCell($workSheet, 'B3');
$values['Description'] = getSpecificCell($workSheet, 'B4');
$values['Заголовок первого экрана'] = getSpecificCell($workSheet, 'B5');
$values['Подзаголовки 3 штуки'] = getSpecificCell($workSheet, 'B6', true);
$values['Картинка главного экрана'] = getSpecificCell($workSheet, 'B7');
$values['Alt и Title к главной картинке'] = getSpecificCell($workSheet, 'B8');
$values['Телефон для звонков'] = getSpecificCell($workSheet, 'B9');
$values['Телефон для вацап'] = getSpecificCell($workSheet, 'B10');
$values['Список слов для блока "Акция"'] = getSpecificCell($workSheet, 'B11', true);
$values['Списко гео для карты'] = getSpecificCell($workSheet, 'B12', true);
$values['Карта офиса (скрипт)'] = getSpecificCell($workSheet, 'B13');
$values['Список вакансий (3 штуки)'] = getSpecificCell($workSheet, 'B14', true);
$values['Почта для сбора заявок'] = getSpecificCell($workSheet, 'B15');
$values['Телеграмм token'] = getSpecificCell($workSheet, 'B16');
$values['Телеграмм id chat'] = getSpecificCell($workSheet, 'B17');
$values['Код метрики'] = getSpecificCell($workSheet, 'B18');
$values['Код гугл'] = getSpecificCell($workSheet, 'B19');
$values['Код вебмастер'] = getSpecificCell($workSheet, 'B20');
$values['Скрины отзывов'] = getSpecificCell($workSheet, 'B21', true);
$values['Портфолио картинки'] = getSpecificCell($workSheet, 'B22', true);
$values['Портфолио видео'] = getSpecificCell($workSheet, 'B23', true);
$values['Реквизиты'] = getSpecificCell($workSheet, 'B24', true);
$values['Конкуренты'] = getSpecificCell($workSheet, 'B25', true);

// СЕКЦИЯ: КВИЗ
$values['Вопросы'] = getCellsFromToRight($workSheet, 'B28');
$values['Ответы (списком в одну ячейку)'] = getCellsFromToRight($workSheet, 'B29', true);

// СЕКЦИЯ: FAQ
$values['Список вопросов (6 штук)'] = getCellsFromToRight($workSheet, 'B33');
$values['Список ответов (6 штук)'] = getCellsFromToRight($workSheet, 'B34');

// СЕКЦИЯ: Каталог псевдокатегорий (карточки)
$values['Заголовки карточек'] = getCellsFromToBottom($workSheet, 'B38');
$values['Картинка'] = getCellsFromToBottom($workSheet, 'C38', count($values['Заголовки карточек']));
$values['Описания (LSI)'] = getCellsFromToBottom($workSheet, 'D38', count($values['Заголовки карточек']), true);
$values['Ценник'] = getCellsFromToBottom($workSheet, 'E38', count($values['Заголовки карточек']));

// СЕКЦИЯ: Таблицы с ценами
$values['Заголовок таблицы'] = getSpecificCell($workSheet, 'H38');
$values['Наименования'] = getCellsFromToBottom($workSheet, 'I38');
$values['Перечисление цен'] = getCellsFromToBottom($workSheet, 'J38', count($values['Наименования']));


shell_exec('rm -rf build/');
shell_exec('cp -R template/ build/');

$dir  = new RecursiveDirectoryIterator('./build', RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);
/** @var SplFileInfo $fileInfo */
foreach ($files as $fileInfo) {
    if ($fileInfo->isDir()) {
        continue;
    }

    $file = $fileInfo->openFile('r+');
    $content = $file->fread($file->getSize());
    
    $newContent = preg_replace_callback_array(
        [
            '/\[\[\[\!(.*?)]]]/' => function ($match) use ($values) { // match [[[! ]]]
                return $values[$match[1]];
            },
            '/\[\[\[\?(.*?)]]]/s' => function ($match) use ($values, $file) { // match [[[? ]]]
                try {
                    ob_start();
                    eval($match[1]);
                    $replacement = ob_get_contents();
                    ob_end_clean();
                    return $replacement;
                } catch (Throwable $t) {
                    echo "Error in file: " . $file->getFilename() . PHP_EOL;
                    echo "Error message: " . $t->getMessage() . PHP_EOL;
                    echo "Error context: " . PHP_EOL . $match[0];
                }
            },
        ],
        $content
    );

    $file->ftruncate(0);
    $file->fseek(0);

    $file->fwrite($newContent);
}

exec("zip -r " . BUILD_ARCHIVE_FILE . ' ' . BUILD_DIRECTORY);

echo GREEN . BLACK . "Преобразование прошло успешно" . ENDCOLOR . "\n";