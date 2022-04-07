<?php
foreach ($arResult['SECTIONS'] as $key=>$section){
    $arResult['SECTIONS'][$key]['POPULAR_IMAGE'] = CFile::GetPath($section['UF_POPULAR_IMAGE']);
}