<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Loader;

Loader::includeModule('iblock');
$answer = array();
$arPagination = array();
if (isset($_GET['iNumPage']) && isset($_GET['nPageSize'])) {
    $arPagination['nPageSize'] = $_GET['nPageSize'];
    $arPagination['iNumPage'] = $_GET['iNumPage'];
    $arPagination['checkOutOfRange'] = true;
}
$arSelect = array("ID", "NAME", 'PREVIEW_TEXT', 'PROPERTY_LINK', 'PROPERTY_DATE_START');
$arFilter = array('IBLOCK_CODE' => $_GET['IBLOCK_CODE'], 'INCLUDE_SUBSECTIONS' => 'Y');
if (isset($_GET['SECTION_ID'])) {
    $arFilter['SECTION_ID'] = $_GET['SECTION_ID'];
}
$res = \CIBlockElement::GetList(array('sort' => 'desc'), $arFilter, false, $arPagination, $arSelect);

$counter = 0;
while ($ob = $res->GetNextElement()) {
    if ($counter > 8) {
        $counter++;
        continue;
    } else {
        $fields = $ob->GetFields();
        $answer['LIST'][$counter] = array(
            'NAME' => $fields['NAME'],
            'DESCRIPTION' => $fields['PREVIEW_TEXT'],
            'DATE' => $fields['PROPERTY_DATE_START_VALUE'],
            'LINK' => $fields['PROPERTY_LINK_VALUE'],
        );
    }
    $counter++;
}
$answer['TOTAL'] = $counter;
header('Content-Type: application/json');
echo \Bitrix\Main\Web\Json::encode($answer, JSON_UNESCAPED_UNICODE);
