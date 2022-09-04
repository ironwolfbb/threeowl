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
        <? $arResult["QUESTIONS"]['email_field_blog']['HTML_CODE'] = str_replace('type="text"', 'type="email"', $arResult["QUESTIONS"]['email_field_blog']['HTML_CODE'])
?>
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

    <script>
    // Записываем в переменую эту форму
let elementForm = document.getElementsByName("blog_mailing_form")[0]
// Вешаем событие которое будет слушать отправку, код ниже будет работать только по нажатию кнопки отправить
elementForm.addEventListener("submit", function(e){
    let isNeedToPrevent = false;
    
let inputMail = document.getElementsByName("form_email_3")[0].value; // form_email_1 name который у инпута
  if(inputMail == ''){
    isNeedToPrevent = true;
    document.getElementsByName("form_email_3")[0].classList.add('error');
  }else{
    document.getElementsByName("form_email_3")[0].classList.remove('error');
  }
  if(isNeedToPrevent){
    e.preventDefault();
  }
});
  </script>

