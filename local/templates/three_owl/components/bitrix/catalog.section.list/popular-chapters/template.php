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

$arViewStyles = array('LIST' => array('CONT' => 'bx_sitemap', 'TITLE' => 'bx_sitemap_title', 'LIST' => 'bx_sitemap_ul',), 'LINE' => array('CONT' => 'bx_catalog_line', 'TITLE' => 'bx_catalog_line_category_title', 'LIST' => 'bx_catalog_line_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'), 'TEXT' => array('CONT' => 'bx_catalog_text', 'TITLE' => 'bx_catalog_text_category_title', 'LIST' => 'bx_catalog_text_ul'), 'TILE' => array('CONT' => 'bx_catalog_tile', 'TITLE' => 'bx_catalog_tile_category_title', 'LIST' => 'bx_catalog_tile_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'));
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<div class="popular-categores-items">
    <?
    for($i=0; $i<count($arResult['SECTIONS']);$i++){
        $arSection = $arResult['SECTIONS'][$i];
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

//            print_r($arResult['SECTIONS']);
        if (false === $arSection['PICTURE']) $arSection['PICTURE'] = array('SRC' => $arCurView['EMPTY_IMG'], 'ALT' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] : $arSection["NAME"]), 'TITLE' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] : $arSection["NAME"]));
        ?>
            <div class="popular-categories-item" style="background-image: url(<?=$arSection['POPULAR_IMAGE']?>);">
            <h3>
                <? echo $arSection['NAME']; ?>
            </h3>
            <?$subSections = HelpFunctions::getSubSections($arSection['ID'], 1, array('IBLOCK_ID'=>1,"UF_POPULAR" => 1), array('UF_POPULAR'));
            foreach ($subSections as $key=>$subSection){
            ?>
                <a href="<? echo $subSection['SECTION_PAGE_URL']; ?>">
                    <? echo $subSection['NAME']; ?>
                </a>
                <?}?>
        </div>
        <?
    }
    unset($arSection); ?>

</div>

