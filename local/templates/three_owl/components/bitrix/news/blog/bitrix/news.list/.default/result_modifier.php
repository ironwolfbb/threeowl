<?php
/*
foreach($arResult["ITEMS"] as $key=>$arItem){
    $create_user=$arItem["CREATED_BY"];
    $arSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
    $Section = $arSection->GetNext()['NAME'];
    $GLOBALS['users'] = array("CREATED_BY" => $create_user);
    $userid= $create_user;;
    $rsUser = CUser::GetByID($userid);
    $arUser = $rsUser->Fetch();
    $arResult['ITEMS'][$key]['AUTHOR'] = $arUser["NAME"] .' ' .  $arUser['LAST_NAME']; //выводим имя
    $arResult['ITEMS'][$key]['SECTION'] = $Section;
}
*/

foreach($arResult["ITEMS"] as $key=>$arItem){
    
    $arSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
    $Section = $arSection->GetNext()['NAME'];
    
    $arResult['ITEMS'][$key]['SECTION'] = $Section;
}

$authorsId =[];
foreach ($arResult["ITEMS"] as $key=>$arItem) {
    if($arItem['PROPERTIES']['AUTHOR']['VALUE'] && !in_array($arItem['PROPERTIES']['AUTHOR']['VALUE'],$authorsId)) {
            $authorsId[] = intval( $arItem['PROPERTIES']['AUTHOR']['VALUE']);    
    }
}


$authors =[];
$arSelect = array("ID", "PROPERTY_NAME", "PROPERTY_LAST_NAME");
$arFilter = array("IBLOCK_CODE" => 'blog-author', 'ID' => $authorsId);
$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $authors[$arFields['ID']] = $arFields['PROPERTY_NAME_VALUE'] . ' ' . $arFields['PROPERTY_LAST_NAME_VALUE'];
}

foreach ($arResult["ITEMS"] as $key=>$arItem) {
    if($arItem['PROPERTIES']['AUTHOR']['VALUE']) {
            $authId = intval($arItem['PROPERTIES']['AUTHOR']['VALUE']);
            
            $arResult["ITEMS"][$key]["AUTHOR_NAME"] =  (($authors[$authId])?$authors[$authId]:"автор не найден");      
    } else {
        $arResult["ITEMS"][$key]["AUTHOR_NAME"] = "-";
    }
}
