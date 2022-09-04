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
        <?
       /*  echo '<pre>';
        print_r($arResult);
        echo '</pre>'; */
        ?>
        <?= $arResult['FORM_HEADER'] ?>
            <?if ($arResult["isFormErrors"] == "Y"):?><??><?endif;?>
            <label>
           <?= str_replace("REQUIRED", '', $arResult['QUESTIONS']['feedback_name'])['HTML_CODE'];
       ?>
                <!--  $arResult["QUESTIONS"]['feedback_name']['HTML_CODE']  --> 
            </label>
            <label>
            <? $arResult["QUESTIONS"]['feedback_phone']['HTML_CODE'] = str_replace('type="text"', 'type="tel"', $arResult["QUESTIONS"]['feedback_phone']['HTML_CODE'])
?>
            <?if ($arResult["isFormErrors"] == "Y" && $arResult["arrVALUES"]['form_text_5'] == ''){
              echo str_replace("name", "class='error' name", $arResult["QUESTIONS"]['feedback_phone']['HTML_CODE']);
        } else{ 
                echo $arResult["QUESTIONS"]['feedback_phone']['HTML_CODE'];
                };?>
            </label>
            <label>
            <? $arResult["QUESTIONS"]['feedback_mail']['HTML_CODE'] = str_replace('type="text"', 'type="email"', $arResult["QUESTIONS"]['feedback_mail']['HTML_CODE'])
?>
           <? if ($arResult["isFormErrors"] == "Y" && $arResult["arrVALUES"]['form_email_6'] == ''){
            echo  str_replace("name", "class='error' name", $arResult["QUESTIONS"]['feedback_mail']['HTML_CODE']);
            } else{
                echo $arResult["QUESTIONS"]['feedback_mail']['HTML_CODE']; 
        };?>
            </label>
            <label>
                <?= $arResult["QUESTIONS"]['feedback_message']['HTML_CODE'] ?>
            </label>
            <div class="form-bottom">
                <div class="agreement">
                    <label>
                        <?= str_replace('checkbox"', 'checkbox" required', $arResult["QUESTIONS"]['feedback_agreement']['HTML_CODE']) ?>
                    </label>
                    <p>
                        Я согласен на обработку персональных данных
                    </p>
                </div>
                <div class="btn btn-orange">
                    <button class="btn btn-more" type="submit" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"] ?>">Отправить</button>
                </div>
                <?= $arResult["FORM_FOOTER"] ?>
    </div>
</div>
<? endif ?>


<script>

// Записываем в переменую эту форму
let elementForm = document.getElementsByName("feedback_form")[0]
// Вешаем событие которое будет слушать отправку, код ниже будет работать только по нажатию кнопки отправить
elementForm.addEventListener("submit", function(e){
    let isNeedToPrevent = false;
    
let inputPhone = document.getElementsByName("form_text_5")[0].value; // form_text_5 name который у инпута с телефоном
  if(inputPhone == ''){
    isNeedToPrevent = true;
    document.getElementsByName("form_text_5")[0].classList.add('error');
  }else{
    document.getElementsByName("form_text_5")[0].classList.remove('error');
  }
  
  let inputMail = document.getElementsByName("form_email_6")[0].value; 
  if(inputMail == ''){
    isNeedToPrevent = true;
    document.getElementsByName("form_email_6")[0].classList.add('error');
  }else{
    document.getElementsByName("form_email_6")[0].classList.remove('error');
  }
  if(isNeedToPrevent){
    e.preventDefault();
  }
});



</script>