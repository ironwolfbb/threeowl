<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Loader;

Loader::includeModule('iblock');
$answer = array();
$arPagination = array('nPageSize' => 9);
if (isset($_GET['iNumPage']) && isset($_GET['nPageSize'])) {
    $arPagination['nPageSize'] = $_GET['nPageSize'];
    $arPagination['iNumPage'] = $_GET['iNumPage'];
    $arPagination['checkOutOfRange'] = true;
}
$arSelect = array("ID", "NAME", 'PREVIEW_PICTURE', 'PROPERTY_LIKES', 'PROPERTY_FACEBOOK_LINK', 'PROPERTY_VK_LINK', 'PROPERTY_INST_LINK', 'PROPERTY_AUTHOR', 'PROPERTY_AUTHOR_IMAGE');
$arFilter = array('IBLOCK_CODE' => $_GET['IBLOCK_CODE'], 'SECTION_ID' => $_GET['SECTION_ID']);
$res = \CIBlockElement::GetList(array(), $arFilter, false, $arPagination, $arSelect);

$counter = 0;
while ($ob = $res->GetNextElement()) {
    $fields = $ob->GetFields();
    $answer[$counter] = array(
        'NAME' => $fields['NAME'],
        'LIKES' => $fields['PROPERTY_LIKES_VALUE'],
        'PREVIEW_IMAGE' => CFile::GetPath($fields['PREVIEW_PICTURE']),
        'INST_LINK' => $fields['PROPERTY_INST_LINK_VALUE'],
        'VK_LINK' => $fields['PROPERTY_VK_LINK_VALUE'],
        'FACEBOOK_LINK' => $fields['PROPERTY_FACEBOOK_LINK_VALUE'],
        'AUTHOR' => $fields['PROPERTY_AUTHOR_VALUE'],
        'AUTHOR_IMAGE' => CFile::GetPath($fields['PROPERTY_AUTHOR_IMAGE_VALUE']),
    );
    $counter++;
}
header('Content-Type: application/json');
echo \Bitrix\Main\Web\Json::encode($answer, JSON_UNESCAPED_UNICODE);
