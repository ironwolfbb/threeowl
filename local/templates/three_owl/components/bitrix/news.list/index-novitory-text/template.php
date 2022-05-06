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
?>
<div class="flex-block">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="flex-item">
        <?if($arItem['DISPLAYING'] == 'RIGHT'){?>
        <div class="flex-item-img">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
        </div>
        <div class="flex-item-desc">
            <h3>
                <?echo $arItem["NAME"]?>
            </h3>
            <?echo $arItem["PREVIEW_TEXT"];?>
            <?if($arItem["PROPERTIES"]['LINK']['VALUE']!=null){?>
            <div class="btn btn-orange">
                    <a href="<?=$arItem["PROPERTIES"]['LINK']['VALUE']?>" class="btn btn-more">
                        Подробнее
                    </a>
            </div>
            <?}?>

        </div>
        <?} else{?>
            <div class="flex-item-desc">
                <h3>
                    <?echo $arItem["NAME"]?>
                </h3>
                <?echo $arItem["PREVIEW_TEXT"];?>
                <?if($arItem["PROPERTIES"]['LINK']['VALUE']!=null){?>
                    <div class="btn btn-orange">
                        <a href="<?=$arItem["PROPERTIES"]['LINK']['VALUE']?>" class="btn btn-more">
                            Подробнее
                        </a>
                    </div>
                <?}?>
            </div>
            <div class="flex-item-img">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            </div>
        <?}?>
    </div>
<?endforeach;?>
</div>

