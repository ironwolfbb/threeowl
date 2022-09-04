<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<? if ($arResult["NavPageCount"] > 1) : ?>

    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]) : ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;

        ?>

        <div class="btn btn-orange" id="load_more" data-url="<?= $url ?>">
            <a class="btn btn-more">
                Показать еще
            </a>
        </div>
    <? endif ?>

<? endif ?>

<script>
    $(document).ready(function() {

        $(document).on('click', '#load_more', function() {

            var targetContainer = document.getElementsByClassName('our-block-items flex-block')[0];
            var container = document.getElementsByClassName('blog-content-items our-block')[0];
            url = $('#load_more').attr('data-url');

            if (url !== undefined) {
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function(data) {
                        $('#load_more').remove();
                        html = document.createElement('html');
                        html.innerHTML = data;
                        console.log(container);
                        pagination = $(html).find('#load_more');
                        if (pagination[0]) {
                            container.appendChild(pagination[0]);
                        }
                        var elements = $(data).find('.our-block-item')

                        for (var i = 0; i < elements.length; i++) {
                            targetContainer.appendChild(elements[i]);
                        }

                    }
                });
            }

        });

    });
</script>