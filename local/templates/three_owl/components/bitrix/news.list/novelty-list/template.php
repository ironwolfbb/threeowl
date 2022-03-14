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
?>
<div class="js-second-mini-slider smaller-slider swiper-container second-mini-slider">
    <div class="swiper-wrapper">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="swiper-slide">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"></a>
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"/>
                <span>
                    Артикул: <?= $arItem['PROPERTIES']['ARTIKUL']['VALUE'] ?>
                </span>
                <p>
                    <?= $arItem['NAME'] ?>
                </p>
            </div>
        <? endforeach; ?>
    </div>

    <div class="slider-arrow prev-mini-slide prev-slide">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="45" height="44.8462" rx="22.4231" fill="white"/>
            <path d="M25 14.9487L19 22.4231L25 29.8974" stroke="#FFCF32" stroke-width="2"/>
        </svg>
    </div>
    <div class="slider-arrow next-mini-slide next-slide">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="45" height="45" rx="22.5" fill="white"/>
            <path d="M20 15L26 22.5L20 30" stroke="#FFCF32" stroke-width="2"/>
        </svg>
    </div>
    <div class="swiper-pagination second-slider-pagination"></div>
</div>





