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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array('LIST' => array('CONT' => 'bx_sitemap', 'TITLE' => 'bx_sitemap_title', 'LIST' => 'bx_sitemap_ul',), 'LINE' => array('CONT' => 'bx_catalog_line', 'TITLE' => 'bx_catalog_line_category_title', 'LIST' => 'bx_catalog_line_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'), 'TEXT' => array('CONT' => 'bx_catalog_text', 'TITLE' => 'bx_catalog_text_category_title', 'LIST' => 'bx_catalog_text_ul'), 'TILE' => array('CONT' => 'bx_catalog_tile', 'TITLE' => 'bx_catalog_tile_category_title', 'LIST' => 'bx_catalog_tile_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'));
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


    <div class="main-slider">
        <div class="container">
            <div class="swiper-container mainSlider js-mainSlider">
                <div class="swiper-wrapper">
                    <?
                    foreach ($arResult['SECTIONS'] as &$arSection) {
                        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                        if (false === $arSection['PICTURE']) $arSection['PICTURE'] = array('SRC' => $arCurView['EMPTY_IMG'], 'ALT' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] : $arSection["NAME"]), 'TITLE' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] : $arSection["NAME"]));
                        ?>

                        <div class="swiper-slide"
                             style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');">
                            <div class="swiper-title">
                                <h1>
                                    <? echo $arSection['NAME']; ?>
                                </h1>
                                <p>
                                    <?=$arSection['DESCRIPTION'];?>
                                </p>
                                <div class="btn btn-orange">
                                    <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="btn btn-more">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                    unset($arSection); ?>
                </div>
                <div class="slider-arrow prev-main-slide prev-slide">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="44.8462" rx="22.4231" fill="white" />
                        <path d="M25 14.9487L19 22.4231L25 29.8974" stroke="#FFCF32" stroke-width="2" />
                    </svg>
                </div>
                <div class="slider-arrow next-main-slide next-slide">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="45" rx="22.5" fill="white" />
                        <path d="M20 15L26 22.5L20 30" stroke="#FFCF32" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="swiper-pagination main-pagination"></div>
    </div>