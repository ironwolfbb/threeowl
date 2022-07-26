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


<div class="art-grid-block text-grid courses">
    <? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
        <?= $arResult["NAV_STRING"] ?><br />
    <? endif; ?>
    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="exposition">

            <div class="expos-header">
                <p>

                    <? if (empty($arItem['PROPERTIES']['LINK']['VALUE'])) : ?>
                        <?= $arItem['NAME'] ?>
                    <? else : ?>
                        <a href=<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>>
                            <?= $arItem['NAME'] ?>
                        </a>
                    <? endif; ?>
                </p>
            </div>
            <div class="exposition-bottom blog-section">
                <p>
                    <?= $arItem['PREVIEW_TEXT'] ?>
                </p>
            </div>
            <div class="dates">
                <p>Дата начала занятий</p>
                <p><?= $arItem['PROPERTIES']['DATE_START']['VALUE'] ?></p>
            </div>
        </div>

    <? endforeach; ?>
</div>
<? if ($arResult["NAV_STRING"] != null) : ?>
    <div class="btn btn-orange art-btn ">
        <a class="btn btn-more coursesmore art-btn" data-section-id="<?= $arResult['SECTION']['PATH'][0]['ID'] ?>" data-iblock-code="<?= $arResult['CODE'] ?>">
            Показать еще
        </a>
    </div>
<? endif; ?>