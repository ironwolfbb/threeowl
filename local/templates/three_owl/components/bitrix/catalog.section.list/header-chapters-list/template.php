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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array('LIST' => array('CONT' => 'bx_sitemap', 'TITLE' => 'bx_sitemap_title', 'LIST' => 'bx_sitemap_ul',), 'LINE' => array('CONT' => 'bx_catalog_line', 'TITLE' => 'bx_catalog_line_category_title', 'LIST' => 'bx_catalog_line_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'), 'TEXT' => array('CONT' => 'bx_catalog_text', 'TITLE' => 'bx_catalog_text_category_title', 'LIST' => 'bx_catalog_text_ul'), 'TILE' => array('CONT' => 'bx_catalog_tile', 'TITLE' => 'bx_catalog_tile_category_title', 'LIST' => 'bx_catalog_tile_ul', 'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'));
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


<div class="header-bottom">
    <div class="container">
        <div class="header-bottom-links">
            <a href="javscript:void(0)" class="catalog-close-btn">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 2.5L7.5 9.97436L13.5 17.4487" stroke="#333333" stroke-width="2"/>
                </svg>
                Каталог игрушек
            </a>
            <a href="#">
                <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1302_4375)">
                        <path opacity="0.842" fill-rule="evenodd" clip-rule="evenodd" d="M4.56985 -0.366943C4.79772 -0.366943 5.02558 -0.366943 5.25345 -0.366943C5.84268 1.05305 6.84528 2.07218 8.26126 2.69047C8.62585 3.00753 8.62585 3.32461 8.26126 3.64167C6.96243 4.20786 6.02819 5.1364 5.45853 6.42731C5.21436 6.81616 4.89535 6.90676 4.50149 6.69908C4.15356 5.9842 3.72061 5.32743 3.20267 4.72875C2.64637 4.3125 2.05393 3.95014 1.42532 3.64167C1.10875 3.30528 1.15432 2.98821 1.56204 2.69047C2.95903 2.04942 3.96163 1.03029 4.56985 -0.366943ZM4.84329 1.12779C5.40343 1.93388 6.08702 2.63595 6.89407 3.23401C6.05097 3.70961 5.39017 4.36638 4.91165 5.20435C4.36382 4.41083 3.70302 3.73141 2.92923 3.16607C3.75944 2.65823 4.39745 1.9788 4.84329 1.12779Z" fill="#505050"/>
                        <path opacity="0.842" fill-rule="evenodd" clip-rule="evenodd" d="M28.086 -0.366943C28.3139 -0.366943 28.5417 -0.366943 28.7696 -0.366943C29.5602 1.3927 30.8362 2.68361 32.5977 3.50578C32.8914 3.78773 32.937 4.10479 32.7344 4.45698C30.8887 5.20434 29.5899 6.49525 28.8379 8.3297C28.528 8.52467 28.2545 8.47938 28.0176 8.19382C27.2201 6.49525 25.9668 5.24964 24.2578 4.45698C23.8932 4.13992 23.8932 3.82284 24.2578 3.50578C25.1374 3.10311 25.9348 2.58222 26.6504 1.9431C27.1989 1.2148 27.6775 0.444784 28.086 -0.366943ZM28.3594 1.12779C29.082 2.29885 30.039 3.25005 31.2305 3.98138C30.0461 4.68309 29.1118 5.63428 28.4278 6.83497C27.767 5.63465 26.8327 4.70609 25.625 4.04932C26.2069 3.63551 26.7766 3.2052 27.334 2.75841C27.7815 2.27578 28.1233 1.73224 28.3594 1.12779Z" fill="#505050"/>
                        <path opacity="0.852" fill-rule="evenodd" clip-rule="evenodd" d="M10.3126 5.47662C12.6362 5.36261 13.6616 6.4497 13.3888 8.73787C13.005 9.86518 12.2075 10.454 10.9962 10.5044C8.78543 10.0057 8.07904 8.69217 8.87704 6.5637C9.2674 6.05947 9.74592 5.69711 10.3126 5.47662ZM10.8595 6.42782C11.8289 6.50803 12.3758 7.02892 12.5001 7.9905C12.1112 9.31611 11.2909 9.67848 10.0392 9.07758C9.22581 7.84776 9.49925 6.96451 10.8595 6.42782Z" fill="#505050"/>
                        <path opacity="0.839" fill-rule="evenodd" clip-rule="evenodd" d="M19.3359 6.29199C19.5917 6.34075 19.7968 6.47663 19.9512 6.69965C20.9867 9.08675 22.6046 10.9665 24.8047 12.3389C25.4645 12.644 26.1024 12.9837 26.7188 13.358C27.0715 13.6587 27.0715 13.9532 26.7188 14.2413C23.5514 15.5774 21.2955 17.8195 19.9512 20.9676C19.6675 21.2595 19.3485 21.3048 18.9941 21.1035C18.017 18.6382 16.3991 16.7133 14.1406 15.3284C13.4787 14.9314 12.7951 14.569 12.0898 14.2413C11.8873 13.8891 11.9329 13.572 12.2266 13.2901C13.9102 12.5558 15.3913 11.5367 16.6699 10.2327C17.6313 8.95205 18.52 7.63849 19.3359 6.29199ZM19.3359 7.92261C20.0652 9.18753 20.9312 10.3652 21.9336 11.4556C22.9773 12.3821 24.1166 13.1748 25.3516 13.8336C22.6932 15.0717 20.7108 16.9966 19.4043 19.6087C18.1055 17.0496 16.1686 15.1245 13.5938 13.8336C15.6037 12.7415 17.2671 11.2694 18.584 9.41735C18.9083 8.95399 19.1589 8.45574 19.3359 7.92261Z" fill="#505050"/>
                        <path opacity="0.837" fill-rule="evenodd" clip-rule="evenodd" d="M0.332031 21.2393C0.332031 21.0582 0.332031 20.8769 0.332031 20.6958C1.42249 20.1085 2.47067 19.4516 3.47656 18.7254C4.57768 17.6308 5.46635 16.3852 6.14258 14.9886C6.46158 14.6262 6.7806 14.6262 7.09961 14.9886C8.21615 17.5477 10.0619 19.3822 12.6367 20.492C13.0013 20.809 13.0013 21.1261 12.6367 21.4431C10.0619 22.5529 8.21615 24.3874 7.09961 26.9465C6.7806 27.3089 6.46158 27.3089 6.14258 26.9465C5.46635 25.5499 4.57768 24.3043 3.47656 23.2097C2.47067 22.4835 1.42249 21.8266 0.332031 21.2393ZM6.48437 16.3475C7.62078 18.2922 9.17025 19.8322 11.1328 20.9675C9.17351 22.0771 7.64683 23.617 6.55273 25.5876C5.55392 23.5305 4.02722 21.9905 1.97266 20.9675C4.0372 19.9575 5.54111 18.4175 6.48437 16.3475Z" fill="#505050"/>
                        <path opacity="0.847" fill-rule="evenodd" clip-rule="evenodd" d="M35.332 16.6189C35.332 17.1172 35.332 17.6154 35.332 18.1137C34.5378 19.8042 33.2618 20.2798 31.5039 19.5405C30.2911 18.4645 30.086 17.2189 30.8887 15.8036C32.0087 14.7223 33.2163 14.6089 34.5117 15.4639C34.8386 15.8223 35.1121 16.2072 35.332 16.6189ZM32.4609 15.9395C33.9855 15.9383 34.5552 16.663 34.1699 18.1137C33.439 19.0165 32.6415 19.1071 31.7773 18.3854C31.1252 17.3266 31.353 16.5113 32.4609 15.9395Z" fill="#505050"/>
                        <path opacity="0.84" fill-rule="evenodd" clip-rule="evenodd" d="M26.9925 34.4198C26.7646 34.4198 26.5368 34.4198 26.3089 34.4198C25.1994 31.7997 23.331 29.92 20.7034 28.7806C20.19 28.4023 20.19 28.0399 20.7034 27.6935C23.2327 26.6291 25.0329 24.8399 26.1038 22.3261C26.3875 22.0342 26.7064 21.9888 27.0608 22.1902C28.1774 24.7493 30.0231 26.5837 32.5979 27.6935C32.8916 27.9755 32.9373 28.2925 32.7347 28.6447C30.0615 29.8294 28.1475 31.7544 26.9925 34.4198ZM26.5823 23.549C27.6504 25.6296 29.2453 27.1922 31.3675 28.2371C29.2483 29.2562 27.6761 30.8189 26.6507 32.9251C25.6253 30.8189 24.053 29.2562 21.9339 28.2371C24.0628 27.2308 25.6124 25.6681 26.5823 23.549Z" fill="#505050"/>
                        <path opacity="0.845" fill-rule="evenodd" clip-rule="evenodd" d="M12.4997 34.4199C11.9528 34.4199 11.4059 34.4199 10.859 34.4199C9.22244 33.4865 8.83507 32.173 9.69693 30.4792C10.773 29.4098 11.9806 29.2514 13.32 30.0036C14.3626 31.0355 14.5222 32.1906 13.7985 33.4687C13.4527 33.9287 13.0198 34.2457 12.4997 34.4199ZM11.5426 30.4792C12.9298 30.701 13.4083 31.471 12.9782 32.7893C12.1579 33.6952 11.3376 33.6952 10.5172 32.7893C10.045 31.6454 10.3868 30.8753 11.5426 30.4792Z" fill="#505050"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1302_4375">
                            <rect x="0.400391" width="35" height="35" rx="5" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p>
                    Новинки
                    и хиты
                </p>
            </a>
                <?
                foreach ($arResult['SECTIONS'] as &$arSection) {
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                    if (false === $arSection['PICTURE']) $arSection['PICTURE'] = array('SRC' => $arCurView['EMPTY_IMG'], 'ALT' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"] : $arSection["NAME"]), 'TITLE' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"] : $arSection["NAME"]));
                    ?>

                    <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                        <?echo $arSection['~UF_SVG'];?>
                        <p> <? echo $arSection['NAME']; ?></p>
                    </a>
                    <?
                }
                unset($arSection); ?>
        </div>
    </div>
</div>