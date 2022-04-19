<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
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
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "art-space-baners", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "PREVIEW_TEXT",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "DETAIL_PICTURE",
                            4 => "",
                        ),
                        "FILTER_NAME" => "",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "9",	// Код информационного блока
                        "IBLOCK_TYPE" => "art_space",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "3",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "BUTTON_TEXT",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                        false
                    );?>
                    <div class="article-section standart-block">
                        <div class="article-header" id="articleBlock">
                            <div class="article-page-title">
                                <h2>
                                    Действующие конкурсы
                                </h2>
                            </div>
                            <div class="articles-hashtags">
                                <a href="#">
                                    Живопись
                                </a>
                                <a href="#">
                                    Графика
                                </a>
                                <a href="#">
                                    Скульптура
                                </a>
                                <a href="#">
                                    Прикладное искусство
                                </a>
                            </div>
                        </div>
                        <div class="art-grid-block">
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
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
                            <div class="articles-hashtags">
                                <a href="#">
                                    Живопись
                                </a>
                                <a href="#">
                                    Графика
                                </a>
                                <a href="#">
                                    Скульптура
                                </a>
                                <a href="#">
                                    Прикладное искусство
                                </a>
                            </div>
                        </div>
                        <div class="art-grid-block">
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
                    <div class="article-section standart-block" id="exposWinners">
                        <div class="article-header">
                            <div class="article-page-title">
                                <h2>
                                    Победители выставок
                                </h2>
                            </div>
                        </div>
                        <div class="art-grid-block">
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos1.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/expos2.jpg');">
                                    <div class="expos-likes">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                                 fill="none">
                                                <circle cx="15" cy="15" r="15" fill="white" />
                                                <path
                                                        d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                                        fill="#EA3D2F" />
                                            </svg>


                                            <p>
                                                112
                                            </p>
                                        </a>
                                    </div>
                                    <div class="social-link">
                                        <a href="#" class="facebook">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16805)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16805)">
                                                        <path
                                                                d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16805" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16805">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="inst">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16809)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <g clip-path="url(#clip0_1743_16809)">
                                                        <path
                                                                d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                                                fill="#686868" />
                                                        <path
                                                                d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                                                fill="#686868" />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16809" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                                                 result="shape" />
                                                    </filter>
                                                    <clipPath id="clip0_1743_16809">
                                                        <rect width="14.5714" height="14.5714" fill="white"
                                                              transform="translate(17.7129 17.7148)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                        </a>
                                        <a href="#" class="vk">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_1743_16815)">
                                                    <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868" />
                                                    <path
                                                            d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                                            fill="#686868" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="5" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_1743_16815" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                                                 result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <div class="catalog-item">
                                        <div class="expos-authorr">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/someGirl.jpg" alt="">
                                            <p>
                                                Ольга Матросова
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
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
                        <div class="art-grid-block text-grid">
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
                    <div class="article-section standart-block last-art-block">
                        <div class="article-header">
                            <div class="article-page-title">
                                <h3>
                                    Детские
                                </h3>
                            </div>
                            <div class="articles-hashtags">
                                <a href="#">
                                    Акварель
                                </a>
                                <a href="#">
                                    Пастель
                                </a>
                                <a href="#">
                                    Лепка
                                </a>
                            </div>
                        </div>
                        <div class="art-grid-block text-grid">
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
                    <div class="article-section standart-block last-art-block">
                        <div class="article-header">
                            <div class="article-page-title">
                                <h3>
                                    Взрослые
                                </h3>
                            </div>
                            <div class="articles-hashtags">
                                <a href="#">
                                    Акварель
                                </a>
                                <a href="#">
                                    Пастель
                                </a>
                                <a href="#">
                                    Лепка
                                </a>
                            </div>
                        </div>
                        <div class="art-grid-block text-grid">
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>
                            <div class="exposition">
                                <div class="expos-header">
                                    <p>
                                        Обучение рисованию
                                        в стиле «Графика»
                                    </p>
                                </div>
                                <div class="exposition-bottom blog-section">
                                    <p>
                                        Стильные изображения, выполненные с помощью чётких линий, точек и черт. Чаще всего
                                        чёрно-белое
                                    </p>
                                </div>
                                <div class="dates">
                                    <p>Дата начала занятий</p>
                                    <p>18.04.2022</p>
                                </div>
                            </div>

                        </div>
                        <div class="btn btn-orange art-btn">
                            <a href="#" class="btn btn-more art-btn">
                                Показать еще
                            </a>
                        </div>
                    </div>
                    <div class="how-our-lessons-going">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/muzhik.png" alt="">
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
                                                  fill="#53B3E8" />
                                            <path
                                                    d="M16.0236 16.868L14.9316 15.132L17.5916 13.2H19.1036V23H17.0036V16.182L16.0236 16.868Z"
                                                    fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1292_47582">
                                                <rect width="34" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <p>
                                    Запишитесь на курс
                                </p>Ц
                            </div>
                            <div class="lessons-text-item">
                                <div>
                                    <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1292_47587)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M-2.09291 15.9185V35.8369L-4.04646 35.8845L-6 35.9322L-3.97542 35.9662L-1.95083 36V16C-1.95083 5 -1.9828 -4 -2.02187 -4C-2.06094 -4 -2.09291 4.96324 -2.09291 15.9185ZM14.008 -0.140386C13.4354 0.113822 12.1167 2.30718 11.9178 3.33591C11.7869 4.01251 11.5543 6.05205 11.4134 7.75799C11.2019 10.3194 10.9659 10.4809 7.16519 10.6667C4.23302 10.81 3.72056 10.9463 2.90419 11.7994C2.64404 12.071 2.34043 12.5277 2.22933 12.8142C1.95015 13.5339 1.97316 14.8116 2.27621 15.4079C3.08079 16.9918 4.84452 18.9109 6.67659 20.1963C8.53238 21.4981 8.83671 22.5035 8.25974 25.4242C7.77796 27.8633 7.82513 28.7779 8.50923 30.2541C9.24404 31.84 9.59682 32.0644 11.3399 32.0545C12.5565 32.0477 12.6782 32.0158 13.6132 31.4575C14.9218 30.676 15.5367 30.1305 16.3008 29.0732C17.621 27.2466 18.9163 26.5407 20.9335 26.5484C22.2855 26.5535 23.4201 26.8959 25.3532 27.8822C27.914 29.1887 30.319 28.9222 31.311 27.2216C31.6473 26.6453 31.721 26.3503 31.72 25.5836C31.7175 23.3497 31.0786 21.2684 29.8539 19.505C29.5409 19.0544 29.1971 18.4573 29.0898 18.1782C28.7737 17.356 29.0963 16.268 30.3118 14.0568C31.5253 11.8493 31.5447 11.8051 31.8022 10.6718C32.2017 8.91351 32.0129 7.9322 31.0825 6.93328C30.4132 6.21452 29.8735 6.11367 27.4718 6.25869C25.8651 6.35568 24.3862 6.65745 23.2836 7.1132C22.0475 7.62394 21.4306 7.14502 20.4405 4.90595C19.778 3.40788 19.5137 2.9878 18.684 2.11429C17.5782 0.950116 16.9832 0.483861 16.1639 0.139923C15.4074 -0.177452 14.3898 -0.309807 14.008 -0.140386Z" fill="#53B3E8"/>
                                            <path d="M20.5877 23H14.4277V21.712C15.5571 20.6107 16.3364 19.8127 16.7657 19.318C17.9231 17.9927 18.5017 16.8773 18.5017 15.972C18.5017 15.5707 18.3944 15.258 18.1797 15.034C17.9651 14.81 17.6571 14.698 17.2557 14.698C16.5371 14.698 16.0657 15.1367 15.8417 16.014L14.4977 15.412C14.6284 14.6933 14.9551 14.1287 15.4777 13.718C16.0097 13.298 16.6631 13.088 17.4377 13.088C18.3151 13.088 18.9964 13.34 19.4817 13.844C19.9671 14.3387 20.2097 14.9407 20.2097 15.65C20.2097 16.154 20.1024 16.6907 19.8877 17.26C19.6731 17.8107 19.4257 18.2913 19.1457 18.702C18.8564 19.1313 18.5157 19.5513 18.1237 19.962C17.7877 20.3353 17.4797 20.6527 17.1997 20.914C17.0597 21.0447 16.8311 21.2407 16.5137 21.502H20.5877V23Z" fill="white"/>
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
                                                  fill="#53B3E8" />
                                            <path
                                                    d="M16.0236 16.868L14.9316 15.132L17.5916 13.2H19.1036V23H17.0036V16.182L16.0236 16.868Z"
                                                    fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1292_47582">
                                                <rect width="34" height="32" fill="white" />
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
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/detailSlideImg.jpg" alt="">
                    </div>
                    <div class=" close-modal">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z"
                                    fill="#414141" />
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
                                                fill="#414141" />
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
                                                        fill="#929292" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1260_37124">
                                                    <rect width="36" height="35.4783" fill="white"
                                                          transform="translate(0 0.0869751)" />
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
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z"
                                            fill="#414141" />
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>