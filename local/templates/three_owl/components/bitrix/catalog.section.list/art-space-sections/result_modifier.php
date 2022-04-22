<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $key=>$arSection) {
    $childs = CIBlockSection::GetSectionElementsCount($arSection['ID']);
    if($childs==0){
        unset($arResult['SECTIONS'][$key]);
    }
}
$section = CIBlockSection::GetByID($arResult['SECTION']['ID'])->GetNext();
$arResult['SECTION_'] = $section;
$arResult['EMPTY'] = false;
if(count($arResult['SECTIONS']) == 0){
    $arResult['EMPTY'] = true;
}
?>

