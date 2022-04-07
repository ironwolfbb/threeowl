<?php
$section = $arParams['section'];
?>
<div class="child-increasing">
    <div class="container">
        <div class="child-content standart-block">
            <div class="child-title flex-block">
                <h1>
                    <?=$section['NAME']?>
                </h1>
                <p>
                    <?=$section['DESCRIPTION']?>
                </p>
            </div>

            <div class="child-content flex-block">
                <div class="aside standart-block katalog-aside">
                    <aside>
                        <h3 style="text-transform:capitalize;" class="kat-btn">Каталог</h3>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "catalog-sections-aside",
                            array(
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "COUNT_ELEMENTS" => "Y",
                                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                "FILTER_NAME" => "sectionsFilter",
                                "IBLOCK_ID" => "1",
                                "IBLOCK_TYPE" => "catalog",
                                "SECTION_CODE" => "",
                                "SECTION_FIELDS" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                "SECTION_URL" => "",
                                "SECTION_USER_FIELDS" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "SHOW_PARENT_NAME" => "Y",
                                "TOP_DEPTH" => "2",
                                "VIEW_MODE" => "LIST",
                                "COMPONENT_TEMPLATE" => "catalog-sections-aside"
                            ),
                            false
                        );?>
                    </aside>
                </div>

                <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog-second-level", Array(
                    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                    "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                    "IBLOCK_ID" => "1",	// Инфоблок
                    "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                    "SECTION_CODE" => $section['ID'],	// Код раздела
                    "SECTION_FIELDS" => array(	// Поля разделов
                        0 => "UF_CATALOG_SECOND_LEVEL_PHOTO",
                        1 => "",
                    ),
                    "SECTION_ID" => $section['ID'],	// ID раздела
                    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                    "SECTION_USER_FIELDS" => array(	// Свойства разделов
                        0 => "",
                        1 => "",
                    ),
                    "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                    "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
                    "VIEW_MODE" => "LINE",	// Вид списка подразделов
                ),
                    false
                );?>

            </div>
        </div>
    </div>
</div>