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
<content-data>
    <div class="content">
        <script>
            window.addEventListener('load', function () {
                document.querySelector('.main-img').classList.add('active');
            })
        </script>

        <div class="section-top">
            <div class="top-bg">
                <div class="container">
                    <div class="main-img">
                        <img class="main-img-inner" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">

                    </div>
                </div>
            </div>
        </div>

        <div class="section-product" id="offerPage">
            <div class="container">
                <div class="product-desc">
                    <div class="df-text-main-16px"><div class="offer-terms bordr-btm">
                            <div class="offers-block">
                                <h1 class="row-inline"><span class="nowrp" style="box-sizing: inherit;"><?=$arResult["NAME"]?></span></h1>
                                <div class="offer-terms bordr-btm" style="box-sizing: inherit; padding-bottom: 40px; color: #222222; font-family: HyundaiSans, Hevetica, Arial, sans-serif; font-size: 13px;">
                                    <div class="offers-block" style="box-sizing: inherit; margin: 0px auto; width: 940px;">
                                        <div class="row-inline" style="box-sizing: inherit;">
                                            <p class="offer-terms__text" style="box-sizing: inherit; margin: 0px; padding: 0px; color: #404040; font-family: Arial, AppleGothic, sans-serif, Helvetica; font-size: 16px; line-height: 1.625;">
                                                <?echo $arResult["DETAIL_TEXT"];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- additional terms as footer --> <!-- additional terms as footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</content-data>
