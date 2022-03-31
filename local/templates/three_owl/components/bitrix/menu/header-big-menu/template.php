<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <div class="btn btn-orange <?=$arItem["PARAMS"][0]?>">
        <a href="<?=$arItem["LINK"]?>" class="btn btn-more <?=$arItem["PARAMS"][0]?>">
            <?=$arItem["TEXT"]?>
        </a>
    </div>
<?endforeach?>

<?endif?>