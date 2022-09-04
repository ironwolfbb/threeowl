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
           <? $arResult["QUESTIONS"]['email_field']['HTML_CODE'] = str_replace('type="text"', 'type="email"', $arResult["QUESTIONS"]['email_field']['HTML_CODE'])
?>
        <? if ($arResult["isFormErrors"] == "Y" && $arResult["arrVALUES"]['form_email_1'] == '') {
            echo str_replace("name", "class='error' name", $arResult["QUESTIONS"]['email_field']['HTML_CODE']);
        } else {
            echo $arResult["QUESTIONS"]['email_field']['HTML_CODE'];
        }
    endif; ?>
        </label>
        <div class="btn btn-orange subscribe">
            <input class="btn btn-more" type="submit" name="web_form_submit"  value="<?= $arResult["arForm"]["BUTTON"] ?>">
        </div>
    </div>
   
    <?= $arResult["FORM_FOOTER"] ?>

   <!--  <script>
    const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
const input = document.querySelector('input');

function isEmailValid(value) {
 	return EMAIL_REGEXP.test(value);
}

function onInput() {
	if (isEmailValid(input.value)) {
		input.style.borderColor = 'green';
	} else {
		input.style.borderColor = 'red';
	}
}

input.addEventListener('input', onInput);

  </script> -->

<script>
    // Записываем в переменую эту форму
let elementForm = document.getElementsByName("mailing_form")[0]
// Вешаем событие которое будет слушать отправку, код ниже будет работать только по нажатию кнопки отправить
elementForm.addEventListener("submit", function(e){
    let isNeedToPrevent = false;
    
let inputMail = document.getElementsByName("form_email_1")[0].value; // form_email_1 name который у инпута
  if(inputMail == ''){
    isNeedToPrevent = true;
    document.getElementsByName("form_email_1")[0].classList.add('error');
  }else{
    document.getElementsByName("form_email_1")[0].classList.remove('error');
  }
  if(isNeedToPrevent){
    e.preventDefault();
  }
});
  </script>
 