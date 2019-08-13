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
<section class="news" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="news__list owl-carousel js-news-slider">
                    <? foreach($arResult["ITEMS"] as $item):?>
                    <li class="news__item">
                        <a href="<?=$item['DETAIL_PAGE_URL'];?>" class="news__link" aria-label="<?=$item['NAME']?>">
                            <div class="news__img">
                                <img class="lazyload" data-src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>">
                            </div>
                            <div class="news__date df-text-input-14px">
                                <?=$item['DISPLAY_ACTIVE_FROM']?>
                            </div>
                            <div class="news__text df-lead-text-22px">
                                <?=$item['NAME']?>
                            </div>
                        </a>
                    </li>
                    <? endforeach; ?>
                </ul>

                <a href="/news/" class="df-forward-link news__all" role="button" aria-label="Все новости">
                    Все новости
                    <svg  role="img" aria-hidden="true">
                        <use xlink:href="#forward-link"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>







