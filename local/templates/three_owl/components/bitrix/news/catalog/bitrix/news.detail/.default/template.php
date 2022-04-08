<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<div class="standart-block detail-block">
    <div class="container">
        <div class="katalog-title">
            <h2>
                <?=$arResult["NAME"]?>
            </h2>
        </div>
    </div>
</div>

<div class="detail-sliders">
    <div class="container">
        <div class="detail-first-block">
            <div class="detail-two-slider">
                <div class="smallest-slider">
                    <div class="smallest-slider-arrows small-prev">
                        <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22" r="21.5" stroke="#C8C8C8" />
                            <path
                                    d="M22.7071 12.2929C22.3166 11.9024 21.6834 11.9024 21.2929 12.2929L14.9289 18.6569C14.5384 19.0474 14.5384 19.6805 14.9289 20.0711C15.3195 20.4616 15.9526 20.4616 16.3431 20.0711L22 14.4142L27.6569 20.0711C28.0474 20.4616 28.6805 20.4616 29.0711 20.0711C29.4616 19.6805 29.4616 19.0474 29.0711 18.6569L22.7071 12.2929ZM23 31L23 13L21 13L21 31L23 31Z"
                                    fill="#C8C8C8" />
                        </svg>
                    </div>
                    <div class="js-smallest-detail-slider swiper-container">
                        <div class="swiper-paginationn swiper-wrapper"></div>
                    </div>
                    <div class="smallest-slider-arrows small-next">
                        <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22" r="21.5" stroke="#C8C8C8" />
                            <path
                                    d="M21.7929 30.7071C22.1834 31.0976 22.8166 31.0976 23.2071 30.7071L29.5711 24.3431C29.9616 23.9526 29.9616 23.3195 29.5711 22.9289C29.1805 22.5384 28.5474 22.5384 28.1569 22.9289L22.5 28.5858L16.8431 22.9289C16.4526 22.5384 15.8195 22.5384 15.4289 22.9289C15.0384 23.3195 15.0384 23.9526 15.4289 24.3431L21.7929 30.7071ZM21.5 12V30H23.5V12H21.5Z"
                                    fill="#C8C8C8" />
                        </svg>

                    </div>
                </div>
                <div class="bigest-detail-slider js-bigest-detail-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo):?>

                            <div class="swiper-slide">
                                <img src="<?echo $photo;?>" alt="">
                            </div>
                        <?endforeach;?>

                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../../img/kubeHouses.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <video src="" style="display: none;"></video>
                            <img src="../../img/videoImg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-product-info">
                <div class="three-hundred-bucks">
                    <p>
                        <?=$arResult['PROPERTIES']['PRICE']['VALUE']?>
                    </p>
                </div>
                <div class="buying-links">
                    <a href="#">
                        Купить онлайн
                    </a>
                    <div class="buying-links-item">
                        <?foreach ($arResult['PROPERTIES']['SHOPS_LIST']['VALUE'] as $key=>$shop):?>
                        <a href="<?=$shop['LINK']?>" target="_blank">
                            <img src="<?=$shop['IMAGE']?>" alt="<?=$shop['NAME']?>">
                        </a>
                        <?endforeach;?>
                    </div>
                    <a href="<?=$arResult['PROPERTIES']['BUY_SINGLE_LINK']['VALUE']?>" target="_blank">
                        Купить в рознице
                    </a>
                </div>
                <div class="detail-social-links">
                    <p>
                        Поделиться:
                    </p>
                    <div class="social-link">
                        <a href="#" class="facebook">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                <g clip-path="url(#clip0_1237_34518)">
                                    <path
                                            d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z"
                                            fill="#686868" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34518">
                                        <rect width="17" height="17" fill="white"
                                              transform="translate(9.00006 9.00012)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#475993" />
                                <g clip-path="url(#clip0_1237_34593)">
                                    <path
                                            d="M20.3313 11.8228H21.8832V9.11983C21.6155 9.083 20.6946 9.00012 19.6222 9.00012C17.3846 9.00012 15.8518 10.4076 15.8518 12.9944V15.3751H13.3825V18.3969H15.8518V26.0001H18.8792V18.3976H21.2485L21.6247 15.3758H18.8785V13.294C18.8792 12.4207 19.1143 11.8228 20.3313 11.8228Z"
                                            fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34593">
                                        <rect width="17" height="17" fill="white"
                                              transform="translate(9.00006 9.00012)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="inst">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                <g clip-path="url(#clip0_1237_34512)">
                                    <path
                                            d="M17.5029 13.1353C15.0924 13.1353 13.141 15.0888 13.141 17.4972C13.141 19.9076 15.0945 21.8591 17.5029 21.8591C19.9133 21.8591 21.8648 19.9055 21.8648 17.4972C21.8648 15.0867 19.9112 13.1353 17.5029 13.1353ZM17.5029 20.3284C15.9382 20.3284 14.6717 19.0612 14.6717 17.4972C14.6717 15.9332 15.9389 14.666 17.5029 14.666C19.0669 14.666 20.3341 15.9332 20.3341 17.4972C20.3348 19.0612 19.0676 20.3284 17.5029 20.3284Z"
                                            fill="#686868" />
                                    <path
                                            d="M21.0048 9.05413C19.4408 8.98117 15.5669 8.98471 14.0015 9.05413C12.6259 9.11859 11.4125 9.4508 10.4343 10.429C8.79946 12.0638 9.00842 14.2668 9.00842 17.4975C9.00842 20.804 8.82425 22.9559 10.4343 24.5659C12.0755 26.2064 14.3103 25.9918 17.5028 25.9918C20.7781 25.9918 21.9086 25.9939 23.0667 25.5455C24.6413 24.9343 25.8299 23.5268 25.9461 20.9988C26.0198 19.434 26.0155 15.5609 25.9461 13.9955C25.8058 11.0113 24.2043 9.20146 21.0048 9.05413ZM23.4804 23.4843C22.4087 24.556 20.9219 24.4604 17.4822 24.4604C13.9405 24.4604 12.5203 24.5128 11.484 23.4737C10.2905 22.2858 10.5065 20.3783 10.5065 17.4861C10.5065 13.5726 10.1049 10.7541 14.0326 10.553C14.935 10.5211 15.2007 10.5105 17.4723 10.5105L17.5042 10.5317C21.2789 10.5317 24.2404 10.1365 24.4182 14.0635C24.4586 14.9595 24.4678 15.2287 24.4678 17.4968C24.4671 20.9973 24.5337 22.426 23.4804 23.4843Z"
                                            fill="#686868" />
                                    <path
                                            d="M22.0377 13.9826C22.6007 13.9826 23.057 13.5262 23.057 12.9633C23.057 12.4003 22.6007 11.944 22.0377 11.944C21.4748 11.944 21.0184 12.4003 21.0184 12.9633C21.0184 13.5262 21.4748 13.9826 22.0377 13.9826Z"
                                            fill="#686868" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1237_34512">
                                        <rect width="17" height="17" fill="white"
                                              transform="translate(9 9.00012)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                <g clip-path="url(#clip0_1237_34597)">
                                    <path
                                            d="M17.5029 13.1351C15.0924 13.1351 13.141 15.0887 13.141 17.4971C13.141 19.9075 15.0945 21.859 17.5029 21.859C19.9133 21.859 21.8648 19.9054 21.8648 17.4971C21.8648 15.0866 19.9112 13.1351 17.5029 13.1351ZM17.5029 20.3283C15.9382 20.3283 14.6717 19.0611 14.6717 17.4971C14.6717 15.933 15.9389 14.6658 17.5029 14.6658C19.0669 14.6658 20.3341 15.933 20.3341 17.4971C20.3348 19.0611 19.0676 20.3283 17.5029 20.3283Z"
                                            fill="#686868" />
                                    <path
                                            d="M21.0048 9.05401C19.4408 8.98105 15.5669 8.98459 14.0015 9.05401C12.6259 9.11847 11.4125 9.45068 10.4343 10.4289C8.79946 12.0637 9.00842 14.2666 9.00842 17.4973C9.00842 20.8038 8.82425 22.9558 10.4343 24.5658C12.0755 26.2063 14.3103 25.9917 17.5028 25.9917C20.7781 25.9917 21.9086 25.9938 23.0667 25.5454C24.6413 24.9341 25.8299 23.5267 25.9461 20.9986C26.0198 19.4339 26.0155 15.5608 25.9461 13.9953C25.8058 11.0111 24.2043 9.20134 21.0048 9.05401ZM23.4804 23.4842C22.4087 24.5559 20.9219 24.4603 17.4822 24.4603C13.9405 24.4603 12.5203 24.5127 11.484 23.4736C10.2905 22.2857 10.5065 20.3781 10.5065 17.486C10.5065 13.5725 10.1049 10.754 14.0326 10.5528C14.935 10.521 15.2007 10.5103 17.4723 10.5103L17.5042 10.5316C21.2789 10.5316 24.2404 10.1363 24.4182 14.0633C24.4586 14.9594 24.4678 15.2286 24.4678 17.4966C24.4671 20.9972 24.5337 22.4259 23.4804 23.4842Z"
                                            fill="#686868" />
                                    <path
                                            d="M22.0377 13.9824C22.6007 13.9824 23.057 13.5261 23.057 12.9631C23.057 12.4002 22.6007 11.9438 22.0377 11.9438C21.4748 11.9438 21.0184 12.4002 21.0184 12.9631C21.0184 13.5261 21.4748 13.9824 22.0377 13.9824Z"
                                            fill="#686868" />
                                </g>
                                <circle cx="17.5" cy="17.5" r="17.5" fill="url(#paint0_linear_1237_34597)" />
                                <g clip-path="url(#clip1_1237_34597)">
                                    <path
                                            d="M17.5028 13.3064C15.1868 13.3064 13.3119 15.1834 13.3119 17.4973C13.3119 19.8132 15.1889 21.6881 17.5028 21.6881C19.8187 21.6881 21.6936 19.8112 21.6936 17.4973C21.6936 15.1813 19.8167 13.3064 17.5028 13.3064ZM17.5028 20.2174C15.9994 20.2174 14.7826 18.9999 14.7826 17.4973C14.7826 15.9946 16.0001 14.7771 17.5028 14.7771C19.0054 14.7771 20.223 15.9946 20.223 17.4973C20.2236 18.9999 19.0061 20.2174 17.5028 20.2174Z"
                                            fill="white" />
                                    <path
                                            d="M20.8673 9.38529C19.3646 9.31519 15.6427 9.31859 14.1387 9.38529C12.817 9.44722 11.6512 9.7664 10.7114 10.7062C9.14066 12.277 9.34142 14.3935 9.34142 17.4975C9.34142 20.6743 9.16448 22.7419 10.7114 24.2888C12.2882 25.8649 14.4354 25.6587 17.5026 25.6587C20.6495 25.6587 21.7357 25.6608 22.8484 25.23C24.3613 24.6427 25.5033 23.2904 25.6149 20.8615C25.6856 19.3582 25.6816 15.6369 25.6149 14.1328C25.4801 11.2657 23.9414 9.52684 20.8673 9.38529ZM23.2459 23.2496C22.2162 24.2793 20.7877 24.1874 17.4829 24.1874C14.0801 24.1874 12.7156 24.2377 11.72 23.2394C10.5732 22.0981 10.7808 20.2653 10.7808 17.4866C10.7808 13.7266 10.3949 11.0186 14.1686 10.8253C15.0356 10.7947 15.2908 10.7845 17.4734 10.7845L17.504 10.8049C21.1307 10.8049 23.9761 10.4252 24.1469 14.1982C24.1857 15.0591 24.1945 15.3177 24.1945 17.4968C24.1939 20.8601 24.2578 22.2328 23.2459 23.2496Z"
                                            fill="white" />
                                    <path
                                            d="M21.8598 14.1204C22.4006 14.1204 22.8391 13.6819 22.8391 13.1411C22.8391 12.6002 22.4006 12.1617 21.8598 12.1617C21.3189 12.1617 20.8805 12.6002 20.8805 13.1411C20.8805 13.6819 21.3189 14.1204 21.8598 14.1204Z"
                                            fill="white" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1237_34597" x1="5.25" y1="29.6667"
                                                    x2="30.0833" y2="5.66675" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E09B3D" />
                                        <stop offset="0.3" stop-color="#C74C4D" />
                                        <stop offset="0.6" stop-color="#C21975" />
                                        <stop offset="1" stop-color="#7024C4" />
                                    </linearGradient>
                                    <clipPath id="clip0_1237_34597">
                                        <rect width="17" height="17" fill="white" transform="translate(9 9)" />
                                    </clipPath>
                                    <clipPath id="clip1_1237_34597">
                                        <rect width="16.3333" height="16.3333" fill="white"
                                              transform="translate(9.33334 9.33337)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="vk">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17" stroke="#686868" />
                                <path
                                        d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z"
                                        fill="#686868" />
                            </svg>
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#116CB7" />
                                <path
                                        d="M23.8029 19.0047C23.478 18.5964 23.5709 18.4147 23.8029 18.0497C23.807 18.0455 26.4887 14.3572 26.7649 13.1064L26.7666 13.1055C26.9039 12.6497 26.7666 12.3147 26.1027 12.3147H23.9058C23.3466 12.3147 23.0887 12.6022 22.9506 12.9239C22.9506 12.9239 21.832 15.5889 20.2497 17.3164C19.739 17.8155 19.5029 17.9755 19.2241 17.9755C19.0868 17.9755 18.8733 17.8155 18.8733 17.3597V13.1055C18.8733 12.5589 18.7167 12.3147 18.2538 12.3147H14.7994C14.4486 12.3147 14.2401 12.5697 14.2401 12.8072C14.2401 13.3255 15.0313 13.4447 15.1133 14.903V18.0672C15.1133 18.7605 14.9869 18.888 14.7065 18.888C13.9597 18.888 12.1471 16.2122 11.0729 13.1497C10.8561 12.5555 10.6443 12.3155 10.0808 12.3155H7.88311C7.25603 12.3155 7.12961 12.603 7.12961 12.9247C7.12961 13.493 7.87641 16.3189 10.6024 20.0522C12.4192 22.6005 14.9777 23.9814 17.3052 23.9814C18.7042 23.9814 18.875 23.6747 18.875 23.1472C18.875 20.7122 18.7486 20.4822 19.4493 20.4822C19.7741 20.4822 20.3334 20.6422 21.6395 21.8714C23.1322 23.3289 23.3775 23.9814 24.2131 23.9814H26.41C27.0362 23.9814 27.3535 23.6747 27.171 23.0697C26.7532 21.7972 23.9301 19.1797 23.8029 19.0047Z"
                                        fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="characteristic-demo">
                    <ul>
                        <li>
                            <p>
                                Артикул
                            </p>
                            <p>
                                <?=$arResult['PROPERTIES']['ARTIKUL']['VALUE']?>
                            </p>
                        </li>
                        <li>
                            <p>
                                Размер игрушки
                            </p>
                            <p>
                                <?=$arResult['PROPERTIES']['SIZE_TOY']['VALUE']?>
                            </p>
                        </li>
                        <li>
                            <p>
                                Размер упаковки
                            </p>
                            <p>
                                <?=$arResult['PROPERTIES']['SIZE_PACKET']['VALUE']?>
                            </p>
                        </li>
                    </ul>
                    <a href="#chatacteristics">
                        Все характеристики
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout
    document.ready(function(){
        if(document.querySelector(".swiper-paginationn")){
            let swiperPaginations = document.querySelectorAll('.swiper-paginationn span');
            swiperPaginations.foreach(function(item){
                item.style.background = "url('<?echo $photo;?>')"
            })
        }
    })
</script>



<div class="container">
    <div class="detail-small-title">
        <p>
            Фото и видео покупателей
        </p>
    </div>
    <div class="small-container">
        <div class="detail-photo-slider js-detail-photo-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="javascript:void(0)">
                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                        </svg>

                    </a>
                    <img src="../../img/smalkubs.jpg" alt="">

                </div>
                <div class="swiper-slide video" style="display: none!important;">
                    <!-- слайд для видео -->
                    <a href="javascript:void(0)">
                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                        </svg>

                    </a>
                    <video>
                        <source src="URL">
                    </video>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:void(0)">
                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                        </svg>

                    </a>
                    <img src="../../img/smalkubs.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <a href="javascript:void(0)">
                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                        </svg>

                    </a>
                    <img src="../../img/smalkubs.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <a href="javascript:void(0)">
                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 17L0.749998 33.4545L0.75 0.545516L30 17Z" fill="#E5F6FF" />
                        </svg>

                    </a>
                    <img src="../../img/smalkubs.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <a href="javascript:void(0)">
                        <p>
                            +8
                        </p>

                    </a>
                    <img src="../../img/highkubs.jpg" alt="">

                </div>
            </div>
        </div>

        <div class="detail-desc">
            <div class="detail-small-title">
                <p>
                    Описание
                </p>
            </div>
            <div class="detail-desc-text">
                <?=$arResult['PREVIEW_TEXT']?>
            </div>
        </div>

        <div class="detail-small-title">
            <p id="chatacteristics">
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
                        <?=$arResult['PROPERTIES']['ARTIKUL']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Размер игрушки
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['SIZE_TOY']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Размер упаковки
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['SIZE_PACKET']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Страна изготовитель
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['COUNTRY']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Пол ребенка
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['GENDER']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Развивающие функции
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['DEV_FUNCTIONS']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Возраст ребенка
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['AGE']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Развитие навыков
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['DEV_SKILLS']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Количество элементов, шт
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['PART_COUNT']['VALUE']?>
                    </p>
                </li>
                <li>
                    <p>
                        Материал
                    </p>
                    <p>
                        <?=$arResult['PROPERTIES']['MATERIAL']['VALUE']?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="important-sections standart-block ">
        <div class="container">
            <div class="detail-small-title watch-also">
                <p>
                    Смотрите так же
                </p>
            </div>
            <div class="js-second-mini-slider smaller-slider swiper-container second-mini-slider detail">
                <div class="swiper-wrapper">
                    <?foreach ($arResult['PROPERTIES']['WATCH_ALSO']['VALUE'] as $key=>$relProduct):?>
                    <div class="swiper-slide">
                        <img src="<?=$relProduct['IMAGE']?>" alt="">
                        <span>
                                Артикул: <?=$relProduct['ARTIKUL']?>
                            </span>
                        <p>
                            <?=$relProduct['NAME']?>
                        </p>
                        <a href="<?=$relProduct['LINK']?>" target="_blank"></a>
                    </div>
                    <?endforeach;?>
                </div>
                <div class="swiper-pagination detail-pag"></div>
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
            </div>
        </div>
    </div>
</div>
