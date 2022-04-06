<?php
foreach($arResult["ITEMS"] as $k=>$arItem){
    $arResult['ITEMS'][$k]['FULL_NAME'] = $arItem['PROPERTIES']['NAME']['VALUE'] . ' ' . $arItem['PROPERTIES']['LAST_NAME']['VALUE'];
}