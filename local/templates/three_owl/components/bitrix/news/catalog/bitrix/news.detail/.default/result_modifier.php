<?php
use \wptt\HelpFunctions;

foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['PHOTOS']['VALUE'][$key] = CFile::GetPath($photo);
}

foreach ($arResult['PROPERTIES']['CUSTOMERS_PHOTOS']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['CUSTOMERS_PHOTOS']['VALUE'][$key] = CFile::GetPath($photo);
}

foreach ($arResult['PROPERTIES']['VIDEOS_PREVIEW']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['VIDEOS_PREVIEW']['VALUE'][$key] = CFile::GetPath($photo);
}

foreach ($arResult['PROPERTIES']['VIDEOS']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['VIDEOS']['VALUE'][$key] = CFile::GetPath($photo);
}

foreach ($arResult['PROPERTIES']['CUSTOMERS_VIDEOS']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['CUSTOMERS_VIDEOS']['VALUE'][$key] = CFile::GetPath($photo);
}
foreach ($arResult['PROPERTIES']['CUSTOM_VIDEOS_PREVIEW']['VALUE'] as $key=>$photo){
    $arResult['PROPERTIES']['CUSTOM_VIDEOS_PREVIEW']['VALUE'][$key] = CFile::GetPath($photo);
}

foreach ($arResult['PROPERTIES']['SHOPS_LIST']['VALUE'] as $key=>$shop){
    $arSelect = array("ID", "NAME", "PREVIEW_PICTURE", 'PROPERTY_LINK');
    $arFilter = array("IBLOCK_CODE" => 'shops', 'IBLOCK_ID'=>HelpFunctions::getIBlockIdByCode('shops'), 'ID'=>$shop);
    $res = \CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
    if ($ob = $res->GetNextElement()) {
        $shopProps = $ob->GetFields();
    }
    $arResult['PROPERTIES']['SHOPS_LIST']['VALUE'][$key] = array('NAME'=>$shopProps['NAME'], 'LINK'=>$shopProps['PROPERTY_LINK_VALUE'], 'IMAGE'=>CFile::GetPath($shopProps['PREVIEW_PICTURE']));

}

foreach ($arResult['PROPERTIES']['WATCH_ALSO']['VALUE'] as $key=>$relProduct){
    $arSelect = array("ID", "NAME", "PREVIEW_PICTURE", 'DETAIL_PAGE_URL', 'PROPERTY_ARTIKUL');
    $arFilter = array("IBLOCK_CODE" => 'products', 'IBLOCK_ID'=>HelpFunctions::getIBlockIdByCode('products'), 'ID'=>$relProduct);
    $res = \CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
    if ($ob = $res->GetNextElement()) {
        $prodProps = $ob->GetFields();
    }
    $arResult['PROPERTIES']['WATCH_ALSO']['VALUE'][$key] = array(
        'NAME'=>$prodProps['NAME'],
        'LINK'=>$prodProps['DETAIL_PAGE_URL'],
        'IMAGE'=>CFile::GetPath($prodProps['PREVIEW_PICTURE']),
        'ARTIKUL'=>$prodProps['PROPERTY_ARTIKUL_VALUE']
        );

}

