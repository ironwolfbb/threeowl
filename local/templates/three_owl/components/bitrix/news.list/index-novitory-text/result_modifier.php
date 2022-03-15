<?php
$divCounter = 1;

foreach ($arResult["ITEMS"] as $key => $arElement) {
    if($divCounter%2 == 0){
        $arResult['ITEMS'][$key]['DISPLAYING'] = 'RIGHT';
    }
    else{
        $arResult['ITEMS'][$key]['DISPLAYING'] = 'LEFT';
    }
    $divCounter+=1;
}