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

/* echo "<pre>";
print_r($arResult["ITEMS"]);
echo "</pre>"; */
?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="feedback">
        <div class="feedback-info">
                    <div class="feedback-rating">
                        <svg width="80" height="16" viewBox="0 0 80 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M8 0L10.0314 5.20404L15.6085 5.52786L11.2869 9.06796L12.7023 14.4721L8 11.456L3.29772 14.4721L4.71315 9.06796L0.391548 5.52786L5.96861 5.20404L8 0Z"
                                    fill="#FFD521"/>
                            <path
                                    d="M24 0L26.0314 5.20404L31.6085 5.52786L27.2869 9.06796L28.7023 14.4721L24 11.456L19.2977 14.4721L20.7131 9.06796L16.3915 5.52786L21.9686 5.20404L24 0Z"
                                    fill="#FFD521"/>
                            <path
                                    d="M40 0L42.0314 5.20404L47.6085 5.52786L43.2869 9.06796L44.7023 14.4721L40 11.456L35.2977 14.4721L36.7131 9.06796L32.3915 5.52786L37.9686 5.20404L40 0Z"
                                    fill="#FFD521"/>
                            <path
                                    d="M56 0L58.0314 5.20404L63.6085 5.52786L59.2869 9.06796L60.7023 14.4721L56 11.456L51.2977 14.4721L52.7131 9.06796L48.3915 5.52786L53.9686 5.20404L56 0Z"
                                    fill="#FFD521"/>
                            <path
                                    d="M72 0L74.0314 5.20404L79.6085 5.52786L75.2869 9.06796L76.7023 14.4721L72 11.456L67.2977 14.4721L68.7131 9.06796L64.3915 5.52786L69.9686 5.20404L72 0Z"
                                    fill="#FFD521"/>
                            <g clip-path="url(#clip0_1292_38207)">
                                <path
                                        d="M72 0.687519L73.7985 5.29494L73.8568 5.44432L74.0169 5.45362L78.9546 5.74032L75.1284 8.87457L75.0044 8.97618L75.045 9.1313L76.2982 13.9159L72.135 11.2456L72 11.159L71.865 11.2456L67.7018 13.9159L68.955 9.1313L68.9956 8.97618L68.8716 8.87457L65.0454 5.74032L69.9831 5.45362L70.1432 5.44432L70.2015 5.29494L72 0.687519Z"
                                        fill="white" stroke="#FFD521" stroke-width="0.5"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1292_38207">
                                    <rect width="16" height="15" fill="white" transform="translate(64)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="feedback-author">
                        <p>
                             <?=$arItem['PREVIEW_TEXT']?>
                        </p>
                    </div>
                    <div class="feedback-date">
                        <p>
                            <?=$arItem['DISPLAY_ACTIVE_FROM']?> 
                        </p>
                    </div>
                    <div class="feedback-img">

                    </div>
        </div>
        <div class="feedback-text">
                    <p><?=$arItem['PROPERTIES']['BENEFITS']['NAME']?>:</p>
                    <span><?=$arItem['PROPERTIES']['BENEFITS']['VALUE']?></span>
                    <p><?=$arItem['PROPERTIES']['DRAWBACKS']['NAME']?>:</p>
                    <span><?=$arItem['PROPERTIES']['DRAWBACKS']['VALUE']?></span>
                    <p>Отзыв:</p>
                    <span><?=$arItem['DETAIL_TEXT']?></span>
        </div>

    </div>

<? endforeach; ?>
