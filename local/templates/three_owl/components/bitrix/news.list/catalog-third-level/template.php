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
        <a href="#">
            <img src="../img/filterItem1.jpg" alt="">
            <p>
                Чем полезен бизиборд?
            </p>
        </a>
        <a href="#">
            <img src="../img/filterItem2.jpg" alt="">
            <p>
                Как выбрать кубики?
            </p>
        </a>
        <a href="#">
            <img src="../img/filterItem3.jpg" alt="">
            <p>
                Чем занять ребенка в год?
            </p>
        </a>
        <a href="#">
            <img src="../img/filterItem1.jpg" alt="">
            <p>
                Чем полезен бизиборд?
            </p>
        </a>
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


