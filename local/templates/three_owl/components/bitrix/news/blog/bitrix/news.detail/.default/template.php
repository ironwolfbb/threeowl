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
<?// print_r($arResult);?>
<?//echo $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]?>
<div class="article-section">
    <div class="container">
        <div class="standart-block article-stand-block">
            <div class="article-header">
                <div class="article-page-title">
                    <h1>
                        <? echo $arItem["NAME"] ?>
                    </h1>
                </div>
                <div class="article-info">
                    <p>
                        <span> Автор:</span>
                        <?= $arResult['AUTHOR'] ?>
                    </p>
                    <p>
                        <span> Рубрики:</span>
                        <?= $arResult['SECTION'] ?>
                    </p>
                </div>
                <div class="articles-hashtags">
                    <? foreach ($arResult['PROPERTIES']['TAGS']['VALUE'] as $tag): ?>
                        <a href="#">
                            <?= $tag ?>
                        </a>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
        <div class="article-page-blocks">
            <div class="article-first-block">
                <div class="article">
                    <?= $arResult["DETAIL_TEXT"]; ?>
                </div>
                <div class="share-block">
                    <p>
                        Поделиться:
                    </p>
                    <div class="social-link">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://<?=$_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]?>" target="_blank" class="facebook">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868"/>
                                <g clip-path="url(#clip0_1237_34518)">
                                    <path
                                            d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z"
                                            fill="#686868"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34518">
                                        <rect width="17" height="17" fill="white"
                                              transform="translate(9.00006 9.00012)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#475993"/>
                                <g clip-path="url(#clip0_1237_34593)">
                                    <path
                                            d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z"
                                            fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34593">
                                        <rect width="17" height="17" fill="white"
                                              transform="translate(9.00006 9.00012)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="inst">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868"/>
                                <g clip-path="url(#clip0_1237_34512)">
                                    <path
                                            d="M17.5029 13.1353C15.0924 13.1353 13.141 15.0888 13.141 17.4972C13.141 19.9076 15.0945 21.8591 17.5029 21.8591C19.9133 21.8591 21.8648 19.9055 21.8648 17.4972C21.8648 15.0867 19.9112 13.1353 17.5029 13.1353ZM17.5029 20.3284C15.9382 20.3284 14.6717 19.0612 14.6717 17.4972C14.6717 15.9332 15.9389 14.666 17.5029 14.666C19.0669 14.666 20.3341 15.9332 20.3341 17.4972C20.3348 19.0612 19.0676 20.3284 17.5029 20.3284Z"
                                            fill="#686868"/>
                                    <path
                                            d="M21.0048 9.05413C19.4408 8.98117 15.5669 8.98471 14.0015 9.05413C12.6259 9.11859 11.4125 9.4508 10.4343 10.429C8.79946 12.0638 9.00842 14.2668 9.00842 17.4975C9.00842 20.804 8.82425 22.9559 10.4343 24.5659C12.0755 26.2064 14.3103 25.9918 17.5028 25.9918C20.7781 25.9918 21.9086 25.9939 23.0667 25.5455C24.6413 24.9343 25.8299 23.5268 25.9461 20.9988C26.0198 19.434 26.0155 15.5609 25.9461 13.9955C25.8058 11.0113 24.2043 9.20146 21.0048 9.05413ZM23.4804 23.4843C22.4087 24.556 20.9219 24.4604 17.4822 24.4604C13.9405 24.4604 12.5203 24.5128 11.484 23.4737C10.2905 22.2858 10.5065 20.3783 10.5065 17.4861C10.5065 13.5726 10.1049 10.7541 14.0326 10.553C14.935 10.5211 15.2007 10.5105 17.4723 10.5105L17.5042 10.5317C21.2789 10.5317 24.2404 10.1365 24.4182 14.0635C24.4586 14.9595 24.4678 15.2287 24.4678 17.4968C24.4671 20.9973 24.5337 22.426 23.4804 23.4843Z"
                                            fill="#686868"/>
                                    <path
                                            d="M22.0377 13.9826C22.6007 13.9826 23.057 13.5262 23.057 12.9633C23.057 12.4003 22.6007 11.944 22.0377 11.944C21.4748 11.944 21.0184 12.4003 21.0184 12.9633C21.0184 13.5262 21.4748 13.9826 22.0377 13.9826Z"
                                            fill="#686868"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34512">
                                        <rect width="17" height="17" fill="white" transform="translate(9 9.00012)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868"/>
                                <g clip-path="url(#clip0_1237_34597)">
                                    <path
                                            d="M17.5029 13.1351C15.0924 13.1351 13.141 15.0887 13.141 17.4971C13.141 19.9075 15.0945 21.859 17.5029 21.859C19.9133 21.859 21.8648 19.9054 21.8648 17.4971C21.8648 15.0866 19.9112 13.1351 17.5029 13.1351ZM17.5029 20.3283C15.9382 20.3283 14.6717 19.0611 14.6717 17.4971C14.6717 15.933 15.9389 14.6658 17.5029 14.6658C19.0669 14.6658 20.3341 15.933 20.3341 17.4971C20.3348 19.0611 19.0676 20.3283 17.5029 20.3283Z"
                                            fill="#686868"/>
                                    <path
                                            d="M21.0048 9.05401C19.4408 8.98105 15.5669 8.98459 14.0015 9.05401C12.6259 9.11847 11.4125 9.45068 10.4343 10.4289C8.79946 12.0637 9.00842 14.2666 9.00842 17.4973C9.00842 20.8038 8.82425 22.9558 10.4343 24.5658C12.0755 26.2063 14.3103 25.9917 17.5028 25.9917C20.7781 25.9917 21.9086 25.9938 23.0667 25.5454C24.6413 24.9341 25.8299 23.5267 25.9461 20.9986C26.0198 19.4339 26.0155 15.5608 25.9461 13.9953C25.8058 11.0111 24.2043 9.20134 21.0048 9.05401ZM23.4804 23.4842C22.4087 24.5559 20.9219 24.4603 17.4822 24.4603C13.9405 24.4603 12.5203 24.5127 11.484 23.4736C10.2905 22.2857 10.5065 20.3781 10.5065 17.486C10.5065 13.5725 10.1049 10.754 14.0326 10.5528C14.935 10.521 15.2007 10.5103 17.4723 10.5103L17.5042 10.5316C21.2789 10.5316 24.2404 10.1363 24.4182 14.0633C24.4586 14.9594 24.4678 15.2286 24.4678 17.4966C24.4671 20.9972 24.5337 22.4259 23.4804 23.4842Z"
                                            fill="#686868"/>
                                    <path
                                            d="M22.0377 13.9824C22.6007 13.9824 23.057 13.5261 23.057 12.9631C23.057 12.4002 22.6007 11.9438 22.0377 11.9438C21.4748 11.9438 21.0184 12.4002 21.0184 12.9631C21.0184 13.5261 21.4748 13.9824 22.0377 13.9824Z"
                                            fill="#686868"/>
                                </g>
                                <circle cx="17.5" cy="17.5" r="17.5" fill="url(#paint0_linear_1237_34597)"/>
                                <g clip-path="url(#clip1_1237_34597)">
                                    <path
                                            d="M17.5028 13.3064C15.1868 13.3064 13.3119 15.1834 13.3119 17.4973C13.3119 19.8132 15.1889 21.6881 17.5028 21.6881C19.8187 21.6881 21.6936 19.8112 21.6936 17.4973C21.6936 15.1813 19.8167 13.3064 17.5028 13.3064ZM17.5028 20.2174C15.9994 20.2174 14.7826 18.9999 14.7826 17.4973C14.7826 15.9946 16.0001 14.7771 17.5028 14.7771C19.0054 14.7771 20.223 15.9946 20.223 17.4973C20.2236 18.9999 19.0061 20.2174 17.5028 20.2174Z"
                                            fill="white"/>
                                    <path
                                            d="M20.8673 9.38529C19.3646 9.31519 15.6427 9.31859 14.1387 9.38529C12.817 9.44722 11.6512 9.7664 10.7114 10.7062C9.14066 12.277 9.34142 14.3935 9.34142 17.4975C9.34142 20.6743 9.16448 22.7419 10.7114 24.2888C12.2882 25.8649 14.4354 25.6587 17.5026 25.6587C20.6495 25.6587 21.7357 25.6608 22.8484 25.23C24.3613 24.6427 25.5033 23.2904 25.6149 20.8615C25.6856 19.3582 25.6816 15.6369 25.6149 14.1328C25.4801 11.2657 23.9414 9.52684 20.8673 9.38529ZM23.2459 23.2496C22.2162 24.2793 20.7877 24.1874 17.4829 24.1874C14.0801 24.1874 12.7156 24.2377 11.72 23.2394C10.5732 22.0981 10.7808 20.2653 10.7808 17.4866C10.7808 13.7266 10.3949 11.0186 14.1686 10.8253C15.0356 10.7947 15.2908 10.7845 17.4734 10.7845L17.504 10.8049C21.1307 10.8049 23.9761 10.4252 24.1469 14.1982C24.1857 15.0591 24.1945 15.3177 24.1945 17.4968C24.1939 20.8601 24.2578 22.2328 23.2459 23.2496Z"
                                            fill="white"/>
                                    <path
                                            d="M21.8598 14.1204C22.4006 14.1204 22.8391 13.6819 22.8391 13.1411C22.8391 12.6002 22.4006 12.1617 21.8598 12.1617C21.3189 12.1617 20.8805 12.6002 20.8805 13.1411C20.8805 13.6819 21.3189 14.1204 21.8598 14.1204Z"
                                            fill="white"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1237_34597" x1="5.25" y1="29.6667" x2="30.0833"
                                                    y2="5.66675" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E09B3D"/>
                                        <stop offset="0.3" stop-color="#C74C4D"/>
                                        <stop offset="0.6" stop-color="#C21975"/>
                                        <stop offset="1" stop-color="#7024C4"/>
                                    </linearGradient>
                                    <clipPath id="clip0_1237_34597">
                                        <rect width="17" height="17" fill="white" transform="translate(9 9)"/>
                                    </clipPath>
                                    <clipPath id="clip1_1237_34597">
                                        <rect width="16.3333" height="16.3333" fill="white"
                                              transform="translate(9.33334 9.33337)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="https://vk.com/share.php?url=https://<?=$_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]?>" target="_blank" class="vk">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868"/>
                                <path
                                        d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z"
                                        fill="#686868"/>
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#116CB7"/>
                                <path
                                        d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z"
                                        fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="article-page-second-block">
                <div class="watch-also  popular-articles">
                    <div class="watch-also-title">
                        <h4>
                            Популярные статьи
                        </h4>
                    </div>
                    <div class="wacth-also-items our-block">
                        <?
                        $GLOBALS['relPostsFilter'] = array("PROPERTY_POPULAR_ARTICLE" => 'YES');
                        $APPLICATION->IncludeComponent("bitrix:news.list", "index-blog-list", array("ACTIVE_DATE_FORMAT" => "d.m.Y", "ADD_SECTIONS_CHAIN" => "Y", "AJAX_MODE" => "N", "AJAX_OPTION_ADDITIONAL" => "", "AJAX_OPTION_HISTORY" => "N", "AJAX_OPTION_JUMP" => "N", "AJAX_OPTION_STYLE" => "Y", "CACHE_FILTER" => "N", "CACHE_GROUPS" => "Y", "CACHE_TIME" => "36000000", "CACHE_TYPE" => "A", "CHECK_DATES" => "Y", "DETAIL_URL" => "", "DISPLAY_BOTTOM_PAGER" => "Y", "DISPLAY_DATE" => "Y", "DISPLAY_NAME" => "Y", "DISPLAY_PICTURE" => "Y", "DISPLAY_PREVIEW_TEXT" => "Y", "DISPLAY_TOP_PAGER" => "N", "FIELD_CODE" => array(0 => "CREATED_BY", 1 => "",), "FILTER_NAME" => "relPostsFilter", "HIDE_LINK_WHEN_NO_DETAIL" => "N", "IBLOCK_ID" => "5", "IBLOCK_TYPE" => "content", "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", "INCLUDE_SUBSECTIONS" => "Y", "MESSAGE_404" => "", "NEWS_COUNT" => "4", "PAGER_BASE_LINK_ENABLE" => "N", "PAGER_DESC_NUMBERING" => "N", "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000", "PAGER_SHOW_ALL" => "N", "PAGER_SHOW_ALWAYS" => "N", "PAGER_TEMPLATE" => ".default", "PAGER_TITLE" => "Новости", "PARENT_SECTION" => "", "PARENT_SECTION_CODE" => "", "PREVIEW_TRUNCATE_LEN" => "", "PROPERTY_CODE" => array(0 => "", 1 => "",), "SET_BROWSER_TITLE" => "N", "SET_LAST_MODIFIED" => "N", "SET_META_DESCRIPTION" => "N", "SET_META_KEYWORDS" => "N", "SET_STATUS_404" => "N", "SET_TITLE" => "N", "SHOW_404" => "N", "SORT_BY1" => "ACTIVE_FROM", "SORT_BY2" => "SORT", "SORT_ORDER1" => "DESC", "SORT_ORDER2" => "ASC", "STRICT_SECTION_CHECK" => "N", "COMPONENT_TEMPLATE" => "index-blog-list"), false); ?>
                    </div>
                </div>
                <div class="article-form">

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:form.result.new",
                        "blog-mailing-form",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "EDIT_URL" => "",
                            "IGNORE_CUSTOM_TEMPLATE" => "Y",
                            "LIST_URL" => "",
                            "SEF_MODE" => "N",
                            "SUCCESS_URL" => "",
                            "USE_EXTENDED_ERRORS" => "N",
                            "WEB_FORM_ID" => "3",
                            "COMPONENT_TEMPLATE" => "blog-form",
                            "VARIABLE_ALIASES" => array(
                                "WEB_FORM_ID" => "WEB_FORM_ID",
                                "RESULT_ID" => "RESULT_ID",
                            )
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
        <div class="watch-also">
            <div class="watch-also-title">
                <h4>
                    Смотрите так же
                </h4>
            </div>
            <div class="wacth-also-items our-block">
                <?
                $GLOBALS['relPostsFilter'] = array("ID" => $arResult['PROPERTIES']['RELATED_POSTS']['VALUE']);
                $APPLICATION->IncludeComponent("bitrix:news.list", "index-blog-list", array("ACTIVE_DATE_FORMAT" => "d.m.Y", "ADD_SECTIONS_CHAIN" => "Y", "AJAX_MODE" => "N", "AJAX_OPTION_ADDITIONAL" => "", "AJAX_OPTION_HISTORY" => "N", "AJAX_OPTION_JUMP" => "N", "AJAX_OPTION_STYLE" => "Y", "CACHE_FILTER" => "N", "CACHE_GROUPS" => "Y", "CACHE_TIME" => "36000000", "CACHE_TYPE" => "A", "CHECK_DATES" => "Y", "DETAIL_URL" => "", "DISPLAY_BOTTOM_PAGER" => "Y", "DISPLAY_DATE" => "Y", "DISPLAY_NAME" => "Y", "DISPLAY_PICTURE" => "Y", "DISPLAY_PREVIEW_TEXT" => "Y", "DISPLAY_TOP_PAGER" => "N", "FIELD_CODE" => array(0 => "CREATED_BY", 1 => "",), "FILTER_NAME" => "relPostsFilter", "HIDE_LINK_WHEN_NO_DETAIL" => "N", "IBLOCK_ID" => "5", "IBLOCK_TYPE" => "content", "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", "INCLUDE_SUBSECTIONS" => "Y", "MESSAGE_404" => "", "NEWS_COUNT" => "4", "PAGER_BASE_LINK_ENABLE" => "N", "PAGER_DESC_NUMBERING" => "N", "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000", "PAGER_SHOW_ALL" => "N", "PAGER_SHOW_ALWAYS" => "N", "PAGER_TEMPLATE" => ".default", "PAGER_TITLE" => "Новости", "PARENT_SECTION" => "", "PARENT_SECTION_CODE" => "", "PREVIEW_TRUNCATE_LEN" => "", "PROPERTY_CODE" => array(0 => "", 1 => "",), "SET_BROWSER_TITLE" => "N", "SET_LAST_MODIFIED" => "N", "SET_META_DESCRIPTION" => "N", "SET_META_KEYWORDS" => "N", "SET_STATUS_404" => "N", "SET_TITLE" => "N", "SHOW_404" => "N", "SORT_BY1" => "ACTIVE_FROM", "SORT_BY2" => "SORT", "SORT_ORDER1" => "DESC", "SORT_ORDER2" => "ASC", "STRICT_SECTION_CHECK" => "N", "COMPONENT_TEMPLATE" => "index-blog-list"), false); ?>

            </div>
        </div>

    </div>