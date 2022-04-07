<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */

/** @var CBitrixComponent $component */

use \wptt\HelpFunctions;

$this->setFrameMode(true);
$section = HelpFunctions::getSectionById($arResult['VARIABLES']['SECTION_ID']);
if ($section['DEPTH_LEVEL'] == 1) {
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "catalog_second_level.php",
            "arResult" => $arResult,
            "section" => $section,
        ),
        false
    );
}
else if($section['DEPTH_LEVEL'] == 2){
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "catalog_third_level.php",
            "arResult" => $arResult,
            "section" => $section,
            ),
        false
    );
}
