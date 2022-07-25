<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
$this->setFrameMode(false);

if (!empty($arResult["ERRORS"])):?>
	<?ShowError(implode("<br />", $arResult["ERRORS"]))?>
<?endif;
if ($arResult["MESSAGE"] <> ''):?>
	<?ShowNote($arResult["MESSAGE"])?>
<?endif?>

<form name="iblock_add" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">

	<?=bitrix_sessid_post()?>
	<?if ($arParams["MAX_FILE_SIZE"] > 0):?><input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" /><?endif?>
	
            <div class="aside-about__info-stars review-item__right-stars rating rating_set big-rating">
                <div class="rating-text">
                    <p>
                        Общая оценка
                    </p>
                </div>
                <div class="rating__body rating_stars-body ">
                    <div class="rating__active">

                    </div>

                    <div class="rating__items">
                        <input type="radio" class='rating__item' value='1' name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["RATE"]?>][0]">
                        <input type="radio" class='rating__item' value='2' name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["RATE"]?>][0]">
                        <input type="radio" class='rating__item' value='3' name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["RATE"]?>][0]">
                        <input type="radio" class='rating__item' value='4' name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["RATE"]?>][0]">
                        <input type="radio" class='rating__item' value='5' name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["RATE"]?>][0]">
                    </div>
                    <div class="rating-items-value-for-stupi" style="display: none;">
                        <p>1</p>
                        <p>2</p>
                        <p>3</p>
                        <p>4</p>
                        <p>5</p>
                    </div>
                </div>
                <div class="rating__value" style="display: none;">3</div>
            </div>

	<div class="feedback-form">

        
        <input type="hidden"  name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["PRODUCT"]?>][0]" value = "<?=$arParams["PRODUCT_ID"]?>">
        <input type="hidden"  name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["NAME"]?>][0]" value="Отзыв от <?=date("d_m_y")?>">
        
        <label class="input-label">
        	<input type="text"  name = "PROPERTY[PREVIEW_TEXT][0]" placeholder="Введите ваше имя*">
        </label>
        <label class="input-label">
            <input type="email" name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["EMAIL"]?>][0]" placeholder="Электронная почта*">
        </label>
        <label class="textarea-label">
            <textarea name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["BENEFITS"]?>][0]" placeholder="Достоинства"></textarea>
        </label>
        <label class="textarea-label">
            <textarea name = "PROPERTY[<?=$arResult["PROPERTY_LIST_FORM"]["DRAWBACKS"]?>][0]" placeholder="Недостатки"></textarea>
        </label>
        <label class="textarea-label last">
            <textarea name = "PROPERTY[DETAIL_TEXT][0]" placeholder="Введите ваше сообщение*"></textarea>
        </label>
        <div class="form-bottom">
            <div class="agreement">
                <label>
                    <input type="checkbox">
                </label>
                <p>
                    Я согласен на обработку персональных данных
                </p>
            </div>
            <div class="btn btn-orange">
                <button type="submit" class="btn btn-more" name="iblock_submit"  value="<?=GetMessage("IBLOCK_FORM_SUBMIT")?>" > Отправить</button>
            </div>
        </div>
    </div>    

</form>