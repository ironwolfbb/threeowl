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
use \wptt\HelpFunctions;
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="articles-hashtags">
    <?
    foreach ($arResult['SECTIONS'] as &$arSection) {
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <a  data-section-code="<?=$arSection['CODE']?>"  data-iblock-code="<?=HelpFunctions::getIblockCodeById($arParams['IBLOCK_ID'])?>" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <? echo $arSection['NAME']; ?>
        </a>
        <?
    }
    ?>
</div>
