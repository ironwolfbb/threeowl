<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$arItemDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="main-slider">
    <div class="container">
        <div class="swiper-container mainSlider js-mainSlider">
            <div class="swiper-wrapper">
                <?
                foreach ($arResult['ITEMS'] as &$arItem) {
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strSectionDelete, $arItemDeleteParams);?>



                    <div class="swiper-slide"
                         style="background-image: url('<? echo $arItem['PREVIEW_PICTURE']['SRC']; ?>');">
                        <div class="swiper-title">
                            <h1>
                                <? echo $arItem['NAME']; ?>
                            </h1>
                            <p>
                                <?=$arItem['PREVIEW_TEXT'];?>
                            </p>
                            <div class="btn btn-orange">
                                <a href="<? echo $arItem['PROPERTIES']['LINK']['VALUE']; ?>" class="btn btn-more">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <?
                }
                unset($arItem); ?>
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