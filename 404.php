<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

    <div class="error-page">
        <div class="container">
            <div class="error-page-content">
                <svg width="628" height="580" viewBox="0 0 628 580" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_1_541)">
                        <path d="M408.999 137.381C432.946 155.115 656.005 270.333 531.032 424.557C413.35 569.782 157.969 403.678 140.747 392.637C53.3174 336.583 15.2861 279.868 74.9241 186.843C202.582 21.8874 363.002 110.273 408.999 137.381Z" fill="#FDE7A0"/>
                    </g>
                    <path d="M158.166 344V302H69.1258V270.64L139.126 148H187.286L123.166 260H158.166V218H200.166V260H223.126V302H200.166V344H158.166ZM245.548 246C245.548 214.64 251.241 190.093 262.628 172.36C274.201 154.627 291.094 145.76 313.308 145.76C335.521 145.76 352.321 154.627 363.708 172.36C375.281 190.093 381.068 214.64 381.068 246C381.068 277.36 375.374 301.907 363.988 319.64C352.788 337.373 336.081 346.24 313.868 346.24C291.468 346.24 274.481 337.373 262.908 319.64C251.334 301.72 245.548 277.173 245.548 246ZM290.348 246C290.348 286.693 298.188 307.04 313.868 307.04C321.894 307.04 327.588 302.56 330.948 293.6C334.494 284.453 336.268 268.587 336.268 246C336.268 223.413 334.494 207.64 330.948 198.68C327.401 189.533 321.521 184.96 313.308 184.96C305.281 184.96 299.401 189.627 295.668 198.96C292.121 208.293 290.348 223.973 290.348 246ZM489.692 344V302H400.652V270.64L470.652 148H518.812L454.692 260H489.692V218H531.692V260H554.652V302H531.692V344H489.692Z" fill="#BF8DBA"/>
                    <path d="M55.2 413.2H45.4V410H68.4V413.2H58.6V438H55.2V413.2ZM67.7072 423.8L66.8672 421.24C68.6539 420.147 70.6539 419.6 72.8672 419.6C75.2939 419.6 77.0539 420.2 78.1472 421.4C79.2405 422.6 79.7872 424.453 79.7872 426.96V438H76.7472V435.68C75.3339 437.413 73.4139 438.28 70.9872 438.28C69.3339 438.28 68.0005 437.787 66.9872 436.8C65.9739 435.787 65.4672 434.427 65.4672 432.72C65.4672 430.96 66.0939 429.573 67.3472 428.56C68.6005 427.52 70.2405 427 72.2672 427C74.1605 427 75.6539 427.387 76.7472 428.16C76.7472 426.133 76.4672 424.68 75.9072 423.8C75.3472 422.92 74.2672 422.48 72.6672 422.48C71.0405 422.48 69.3872 422.92 67.7072 423.8ZM72.1072 435.4C73.8939 435.4 75.4405 434.627 76.7472 433.08V430.8C75.6272 430 74.2805 429.6 72.7072 429.6C71.6139 429.6 70.6939 429.867 69.9472 430.4C69.2272 430.907 68.8672 431.627 68.8672 432.56C68.8672 433.44 69.1472 434.133 69.7072 434.64C70.2939 435.147 71.0939 435.4 72.1072 435.4ZM96.7056 420H100.906L93.0256 428.6L101.666 438H97.2256L89.1056 428.8L96.7056 420ZM88.3456 438H85.1456V420H88.3456V438ZM105.531 435.76C103.771 433.947 102.891 431.693 102.891 429C102.891 426.28 103.771 424.04 105.531 422.28C107.318 420.493 109.638 419.6 112.491 419.6C115.344 419.6 117.651 420.493 119.411 422.28C121.198 424.04 122.091 426.28 122.091 429C122.091 431.72 121.198 433.973 119.411 435.76C117.651 437.52 115.344 438.4 112.491 438.4C109.664 438.4 107.344 437.52 105.531 435.76ZM108.051 424.4C106.878 425.573 106.291 427.107 106.291 429C106.291 430.893 106.864 432.427 108.011 433.6C109.184 434.8 110.678 435.4 112.491 435.4C114.304 435.4 115.784 434.813 116.931 433.64C118.104 432.44 118.691 430.893 118.691 429C118.691 427.16 118.104 425.627 116.931 424.4C115.784 423.2 114.304 422.6 112.491 422.6C110.678 422.6 109.198 423.2 108.051 424.4ZM140.308 424.6L129.908 438H126.708V420H129.908V433.4L140.308 420H143.508V438H140.308V424.6ZM129.268 410.8H132.268C132.428 412.907 133.455 413.96 135.348 413.96C137.135 413.96 138.108 412.907 138.268 410.8H141.268C141.268 412.427 140.708 413.773 139.588 414.84C138.495 415.88 137.081 416.4 135.348 416.4C133.455 416.4 131.961 415.893 130.868 414.88C129.801 413.84 129.268 412.48 129.268 410.8ZM172.15 433.08L173.67 435.4C172.123 437.4 169.816 438.4 166.75 438.4C163.87 438.4 161.536 437.547 159.75 435.84C157.99 434.133 157.11 431.853 157.11 429C157.11 426.36 157.976 424.133 159.71 422.32C161.443 420.507 163.616 419.6 166.23 419.6C169.376 419.6 171.736 420.387 173.31 421.96L171.83 424.48C170.443 423.227 168.723 422.6 166.67 422.6C164.99 422.6 163.536 423.213 162.31 424.44C161.11 425.64 160.51 427.16 160.51 429C160.51 430.947 161.123 432.493 162.35 433.64C163.603 434.813 165.15 435.4 166.99 435.4C169.07 435.4 170.79 434.627 172.15 433.08ZM181.927 423.2H175.327V420H191.727V423.2H185.127V438H181.927V423.2ZM198.424 446H195.224V420H198.424V422.12C199.064 421.373 199.944 420.773 201.064 420.32C202.184 419.84 203.344 419.6 204.544 419.6C207.104 419.6 209.117 420.453 210.584 422.16C212.104 423.84 212.864 426.027 212.864 428.72C212.864 431.467 211.997 433.773 210.264 435.64C208.557 437.48 206.304 438.4 203.504 438.4C201.344 438.4 199.65 437.987 198.424 437.16V446ZM203.624 422.6C201.49 422.6 199.757 423.427 198.424 425.08V434C199.837 434.933 201.437 435.4 203.224 435.4C205.117 435.4 206.624 434.8 207.744 433.6C208.89 432.373 209.464 430.787 209.464 428.84C209.464 426.947 208.944 425.44 207.904 424.32C206.864 423.173 205.437 422.6 203.624 422.6ZM218.41 423.8L217.57 421.24C219.357 420.147 221.357 419.6 223.57 419.6C225.997 419.6 227.757 420.2 228.85 421.4C229.944 422.6 230.49 424.453 230.49 426.96V438H227.45V435.68C226.037 437.413 224.117 438.28 221.69 438.28C220.037 438.28 218.704 437.787 217.69 436.8C216.677 435.787 216.17 434.427 216.17 432.72C216.17 430.96 216.797 429.573 218.05 428.56C219.304 427.52 220.944 427 222.97 427C224.864 427 226.357 427.387 227.45 428.16C227.45 426.133 227.17 424.68 226.61 423.8C226.05 422.92 224.97 422.48 223.37 422.48C221.744 422.48 220.09 422.92 218.41 423.8ZM222.81 435.4C224.597 435.4 226.144 434.627 227.45 433.08V430.8C226.33 430 224.984 429.6 223.41 429.6C222.317 429.6 221.397 429.867 220.65 430.4C219.93 430.907 219.57 431.627 219.57 432.56C219.57 433.44 219.85 434.133 220.41 434.64C220.997 435.147 221.797 435.4 222.81 435.4ZM252.249 438H249.049V430.4H239.049V438H235.849V420H239.049V427.4H249.049V420H252.249V438ZM271.636 424.6L261.236 438H258.036V420H261.236V433.4L271.636 420H274.836V438H271.636V424.6ZM296.653 438H280.653V420H283.853V435H293.453V420H296.653V435H299.653V442.4H296.653V438ZM308.914 438H303.114V420H306.314V425.4H309.274C311.728 425.4 313.528 425.96 314.674 427.08C315.821 428.173 316.394 429.68 316.394 431.6C316.394 433.413 315.794 434.933 314.594 436.16C313.448 437.387 311.554 438 308.914 438ZM323.034 438H319.834V420H323.034V438ZM308.674 428.4H306.314V435H308.634C310.154 435 311.261 434.733 311.954 434.2C312.648 433.667 312.994 432.84 312.994 431.72C312.994 429.507 311.554 428.4 308.674 428.4ZM354.163 438H350.963V430.4H340.963V438H337.763V420H340.963V427.4H350.963V420H354.163V438ZM374.15 433.52L375.15 436.04C373.417 437.613 371.164 438.4 368.39 438.4C365.457 438.4 363.124 437.547 361.39 435.84C359.63 434.133 358.75 431.853 358.75 429C358.75 426.307 359.577 424.067 361.23 422.28C362.857 420.493 365.124 419.6 368.03 419.6C370.43 419.6 372.417 420.373 373.99 421.92C375.59 423.44 376.39 425.413 376.39 427.84C376.39 428.613 376.324 429.333 376.19 430H362.35C362.484 431.68 363.11 433 364.23 433.96C365.377 434.92 366.844 435.4 368.63 435.4C370.977 435.4 372.817 434.773 374.15 433.52ZM367.87 422.6C366.297 422.6 364.99 423.04 363.95 423.92C362.937 424.8 362.337 425.96 362.15 427.4H373.07C372.99 425.907 372.484 424.733 371.55 423.88C370.644 423.027 369.417 422.6 367.87 422.6ZM403.556 433.08L405.076 435.4C403.529 437.4 401.223 438.4 398.156 438.4C395.276 438.4 392.943 437.547 391.156 435.84C389.396 434.133 388.516 431.853 388.516 429C388.516 426.36 389.383 424.133 391.116 422.32C392.849 420.507 395.023 419.6 397.636 419.6C400.783 419.6 403.143 420.387 404.716 421.96L403.236 424.48C401.849 423.227 400.129 422.6 398.076 422.6C396.396 422.6 394.943 423.213 393.716 424.44C392.516 425.64 391.916 427.16 391.916 429C391.916 430.947 392.529 432.493 393.756 433.64C395.009 434.813 396.556 435.4 398.396 435.4C400.476 435.4 402.196 434.627 403.556 433.08ZM421.616 420H425.256L418.056 438C416.749 441.173 415.616 443.28 414.656 444.32C413.642 445.44 412.482 446 411.176 446C410.002 446 408.869 445.627 407.776 444.88L408.816 442.44C409.669 442.84 410.336 443.04 410.816 443.04C411.562 443.04 412.229 442.72 412.816 442.08C413.429 441.44 414.042 440.4 414.656 438.96L415.056 438L406.416 420H410.256L415.536 431.44C415.642 431.627 416.002 432.533 416.616 434.16C416.856 433.28 417.136 432.36 417.456 431.4L421.616 420ZM451.344 438H428.544V420H431.744V435H438.344V420H441.544V435H448.144V420H451.344V435H454.344V442.4H451.344V438ZM472.041 433.52L473.041 436.04C471.308 437.613 469.054 438.4 466.281 438.4C463.348 438.4 461.014 437.547 459.281 435.84C457.521 434.133 456.641 431.853 456.641 429C456.641 426.307 457.468 424.067 459.121 422.28C460.748 420.493 463.014 419.6 465.921 419.6C468.321 419.6 470.308 420.373 471.881 421.92C473.481 423.44 474.281 425.413 474.281 427.84C474.281 428.613 474.214 429.333 474.081 430H460.241C460.374 431.68 461.001 433 462.121 433.96C463.268 434.92 464.734 435.4 466.521 435.4C468.868 435.4 470.708 434.773 472.041 433.52ZM465.761 422.6C464.188 422.6 462.881 423.04 461.841 423.92C460.828 424.8 460.228 425.96 460.041 427.4H470.961C470.881 425.907 470.374 424.733 469.441 423.88C468.534 423.027 467.308 422.6 465.761 422.6ZM492.228 433.08L493.748 435.4C492.201 437.4 489.894 438.4 486.828 438.4C483.948 438.4 481.614 437.547 479.828 435.84C478.068 434.133 477.188 431.853 477.188 429C477.188 426.36 478.054 424.133 479.788 422.32C481.521 420.507 483.694 419.6 486.308 419.6C489.454 419.6 491.814 420.387 493.388 421.96L491.908 424.48C490.521 423.227 488.801 422.6 486.748 422.6C485.068 422.6 483.614 423.213 482.388 424.44C481.188 425.64 480.588 427.16 480.588 429C480.588 430.947 481.201 432.493 482.428 433.64C483.681 434.813 485.228 435.4 487.068 435.4C489.148 435.4 490.868 434.627 492.228 433.08ZM502.005 423.2H495.405V420H511.805V423.2H505.205V438H502.005V423.2ZM515.302 438V420C515.435 420 515.622 420 515.862 420C516.102 419.973 516.449 419.96 516.902 419.96C517.355 419.933 517.769 419.92 518.142 419.92C520.115 419.867 521.342 419.84 521.822 419.84C526.995 419.84 529.582 421.387 529.582 424.48C529.582 425.547 529.249 426.467 528.582 427.24C527.915 427.987 527.049 428.44 525.982 428.6V428.68C528.782 429.187 530.182 430.6 530.182 432.92C530.182 436.413 527.422 438.16 521.902 438.16C521.635 438.16 520.462 438.133 518.382 438.08C517.982 438.08 517.542 438.067 517.062 438.04C516.582 438.04 516.209 438.027 515.942 438C515.675 438 515.462 438 515.302 438ZM522.342 429.92H518.502V435.44C520.422 435.52 521.649 435.56 522.182 435.56C525.249 435.56 526.782 434.6 526.782 432.68C526.782 430.84 525.302 429.92 522.342 429.92ZM522.062 422.44C521.289 422.44 520.102 422.48 518.502 422.56V427.92H522.542C523.635 427.92 524.515 427.667 525.182 427.16C525.849 426.653 526.182 425.973 526.182 425.12C526.182 423.333 524.809 422.44 522.062 422.44ZM547.788 420H551.428L544.228 438C542.921 441.173 541.788 443.28 540.828 444.32C539.814 445.44 538.654 446 537.348 446C536.174 446 535.041 445.627 533.948 444.88L534.988 442.44C535.841 442.84 536.508 443.04 536.988 443.04C537.734 443.04 538.401 442.72 538.988 442.08C539.601 441.44 540.214 440.4 540.828 438.96L541.228 438L532.588 420H536.428L541.708 431.44C541.814 431.627 542.174 432.533 542.788 434.16C543.028 433.28 543.308 432.36 543.628 431.4L547.788 420ZM568.213 433.52L569.213 436.04C567.479 437.613 565.226 438.4 562.453 438.4C559.519 438.4 557.186 437.547 555.453 435.84C553.693 434.133 552.813 431.853 552.813 429C552.813 426.307 553.639 424.067 555.293 422.28C556.919 420.493 559.186 419.6 562.093 419.6C564.493 419.6 566.479 420.373 568.053 421.92C569.653 423.44 570.453 425.413 570.453 427.84C570.453 428.613 570.386 429.333 570.253 430H556.413C556.546 431.68 557.173 433 558.293 433.96C559.439 434.92 560.906 435.4 562.693 435.4C565.039 435.4 566.879 434.773 568.213 433.52ZM561.933 422.6C560.359 422.6 559.053 423.04 558.013 423.92C556.999 424.8 556.399 425.96 556.213 427.4H567.133C567.053 425.907 566.546 424.733 565.613 423.88C564.706 423.027 563.479 422.6 561.933 422.6ZM578.763 423.2H572.163V420H588.563V423.2H581.963V438H578.763V423.2Z" fill="#BF8DBA"/>
                    <defs>
                        <filter id="filter0_d_1_541" x="21.0546" y="68.3852" width="572.76" height="444.409" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="12.5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_541"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_541" result="shape"/>
                        </filter>
                    </defs>
                </svg>

            </div>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>