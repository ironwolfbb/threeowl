<?php
$divCounter = 1;

foreach ($arResult["ITEMS"] as $key => $arElement) {
    if($divCounter%2 == 0){
        $arResult['ITEMS'][$key]['DISPLAYING'] = 'LEFT';
    }
    else{
        $arResult['ITEMS'][$key]['DISPLAYING'] = 'RIGHT';
    }
    $divCounter+=1;
}