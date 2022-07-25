<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arResult["PROPERTY_LIST_FORM"] = [];
foreach($arResult["PROPERTY_LIST"] as $key => $propertyID) {
    if($arResult["PROPERTY_LIST_FULL"][$propertyID]['CODE']) {
        $arResult["PROPERTY_LIST_FORM"][$arResult["PROPERTY_LIST_FULL"][$propertyID]['CODE']] = $propertyID;
    } else {
        $arResult["PROPERTY_LIST_FORM"][$propertyID] = $propertyID;
    }
}
?>