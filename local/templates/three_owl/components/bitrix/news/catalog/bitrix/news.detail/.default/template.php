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
<? /* global $arrfilter;
$arrfilter = array("=PROPERTY_PRODUCT" => $arResult["ID"]); 
echo "<pre>";
print_r($arrfilter);
echo "</pre>"; */
?>
<div class="standart-block detail-block">
    <div class="container">
        <div class="katalog-title">
            <h2>
                <?= $arResult["NAME"] ?>
            </h2>
        </div>
    </div>
</div>
<div class="detail-sliders">
    <div class="container">
        <div class="detail-first-block">
            <div class="detail-two-slider">


                <div class="smallest-slider">
                    <? /* var_dump($arResult['PROPERTIES']['VIDEOS']['VALUE']); */ //  
                    ?>
                    <? if (array_sum($arResult['PROPERTIES']['VIDEOS']['VALUE'])) { ?>
                        <div class="smallest-slider-arrows small-prev">
                            <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="22.5" cy="22" r="21.5" stroke="#C8C8C8" />
                                <path d="M22.7071 12.2929C22.3166 11.9024 21.6834 11.9024 21.2929 12.2929L14.9289 18.6569C14.5384 19.0474 14.5384 19.6805 14.9289 20.0711C15.3195 20.4616 15.9526 20.4616 16.3431 20.0711L22 14.4142L27.6569 20.0711C28.0474 20.4616 28.6805 20.4616 29.0711 20.0711C29.4616 19.6805 29.4616 19.0474 29.0711 18.6569L22.7071 12.2929ZM23 31L23 13L21 13L21 31L23 31Z" fill="#C8C8C8" />
                            </svg>
                        </div>
                        <div class="js-smallest-detail-slider swiper-container">
                            <div class="swiper-paginationn swiper-wrapper"></div>
                        </div>
                        <div class="smallest-slider-arrows small-next">
                            <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="22.5" cy="22" r="21.5" stroke="#C8C8C8" />
                                <path d="M21.7929 30.7071C22.1834 31.0976 22.8166 31.0976 23.2071 30.7071L29.5711 24.3431C29.9616 23.9526 29.9616 23.3195 29.5711 22.9289C29.1805 22.5384 28.5474 22.5384 28.1569 22.9289L22.5 28.5858L16.8431 22.9289C16.4526 22.5384 15.8195 22.5384 15.4289 22.9289C15.0384 23.3195 15.0384 23.9526 15.4289 24.3431L21.7929 30.7071ZM21.5 12V30H23.5V12H21.5Z" fill="#C8C8C8" />
                            </svg>

                        </div>
                    <? } ?>
                </div>
                <div class="bigest-detail-slider js-bigest-detail-slider swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
                        </div>
                        <? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo) : ?>

                            <div class="swiper-slide">
                                <img src="<? echo $photo; ?>" alt="">
                            </div>
                        <? endforeach; ?>

                        <? foreach ($arResult['PROPERTIES']['VIDEOS']['VALUE'] as $key => $video) : ?>

                            <div class="swiper-slide">
                                <img src="<? echo $photo; ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <video src="<?= $video ?>" controls></video>
                                <img src="<?= $arResult['PROPERTIES']['VIDEOS_PREVIEW'][$key] ?>" style="display: none" alt="">
                            </div>
                        <? endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="detail-product-info">
                <div class="three-hundred-bucks">
                    <p>
                        <?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?>
                    </p>
                </div>
                <div class="buying-links">
                    <span>
                        Купить онлайн
                    </span>
                    <div class="buying-links-item">
                        <? foreach ($arResult['PROPERTIES']['SHOPS_LIST']['VALUE'] as $key => $shop) : ?>
                            <a href="<?= $shop['LINK'] ?>" target="_blank">
                                <img src="<?= $shop['IMAGE'] ?>" alt="<?= $shop['NAME'] ?>">
                            </a>
                        <? endforeach; ?>
                    </div>
                    <a href="<?= $arResult['PROPERTIES']['BUY_SINGLE_LINK']['VALUE'] ?>" target="_blank">
                        Купить в рознице
                    </a>
                </div>
                <div class="detail-social-links">
                    <?
                    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                        $url = "https://";
                    else
                        $url = "http://";
                    // Append the host(domain name, ip) to the URL.
                    $url .= $_SERVER['HTTP_HOST'];

                    // Append the requested resource location to the URL
                    $url .= $_SERVER['REQUEST_URI'];
                    ?>
                    <? if ($arResult['PROPERTIES']['SHARE_VK']['VALUE'] == 1 || $arResult['PROPERTIES']['SHARE_INST']['VALUE']  == 1 || $arResult['PROPERTIES']['SHARE_FACEBOOK']['VALUE']  == 1) { ?>
                        <p>
                            Поделиться:
                        </p>
                        <div class="social-link">
                            <? if ($arResult['PROPERTIES']['SHARE_FACEBOOK']['VALUE']  == 1) { ?>
                                <a href="http://www.facebook.com/share.php?u=<?= $url ?>" target="_blank" rel="noopener" class="facebook">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                        <g clip-path="url(#clip0_1237_34518)">
                                            <path d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z" fill="#686868" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1237_34518">
                                                <rect width="17" height="17" fill="white" transform="translate(9.00006 9.00012)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="#475993" />
                                        <g clip-path="url(#clip0_1237_34593)">
                                            <path d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1237_34593">
                                                <rect width="17" height="17" fill="white" transform="translate(9.00006 9.00012)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            <? } ?>
                            <? if ($arResult['PROPERTIES']['SHARE_INST']['VALUE']  == 1) { ?>
                                <a href="https://www.instagram.com/?url=<?= $url ?>" class="inst" target="_blank" rel="noopener">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                        <g clip-path="url(#clip0_1237_34512)">
                                            <path d="M17.5029 13.1353C15.0924 13.1353 13.141 15.0888 13.141 17.4972C13.141 19.9076 15.0945 21.8591 17.5029 21.8591C19.9133 21.8591 21.8648 19.9055 21.8648 17.4972C21.8648 15.0867 19.9112 13.1353 17.5029 13.1353ZM17.5029 20.3284C15.9382 20.3284 14.6717 19.0612 14.6717 17.4972C14.6717 15.9332 15.9389 14.666 17.5029 14.666C19.0669 14.666 20.3341 15.9332 20.3341 17.4972C20.3348 19.0612 19.0676 20.3284 17.5029 20.3284Z" fill="#686868" />
                                            <path d="M21.0048 9.05413C19.4408 8.98117 15.5669 8.98471 14.0015 9.05413C12.6259 9.11859 11.4125 9.4508 10.4343 10.429C8.79946 12.0638 9.00842 14.2668 9.00842 17.4975C9.00842 20.804 8.82425 22.9559 10.4343 24.5659C12.0755 26.2064 14.3103 25.9918 17.5028 25.9918C20.7781 25.9918 21.9086 25.9939 23.0667 25.5455C24.6413 24.9343 25.8299 23.5268 25.9461 20.9988C26.0198 19.434 26.0155 15.5609 25.9461 13.9955C25.8058 11.0113 24.2043 9.20146 21.0048 9.05413ZM23.4804 23.4843C22.4087 24.556 20.9219 24.4604 17.4822 24.4604C13.9405 24.4604 12.5203 24.5128 11.484 23.4737C10.2905 22.2858 10.5065 20.3783 10.5065 17.4861C10.5065 13.5726 10.1049 10.7541 14.0326 10.553C14.935 10.5211 15.2007 10.5105 17.4723 10.5105L17.5042 10.5317C21.2789 10.5317 24.2404 10.1365 24.4182 14.0635C24.4586 14.9595 24.4678 15.2287 24.4678 17.4968C24.4671 20.9973 24.5337 22.426 23.4804 23.4843Z" fill="#686868" />
                                            <path d="M22.0377 13.9826C22.6007 13.9826 23.057 13.5262 23.057 12.9633C23.057 12.4003 22.6007 11.944 22.0377 11.944C21.4748 11.944 21.0184 12.4003 21.0184 12.9633C21.0184 13.5262 21.4748 13.9826 22.0377 13.9826Z" fill="#686868" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1237_34512">
                                                <rect width="17" height="17" fill="white" transform="translate(9 9.00012)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                        <g clip-path="url(#clip0_1237_34597)">
                                            <path d="M17.5029 13.1351C15.0924 13.1351 13.141 15.0887 13.141 17.4971C13.141 19.9075 15.0945 21.859 17.5029 21.859C19.9133 21.859 21.8648 19.9054 21.8648 17.4971C21.8648 15.0866 19.9112 13.1351 17.5029 13.1351ZM17.5029 20.3283C15.9382 20.3283 14.6717 19.0611 14.6717 17.4971C14.6717 15.933 15.9389 14.6658 17.5029 14.6658C19.0669 14.6658 20.3341 15.933 20.3341 17.4971C20.3348 19.0611 19.0676 20.3283 17.5029 20.3283Z" fill="#686868" />
                                            <path d="M21.0048 9.05401C19.4408 8.98105 15.5669 8.98459 14.0015 9.05401C12.6259 9.11847 11.4125 9.45068 10.4343 10.4289C8.79946 12.0637 9.00842 14.2666 9.00842 17.4973C9.00842 20.8038 8.82425 22.9558 10.4343 24.5658C12.0755 26.2063 14.3103 25.9917 17.5028 25.9917C20.7781 25.9917 21.9086 25.9938 23.0667 25.5454C24.6413 24.9341 25.8299 23.5267 25.9461 20.9986C26.0198 19.4339 26.0155 15.5608 25.9461 13.9953C25.8058 11.0111 24.2043 9.20134 21.0048 9.05401ZM23.4804 23.4842C22.4087 24.5559 20.9219 24.4603 17.4822 24.4603C13.9405 24.4603 12.5203 24.5127 11.484 23.4736C10.2905 22.2857 10.5065 20.3781 10.5065 17.486C10.5065 13.5725 10.1049 10.754 14.0326 10.5528C14.935 10.521 15.2007 10.5103 17.4723 10.5103L17.5042 10.5316C21.2789 10.5316 24.2404 10.1363 24.4182 14.0633C24.4586 14.9594 24.4678 15.2286 24.4678 17.4966C24.4671 20.9972 24.5337 22.4259 23.4804 23.4842Z" fill="#686868" />
                                            <path d="M22.0377 13.9824C22.6007 13.9824 23.057 13.5261 23.057 12.9631C23.057 12.4002 22.6007 11.9438 22.0377 11.9438C21.4748 11.9438 21.0184 12.4002 21.0184 12.9631C21.0184 13.5261 21.4748 13.9824 22.0377 13.9824Z" fill="#686868" />
                                        </g>
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="url(#paint0_linear_1237_34597)" />
                                        <g clip-path="url(#clip1_1237_34597)">
                                            <path d="M17.5028 13.3064C15.1868 13.3064 13.3119 15.1834 13.3119 17.4973C13.3119 19.8132 15.1889 21.6881 17.5028 21.6881C19.8187 21.6881 21.6936 19.8112 21.6936 17.4973C21.6936 15.1813 19.8167 13.3064 17.5028 13.3064ZM17.5028 20.2174C15.9994 20.2174 14.7826 18.9999 14.7826 17.4973C14.7826 15.9946 16.0001 14.7771 17.5028 14.7771C19.0054 14.7771 20.223 15.9946 20.223 17.4973C20.2236 18.9999 19.0061 20.2174 17.5028 20.2174Z" fill="white" />
                                            <path d="M20.8673 9.38529C19.3646 9.31519 15.6427 9.31859 14.1387 9.38529C12.817 9.44722 11.6512 9.7664 10.7114 10.7062C9.14066 12.277 9.34142 14.3935 9.34142 17.4975C9.34142 20.6743 9.16448 22.7419 10.7114 24.2888C12.2882 25.8649 14.4354 25.6587 17.5026 25.6587C20.6495 25.6587 21.7357 25.6608 22.8484 25.23C24.3613 24.6427 25.5033 23.2904 25.6149 20.8615C25.6856 19.3582 25.6816 15.6369 25.6149 14.1328C25.4801 11.2657 23.9414 9.52684 20.8673 9.38529ZM23.2459 23.2496C22.2162 24.2793 20.7877 24.1874 17.4829 24.1874C14.0801 24.1874 12.7156 24.2377 11.72 23.2394C10.5732 22.0981 10.7808 20.2653 10.7808 17.4866C10.7808 13.7266 10.3949 11.0186 14.1686 10.8253C15.0356 10.7947 15.2908 10.7845 17.4734 10.7845L17.504 10.8049C21.1307 10.8049 23.9761 10.4252 24.1469 14.1982C24.1857 15.0591 24.1945 15.3177 24.1945 17.4968C24.1939 20.8601 24.2578 22.2328 23.2459 23.2496Z" fill="white" />
                                            <path d="M21.8598 14.1204C22.4006 14.1204 22.8391 13.6819 22.8391 13.1411C22.8391 12.6002 22.4006 12.1617 21.8598 12.1617C21.3189 12.1617 20.8805 12.6002 20.8805 13.1411C20.8805 13.6819 21.3189 14.1204 21.8598 14.1204Z" fill="white" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_1237_34597" x1="5.25" y1="29.6667" x2="30.0833" y2="5.66675" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#E09B3D" />
                                                <stop offset="0.3" stop-color="#C74C4D" />
                                                <stop offset="0.6" stop-color="#C21975" />
                                                <stop offset="1" stop-color="#7024C4" />
                                            </linearGradient>
                                            <clipPath id="clip0_1237_34597">
                                                <rect width="17" height="17" fill="white" transform="translate(9 9)" />
                                            </clipPath>
                                            <clipPath id="clip1_1237_34597">
                                                <rect width="16.3333" height="16.3333" fill="white" transform="translate(9.33334 9.33337)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            <? } ?>
                            <? if ($arResult['PROPERTIES']['SHARE_VK']['VALUE']  == 1) { ?>
                                <a href="https://vk.com/share.php?url=<?= $url ?>" class="vk" target="_blank" rel="noopener">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                        <path d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z" fill="#686868" />
                                    </svg>
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="#116CB7" />
                                        <path d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z" fill="white" />
                                    </svg>
                                </a>
                            <? } ?>
                        </div>
                    <? } ?>
                </div>
                <div class="characteristic-demo">
                    <ul>
                        <li>
                            <p>
                                Артикул
                            </p>
                            <p>
                                <?= $arResult['PROPERTIES']['ARTIKUL']['VALUE'] ?>

                            </p>
                        </li>
                        <li>
                            <p>
                                Размер игрушки
                            </p>
                            <p>
                                <?= $arResult['PROPERTIES']['SIZE_TOY']['VALUE'] ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                Размер упаковки
                            </p>
                            <p>
                                <?= $arResult['PROPERTIES']['SIZE_PACKET']['VALUE'] ?>
                            </p>
                        </li>
                    </ul>
                    <a href="#characteristic">
                        Все характеристики
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="detail-small-title">
        <p>
            Фото и видео покупателей
        </p>
    </div>
    <div class="small-container">
        <div class="detail-photo-slider js-detail-photo-slider swiper-container">
            <div class="swiper-wrapper">
                <? foreach ($arResult['PROPERTIES']['CUSTOMERS_PHOTOS']['VALUE'] as $photo) : ?>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)">
                            <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                            </svg>

                        </a>
                        <img src="<? echo $photo; ?>" alt="">

                    </div>
                <? endforeach; ?>
                <? foreach ($arResult['PROPERTIES']['CUSTOMERS_VIDEOS']['VALUE'] as $video) : ?>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)">
                            <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                            </svg>

                        </a>
                        <video src="<?= $video ?>" controls></video>
                        <img src="<?= $arResult['PROPERTIES']['CUSTOM_VIDEOS_PREVIEW'][$key] ?>" style="display: none" alt="">

                    </div>
                <? endforeach; ?>

            </div>
        </div>

        <div class="detail-desc">
            <div class="detail-small-title">
                <p>
                    Описание
                </p>
            </div>
            <div class="detail-desc-text">
                <?= $arResult['PREVIEW_TEXT'] ?>
            </div>
        </div>

        <div class="detail-small-title">
            <p>
                Характеристики
            </p>
        </div>
        <div class="characteristic-demo" id="characteristic">
            <ul>
                <li>
                    <p>
                        Артикул
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['ARTIKUL']['VALUE'] ?>

                    </p>
                </li>
                <li>
                    <p>
                        Размер игрушки
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['SIZE_TOY']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Размер упаковки
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['SIZE_PACKET']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Страна изготовитель
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['COUNTRY']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Пол ребенка
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['GENDER']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Развивающие функции
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['DEV_FUNCTIONS']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Возраст ребенка
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['AGE']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Развитие навыков
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['DEV_SKILLS']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Количество элементов, шт
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['PART_COUNT']['VALUE'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        Материал
                    </p>
                    <p>
                        <?= $arResult['PROPERTIES']['MATERIAL']['VALUE'] ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="important-sections standart-block watch-also-det">
        <div class="container">
            <div class="detail-small-title watch-also">
                <p>
                    Смотрите так же
                </p>
            </div>
            <div class="js-second-mini-slider smaller-slider swiper-container second-mini-slider">
                <div class="swiper-wrapper">
                    <? foreach ($arResult['PROPERTIES']['WATCH_ALSO']['VALUE'] as $key => $relProduct) : ?>
                        <div class="swiper-slide">
                            <img src="<?= $relProduct['IMAGE'] ?>" alt="">
                            <span>
                                Артикул: <?= $relProduct['ARTIKUL'] ?>
                            </span>
                            <p>
                                <?= $relProduct['NAME'] ?>
                            </p>
                            <a href="<?= $relProduct['LINK'] ?>" target="_blank"></a>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="slider-arrow prev-mini-slide prev-slide">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="44.8462" rx="22.4231" fill="white" />
                        <path d="M25 14.9487L19 22.4231L25 29.8974" stroke="#FFCF32" stroke-width="2" />
                    </svg>
                </div>
                <div class="slider-arrow next-mini-slide next-slide">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="45" rx="22.5" fill="white" />
                        <path d="M20 15L26 22.5L20 30" stroke="#FFCF32" stroke-width="2" />
                    </svg>
                </div>
                <div class="swiper-pagination second-slider-pagination"></div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="feedback-block">
    <div class="container">
        <div class="detail-small-title">
            <p>
                Отзывы
            </p>
            <div class="number-of-feedbacks">160</div>
            <div class="send-feedback-btn">
                <a href="javascript:void(0)">
                    Написать отзыв
                </a>
            </div>
        </div>
        <div class="feedback-section">
            
            <? $APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
                "reviews",
                array(
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "ALLOW_DELETE" => "Y",
                    "ALLOW_EDIT" => "Y",
                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                    "CUSTOM_TITLE_NAME" => "",
                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                    "CUSTOM_TITLE_TAGS" => "",
                    "DEFAULT_INPUT_SIZE" => "30",
                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                    "ELEMENT_ASSOC" => "CREATED_BY",
                    "GROUPS" => array(),
                    "IBLOCK_ID" => "15",
                    "IBLOCK_TYPE" => "content",
                    "LEVEL_LAST" => "Y",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "NAV_ON_PAGE" => "10",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PRODUCT_ID" => $arResult["ID"],
                    "PROPERTY_CODES" => array("58", "59", "60", "61", "62", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT"),
                    "PROPERTY_CODES_REQUIRED" => array(),
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N"
                )
            );
            ?>

        </div>
        <div class="feedbacks">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "reviews",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "Y",
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
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "arrfilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "15",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", "PRODUCT"),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
            <div class="feedback">
                <div class="feedback-info">
                    <div class="feedback-rating">
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L10.0314 5.20404L15.6085 5.52786L11.2869 9.06796L12.7023 14.4721L8 11.456L3.29772 14.4721L4.71315 9.06796L0.391548 5.52786L5.96861 5.20404L8 0Z" fill="#FFD521" />
                            <path d="M24 0L26.0314 5.20404L31.6085 5.52786L27.2869 9.06796L28.7023 14.4721L24 11.456L19.2977 14.4721L20.7131 9.06796L16.3915 5.52786L21.9686 5.20404L24 0Z" fill="#FFD521" />
                            <path d="M40 0L42.0314 5.20404L47.6085 5.52786L43.2869 9.06796L44.7023 14.4721L40 11.456L35.2977 14.4721L36.7131 9.06796L32.3915 5.52786L37.9686 5.20404L40 0Z" fill="#FFD521" />
                            <path d="M56 0L58.0314 5.20404L63.6085 5.52786L59.2869 9.06796L60.7023 14.4721L56 11.456L51.2977 14.4721L52.7131 9.06796L48.3915 5.52786L53.9686 5.20404L56 0Z" fill="#FFD521" />
                            <path d="M72 0L74.0314 5.20404L79.6085 5.52786L75.2869 9.06796L76.7023 14.4721L72 11.456L67.2977 14.4721L68.7131 9.06796L64.3915 5.52786L69.9686 5.20404L72 0Z" fill="#FFD521" />
                            <g clip-path="url(#clip0_1292_38207)">
                                <path d="M72 0.687519L73.7985 5.29494L73.8568 5.44432L74.0169 5.45362L78.9546 5.74032L75.1284 8.87457L75.0044 8.97618L75.045 9.1313L76.2982 13.9159L72.135 11.2456L72 11.159L71.865 11.2456L67.7018 13.9159L68.955 9.1313L68.9956 8.97618L68.8716 8.87457L65.0454 5.74032L69.9831 5.45362L70.1432 5.44432L70.2015 5.29494L72 0.687519Z" fill="white" stroke="#FFD521" stroke-width="0.5" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1292_38207">
                                    <rect width="16" height="15" fill="white" transform="translate(64)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="feedback-author">
                        <p>
                            Алексей Рвачев
                        </p>
                    </div>
                    <div class="feedback-date">
                        <p>
                            22.12.2021
                        </p>
                    </div>
                    <div class="feedback-img">

                    </div>
                </div>
                <div class="feedback-text">
                    <p>Достоинства:</p>
                    <span>Яркие, не сильно мягкие</span>
                    <p>Недостатки:</p>
                    <span>Не обнаружил</span>
                    <p>Отзыв:</p>
                    <span>Замечательные, небольшие, красочные лёгкие кубики. ребенку 1,5 годика, очень понравились,
                        играет с удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально.</span>
                </div>
            </div>
            <div class="feedback">
                <div class="feedback-info">
                    <div class="feedback-rating">
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L10.0314 5.20404L15.6085 5.52786L11.2869 9.06796L12.7023 14.4721L8 11.456L3.29772 14.4721L4.71315 9.06796L0.391548 5.52786L5.96861 5.20404L8 0Z" fill="#FFD521" />
                            <path d="M24 0L26.0314 5.20404L31.6085 5.52786L27.2869 9.06796L28.7023 14.4721L24 11.456L19.2977 14.4721L20.7131 9.06796L16.3915 5.52786L21.9686 5.20404L24 0Z" fill="#FFD521" />
                            <path d="M40 0L42.0314 5.20404L47.6085 5.52786L43.2869 9.06796L44.7023 14.4721L40 11.456L35.2977 14.4721L36.7131 9.06796L32.3915 5.52786L37.9686 5.20404L40 0Z" fill="#FFD521" />
                            <path d="M56 0L58.0314 5.20404L63.6085 5.52786L59.2869 9.06796L60.7023 14.4721L56 11.456L51.2977 14.4721L52.7131 9.06796L48.3915 5.52786L53.9686 5.20404L56 0Z" fill="#FFD521" />
                            <path d="M72 0L74.0314 5.20404L79.6085 5.52786L75.2869 9.06796L76.7023 14.4721L72 11.456L67.2977 14.4721L68.7131 9.06796L64.3915 5.52786L69.9686 5.20404L72 0Z" fill="#FFD521" />
                            <g clip-path="url(#clip0_1292_38207)">
                                <path d="M72 0.687519L73.7985 5.29494L73.8568 5.44432L74.0169 5.45362L78.9546 5.74032L75.1284 8.87457L75.0044 8.97618L75.045 9.1313L76.2982 13.9159L72.135 11.2456L72 11.159L71.865 11.2456L67.7018 13.9159L68.955 9.1313L68.9956 8.97618L68.8716 8.87457L65.0454 5.74032L69.9831 5.45362L70.1432 5.44432L70.2015 5.29494L72 0.687519Z" fill="white" stroke="#FFD521" stroke-width="0.5" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1292_38207">
                                    <rect width="16" height="15" fill="white" transform="translate(64)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="feedback-author">
                        <p>
                            Алексей Рвачев
                        </p>
                    </div>
                    <div class="feedback-date">
                        <p>
                            22.12.2021
                        </p>
                    </div>
                    <div class="feedback-img">
                        <svg width="112" height="30" viewBox="0 0 112 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="112" height="30" rx="5" fill="#005BFF" />
                            <path d="M38.5048 14.8C38.5048 13.576 38.9128 12.548 39.7288 11.716C40.5608 10.884 41.6088 10.468 42.8728 10.468C44.1368 10.468 45.1808 10.868 46.0048 11.668C46.8368 12.476 47.2528 13.52 47.2528 14.8C47.2528 16.056 46.8368 17.092 46.0048 17.908C45.1728 18.724 44.1288 19.132 42.8728 19.132C41.6088 19.132 40.5648 18.732 39.7408 17.932C38.9168 17.132 38.5048 16.088 38.5048 14.8ZM40.0648 14.8C40.0648 15.648 40.3328 16.352 40.8688 16.912C41.4048 17.472 42.0728 17.752 42.8728 17.752C43.7368 17.752 44.4208 17.472 44.9248 16.912C45.4368 16.352 45.6928 15.648 45.6928 14.8C45.6928 13.944 45.4208 13.236 44.8768 12.676C44.3328 12.124 43.6648 11.848 42.8728 11.848C42.0648 11.848 41.3928 12.124 40.8568 12.676C40.3288 13.228 40.0648 13.936 40.0648 14.8ZM52.5224 11.98H48.1184V10.6H54.5024V11.62L49.8464 17.62H54.6224V19H47.8784V17.992L52.5224 11.98ZM55.2392 14.8C55.2392 13.576 55.6472 12.548 56.4632 11.716C57.2952 10.884 58.3432 10.468 59.6072 10.468C60.8712 10.468 61.9152 10.868 62.7392 11.668C63.5712 12.476 63.9872 13.52 63.9872 14.8C63.9872 16.056 63.5712 17.092 62.7392 17.908C61.9072 18.724 60.8632 19.132 59.6072 19.132C58.3432 19.132 57.2992 18.732 56.4752 17.932C55.6512 17.132 55.2392 16.088 55.2392 14.8ZM56.7992 14.8C56.7992 15.648 57.0672 16.352 57.6032 16.912C58.1392 17.472 58.8072 17.752 59.6072 17.752C60.4712 17.752 61.1552 17.472 61.6592 16.912C62.1712 16.352 62.4272 15.648 62.4272 14.8C62.4272 13.944 62.1552 13.236 61.6112 12.676C61.0672 12.124 60.3992 11.848 59.6072 11.848C58.7992 11.848 58.1272 12.124 57.5912 12.676C57.0632 13.228 56.7992 13.936 56.7992 14.8ZM72.8713 10.6V19H71.6953L67.0753 13.18V19H65.6953V10.6H66.8713L71.4913 16.444V10.6H72.8713Z" fill="white" />
                        </svg>

                    </div>
                </div>
                <div class="feedback-text">
                    <p>Достоинства:</p>
                    <span>Яркие, не сильно мягкие</span>
                    <p>Недостатки:</p>
                    <span>Не обнаружил</span>
                    <p>Отзыв:</p>
                    <span>Замечательные, небольшие, красочные лёгкие кубики. ребенку 1,5 годика, очень понравились,
                        играет с удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально.</span>
                </div>
            </div>
            <div class="feedback">
                <div class="feedback-info">
                    <div class="feedback-rating">
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L10.0314 5.20404L15.6085 5.52786L11.2869 9.06796L12.7023 14.4721L8 11.456L3.29772 14.4721L4.71315 9.06796L0.391548 5.52786L5.96861 5.20404L8 0Z" fill="#FFD521" />
                            <path d="M24 0L26.0314 5.20404L31.6085 5.52786L27.2869 9.06796L28.7023 14.4721L24 11.456L19.2977 14.4721L20.7131 9.06796L16.3915 5.52786L21.9686 5.20404L24 0Z" fill="#FFD521" />
                            <path d="M40 0L42.0314 5.20404L47.6085 5.52786L43.2869 9.06796L44.7023 14.4721L40 11.456L35.2977 14.4721L36.7131 9.06796L32.3915 5.52786L37.9686 5.20404L40 0Z" fill="#FFD521" />
                            <path d="M56 0L58.0314 5.20404L63.6085 5.52786L59.2869 9.06796L60.7023 14.4721L56 11.456L51.2977 14.4721L52.7131 9.06796L48.3915 5.52786L53.9686 5.20404L56 0Z" fill="#FFD521" />
                            <path d="M72 0L74.0314 5.20404L79.6085 5.52786L75.2869 9.06796L76.7023 14.4721L72 11.456L67.2977 14.4721L68.7131 9.06796L64.3915 5.52786L69.9686 5.20404L72 0Z" fill="#FFD521" />
                            <g clip-path="url(#clip0_1292_38207)">
                                <path d="M72 0.687519L73.7985 5.29494L73.8568 5.44432L74.0169 5.45362L78.9546 5.74032L75.1284 8.87457L75.0044 8.97618L75.045 9.1313L76.2982 13.9159L72.135 11.2456L72 11.159L71.865 11.2456L67.7018 13.9159L68.955 9.1313L68.9956 8.97618L68.8716 8.87457L65.0454 5.74032L69.9831 5.45362L70.1432 5.44432L70.2015 5.29494L72 0.687519Z" fill="white" stroke="#FFD521" stroke-width="0.5" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1292_38207">
                                    <rect width="16" height="15" fill="white" transform="translate(64)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="feedback-author">
                        <p>
                            Алексей Рвачев
                        </p>
                    </div>
                    <div class="feedback-date">
                        <p>
                            22.12.2021
                        </p>
                    </div>
                    <div class="feedback-img">
                        <svg width="112" height="30" viewBox="0 0 112 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="112" height="30" rx="5" fill="url(#paint0_linear_1652_44561)" />
                            <path d="M26.7229 10.6H28.1389L25.7389 19H24.3589L22.3309 12.928L20.3389 19H18.9469L16.4389 10.6H18.0949L19.7869 16.588L21.6589 10.6H23.1229L25.0429 16.6L26.7229 10.6ZM31.0231 19H29.5471V10.6H31.0231V19ZM38.7833 19H33.5273V10.6H35.0033V17.62H38.7833V19ZM40.2578 19H40.0898V10.6H40.2458C40.5978 10.6 40.9698 10.596 41.3618 10.588C42.1458 10.572 42.5458 10.564 42.5618 10.564C44.1938 10.564 45.4018 10.98 46.1858 11.812C46.9138 12.588 47.2778 13.556 47.2778 14.716C47.2778 15.964 46.8578 16.996 46.0178 17.812C45.1858 18.62 44.0018 19.024 42.4658 19.024C42.1458 19.024 41.8098 19.02 41.4578 19.012C41.1138 19.004 40.7138 19 40.2578 19ZM42.5378 11.944C42.2258 11.944 41.9018 11.956 41.5658 11.98V17.62C41.9338 17.636 42.2498 17.644 42.5138 17.644C43.5138 17.644 44.2978 17.38 44.8658 16.852C45.4338 16.324 45.7178 15.612 45.7178 14.716C45.7178 13.86 45.4338 13.184 44.8658 12.688C44.3058 12.192 43.5298 11.944 42.5378 11.944ZM48.9843 18.988V10.624C49.8483 10.584 50.6563 10.564 51.4083 10.564C52.3363 10.564 53.0283 10.748 53.4843 11.116C53.9403 11.484 54.1683 11.992 54.1683 12.64C54.1683 13.544 53.7683 14.18 52.9683 14.548V14.572C53.4243 14.692 53.7843 14.92 54.0483 15.256C54.3123 15.584 54.4443 16.008 54.4443 16.528C54.4443 17.344 54.1643 17.968 53.6043 18.4C53.0443 18.832 52.2843 19.048 51.3243 19.048C50.3643 19.048 49.5843 19.028 48.9843 18.988ZM51.5043 15.388H50.4603V17.608C50.8363 17.648 51.1603 17.668 51.4323 17.668C52.4563 17.668 52.9683 17.264 52.9683 16.456C52.9683 16.104 52.8403 15.84 52.5843 15.664C52.3283 15.48 51.9683 15.388 51.5043 15.388ZM51.3843 11.944C51.0323 11.944 50.7243 11.956 50.4603 11.98V14.104H51.4563C51.8323 14.104 52.1323 14.008 52.3563 13.816C52.5883 13.624 52.7043 13.348 52.7043 12.988C52.7043 12.652 52.5883 12.396 52.3563 12.22C52.1243 12.036 51.8003 11.944 51.3843 11.944ZM61.3706 19H56.3906V10.6H61.2506V11.98H57.8666V14.068H60.8906V15.448H57.8666V17.62H61.3706V19ZM64.7689 15.856V19H63.2929V10.6C63.7089 10.6 64.1609 10.596 64.6489 10.588C65.1369 10.58 65.5369 10.576 65.8489 10.576C67.8809 10.576 68.8969 11.44 68.8969 13.168C68.8969 13.808 68.7329 14.336 68.4049 14.752C68.0769 15.152 67.7009 15.424 67.2769 15.568L69.9049 19H68.1169L65.8009 15.856H64.7689ZM65.7769 11.956C65.7369 11.956 65.6729 11.96 65.5849 11.968C65.4969 11.968 65.3729 11.972 65.2129 11.98C65.0529 11.98 64.9049 11.98 64.7689 11.98V14.476H65.7289C66.2009 14.476 66.5849 14.36 66.8809 14.128C67.1849 13.896 67.3369 13.58 67.3369 13.18C67.3369 12.364 66.8169 11.956 65.7769 11.956ZM72.6673 15.856V19H71.1913V10.6C71.6073 10.6 72.0593 10.596 72.5473 10.588C73.0353 10.58 73.4353 10.576 73.7473 10.576C75.7793 10.576 76.7953 11.44 76.7953 13.168C76.7953 13.808 76.6313 14.336 76.3033 14.752C75.9753 15.152 75.5993 15.424 75.1753 15.568L77.8033 19H76.0153L73.6993 15.856H72.6673ZM73.6753 11.956C73.6353 11.956 73.5713 11.96 73.4833 11.968C73.3953 11.968 73.2713 11.972 73.1113 11.98C72.9513 11.98 72.8033 11.98 72.6673 11.98V14.476H73.6273C74.0993 14.476 74.4833 14.36 74.7793 14.128C75.0833 13.896 75.2353 13.58 75.2353 13.18C75.2353 12.364 74.7153 11.956 73.6753 11.956ZM80.7458 19H79.2698V10.6H80.7458V19ZM88.2299 19H83.2499V10.6H88.1099V11.98H84.7259V14.068H87.7499V15.448H84.7259V17.62H88.2299V19ZM93.5243 16.768C93.5243 16.512 93.4283 16.288 93.2363 16.096C93.0523 15.896 92.8203 15.736 92.5403 15.616C92.2603 15.488 91.9523 15.344 91.6163 15.184C91.2883 15.016 90.9843 14.844 90.7043 14.668C90.4243 14.484 90.1883 14.232 89.9963 13.912C89.8123 13.584 89.7203 13.208 89.7203 12.784C89.7203 12.136 89.9563 11.588 90.4283 11.14C90.9163 10.692 91.5523 10.468 92.3363 10.468C93.4003 10.468 94.2003 10.768 94.7363 11.368L93.9443 12.472C93.5203 12.056 93.0243 11.848 92.4563 11.848C92.0963 11.848 91.8083 11.932 91.5923 12.1C91.3843 12.268 91.2803 12.492 91.2803 12.772C91.2803 12.916 91.3083 13.052 91.3643 13.18C91.4203 13.3 91.4803 13.4 91.5443 13.48C91.6163 13.56 91.7283 13.648 91.8803 13.744C92.0403 13.84 92.1643 13.912 92.2523 13.96C92.3483 14 92.5043 14.068 92.7203 14.164C92.9363 14.26 93.0883 14.328 93.1763 14.368C93.5283 14.528 93.8363 14.696 94.1003 14.872C94.3963 15.048 94.6323 15.3 94.8083 15.628C94.9923 15.956 95.0843 16.332 95.0843 16.756C95.0843 17.46 94.8163 18.032 94.2803 18.472C93.7443 18.912 93.0763 19.132 92.2763 19.132C91.7163 19.132 91.1603 19.016 90.6083 18.784C90.0803 18.544 89.7203 18.22 89.5283 17.812L90.3683 16.804C90.5923 17.1 90.8803 17.332 91.2323 17.5C91.5923 17.668 91.9483 17.752 92.3003 17.752C92.6683 17.752 92.9643 17.664 93.1883 17.488C93.4123 17.312 93.5243 17.072 93.5243 16.768Z" fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_1652_44561" x1="1.52985e-07" y1="15" x2="112" y2="15" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FB3197" />
                                    <stop offset="1" stop-color="#350163" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="feedback-text">
                    <p>Достоинства:</p>
                    <span>Яркие, не сильно мягкие</span>
                    <p>Недостатки:</p>
                    <span>Не обнаружил</span>
                    <p>Отзыв:</p>
                    <span>Замечательные, небольшие, красочные лёгкие кубики. ребенку 1,5 годика, очень понравились,
                        играет с удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально.</span>
                </div>
            </div>
            <div class="feedback">
                <div class="feedback-info">
                    <div class="feedback-rating">
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L10.0314 5.20404L15.6085 5.52786L11.2869 9.06796L12.7023 14.4721L8 11.456L3.29772 14.4721L4.71315 9.06796L0.391548 5.52786L5.96861 5.20404L8 0Z" fill="#FFD521" />
                            <path d="M24 0L26.0314 5.20404L31.6085 5.52786L27.2869 9.06796L28.7023 14.4721L24 11.456L19.2977 14.4721L20.7131 9.06796L16.3915 5.52786L21.9686 5.20404L24 0Z" fill="#FFD521" />
                            <path d="M40 0L42.0314 5.20404L47.6085 5.52786L43.2869 9.06796L44.7023 14.4721L40 11.456L35.2977 14.4721L36.7131 9.06796L32.3915 5.52786L37.9686 5.20404L40 0Z" fill="#FFD521" />
                            <path d="M56 0L58.0314 5.20404L63.6085 5.52786L59.2869 9.06796L60.7023 14.4721L56 11.456L51.2977 14.4721L52.7131 9.06796L48.3915 5.52786L53.9686 5.20404L56 0Z" fill="#FFD521" />
                            <path d="M72 0L74.0314 5.20404L79.6085 5.52786L75.2869 9.06796L76.7023 14.4721L72 11.456L67.2977 14.4721L68.7131 9.06796L64.3915 5.52786L69.9686 5.20404L72 0Z" fill="#FFD521" />
                            <g clip-path="url(#clip0_1292_38207)">
                                <path d="M72 0.687519L73.7985 5.29494L73.8568 5.44432L74.0169 5.45362L78.9546 5.74032L75.1284 8.87457L75.0044 8.97618L75.045 9.1313L76.2982 13.9159L72.135 11.2456L72 11.159L71.865 11.2456L67.7018 13.9159L68.955 9.1313L68.9956 8.97618L68.8716 8.87457L65.0454 5.74032L69.9831 5.45362L70.1432 5.44432L70.2015 5.29494L72 0.687519Z" fill="white" stroke="#FFD521" stroke-width="0.5" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1292_38207">
                                    <rect width="16" height="15" fill="white" transform="translate(64)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="feedback-author">
                        <p>
                            Алексей Рвачев
                        </p>
                    </div>
                    <div class="feedback-date">
                        <p>
                            22.12.2021
                        </p>
                    </div>
                    <div class="feedback-img">
                        <svg width="112" height="30" viewBox="0 0 112 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="112" height="30" rx="5" fill="#005BFF" />
                            <path d="M38.5048 14.8C38.5048 13.576 38.9128 12.548 39.7288 11.716C40.5608 10.884 41.6088 10.468 42.8728 10.468C44.1368 10.468 45.1808 10.868 46.0048 11.668C46.8368 12.476 47.2528 13.52 47.2528 14.8C47.2528 16.056 46.8368 17.092 46.0048 17.908C45.1728 18.724 44.1288 19.132 42.8728 19.132C41.6088 19.132 40.5648 18.732 39.7408 17.932C38.9168 17.132 38.5048 16.088 38.5048 14.8ZM40.0648 14.8C40.0648 15.648 40.3328 16.352 40.8688 16.912C41.4048 17.472 42.0728 17.752 42.8728 17.752C43.7368 17.752 44.4208 17.472 44.9248 16.912C45.4368 16.352 45.6928 15.648 45.6928 14.8C45.6928 13.944 45.4208 13.236 44.8768 12.676C44.3328 12.124 43.6648 11.848 42.8728 11.848C42.0648 11.848 41.3928 12.124 40.8568 12.676C40.3288 13.228 40.0648 13.936 40.0648 14.8ZM52.5224 11.98H48.1184V10.6H54.5024V11.62L49.8464 17.62H54.6224V19H47.8784V17.992L52.5224 11.98ZM55.2392 14.8C55.2392 13.576 55.6472 12.548 56.4632 11.716C57.2952 10.884 58.3432 10.468 59.6072 10.468C60.8712 10.468 61.9152 10.868 62.7392 11.668C63.5712 12.476 63.9872 13.52 63.9872 14.8C63.9872 16.056 63.5712 17.092 62.7392 17.908C61.9072 18.724 60.8632 19.132 59.6072 19.132C58.3432 19.132 57.2992 18.732 56.4752 17.932C55.6512 17.132 55.2392 16.088 55.2392 14.8ZM56.7992 14.8C56.7992 15.648 57.0672 16.352 57.6032 16.912C58.1392 17.472 58.8072 17.752 59.6072 17.752C60.4712 17.752 61.1552 17.472 61.6592 16.912C62.1712 16.352 62.4272 15.648 62.4272 14.8C62.4272 13.944 62.1552 13.236 61.6112 12.676C61.0672 12.124 60.3992 11.848 59.6072 11.848C58.7992 11.848 58.1272 12.124 57.5912 12.676C57.0632 13.228 56.7992 13.936 56.7992 14.8ZM72.8713 10.6V19H71.6953L67.0753 13.18V19H65.6953V10.6H66.8713L71.4913 16.444V10.6H72.8713Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="feedback-text">
                    <p>Достоинства:</p>
                    <span>Яркие, не сильно мягкие</span>
                    <p>Недостатки:</p>
                    <span>Не обнаружил</span>
                    <p>Отзыв:</p>
                    <span class="big-feedback">Замечательные, небольшие, красочные лёгкие кубики. ребенку 42 годика,
                        очень понравились, играет с удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально. Замечательные,
                        небольшие, красочные лёгкие кубики. ребенку 42 годика, очень понравились, играет с
                        удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально.Замечательные,
                        небольшие, красочные лёгкие кубики. ребенку 42 годика, очень понравились, играет с
                        удовольствием, удобно
                        брать
                        в ручки. высокую башню конечно не построить, а не большую вполне реально.</span>
                    <div class="big-feedback-el"><a href="javascript:void(0)">Развернуть отзыв</a></div>
                </div>
            </div>
        </div>
        <div class="btn btn-orange">
            <a href="#" class="btn btn-more">
                Показать больше отзывов
            </a>
        </div>
    </div>
</div>

<div class="popup-detail-slider-block">
    <div class="blur-shadow"></div>
    <div class="container">
        <div class="js-pop-slider swiper-container popup-detail-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../../img/detailSlideImg.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/detailSlideImg.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/detailSlideImg.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../../img/detailSlideImg.jpg" alt="">
                </div>
            </div>
            <div class="popup-slider-close-btn">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7677 10.0001L19.6336 2.13384C20.1217 1.64571 20.1217 0.85415 19.6336 0.366338C19.1455 -0.121787 18.3542 -0.121787 17.8661 0.366338L9.99985 8.23227L2.13391 0.366338C1.64578 -0.121787 0.854219 -0.121787 0.366094 0.366338C-0.122031 0.854463 -0.122031 1.64602 0.366094 2.13384L8.23235 10.0001L0.366094 17.8663C-0.122031 18.3545 -0.122031 19.146 0.366094 19.6338C0.610156 19.8779 0.930156 20.0001 1.24984 20.0001C1.56953 20.0001 1.88984 19.8779 2.13391 19.6338L9.99985 11.7679L17.8661 19.6338C18.1102 19.8779 18.4302 20.0001 18.7498 20.0001C19.0695 20.0001 19.3898 19.8779 19.6336 19.6338C20.1217 19.1457 20.1217 18.3541 19.6336 17.8663L11.7677 10.0001Z" fill="#414141" />
                </svg>

            </div>
        </div>
        <div class="slider-arrow prev-main-slide prev-slide">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="44.8462" rx="22.4231" fill="white" />
                <path d="M25 14.9487L19 22.4231L25 29.8974" stroke="#FFCF32" stroke-width="2" />
            </svg>
        </div>
        <div class="slider-arrow next-main-slide next-slide">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="white" />
                <path d="M20 15L26 22.5L20 30" stroke="#FFCF32" stroke-width="2" />
            </svg>
        </div>

    </div>

</div>