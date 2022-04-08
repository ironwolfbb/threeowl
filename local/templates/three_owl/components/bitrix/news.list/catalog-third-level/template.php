<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="filtered-block" id="filterBlock">
    <div class="filtered-top">
        <div class="filter-block">
            <div class="sort">
                <div class="sort-item first">
                    <p>Сортировать:</p>
                </div>
                <div class="sort-item" >
                    <a <?if($_GET['sort'] == 1):?>class="active"<?endif;?> onclick="sort(1)">
                        по популярности
                    </a>
                    <a <?if($_GET['sort'] == 2):?>class="active"<?endif;?> onclick="sort(2)">
                        по названию А-Я
                    </a>
                    <a <?if($_GET['sort'] == 3):?>class="active"<?endif;?> onclick="sort(3)">
                        по названию Я-А
                    </a>
                </div>
            </div>
            <div class="filter active">
                <a href="javascript:void(0)" class="filter-btn">Фильтры</a>
                <ul class="active">
                    <? foreach ($arResult['TYPES_OUTPUT'] as $key => $type): ?>
                        <li <? if ($type['SELECTED'] == 'TRUE'): ?> class=" filter-checbox active" <? else: ?>class="filter-checbox" <? endif; ?>>
                            <label>
                                <input type="checkbox"
                                       value="<?= $type['VALUE'] ?>" <? if ($type['SELECTED'] == 'TRUE'): ?> checked <? endif; ?>>
                            </label>
                            <p>
                                <?= $type['VALUE'] ?>
                            </p>
                        </li>
                    <? endforeach; ?>
                </ul>
                <button class="active" onclick="remove_filter()">Сбросить фильтры</button>
            </div>
        </div>
    </div>
    <div class="filtered-middle">
        <?
        $GLOBALS['filterPostsThirdLevel'] = array('ID' =>$arParams['SECTION_POSTS'])
        ?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "catalog-third-level-posts",
            array(
                "COMPONENT_TEMPLATE" => "catalog-third-level-posts",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "5",
                "NEWS_COUNT" => "4",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "filterPostsThirdLevel",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "CATALOG_IMAGE",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "Y",
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        );?>
    </div>
    <div class="filtered-bottom">
        <div class="smaller-slider second-mini-slider flex-block our-block standart-block">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="flex-itemm our-block-item">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"></a>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                    <span>
                           Артикул: <?= $arItem['PROPERTIES']['ARTIKUL']['VALUE'] ?>
                        </span>
                    <p>
                        <?= $arItem['NAME'] ?>
                    </p>
                </div>
            <? endforeach; ?>

        </div>
        <div class="katalog-pagination">
            <?= $arResult["NAV_STRING"] ?>
        </div>
    </div>
</div>

<script>
    <?if(isset($_GET['filterType'])):?>
    filterBlock = document.getElementById('filterBlock');
    filterBlock.scrollIntoView()
    <?endif;?>

    function sort(type){
        getParams = new URLSearchParams(window.location.search);
        sortType = getParams.get("sort");
        getParams.set('sort', type)
        window.location.search = getParams.toString()
    }

    function remove_filter() {
        getParams = new URLSearchParams(window.location.search);
        filterType = getParams.get("filterType");
        getParams.delete('filterType')
        window.location.search = getParams.toString()
    }

    function add_parameter(query, parameter) {
        query = query.split(',')
        query.push(parameter)
        return query.join(',')
    }

    function remove_parameter(query, parameter) {
        query = query.split(',')
        index = query.indexOf(parameter);
        if (index !== -1) {
            query.splice(index, 1);
        }
        return query.join()
    }

    function filter_products(event) {
        getParams = new URLSearchParams(window.location.search);
        filterType = getParams.get("filterType");
        if (filterType === null) {
            getParams.set('filterType', event.target.value)
        } else {
            if (event.target.checked) {
                newParams = add_parameter(filterType, event.target.value)
                getParams.set('filterType', newParams)
            } else {
                newParams = remove_parameter(filterType, event.target.value)
                if (newParams.length > 0) {
                    getParams.set('filterType', newParams)
                }
                //Нужно чтобы при удалении последнего аргумента удалялся сам параметр FilterName
                else {
                    getParams.delete('filterType')
                }
            }
        }
        window.location.search = getParams.toString()

    }

    filterdiv = document.getElementsByClassName('filter active');
    filters = filterdiv[0].getElementsByClassName('filter-checbox');
    for (let index = 0; index < filters.length; ++index) {
        element = filters[index];
        element.getElementsByTagName('input')[0].addEventListener('click', filter_products, false)
    }
</script>


