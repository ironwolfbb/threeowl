<?php

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
