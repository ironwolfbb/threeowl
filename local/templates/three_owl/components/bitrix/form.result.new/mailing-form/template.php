<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($arResult["isFormNote"] === "Y"): ?>
    Вы успешны
<? else: ?>
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
                <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

                <?= $arResult["QUESTIONS"]['email_field']['HTML_CODE'] ?>
            </label>
            <div class="btn btn-orange subscribe">
                <input class="btn btn-more" type="submit" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"] ?>">
            </div>
        </div>
    <?= $arResult["FORM_FOOTER"] ?>
<? endif; ?>
