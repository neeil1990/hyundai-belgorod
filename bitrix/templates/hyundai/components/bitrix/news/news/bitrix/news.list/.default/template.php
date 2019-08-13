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
        <section class="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="head__center">
                            <h1 class="head__title"><?=$arResult['NAME']?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="filters">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="filters__center">
                            <div class="filters__search">
                                <div class="df-search-simple">
                                    <input class="df-search-simple__body" type="text" id="key-words" name="key-words" autocomplete="off" placeholder="Ключевые слова">
                                </div>
                            </div>
                            <div class="filters__date">
                                <div class="df-datepicker-range">
                                    <input class="df-datepicker-range__body" id="datepicker-range" name="date" type="text" autocomplete="off" placeholder="Выберите дату">
                                </div>
                            </div>
                            <div class="filters__button">
                                <button type="submit" class="df-button js-search-button" disabled>Искать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
        <section class="body">
            <div class="container">
                <div class="row">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news" aria-label="news title">
                            <div role="img" class="news__img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
                            <div class="news__date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                            <div class="news__text">
                                <?echo $arItem["NAME"]?>
                            </div>
                        </a>
                    </div>
                    <?endforeach;?>
                </div>
            </div>
        </section>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</content-data>



