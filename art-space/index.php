<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Title");

use \wptt\HelpFunctions;

?>

    <div class="art-space-content">
        <div class="container">
            <div class="art-space-block">
                <div class="aside standart-block katalog-aside">
                    <aside class="art-space-aside">
                        <h3 style="text-transform:capitalize;">Разделы</h3>
                        <div class="katalog-block">
                            <div class="catalog-item">
                                <a href="#articleBlock">
                                    <p>
                                        Действующие конкурсы
                                    </p>
                                </a>
                            </div>
                            <div class="catalog-item">
                                <a href="#permanentExpos">
                                    <p>
                                        Постоянная экспозиция
                                    </p>
                                </a>
                            </div>
                            <div class="catalog-item">

                                <a href="#courses">
                                    <p>
                                        Курсы
                                    </p>
                                </a>

                            </div>
                            <div class="catalog-item">
                                <a href="#exposWinners">
                                    <p>
                                        Победители выставок
                                    </p>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="art-space-content-block">
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "art-space-baners", array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",    // Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                        "CACHE_TYPE" => "A",    // Тип кеширования
                        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                        "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                        "DISPLAY_NAME" => "Y",    // Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                        "FIELD_CODE" => array(    // Поля
                            0 => "PREVIEW_TEXT",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "DETAIL_PICTURE",
                            4 => "",
                        ),
                        "FILTER_NAME" => "",    // Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "9",    // Код информационного блока
                        "IBLOCK_TYPE" => "art_space",    // Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "3",    // Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",    // Название категорий
                        "PARENT_SECTION" => "",    // ID раздела
                        "PARENT_SECTION_CODE" => "",    // Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(    // Свойства
                            0 => "BUTTON_TEXT",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",    // Устанавливать статус 404
                        "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                        "SHOW_404" => "N",    // Показ специальной страницы
                        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                        "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                        false
                    ); ?>
                    <? if (!HelpFunctions::isSectionEmpty('active-competitions')): ?>
                        <div class="article-section standart-block">
                            <div class="article-header" id="articleBlock">
                                <div class="article-page-title">
                                    <h2>
                                        Действующие конкурсы
                                    </h2>
                                </div>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "art-space-sections",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                        "FILTER_NAME" => "sectionsFilter",
                                        "IBLOCK_ID" => "12",
                                        "IBLOCK_TYPE" => "art_space",
                                        "SECTION_CODE" => "active-competitions",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "2",
                                        "VIEW_MODE" => "LINE",
                                        "DIV_CODE" => "permanentExpos",
                                        "COMPONENT_TEMPLATE" => "art-space-sections",
                                        "SECTION_TYPE" => 'competitions'
                                    ),
                                    false
                                ); ?>
                            </div>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "art-space-competitions",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "12",
                                    "IBLOCK_TYPE" => "art_space",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "9",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "active-competitions",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "LIKES",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "DESC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "art-space-competitions"
                                ),
                                false
                            ); ?>
                        </div>
                    <? endif; ?>
                    <? if (!HelpFunctions::isSectionEmpty('permanent-exhibition')): ?>

                        <div class="article-section standart-block" id="permanentExpos">
                            <div class="article-header">
                                <div class="article-page-title">
                                    <h2>
                                        Постоянная экспозиция
                                    </h2>
                                </div>
                                <div class="article-info">
                                    <p>
                                        В постоянную экспозицию попадают работы, набравшие большее количество лайков
                                    </p>
                                </div>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "art-space-sections",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                        "FILTER_NAME" => "sectionsFilter",
                                        "IBLOCK_ID" => "12",
                                        "IBLOCK_TYPE" => "art_space",
                                        "SECTION_CODE" => "permanent-exhibition",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "2",
                                        "VIEW_MODE" => "LINE",
                                        "DIV_CODE" => "permanentExpos",
                                        "COMPONENT_TEMPLATE" => "art-space-sections",
                                        "SECTION_TYPE" => 'competitions'
                                    ),
                                    false
                                ); ?>
                            </div>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "art-space-competitions",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "12",
                                    "IBLOCK_TYPE" => "art_space",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "9",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "permanent-exhibition",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "LIKES",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "DESC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "art-space-competitions"
                                ),
                                false
                            ); ?>
                        </div>
                    <? endif; ?>

                    <? if (!HelpFunctions::isSectionEmpty('winners')): ?>

                        <div class="article-section standart-block" id="exposWinners">
                            <div class="article-header">
                                <div class="article-page-title">
                                    <h2>
                                        Победители выставок
                                    </h2>
                                </div>
                            </div>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "art-space-competitions",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "12",
                                    "IBLOCK_TYPE" => "art_space",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "9",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "winners",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "LIKES",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "DESC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "art-space-competitions"
                                ),
                                false
                            ); ?>
                        </div>
                    <? endif; ?>

                    <? if (!HelpFunctions::isSectionEmpty('popular')): ?>

                        <div class="article-section standart-block" id="courses">
                            <div class="article-header">
                                <div class="article-page-title">
                                    <h2>
                                        Курсы
                                    </h2>
                                    <h3>
                                        Популярные
                                    </h3>
                                </div>
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "art-space-cources", array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "13",    // Код информационного блока
                                "IBLOCK_TYPE" => "art_space",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "9",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "popular",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "LINK",
                                    1 => "DATE_START",
                                ),
                                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                                false
                            ); ?>
                        </div>
                    <? endif; ?>
                    <? if (!HelpFunctions::isSectionEmpty('kids')): ?>

                        <div class="article-section standart-block last-art-block">
                            <div class="article-header">
                                <div class="article-page-title">
                                    <h3>
                                        Детские
                                    </h3>
                                </div>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "art-space-sections",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                        "FILTER_NAME" => "sectionsFilter",
                                        "IBLOCK_ID" => "13",
                                        "IBLOCK_TYPE" => "art_space",
                                        "SECTION_CODE" => "kids",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "2",
                                        "VIEW_MODE" => "LINE",
                                        "DIV_CODE" => "permanentExpos",
                                        "COMPONENT_TEMPLATE" => "art-space-sections",
                                        "SECTION_TYPE" => "competitions"
                                    ),
                                    false
                                ); ?>
                            </div>

                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "art-space-cources", array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "13",    // Код информационного блока
                                "IBLOCK_TYPE" => "art_space",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "9",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "kids",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "LINK",
                                    1 => "DATE_START",
                                ),
                                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                                false
                            ); ?>

                        </div>
                    <? endif; ?>
                    <? if (!HelpFunctions::isSectionEmpty('adult')): ?>

                        <div class="article-section standart-block last-art-block">
                            <div class="article-header">
                                <div class="article-page-title">
                                    <h3>
                                        Взрослые
                                    </h3>
                                </div>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "art-space-sections",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                        "FILTER_NAME" => "sectionsFilter",
                                        "IBLOCK_ID" => "13",
                                        "IBLOCK_TYPE" => "art_space",
                                        "SECTION_CODE" => "adult",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "2",
                                        "VIEW_MODE" => "LINE",
                                        "DIV_CODE" => "permanentExpos",
                                        "COMPONENT_TEMPLATE" => "art-space-sections",
                                        "SECTION_TYPE" => "competitions"
                                    ),
                                    false
                                ); ?>
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "art-space-cources", array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "13",    // Код информационного блока
                                "IBLOCK_TYPE" => "art_space",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "9",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "adult",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "LINK",
                                    1 => "DATE_START",
                                ),
                                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                                false
                            ); ?>
                        </div>
                    <? endif; ?>

                    <div class="how-our-lessons-going"
                         style="background: url('<?= SITE_TEMPLATE_PATH ?>/img/muzhikBg.jpg')">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/muzhik.png" alt="">
                        <div class="lessons-title">
                            <h2>
                                Как проходят занятия
                            </h2>
                        </div>
                        <div class="lessons-text">
                            <div class="lessons-text-item">
                                <div>
                                    <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1292_47582)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M-2.09291 15.9185V35.8369L-4.04646 35.8845L-6 35.9322L-3.97542 35.9662L-1.95083 36V16C-1.95083 5 -1.9828 -4 -2.02187 -4C-2.06094 -4 -2.09291 4.96324 -2.09291 15.9185ZM14.008 -0.140386C13.4354 0.113822 12.1167 2.30718 11.9178 3.33591C11.7869 4.01251 11.5543 6.05205 11.4134 7.75799C11.2019 10.3194 10.9659 10.4809 7.16519 10.6667C4.23302 10.81 3.72056 10.9463 2.90419 11.7994C2.64404 12.071 2.34043 12.5277 2.22933 12.8142C1.95015 13.5339 1.97316 14.8116 2.27621 15.4079C3.08079 16.9918 4.84452 18.9109 6.67659 20.1963C8.53238 21.4981 8.83671 22.5035 8.25974 25.4242C7.77796 27.8633 7.82513 28.7779 8.50923 30.2541C9.24404 31.84 9.59682 32.0644 11.3399 32.0545C12.5565 32.0477 12.6782 32.0158 13.6132 31.4575C14.9218 30.676 15.5367 30.1305 16.3008 29.0732C17.621 27.2466 18.9163 26.5407 20.9335 26.5484C22.2855 26.5535 23.4201 26.8959 25.3532 27.8822C27.914 29.1887 30.319 28.9222 31.311 27.2216C31.6473 26.6453 31.721 26.3503 31.72 25.5836C31.7175 23.3497 31.0786 21.2684 29.8539 19.505C29.5409 19.0544 29.1971 18.4573 29.0898 18.1782C28.7737 17.356 29.0963 16.268 30.3118 14.0568C31.5253 11.8493 31.5447 11.8051 31.8022 10.6718C32.2017 8.91351 32.0129 7.9322 31.0825 6.93328C30.4132 6.21452 29.8735 6.11367 27.4718 6.25869C25.8651 6.35568 24.3862 6.65745 23.2836 7.1132C22.0475 7.62394 21.4306 7.14502 20.4405 4.90595C19.778 3.40788 19.5137 2.9878 18.684 2.11429C17.5782 0.950116 16.9832 0.483861 16.1639 0.139923C15.4074 -0.177452 14.3898 -0.309807 14.008 -0.140386Z"
                                                  fill="#53B3E8"/>
                                            <path
                                                    d="M16.0236 16.868L14.9316 15.132L17.5916 13.2H19.1036V23H17.0036V16.182L16.0236 16.868Z"
                                                    fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1292_47582">
                                                <rect width="34" height="32" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    Запишитесь на курс
                                </p>
                            </div>
                            <div class="lessons-text-item">
                                <div>
                                    <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1292_47587)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M-2.09291 15.9185V35.8369L-4.04646 35.8845L-6 35.9322L-3.97542 35.9662L-1.95083 36V16C-1.95083 5 -1.9828 -4 -2.02187 -4C-2.06094 -4 -2.09291 4.96324 -2.09291 15.9185ZM14.008 -0.140386C13.4354 0.113822 12.1167 2.30718 11.9178 3.33591C11.7869 4.01251 11.5543 6.05205 11.4134 7.75799C11.2019 10.3194 10.9659 10.4809 7.16519 10.6667C4.23302 10.81 3.72056 10.9463 2.90419 11.7994C2.64404 12.071 2.34043 12.5277 2.22933 12.8142C1.95015 13.5339 1.97316 14.8116 2.27621 15.4079C3.08079 16.9918 4.84452 18.9109 6.67659 20.1963C8.53238 21.4981 8.83671 22.5035 8.25974 25.4242C7.77796 27.8633 7.82513 28.7779 8.50923 30.2541C9.24404 31.84 9.59682 32.0644 11.3399 32.0545C12.5565 32.0477 12.6782 32.0158 13.6132 31.4575C14.9218 30.676 15.5367 30.1305 16.3008 29.0732C17.621 27.2466 18.9163 26.5407 20.9335 26.5484C22.2855 26.5535 23.4201 26.8959 25.3532 27.8822C27.914 29.1887 30.319 28.9222 31.311 27.2216C31.6473 26.6453 31.721 26.3503 31.72 25.5836C31.7175 23.3497 31.0786 21.2684 29.8539 19.505C29.5409 19.0544 29.1971 18.4573 29.0898 18.1782C28.7737 17.356 29.0963 16.268 30.3118 14.0568C31.5253 11.8493 31.5447 11.8051 31.8022 10.6718C32.2017 8.91351 32.0129 7.9322 31.0825 6.93328C30.4132 6.21452 29.8735 6.11367 27.4718 6.25869C25.8651 6.35568 24.3862 6.65745 23.2836 7.1132C22.0475 7.62394 21.4306 7.14502 20.4405 4.90595C19.778 3.40788 19.5137 2.9878 18.684 2.11429C17.5782 0.950116 16.9832 0.483861 16.1639 0.139923C15.4074 -0.177452 14.3898 -0.309807 14.008 -0.140386Z"
                                                  fill="#53B3E8"/>
                                            <path d="M20.5877 23H14.4277V21.712C15.5571 20.6107 16.3364 19.8127 16.7657 19.318C17.9231 17.9927 18.5017 16.8773 18.5017 15.972C18.5017 15.5707 18.3944 15.258 18.1797 15.034C17.9651 14.81 17.6571 14.698 17.2557 14.698C16.5371 14.698 16.0657 15.1367 15.8417 16.014L14.4977 15.412C14.6284 14.6933 14.9551 14.1287 15.4777 13.718C16.0097 13.298 16.6631 13.088 17.4377 13.088C18.3151 13.088 18.9964 13.34 19.4817 13.844C19.9671 14.3387 20.2097 14.9407 20.2097 15.65C20.2097 16.154 20.1024 16.6907 19.8877 17.26C19.6731 17.8107 19.4257 18.2913 19.1457 18.702C18.8564 19.1313 18.5157 19.5513 18.1237 19.962C17.7877 20.3353 17.4797 20.6527 17.1997 20.914C17.0597 21.0447 16.8311 21.2407 16.5137 21.502H20.5877V23Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1292_47587">
                                                <rect width="34" height="32" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <p>
                                    Занятия проходят в онлайн формате
                                </p>
                            </div>
                            <div class="lessons-text-item">
                                <div>
                                    <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1292_47582)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M-2.09291 15.9185V35.8369L-4.04646 35.8845L-6 35.9322L-3.97542 35.9662L-1.95083 36V16C-1.95083 5 -1.9828 -4 -2.02187 -4C-2.06094 -4 -2.09291 4.96324 -2.09291 15.9185ZM14.008 -0.140386C13.4354 0.113822 12.1167 2.30718 11.9178 3.33591C11.7869 4.01251 11.5543 6.05205 11.4134 7.75799C11.2019 10.3194 10.9659 10.4809 7.16519 10.6667C4.23302 10.81 3.72056 10.9463 2.90419 11.7994C2.64404 12.071 2.34043 12.5277 2.22933 12.8142C1.95015 13.5339 1.97316 14.8116 2.27621 15.4079C3.08079 16.9918 4.84452 18.9109 6.67659 20.1963C8.53238 21.4981 8.83671 22.5035 8.25974 25.4242C7.77796 27.8633 7.82513 28.7779 8.50923 30.2541C9.24404 31.84 9.59682 32.0644 11.3399 32.0545C12.5565 32.0477 12.6782 32.0158 13.6132 31.4575C14.9218 30.676 15.5367 30.1305 16.3008 29.0732C17.621 27.2466 18.9163 26.5407 20.9335 26.5484C22.2855 26.5535 23.4201 26.8959 25.3532 27.8822C27.914 29.1887 30.319 28.9222 31.311 27.2216C31.6473 26.6453 31.721 26.3503 31.72 25.5836C31.7175 23.3497 31.0786 21.2684 29.8539 19.505C29.5409 19.0544 29.1971 18.4573 29.0898 18.1782C28.7737 17.356 29.0963 16.268 30.3118 14.0568C31.5253 11.8493 31.5447 11.8051 31.8022 10.6718C32.2017 8.91351 32.0129 7.9322 31.0825 6.93328C30.4132 6.21452 29.8735 6.11367 27.4718 6.25869C25.8651 6.35568 24.3862 6.65745 23.2836 7.1132C22.0475 7.62394 21.4306 7.14502 20.4405 4.90595C19.778 3.40788 19.5137 2.9878 18.684 2.11429C17.5782 0.950116 16.9832 0.483861 16.1639 0.139923C15.4074 -0.177452 14.3898 -0.309807 14.008 -0.140386Z"
                                                  fill="#53B3E8"/>
                                            <path
                                                    d="M16.0236 16.868L14.9316 15.132L17.5916 13.2H19.1036V23H17.0036V16.182L16.0236 16.868Z"
                                                    fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1292_47582">
                                                <rect width="34" height="32" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    Необходимо иметь только интернет
                                    и устройство для просмотра видео
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-detail-modal">
            <div class="blur-shadow"></div>
            <div class="container">
                <div class=" popup-modal">
                    <div class="photo-modal-img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/detailSlideImg.jpg" alt="">
                    </div>
                    <div class=" close-modal">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z"
                                    fill="#414141"/>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
        <div class="order-popup contacts-page">
            <div class="blur-shadow"></div>
            <div class="container">
                <form>
                    <div class="order-popup-content">
                        <div class="contacts-form">
                            <div class="contacts-form-content">
                                <div class="order-close-popup-btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z"
                                                fill="#414141"/>
                                    </svg>


                                </div>
                                <div class="contacts-title">
                                    <h4>
                                        Заполните заявку
                                    </h4>
                                </div>
                                <label>
                                    <input type="text" placeholder="Введите ваше имя">
                                </label>
                                <label>
                                    <input type="tel" placeholder="Ваш телефон*">
                                </label>
                                <label>
                                    <input type="email" placeholder="Электронная почта*">
                                </label>
                                <ul class="listUL">
                                    <p class="openList">Выберите конкурс</p>
                                    <input type="text">
                                    <li>
                                        Живопись
                                    </li>
                                    <li>Скульптура</li>
                                    <li>Графика</li>
                                    <li>Прикладное искусство</li>
                                </ul>
                                <div class="drag-drop">
                                    <input type="text">
                                    <div class="drag-content">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1260_37124)">
                                                <path
                                                        d="M18.074 35.5651C13.9385 35.5651 10.5742 32.2493 10.5742 28.174V5.26089C10.5742 2.40835 12.9291 0.0869751 15.8242 0.0869751C18.719 0.0869751 21.0742 2.40835 21.0742 5.26089V25.2173C21.0742 26.848 19.7284 28.174 18.074 28.174C16.4199 28.174 15.0741 26.848 15.0741 25.2173V7.47837H16.574V25.2173C16.574 26.0323 17.2469 26.6958 18.074 26.6958C18.9014 26.6958 19.5743 26.0323 19.5743 25.2173V5.26089C19.5743 3.22341 17.8917 1.56519 15.8242 1.56519C13.7565 1.56519 12.0742 3.22341 12.0742 5.26089V28.174C12.0742 31.4342 14.7658 34.0869 18.074 34.0869C21.3825 34.0869 24.0741 31.4342 24.0741 28.174V7.47837H25.5741V28.174C25.5741 32.2493 22.2098 35.5651 18.074 35.5651Z"
                                                        fill="#929292"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1260_37124">
                                                    <rect width="36" height="35.4783" fill="white"
                                                          transform="translate(0 0.0869751)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p>
                                            Добавьте свою работу
                                        </p>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <div class="agreement">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                        <p>
                                            Я согласен на обработку персональных данных
                                        </p>
                                    </div>
                                    <div class="btn btn-orange">
                                        <button type="submit" class="btn btn-more">
                                            Отправить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="order-popup-content afterSubmit" style="display: none;">
                    <div class="contacts-form">
                        <div class="contacts-form-content">
                            <div class="order-close-popup-btn">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z"
                                            fill="#414141"/>
                                </svg>
                            </div>
                            <div class="contacts-title">
                                <h3>
                                    Спасибо
                                </h3>
                                <p>
                                    Заявка на участие отправлена!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>