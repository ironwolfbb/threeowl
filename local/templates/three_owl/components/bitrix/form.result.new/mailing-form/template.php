<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<? if ($arResult["isFormNote"] === "Y") : ?>
    <script>
        document.getElementsByClassName('order-popup contacts-page')[0].classList.add('active');
        document.getElementsByClassName('afterSubmit')[0].style.display = '';
        document.body.classList.add('noScroll');
    </script>
<? else : ?>
    <?= $arResult['FORM_HEADER'] ?>
    <div class="form-content">
        <div class="form-text">
            <div class="form-title">
                <p>
                    Подпишитесь на наши обновления
                </p>
                <span>
                    Будьте в курсе новых акций и спецпредложений!
                </span>
            </div>
        </div>
        <label>

        <? if ($arResult["isFormErrors"] == "Y") {
            echo str_replace("name", "class='error' name", $arResult["QUESTIONS"]['email_field']['HTML_CODE']);
        } else {
            echo $arResult["QUESTIONS"]['email_field']['HTML_CODE'];
        }
    endif; ?>
        </label>
        <div class="btn btn-orange subscribe">
            <input class="btn btn-more" type="submit" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"] ?>">
        </div>
    </div>
    <?= $arResult["FORM_FOOTER"] ?>