<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($arResult["isFormNote"] === "Y"): ?>
    Вы успешно подписались на рассылку!
<? else: ?>
    <?= $arResult['FORM_HEADER'] ?>
        <p>
            Подписаться на блог
        </p>
        <label>
            <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
            <?= $arResult["QUESTIONS"]['email_field_blog']['HTML_CODE'] ?>
        </label>
        <div class="btn btn-orange submit-btn">
            <input type="submit" class="btn btn-more submit-btn" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"]?>">
        </div>
    <?= $arResult["FORM_FOOTER"] ?>
<? endif; ?>
