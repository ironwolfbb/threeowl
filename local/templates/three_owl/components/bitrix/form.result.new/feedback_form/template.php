<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?
?>
<? if ($arResult["isFormNote"] === "Y"): ?>
    Спасибо за сообщение!
<? else: ?>
<div class="contacts-form">
    <img src="<?=SITE_TEMPLATE_PATH?>/img/formBg.png" alt="">
    <div class="contacts-form-content">
        <div class="contacts-title">
            <h4>
                Форма обратной связи
            </h4>
        </div>
        <?= $arResult['FORM_HEADER'] ?>
            <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
            <label>
                <?= $arResult["QUESTIONS"]['feedback_name']['HTML_CODE'] ?>
            </label>
            <label>
                <?= $arResult["QUESTIONS"]['feedback_phone']['HTML_CODE'] ?>
            </label>
            <label>
                <?= $arResult["QUESTIONS"]['feedback_mail']['HTML_CODE'] ?>
            </label>
            <label>
                <?= $arResult["QUESTIONS"]['feedback_message']['HTML_CODE'] ?>
            </label>
            <div class="form-bottom">
                <div class="agreement">
                    <label>
                        <?= $arResult["QUESTIONS"]['feedback_agreement']['HTML_CODE'] ?>
                    </label>
                    <p>
                        Я согласен на обработку персональных данных
                    </p>
                </div>
                <div class="btn btn-orange">
                    <input class="btn btn-more" type="submit" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"] ?>">
                </div>
                <?= $arResult["FORM_FOOTER"] ?>
    </div>
</div>
<? endif; ?>