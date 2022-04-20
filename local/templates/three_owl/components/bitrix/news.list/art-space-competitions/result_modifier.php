<?php
foreach ($arResult['ITEMS'] as $key => $arItem) {
    $arResult['ITEMS'][$key]['PROPERTIES']['AUTHOR_IMAGE']['VALUE'] = CFile::GetPath($arResult[$key]['PROPERTIES']['AUTHOR_IMAGE']['VALUE']);
}