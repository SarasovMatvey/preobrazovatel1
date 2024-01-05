<?php

use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

/**
 * @param Worksheet $workSheet
 * @param string $address
 * @param ?bool $isExplodeNewLines - Если true то значение в каждой колонке дополнительно разобьется на отдельные строки которые в результате вернутся как массив.
 * @return mixed
 */
function getSpecificCell($workSheet, $address, $isExplodeNewLines = false) {
    $value = $workSheet->getCell($address)->getValue();

    convertToPlainTextIfNeeded($value);

    return $isExplodeNewLines ? array_filter(explode("\n", $value)) : $value;
}

/**
 * Функция возвращает клетки от заданного адреса и до конца колонки (фактически до строки 999).
 *
 * @param Worksheet $workSheet
 * @param string $address
 * @param ?int $fixedCount - Если этот параметр указан, то функция вернет не все значения в колонке, а только указанное в этой переменной количество. Также будут сохранены все пустые колонки найденные в данных клетках (по умолчанию пустые значения удаляются).
 * @param ?bool $isExplodeNewLines - Если true то значение в каждой колонке дополнительно разобьется на отдельные строки которые в результате вернутся как массив.
 * @return mixed[]
 */
function getCellsFromToBottom($workSheet, $address, $fixedCount = null, $isExplodeNewLines = false) {
    $addressColumn = substr($address, 0, 1);
    $addressRow = substr($address, 1);

    $cells = [];
    if (is_null($fixedCount)) {
        $cells = array_filter(array_map(function($value) {
            convertToPlainTextIfNeeded($value[0]);

            return $value[0];
        }, $workSheet->rangeToArray("$address:{$addressColumn}999")));
    } else {
        $endAddressRow = $addressRow + $fixedCount - 1;

        $cells = array_map(function($value) {
            convertToPlainTextIfNeeded($value[0]);
            
            return $value[0];
        }, $workSheet->rangeToArray("$address:{$addressColumn}$endAddressRow"));
    }

    return $isExplodeNewLines ? array_map(function ($currentCell) {
        return array_filter(explode("\n", $currentCell));
    }, $cells) : $cells;
}

/**
 * Функция возвращает клетки от заданного адреса и до конца строки (фактически до колонки ZZ).
 *
 * @param Worksheet $workSheet
 * @param string $address
 * @param ?bool $isExplodeNewLines - Если true то значение в каждой колонке дополнительно разобьется на отдельные строки которые в результате вернутся как массив.
 * @return mixed[]
 */
function getCellsFromToRight($workSheet, $address, $isExplodeNewLines = false) {
    $addressRow = substr($address, 1);

    $cells = array_map(function ($value) {
        convertToPlainTextIfNeeded($value);

        return $value;
    }, array_filter($workSheet->rangeToArray("$address:ZZ$addressRow")[0]));

    return $isExplodeNewLines ? array_map(function ($currentCell) {
        return array_filter(explode("\n", $currentCell));
    }, $cells) : $cells;
}

/**
 * @param string|RichText $text
 * @return string
 */
function convertToPlainTextIfNeeded(&$text) {
    if ($text instanceof RichText) { 
        $text = $text->getPlainText();
    }

    return $text;
}