<div class="autos_search_result_list">
    <?
    $i = 1;
    foreach($arResult["ITEMS"] as $key => $arItem):?>
        <div class="search_item car-list" data-href="<?=$arItem['DETAIL_PAGE_URL']?>">
            <div class="table-wrap">
                <div class="car-list__row">
                    <div class="car-list_cell" data-label="">
                                <span class="car-list__brand_mob">
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
                                    <img src="/local/templates/hyundai_2017/img/promiselogo.png" alt="" class="car-list__img-holder--h-promise"/>
                                </span>
                        <span class="car-list_cell-inner car-list__year_mob"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>

                        <span class="numb__row"><?=$i;?></span>
                        <span class="car-list_cell-inner">
                                    <i class="car-list__img-holder">
                                        <a class="car-list__img-link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['GALERY']['VALUE'][0]);?>" alt="<?echo $arItem["NAME"]?>">
                                        </a>
                                    </i>
                                </span>
                    </div>
                    <div class="car-list_cell valign_top" data-label="">
                                        <span class="car-list__brand">
                                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
                                            <img src="/local/templates/hyundai_2017/img/promiselogo.png" alt="" class="car-list__img-holder--h-promise"/>
                                        </span>
                        <div class="clearfix"></div>

                        <div class="mob_dealer">
                            <span class="car-list_cell-inner car-list__km"><?=$arItem['PROPERTIES']['MILEAGE']['VALUE']?> км</span>

                            <span class="car-list_cell-inner car-list__city">
                                        <?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
                                    </span>

                        </div>

                        <span class="car-list_cell-inner car-list__descr">
                                    <?if($arItem['PROPERTIES']['ENGINE']['VALUE']):?>
                                        Двигатель: <?=$arItem['PROPERTIES']['ENGINE']['VALUE']?><br>
                                    <?endif;?>

                            <?if($arItem['PROPERTIES']['POWER']['VALUE']):?>
                                Мощность: <?=$arItem['PROPERTIES']['POWER']['VALUE']?><br>
                            <?endif;?>

                            <? foreach($arItem['PROPERTIES']['STANDART']['VALUE'] as $key => $u){?>
                                <?=$u?>
                                <?
                                $key++;
                                if($arItem['PROPERTIES']['STANDART']['VALUE'][$key]){
                                    print ',';
                                }
                                ?>

                            <?}?>
								<br>
								<?=$arItem['PROPERTIES']['COUNT_USER']['VALUE']?>
                            <?if($arItem['PROPERTIES']['GARANTY']['VALUE'] == 'Y'):?>
                                <br>На гарантии
                            <?endif;?>
                                </span>
                        <div class="clearfix"></div>
                        <div class="dealers_info">
                                    <span class="car-list_cell-inner car-list__city">
                                        <?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
                                    </span>
                        </div>
                    </div>
                    <div class="car-list_cell" data-label="">
                        <span class="car-list_cell-inner car-list__year"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>
                    </div>
                    <div class="car-list_cell" data-label="" style="width: 100px">
                        <span class="car-list_cell-inner car-list__km"><?=$arItem['PROPERTIES']['MILEAGE']['VALUE']?> км</span>
                    </div>
                    <div class="car-list_cell price-cell" data-label="">
                        <span class="car-list_cell-inner car-list__price"><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE'];?> ₽</span>
                    </div>
                    <div class="car-list_cell compare-cell" data-label="">
                        <a id="compareid_<?=$arItem['ID']?>" onclick="compare_tov(<?=$arItem['ID']?>);" href="javascript:void(0)" class="add-to-compare">
                            <span></span>
                            Сравнить
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <hr />
        </div>
        <?
        $i++;
    endforeach; ?>
    <div class="clearfix"></div>
    <!-- <a href="#" class="all_results">Все результаты</a> -->
</div>