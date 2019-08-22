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

    <div class="auto_detail_info">
        <div class="nblock">
            <div class="auto_page_head_nav">
                <div class="nblock_inner">
                    <div class="back_btn">Назад</div>
                    <a href="/service-request/" class="banner-evaluation">
                        <div class="banner-evaluation-back"></div>
                        <div class="banner-evaluation-image"></div>
                        <div class="banner-evaluation-text">Оценить свой автомобиль</div>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="auto_info">
                <div class="nblock_inner">
                    <div class="wrap_lg">
                        <div class="lg_50 mobile_hidden">
                            <div class="tablet_visible">
                                <div class="car-view__info-head">
                                    <div class="car-view__info-promiselogo">
                                        <img src="/local/templates/hyundai_2017/img/promiselogo.png" alt="">
                                    </div>
                                    <div class="car-view__info-title"><?=$arResult['NAME']?></div>
                                    <div class="car-view__info-price"><?=$arResult['PROPERTIES']['NEW_PRICE']['VALUE']?></div>
                                </div>
                            </div>
                            <div class="car-view__photo">
                                <div class="car-view__photo__medium">
                                    <img class="js-car-view__photo__medium" src="<?=CFile::GetPath($arResult['PROPERTIES']['GALERY']['VALUE'][0])?>"
                                         alt="">
                                    <a href="<?=CFile::GetPath($arResult['PROPERTIES']['GALERY']['VALUE'][0])?>" class="zoom">
                                        <span class="zoom_bg"></span>
                                        <span class="zoom_img"></span>
                                    </a>
                                </div>
                                <div class="car-view__photo__thumb-wrap js-car-photo-slider-wrap">
                                    <b class="thumb-slide-arrow thumb-slide-arrow--prev"> < </b>
                                    <b class="thumb-slide-arrow thumb-slide-arrow--next"> > </b>
                                    <div class="car-view__photo__thumb-slide-holder">
                                        <div class="car-view__photo__thumb-list js-car-photo-slider">
                                            <? foreach($arResult['PROPERTIES']['GALERY']['VALUE'] as $img):?>
                                            <div class="car-view__photo-thumb">
                                                <a class="car-view__photo-link js-car-view__photo-thumb"
                                                   href="<?=CFile::GetPath($img);?>" data-preview="<?=CFile::GetPath($img);?>">
                                                    <img src="<?=CFile::GetPath($img);?>" alt="">
                                                </a>
                                            </div>
                                            <? endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car-view__props-list tablet_visible">
                                <? foreach ($arResult['OPTIONS'] as $option):?>
                                    <?if($option['value']):?>
                                        <!-- <?=$option['name']?> -->
                                        <div class="car-view__prop-item">
                                            <span class="car-view__prop-title">
                                                <?=$option['name']?>
                                            </span>
                                            <span class="car-view__prop-val">
                                                <?=$option['value']?>
                                            </span>
                                        </div>
                                    <?endif;?>
                                <?endforeach;?>
                            </div>
                            <div class="clearfix tablet_visible"></div>
                            <hr class="tablet_visible">
                            <div class="car-view__contacts">
                                <a class="car-view__contacts-item___right" target="_blank" href="/contacts/"
                                   data-car-id="<?=$arResult['ID']?>">
                                    <div class="banner-evaluation-back"></div>
                                    <div class="banner-evaluation-image">i</div>
                                    <div class="banner-evaluation-text">задать вопрос</div>
                                </a>
                            </div>
                        </div>
                        <div class="lg_50">
                            <div class="car-view__info tablet_hidden mobile_visible desktop_visible">
                                <div class="car-view__info-head">
                                    <div class="car-view__info-promiselogo">
                                        <img src="/local/templates/hyundai_2017/img/promiselogo.png" alt="">
                                    </div>
                                    <div class="car-view__info-title"><?=$arResult['NAME']?></div>
                                    <div class="car-view__info-price"><?=$arResult['PROPERTIES']['NEW_PRICE']['VALUE']?></div>
                                </div>
                                <div class="car-view__props-list">
                                    <? foreach ($arResult['OPTIONS'] as $option):?>
                                        <?if($option['value']):?>
                                        <!-- <?=$option['name']?> -->
                                        <div class="car-view__prop-item">
                                            <span class="car-view__prop-title">
                                                <?=$option['name']?>
                                            </span>
                                            <span class="car-view__prop-val">
                                                <?=$option['value']?>
                                            </span>
                                        </div>
                                        <?endif;?>
                                    <?endforeach;?>
                                </div>
                            </div>
                        </div>

                        <div class="lg_50 mobile_visible" style="padding: 0;">
                            <div class="car-view__photo">
                                <div class="car-view__photo-mobile-wrap js-car-photo-mobile-slider-wrap">
                                    <div class="car-view__photo-slide-holder">
                                        <div class="car-view__photo-mobile-list js-car-photo-mobile-slider">
                                            <? foreach($arResult['PROPERTIES']['GALERY']['VALUE'] as $img):?>
                                            <div class="car-view__photo-mobile">
                                                <img src="<?=CFile::GetPath($img);?>" alt="">
                                            </div>
                                            <? endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="car-view__contacts">

                                <a class="car-view__contacts-item___right js-question-this-car" href="#"
                                   data-car-id="<?=$arResult['ID']?>">
                                    <div class="banner-evaluation-back"></div>
                                    <div class="banner-evaluation-image">i</div>
                                    <div class="banner-evaluation-text">задать вопрос</div>
                                </a>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="lg_100 mobile_hidden tablet_hidden">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <div class="lg_50 mobile_visible">
                            <!--<a href="#credit-calc" class="button-single js-credit-calc-open">Рассчитать кредит</a>-->
                            <b class="button-order js-order-this-car" data-car-id="<?=$arResult['ID']?>">Забронировать</b>
                        </div>

                        <div class="clearfix"></div>
                        <hr class="mobile_visible">

                        <div class="clearfix"></div>
                        <div class="lg_50">
                            <a href="/test-drive/" class="test-drive" target="_blank"
                               data-car-id="<?=$arResult['ID']?>"><i></i> Тест-драйв</a>
                            <a id="compareid_<?=$arResult['ID']?>" onclick="compare_tov(<?=$arResult['ID']?>);"
                               href="javascript:void(0)" class="compare_add" data-car-id="<?=$arResult['ID']?>"><i></i>
                                Сравнить</a>
                            <div class="clearfix"></div>
                        </div>

                        <div class="lg_100 tablet_visible">
                            <hr>
                        </div>

                        <div class="lg_50 mobile_hidden tablet_position_btn">
                            <!--<a href="#credit-calc" class="button-single js-credit-calc-open">Рассчитать кредит</a>-->
                            <a href="/test-drive/" target="_blank" class="button-order" data-car-id="<?=$arResult['ID']?>">Забронировать</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="credit-calc" class="credit-calc js-credit-calc nblock_inner">
                    <div class="base__inner credit-calc__form">
                        <span class="credit-calc__close js-credit-calc__close"></span>
                        <div class="credit-calc__inner">
                            <div class="h2">расчет кредита</div>

                            <div class="credit-calc__form-inner">
                                <div class="credit-calc__form-inner__row credit-calc__params">
                                    <div class="credit-calc__form-inner__section">
                                        <div class="range-slider js-calc-range-slider js-calc-range-slider--сredit-term">
                                            <div class="range-slider__title">
                                                <span class="range-slider__coll">Срок кредита</span>
                                                <span class="range-slider__coll select_value"><span
                                                            class="js-initial-term-value-show">12</span> мес</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <span class="range-slider__input">
											<i class="custom-text-input credit-calc__input">
												<input class="range-slider__max js-range-slider-value js-сredit-term-value"
                                                       name="сredit-term" value="" type="text">
											</i>
										</span>

                                            <div class="range-slider__wrap">
                                                <div class="range-slider__wrap-inner">
                                                    <div class="range-slider__input-holder">
                                                        <div class="range-slider__holder">
                                                            <s class="js-range-slider__holder"></s>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="credit-calc__form-inner__section">
                                        <div class="range-slider js-calc-range-slider js-calc-range-slider--initial-fee">
                                            <div class="range-slider__title">
                                                <span class="range-slider__coll">Первоначальный взнос</span>
                                                <span class="range-slider__coll select_value"><span
                                                            class="js-initial-fee-value-show">31 580</span> ₽</span>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="range-slider__wrap">
                                                <div class="range-slider__wrap-inner">
                                                    <div class="range-slider__input-holder">
													<span class="range-slider__input" style="width: 110px">

														<i class="custom-text-input credit-calc__input">
															<input class="js-initial-fee-percent js-range-slider-value"
                                                                   name="initial-fee-percent"
                                                                   value=""
                                                                   type="text">
														</i>
													</span>

                                                        <div class="range-slider__holder">
                                                            <s class="js-range-slider__holder"></s>
                                                        </div>

                                                        <span class="range-slider__input" style="width: 110px">
														<i class="custom-text-input credit-calc__input">
															<input class="range-slider__max js-initial-fee-value"
                                                                   name="initial-fee-value"
                                                                   value=""
                                                                   type="text">
														</i>
													</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="credit-calc__form-inner__row credit-calc__payment">
                                    <div class="credit-calc__form-inner__section">
									<span class="credit-calc__payment-month">
										<span class="js-credit-calc__monthly-payment"></span> <span
                                                class="rub">₽/мес</span>
									</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="credit-calc__form-inner__section">
									<span class="credit-calc__payment-sum">
										Общая стоимость — <span class="js-credit-calc__payment-sum"></span> <span
                                                class="rub">₽</span>
									</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="credit-calc__conditions">
                        <div class="credit-calc__conditions-list js-credit-calc__conditions-list"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

