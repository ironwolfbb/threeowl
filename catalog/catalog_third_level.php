<?php

$arResult = $arParams['arResult'];
$section = $arParams['section'];
?>

<div class="standart-block kids-title">
    <div class="container">
        <h1>
            <?= $section['NAME'] ?>
        </h1>
    </div>
</div>
<div class="filter-section ">
    <div class="container">
        <div class="flex-block first-flex">
            <div class="aside standart-block katalog-aside">
                <aside>
                    <h3 style="text-transform:capitalize;" class="kat-btn">Каталог</h3>
                    <? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog-sections-aside", array("ADD_SECTIONS_CHAIN" => "Y", "CACHE_FILTER" => "N", "CACHE_GROUPS" => "Y", "CACHE_TIME" => "36000000", "CACHE_TYPE" => "A", "COUNT_ELEMENTS" => "Y", "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE", "FILTER_NAME" => "sectionsFilter", "IBLOCK_ID" => "1", "IBLOCK_TYPE" => "catalog", "SECTION_CODE" => "", "SECTION_FIELDS" => array(0 => "", 1 => "",), "SECTION_ID" => $_REQUEST["SECTION_ID"], "SECTION_URL" => "", "SECTION_USER_FIELDS" => array(0 => "", 1 => "",), "SHOW_PARENT_NAME" => "Y", "TOP_DEPTH" => "2", "VIEW_MODE" => "LIST", "COMPONENT_TEMPLATE" => "catalog-sections-aside"), false); ?>
                </aside>
            </div>
            <?
            $sortField = 'SHOW_COUNTER';
            $sortOrder = 'DESC';
            if (isset($_GET['sort'])){
               switch ($_GET['sort']){
                   case 1:
                       $sortField = 'SHOW_COUNTER';
                       $sortOrder = 'DESC';
                       break;
                   case 2:
                       $sortField = 'NAME';
                       $sortOrder = 'DESC';
                       break;
                   case 3:
                       $sortField = 'NAME';
                       $sortOrder = 'ASC';
                       break;
               }
            }

            ?>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "catalog-third-level", array("ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "0",    // Время кеширования (сек.)
                "CACHE_TYPE" => "N",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "PREVIEW_PICTURE", 1 => "SHOW_COUNTER",), "FILTER_NAME" => "CatalogFilter",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "1",    // Код информационного блока
                "IBLOCK_TYPE" => "catalog",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "12",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "Y",    // Выводить всегда
                "PAGER_TEMPLATE" => "catalog-paginator",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => $section['ID'],    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "TYPE", 1 => "ARTIKUL",), "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => $sortField,    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => $sortOrder,    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "SECTION_POSTS" => $section['UF_POSTS_REL'],
            ), false); ?>
        </div>
    </div>