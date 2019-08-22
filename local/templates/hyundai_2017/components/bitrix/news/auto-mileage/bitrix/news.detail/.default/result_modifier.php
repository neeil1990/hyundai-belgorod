<?php

$prw = implode(",", $arResult["PROPERTIES"]["SLIDER"]['VALUE']);
if (preg_match('/photo1/', $prw, $preg)) {

    foreach($arResult["PROPERTIES"]["SLIDER"]['VALUE'] as $k => $l){
        if($k == 0){
            $bufer = $l;
        }

        if(stristr($l, 'photo1')){
            $arResult["PROPERTIES"]["SLIDER"]['VALUE'][0] = $arResult["PROPERTIES"]["SLIDER"]['VALUE'][$k];
            $arResult["PROPERTIES"]["SLIDER"]['VALUE'][$k] = $bufer;
        }
    }

}

$arOption = [
    ['name' => 'Марка автомобиля','value' => $arResult['PROPERTIES']['MARK']['VALUE']],
    ['name' => 'Модель автомобиля','value' => $arResult['PROPERTIES']['MODEL']['VALUE']],
    ['name' => 'Тип кузова','value' => $arResult['PROPERTIES']['CUZOV']['VALUE']],
    ['name' => 'Тип трансмиссии','value' => $arResult['PROPERTIES']['TRANSMISS']['VALUE']],
    ['name' => 'Тип топлива','value' => $arResult['PROPERTIES']['FUEL_TYPE']['VALUE']],
    ['name' => 'Объем двигателя (в литрах)','value' => $arResult['PROPERTIES']['CAPACITY']['VALUE']],
    ['name' => 'Мощность двигателя (л.с)','value' => $arResult['PROPERTIES']['POWER']['VALUE']],
    ['name' => 'Тип привода','value' => $arResult['PROPERTIES']['GRAR_TYPE']['VALUE']],
    ['name' => 'Год производства','value' => $arResult['PROPERTIES']['YEAR']['VALUE']],
    ['name' => 'Пробег','value' => $arResult['PROPERTIES']['MILEAGE']['VALUE']],
    ['name' => 'Цвет кузова','value' => $arResult['PROPERTIES']['COLOR']['VALUE']],
];

$arResult['OPTIONS'] = $arOption;
