<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="smaller-slider">
    <div class="grid-block">
<?
foreach ($arResult['SECTIONS'] as &$arSection) {
    ?>
            <div class="flex-item" id="<?=$arSection['ID']?>">
                <? $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>
                <a href="<?=$arSection['SECTION_PAGE_URL'];?>"></a>
                <img src="<?=$arSection['FIRST_LEVEL_PHOTO']?>" alt="">
                <h4>
                    <?=$arSection['NAME'];?>
                </h4>
            </div>
    <?
}
unset($arSection);
?>
    </div>
</div>
