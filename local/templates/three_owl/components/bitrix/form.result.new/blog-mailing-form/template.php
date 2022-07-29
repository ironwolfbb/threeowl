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
            <? if ($arResult["isFormErrors"] == "Y") {
            echo str_replace("name", "class='error' name", $arResult["QUESTIONS"]['email_field_blog']['HTML_CODE']);
        } else {
            echo $arResult["QUESTIONS"]['email_field_blog']['HTML_CODE'];
        }
         endif; ?>
        </label>
        <div class="btn btn-orange submit-btn">
            <button type="submit" class="btn btn-more submit-btn" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"]?>">Отправить</button>
        </div>
    <?= $arResult["FORM_FOOTER"] ?>

