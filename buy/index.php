<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
    <div class="where-buy-page">
    <div class="container">
        <div class="standart-block">
            <h1>
                Где купить?
            </h1>
        </div>
        <div class="detail-product-info">
            <? $APPLICATION->IncludeComponent(
	"bitrix:catalog.sections.top", 
	"shops-list", 
	array(
		"ACTION_VARIABLE" => "action",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "shops-list",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"LINE_ELEMENT_COUNT" => "3",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SECTION_COUNT" => "20",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_SORT_FIELD" => "sort",
		"SECTION_SORT_ORDER" => "desc",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PRICE_COUNT" => "1",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	),
	false
); ?>

        </div>
    </div>
    </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>