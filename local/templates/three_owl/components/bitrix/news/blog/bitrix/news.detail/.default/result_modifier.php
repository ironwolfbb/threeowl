<?php

use \wptt\HelpFunctions;

$arSection = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
$Section = $arSection->GetNext()['NAME'];

$arSelect = array("ID", "PROPERTY_NAME", "PROPERTY_LAST_NAME");
$arFilter = array("IBLOCK_CODE" => 'blog-author', 'ID' => $arResult['PROPERTIES']['AUTHOR']['VALUE']);
$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
if ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $author = $arFields['PROPERTY_NAME_VALUE'] . ' ' . $arFields['PROPERTY_LAST_NAME_VALUE'];
}

$arResult['AUTHOR'] = $author;
$arResult['SECTION'] = $Section;
function add_banner($text)
{
    $bannerStart = strpos($text, '[banner(');
    $bannerEnd = strpos($text, ']', $bannerStart);
    $bannerLen = $bannerEnd - $bannerStart;
    $bannerLen++;

    $banner = substr($text, $bannerStart, $bannerLen);
    $bannerID = preg_replace('/[^0-9]/', '', $banner);

    $pos = strpos($text, $banner);
    $bannerHTML = HelpFunctions::getAdBannerById(intval($bannerID));
    if ($pos !== false) {
        $newString = substr_replace($text, $bannerHTML, $pos, strlen($banner));
    }
    return $newString;
}

while (strpos($arResult['DETAIL_TEXT'], '[banner(')) {
    $arResult['DETAIL_TEXT'] = add_banner($arResult['DETAIL_TEXT']);
}
    print_r();

