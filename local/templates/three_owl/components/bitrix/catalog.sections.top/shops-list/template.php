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

<?foreach($arResult["SECTIONS"] as $arSection):?>
<div class="buying-links">
    <h3>
        <?=$arSection["NAME"]?>
    </h3>
    <div class="buying-links-item">
    <?
    $cell = 0;
    foreach($arSection["ITEMS"] as $arElement):?>
        <?
        $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a href="<?=$arElement["PROPERTIES"]['LINK']['VALUE']?>" target="_blank">
            <img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>">
        </a>
    <?endforeach;?>
        </div>
</div>
<?endforeach;?>



