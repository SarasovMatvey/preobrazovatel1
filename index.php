<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

require_once __DIR__ . '/vendor/autoload.php';

const BUILD_DIRECTORY = "build/";
const RED="\e[41m";
const GREEN="\e[42m";
const BLACK="\e[30m";
const ENDCOLOR="\e[0m";

if (file_exists( BUILD_DIRECTORY )) {
    echo RED . "Директория " . BUILD_DIRECTORY . " уже существут.\n" . ENDCOLOR;
    echo RED . "Операция не может быть выполнена так как могут быть потеряны файлы прошлого преобразования.\n" . ENDCOLOR; 
    echo RED . "Чтобы продолжить - удалите папку " . BUILD_DIRECTORY . " и повторите команду" . ENDCOLOR . "\n";

    exit();
}

$spreadsheet = new Spreadsheet();
$spreadsheet = IOFactory::load("excel.xlsx");
$workSheet = $spreadsheet->getActiveSheet();

$values = [];

// СЕКЦИЯ: ОБЩИЕ ПЕРЕМЕННЫЕ
$values['Домен'] = $workSheet->getCell('B1')->getValue();
$values['Логотип'] = $workSheet->getCell('B2')->getValue();
$values['Title'] = $workSheet->getCell('B3')->getValue();
$values['Description'] = $workSheet->getCell('B4')->getValue();
$values['Заголовок первого экрана'] = $workSheet->getCell('B5')->getValue();
$values['Подзаголовки 3 штуки'] = explode("\n", $workSheet->getCell('B6')->getValue());
$values['Картинка главного экрана'] = $workSheet->getCell('B7')->getValue();
$values['Alt и Title к главной картинке'] = $workSheet->getCell('B8')->getValue();
$values['Телефон для звонков'] = $workSheet->getCell('B9')->getValue();
$values['Телефон для вацап'] = $workSheet->getCell('B10')->getValue();
$values['Список слов для блока "Акция"'] = $workSheet->getCell('B11')->getValue();
$values['Списко гео для карты'] = $workSheet->getCell('B12')->getValue();
$values['Карта офиса (скрипт)'] = $workSheet->getCell('B13')->getValue();
$values['Список вакансий (3 штуки)'] = explode("\n", $workSheet->getCell('B14')->getValue());
$values['Почта для сбора заявок'] = $workSheet->getCell('B15')->getValue();
$values['Телеграмм token'] = $workSheet->getCell('B16')->getValue();
$values['Телеграмм id chat'] = $workSheet->getCell('B17')->getValue();
$values['Код метрики'] = $workSheet->getCell('B18')->getValue();
$values['Код гугл'] = $workSheet->getCell('B19')->getValue();
$values['Код вебмастер'] = $workSheet->getCell('B20')->getValue();
$values['Скрины отзывов'] = explode("\n", $workSheet->getCell('B21')->getValue());
$values['Портфолио картинки'] = explode("\n", $workSheet->getCell('B22')->getValue());
$values['Портфолио видео'] = explode("\n", $workSheet->getCell('B23')->getValue());
$values['Реквизиты'] = explode("\n", $workSheet->getCell('B24')->getValue());
$values['Конкуренты'] = explode("\n", $workSheet->getCell('B25')->getValue());

// СЕКЦИЯ: КВИЗ
$values['Вопросы'] = array_filter($workSheet->rangeToArray('B28:Z28')[0]);
$values['Ответы (списком в одну ячейку)'] = array_filter($workSheet->rangeToArray('B29:Z29')[0]);
$values['Ответы (списком в одну ячейку)'][0] = array_filter(explode("\n", $values['Ответы (списком в одну ячейку)'][0]));
$values['Ответы (списком в одну ячейку)'][1] = array_filter(explode("\n", $values['Ответы (списком в одну ячейку)'][1]));
$values['Ответы (списком в одну ячейку)'][3] = array_filter(explode("\n", $values['Ответы (списком в одну ячейку)'][3]));

// СЕКЦИЯ: FAQ
$values['Список вопросов (6 штук)'] = array_filter($workSheet->rangeToArray('B33:Z33')[0]);
$values['Список ответов (6 штук)'] = array_filter($workSheet->rangeToArray('B34:Z34')[0]);

// СЕКЦИЯ: Каталог псевдокатегорий (карточки)
$values['Заголовки карточек'] = array_filter(array_map(function($value) {
    return $value[0];
}, $workSheet->rangeToArray('B38:B999')));
$c = count($values['Заголовки карточек']) + 38 - 1;
$values['Картинка'] = array_map(function($value) {
    return $value[0];
}, $workSheet->rangeToArray("C38:C$c"));
$values['Описания (LSI)'] = array_map(function($value) {
    return array_filter(explode("\n", $value[0]));
}, $workSheet->rangeToArray("D38:D$c"));
$values['Ценник'] = array_map(function($value) {
    return $value[0];
}, $workSheet->rangeToArray("E38:E$c"));

// СЕКЦИЯ: Таблицы с ценами
$values['Заголовок таблицы'] = $workSheet->getCell('H38')->getValue();
$values['Наименования'] = array_filter(array_map(function($value) {
    return $value[0];
}, $workSheet->rangeToArray('I38:I999')));
$c = count($values['Наименования']) + 38 - 1;
$values['Перечисление цен'] = array_map(function($value) {
    return $value[0];
}, $workSheet->rangeToArray("J38:J$c"));

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

echo GREEN . BLACK . "Преобразование прошло успешно" . ENDCOLOR . "\n";