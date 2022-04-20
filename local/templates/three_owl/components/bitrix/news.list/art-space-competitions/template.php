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

<div class="art-grid-block">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="exposition">
            <div class="expos-header" style="background-image: url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>);">
                <div class="expos-likes">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                             fill="none">
                            <circle cx="15" cy="15" r="15" fill="white"/>
                            <path
                                    d="M18.9184 7.20216C20.2571 6.9041 21.7427 6.57474 23.3902 9.08507C24.4572 11.9094 22.9977 15.7851 17.4589 21.4808C15.3877 23.6147 14.3523 23.3951 12.0929 21.4808C10.9817 20.5394 10.3105 19.8019 9.26824 18.6251C6.8362 15.8792 6.80508 15.079 6.2716 13.761C5.73828 12.1447 6.13055 10.3723 6.27151 10.1365C7.22888 8.53584 8.56251 7.35905 10.9946 7.20214C11.7006 7.20214 13.4891 7.96711 14.3521 9.47733C14.6659 10.0265 15.6389 9.38347 16.0155 8.89707C17.1298 7.87718 18.4478 7.30694 18.9184 7.20216Z"
                                    fill="#EA3D2F"/>
                        </svg>

                        <p>
                            <?= $arItem['PROPERTIES']['LIKES']['VALUE'] ?>
                        </p>
                    </a>
                </div>
                <div class="social-link">
                    <a href="<?= $arItem['PROPERTIES']['FACEBOOK_LINK']['VALUE'] ?>" class="facebook">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1743_16805)">
                                <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868"/>
                                <g clip-path="url(#clip0_1743_16805)">
                                    <path
                                            d="M27.4248 20.1343H28.7551V17.8175C28.5256 17.7859 27.7363 17.7148 26.8171 17.7148C24.8991 17.7148 23.5853 18.9212 23.5853 21.1385V23.1791H21.4688V25.7692H23.5853V32.2863H26.1802V25.7698H28.2111L28.5335 23.1797H26.1796V21.3953C26.1802 20.6467 26.3817 20.1343 27.4248 20.1343Z"
                                            fill="#686868"/>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_1743_16805" x="0" y="0" width="50" height="50"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                   result="hardAlpha"/>
                                    <feOffset/>
                                    <feGaussianBlur stdDeviation="5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                             result="effect1_dropShadow_1743_16805"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16805"
                                             result="shape"/>
                                </filter>
                                <clipPath id="clip0_1743_16805">
                                    <rect width="14.5714" height="14.5714" fill="white"
                                          transform="translate(17.7129 17.7148)"/>
                                </clipPath>
                            </defs>
                        </svg>


                    </a>
                    <a href="<?= $arItem['PROPERTIES']['INST_LINK']['VALUE'] ?>" class="inst">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1743_16809)">
                                <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868"/>
                                <g clip-path="url(#clip0_1743_16809)">
                                    <path
                                            d="M25.0005 21.2598C22.9344 21.2598 21.2617 22.9343 21.2617 24.9986C21.2617 27.0647 22.9362 28.7373 25.0005 28.7373C27.0666 28.7373 28.7393 27.0628 28.7393 24.9986C28.7393 22.9324 27.0648 21.2598 25.0005 21.2598ZM25.0005 27.4253C23.6593 27.4253 22.5738 26.3391 22.5738 24.9986C22.5738 23.658 23.6599 22.5718 25.0005 22.5718C26.3411 22.5718 27.4273 23.658 27.4273 24.9986C27.4279 26.3391 26.3417 27.4253 25.0005 27.4253Z"
                                            fill="#686868"/>
                                    <path
                                            d="M28.0029 17.7606C26.6623 17.6981 23.3419 17.7011 22.0001 17.7606C20.821 17.8159 19.781 18.1006 18.9425 18.9391C17.5412 20.3404 17.7203 22.2286 17.7203 24.9978C17.7203 27.8319 17.5625 29.6764 18.9425 31.0564C20.3492 32.4626 22.2648 32.2786 25.0012 32.2786C27.8086 32.2786 28.7776 32.2804 29.7703 31.8961C31.12 31.3721 32.1387 30.1658 32.2383 27.9989C32.3015 26.6577 32.2978 23.3378 32.2383 21.996C32.1181 19.4382 30.7454 17.8869 28.0029 17.7606ZM30.1249 30.1293C29.2062 31.0479 27.9319 30.966 24.9836 30.966C21.9479 30.966 20.7305 31.0109 19.8423 30.1202C18.8192 29.102 19.0044 27.467 19.0044 24.988C19.0044 21.6336 18.6602 19.2178 22.0268 19.0453C22.8003 19.018 23.028 19.0089 24.9751 19.0089L25.0024 19.0271C28.2379 19.0271 30.7763 18.6883 30.9287 22.0543C30.9633 22.8224 30.9712 23.0531 30.9712 24.9971C30.9706 27.9977 31.0277 29.2223 30.1249 30.1293Z"
                                            fill="#686868"/>
                                    <path
                                            d="M28.8874 21.9856C29.3699 21.9856 29.761 21.5945 29.761 21.112C29.761 20.6294 29.3699 20.2383 28.8874 20.2383C28.4048 20.2383 28.0137 20.6294 28.0137 21.112C28.0137 21.5945 28.4048 21.9856 28.8874 21.9856Z"
                                            fill="#686868"/>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_1743_16809" x="0" y="0" width="50" height="50"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                   result="hardAlpha"/>
                                    <feOffset/>
                                    <feGaussianBlur stdDeviation="5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                             result="effect1_dropShadow_1743_16809"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16809"
                                             result="shape"/>
                                </filter>
                                <clipPath id="clip0_1743_16809">
                                    <rect width="14.5714" height="14.5714" fill="white"
                                          transform="translate(17.7129 17.7148)"/>
                                </clipPath>
                            </defs>
                        </svg>


                    </a>
                    <a href="<?= $arItem['PROPERTIES']['VK_LINK']['VALUE'] ?>" class="vk">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1743_16815)">
                                <circle cx="25" cy="25" r="14.5" fill="white" stroke="#686868"/>
                                <path
                                        d="M30.4027 26.289C30.1242 25.939 30.2039 25.7833 30.4027 25.4704C30.4063 25.4668 32.7048 22.3054 32.9416 21.2333L32.943 21.2325C33.0607 20.8418 32.9431 20.5547 32.374 20.5547H30.491C30.0116 20.5547 29.7906 20.8011 29.6721 21.0768C29.6721 21.0768 28.7134 23.3611 27.3571 24.8418C26.9194 25.2697 26.717 25.4068 26.478 25.4068C26.3603 25.4068 26.1774 25.2697 26.1774 24.879V21.2325C26.1774 20.764 26.0432 20.5547 25.6463 20.5547H22.6854C22.3847 20.5547 22.2061 20.7733 22.2061 20.9768C22.2061 21.4211 22.8842 21.5233 22.9545 22.7733V25.4854C22.9545 26.0797 22.8462 26.189 22.6058 26.189C21.9657 26.189 20.412 23.8954 19.4913 21.2704C19.3054 20.7611 19.1239 20.5554 18.6409 20.5554H16.7572C16.2197 20.5554 16.1113 20.8018 16.1113 21.0775C16.1113 21.5647 16.7514 23.9868 19.088 27.1868C20.6452 29.3711 22.8383 30.5547 24.8333 30.5547C26.0324 30.5547 26.1788 30.2918 26.1788 29.8397C26.1788 27.7525 26.0704 27.5554 26.6711 27.5554C26.9495 27.5554 27.4289 27.6925 28.5484 28.7461C29.8279 29.9954 30.0381 30.5547 30.7543 30.5547H32.6373C33.1741 30.5547 33.4461 30.2918 33.2897 29.7733C32.9316 28.6825 30.5118 26.439 30.4027 26.289Z"
                                        fill="#686868"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_1743_16815" x="0" y="0" width="50" height="50"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                   result="hardAlpha"/>
                                    <feOffset/>
                                    <feGaussianBlur stdDeviation="5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix"
                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                             result="effect1_dropShadow_1743_16815"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1743_16815"
                                             result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="exposition-bottom blog-section">
                <div class="catalog-item">
                    <div class="expos-authorr">
                        <img src="<?= $arItem['PROPERTIES']['AUTHOR_IMAGE']['VALUE'] ?>" alt="">
                        <p>
                            <?= $arItem['PROPERTIES']['AUTHOR']['VALUE'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>

</div>

<?
if ($arResult['NAV_STRING'] != null) {
    ?>
    <div class="btn btn-orange art-btn">
        <a href="#" class="btn btn-more art-btn">
            Показать еще
        </a>
    </div>
<?
}
?>
<script>

</script>

