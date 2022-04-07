<?php
foreach ($arResult['SECTIONS'] as $key=>$section){
    $arResult['SECTIONS'][$key]['FIRST_LEVEL_PHOTO'] = CFile::GetPath($section['UF_CATALOG_FIRST_LEVEL_PHOTO']);
}