<?php

foreach ($arResult["ITEMS"] as $key => $arItem) {
    $filterImage = CFile::GetPath($arItem["PROPERTIES"]['CATALOG_IMAGE']['VALUE']);
    $arResult['ITEMS'][$key]['FILTER_IMAGE'] = $filterImage;
}
