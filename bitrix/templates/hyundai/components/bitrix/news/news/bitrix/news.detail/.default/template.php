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
        <section class="back">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/news/" class="df-back-link">
                            Все новости
                            <svg>
                                <use xlink:href="#back-link"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-content">
            <?if($arResult["DETAIL_PICTURE"]["SRC"]):?>
            <div class="news-content__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?=$arResult["NAME"]?></h1>
                            <h2><?=$arResult["DISPLAY_ACTIVE_FROM"]?></h2>
                            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?endif;?>
            <div class="news-content__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p><?echo $arResult["DETAIL_TEXT"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-content__all">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-content__center">
                                <a href="/news/" class="df-button">Все новости</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</content-data>


