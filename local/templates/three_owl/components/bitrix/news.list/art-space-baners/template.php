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

<? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?
    if  ($arItem["PROPERTIES"]["MAIN"] && $arItem["PROPERTIES"]["MAIN"]["VALUE"] == "Y") {
        if (!$main_bunner) {
            $main_bunner = true;
            ?>
            <div class="main-slider">
                <div class="swiper-container mainSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
                            <div class="swiper-title">
                                <h1>
                                    <?=$arItem['NAME']?>
                                </h1>
                                <div class="btn btn-orange btn-art">
                                    <a href="#" class="btn btn-more btn-art">
                                        Принять участие в выставке
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?
        }
    } else {
        if($arItem["PROPERTIES"]["TEXT_POSITION"] && $arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE"] == "RIGHT") {
        ?>
        <div>
            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="">
            <div class="second-art-banner art-banner" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">

                <div class="second-banner-text">
                    <p>
                        <?=$arItem['NAME']?>
                    </p>
                    <p>
                        <?=$arItem['PREVIEW_TEXT']?>
                    </p>

                </div>
            </div>

        </div>
        <?
        } elseif ($arItem["PROPERTIES"]["TEXT_POSITION"] && $arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE"] == "LEFT") {
           
           ?>
        <div class="third-art-banner art-banner">
            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="">
            <div class="greenBg" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">



                <div class="third-banner-text">
                    <p>
                        <?=$arItem['NAME']?>
                    </p>
                    <p>
                        <?=$arItem['PREVIEW_TEXT']?>
                    </p>

                </div>
            </div>

        </div> <?
        }
    ?>
          
    <?
    }
    
    /*switch ($key) {
        case 0:
            ?>
            <div class="main-slider">
                <div class="swiper-container mainSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
                            <div class="swiper-title">
                                <h1>
                                    <?=$arItem['NAME']?>
                                </h1>
                                <div class="btn btn-orange btn-art">
                                    <a href="#" class="btn btn-more btn-art">
                                        Принять участие в выставке
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?
            break;
        case 1:
            ?>
            <div class="second-art-banner art-banner" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
                <div class="second-banner-text">
                    <p>
                        <?=$arItem['NAME']?>
                    </p>
                </div>
            </div>
            <?
            break;
        case 2:
            ?>
            <div class="third-art-banner art-banner">
                <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="">
                <div class="greenBg" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">



                    <div class="third-banner-text">
                        <p>
                            <?=$arItem['NAME']?>
                        </p>
                        <p>
                            <?=$arItem['PREVIEW_TEXT']?>
                        </p>

                    </div>
                </div>

            </div>
            <? break;
    }*/
    ?>
<? endforeach; ?>

