<?php
foreach ($arResult['SECTIONS'] as $key=>$section){
    $arResult['SECTIONS'][$key]['SECOND_LEVEL_PHOTO'] = CFile::GetPath($section['UF_CATALOG_SECOND_LEVEL_PHOTO']);
}