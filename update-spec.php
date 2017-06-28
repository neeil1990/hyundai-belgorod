<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock")):


    $result = CIBlockElement::GetList
    (
        array("ID"=>"ASC"),
        array
        (
            'IBLOCK_ID' => 8,
            'SECTION_ID' => 0,
            'INCLUDE_SUBSECTIONS' => 'N'
        )
    );
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
    }



$xml = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new_car.xml',true);


$xml = new SimpleXMLElement($xml);
    $arPropsNo = array();
    $arAddAdmin = array();
foreach($xml->ContractList->Contract as $key => $cont){

    $el = new CIBlockElement;

    /*
     *
     Нет полей спецпредложения - new_car
    IsNew

    fuel_consumption


    ColorOrig
    SpecName(используеться только в названии)
    Description

    ---
    Comment
      */

    $PROP = array();

//var_dump((string)$cont->FUEL_TYPE);
    $PROP['vin'] = (string)$cont->VIN;
    $PROP['POWER'] = (string)$cont->POWER;
    $PROP['FUEL_TYPE'] = (string)$cont->FUEL_TYPE;
    $PROP['GRAR_TYPE'] = (string)$cont->GRAR_TYPE;
    $PROP['OPTION_SUMM'] = (string)$cont->OPTION_SUMM;
    $PROP['run'] = (string)$cont->run;
    $PROP['year'] = (string)$cont->year;
    $PROP['TransmissionCount'] = (string)$cont->TransmissionCount;
    $PROP['mark_id'] = (string)$cont->MARK;
    $PROP['folder_id'] = (string)$cont->MODEL;
    $PROP['CAPACITY'] = (string)$cont->CAPACITY;
    $PROP['TRANSMISS'] = (string)$cont->TRANSMISS;
    $PROP['color'] = (string)$cont->Color;
    $PROP['color_code'] = (string)$cont->ColorCode;
    $PROP['SpecId'] = (string)$cont->SpecId;
    $PROP['CUZOV'] = (string)$cont->CUZOV;
    $PROP['STREET'] = (string)$cont->STREET;
    $PROP['number'] = (string)$cont->number;


    foreach($cont->OPTION_EQU->value as $equ){
        $PROP['OPTION_EQU'][] = (string)$equ;
    }
    foreach($cont->DEFAULT_COMPLIT->value as $com){
        $PROP['DEFAULT_COMPLIT'][] = (string)$com;
    }

    $PROP['OLD_PRICE'] = (string)$cont->OLD_PRICE;
    $PROP['NEW_PRICE'] = (string)$cont->NEW_PRICE;
    $PROP['CREDIT'] = (string)$cont->CREDIT;






    $dir = array_diff( scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new/'),array('.','..'));
    foreach($dir as $d){
        $spec = explode('.',$d);
        $specId = explode('+',$spec[1]);

        if (in_array((string)$cont->SpecId, $specId)) {

            $path = $_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new/'.$d;
            $dirId = array_diff( scandir($path),array('.','..'));
            foreach($dirId as $c){
                $colorCode = explode('.',$c);
                if($colorCode[0] == (string)$cont->ColorCode){
                    $img = array_diff( scandir($path.'/'.$c),array('.','..'));
                    foreach($img as $i){
                        $PROP['SLIDER'][] = '/XML_upload_for_1c/voronezh/new/'.$d.'/'.$c.'/'.$i;
                    }
                }
            }
        }
    }


    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = Array("IBLOCK_ID"=>8, "PROPERTY_SpecId" => (string)$cont->SpecId,"PROPERTY_color_code" => (string)$cont->ColorCode,"PROPERTY_NEW_PRICE" => (string)$cont->NEW_PRICE);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if ($arItem = $res->GetNext())
    {
        //var_dump((string)$cont->ColorCode);
    }else{

        if(strlen((string)$cont->POWER) < 1 OR (string)$cont->POWER == "0"){$arPropsNo[(string)$cont->VIN][] = 'POWER (мощность двигателя)'; $PROP['POWER'] = 'NaN';}
        if(strlen((string)$cont->FUEL_TYPE) < 1 OR (string)$cont->FUEL_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'FUEL_TYPE (тип двигателя )'; $PROP['FUEL_TYPE'] = 'NaN';}
        if(strlen((string)$cont->GRAR_TYPE) < 1 OR (string)$cont->GRAR_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'GRAR_TYPE (Тип привода)'; $PROP['GRAR_TYPE'] = 'NaN';}
      //  if(strlen((string)$cont->OPTION_SUMM) < 1 OR (string)$cont->OPTION_SUMM == "0"){$arPropsNo[(string)$cont->VIN][] = (string)$cont->VIN; $PROP['OPTION_SUMM'] = 'NaN';}
      //  if(strlen((string)$cont->run) < 1 OR (string)$cont->run == "0"){$arPropsNo[(string)$cont->VIN][] = (string)$cont->VIN; $PROP['run'] = 'NaN';}
        if(strlen((string)$cont->year) < 1 OR (string)$cont->year == "0"){$arPropsNo[(string)$cont->VIN][] = 'year (Год выпуска)'; $PROP['year'] = 'NaN';}
        if(strlen((string)$cont->TransmissionCount) < 1 OR (string)$cont->TransmissionCount == "0"){$arPropsNo[(string)$cont->VIN][] = 'TransmissionCount (кол-во передач)'; $PROP['TransmissionCount'] = 'NaN';}
        if(strlen((string)$cont->MARK) < 1 OR (string)$cont->MARK == "0"){$arPropsNo[(string)$cont->VIN][] = 'MARK (Наименование марки)'; $PROP['mark_id'] = 'NaN';}
        if(strlen((string)$cont->MODEL) < 1 OR (string)$cont->MODEL == "0"){$arPropsNo[(string)$cont->VIN][] = 'MODEL (Наименование модели)'; $PROP['folder_id'] = 'NaN';}
        if(strlen((string)$cont->CAPACITY) < 1 OR (string)$cont->CAPACITY == "0"){$arPropsNo[(string)$cont->VIN][] = 'CAPACITY (Объем двигателя)'; $PROP['CAPACITY'] = 'NaN';}
        if(strlen((string)$cont->TRANSMISS) < 1 OR (string)$cont->TRANSMISS == "0"){$arPropsNo[(string)$cont->VIN][] = 'TRANSMISS (Трансмиссия)'; $PROP['TRANSMISS'] = 'NaN';}
        if(strlen((string)$cont->Color) < 1 OR (string)$cont->Color == "0"){$arPropsNo[(string)$cont->VIN][] = 'Color (Цвет автомобиля)'; $PROP['color'] = 'NaN';}
        if(strlen((string)$cont->ColorCode) < 1 OR (string)$cont->ColorCode == "0"){$arPropsNo[(string)$cont->VIN][] = 'ColorCode (Код цвета автомобиля по каталогу производителя)'; $PROP['color_code'] = 'NaN';}
        if(strlen((string)$cont->SpecId) < 1 OR (string)$cont->SpecId == "0"){$arPropsNo[(string)$cont->VIN][] = 'SpecId (Специальный ID)'; $PROP['SpecId'] = 'NaN';}
        if(strlen((string)$cont->CUZOV) < 1 OR (string)$cont->CUZOV == "0"){$arPropsNo[(string)$cont->VIN][] = 'CUZOV (Кузов)'; $PROP['CUZOV'] = 'NaN';}
        if(strlen((string)$cont->STREET) < 1 OR (string)$cont->STREET == "0"){$arPropsNo[(string)$cont->VIN][] = 'STREET (Улица)'; $PROP['STREET'] = 'NaN';}
        if(strlen((string)$cont->number) < 1 OR (string)$cont->number == "0"){$arPropsNo[(string)$cont->VIN][] = 'number (Телефон)'; $PROP['number'] = 'NaN';}
        if(strlen((string)$cont->OLD_PRICE) < 1 OR (string)$cont->OLD_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'OLD_PRICE (Старая цена)'; $PROP['OLD_PRICE'] = 'NaN';}
        if(strlen((string)$cont->NEW_PRICE) < 1 OR (string)$cont->NEW_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'NEW_PRICE (Цена продажи)'; $PROP['NEW_PRICE'] = 'NaN';}
        if(strlen((string)$cont->CREDIT) < 1 OR (string)$cont->CREDIT == "0"){$arPropsNo[(string)$cont->VIN][] = 'CREDIT (Скидка)'; $PROP['CREDIT'] = 'NaN';}
      //  if(strlen((string)$cont->OPTION_EQU->value[0]) < 1 OR (string)$cont->OPTION_EQU->value[0] == "0"){$arPropsNo['OPTION_EQU'][] = (string)$cont->VIN; $PROP['OPTION_EQU'][] = 'NaN';}
        if(strlen((string)$cont->DEFAULT_COMPLIT->value[0]) < 1 OR (string)$cont->DEFAULT_COMPLIT->value[0] == "0"){$arPropsNo[(string)$cont->VIN][] = 'DEFAULT_COMPLIT (Стандартная комплектация)'; $PROP['DEFAULT_COMPLIT'][] = 'NaN';}




        $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 8,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => (string)$cont->MARK.' '.(string)$cont->MODEL.' '.(string)$cont->SpecName,
        "CODE"           => translit((string)$cont->VIN),
        "ACTIVE"         => "Y"            // активен
        );


	
	


			
				if(!empty($PROP['SLIDER'])){
					//	print '<a href="/offer/'.(string)$cont->VIN.'/">'.(string)$cont->SpecName.'</a><br>';
                    if(!preg_match('/preview/',implode($PROP['SLIDER']),$preg)){
                        $arNoPrew[] = (string)$cont->VIN.' - '.(string)$cont->SpecId.' - '.(string)$cont->ColorCode . '(не найдено preview.jpg)';
                    }
					}else{
						$arNoImg[] = (string)$cont->VIN.' - '.(string)$cont->SpecId.' - '.(string)$cont->ColorCode .'(не найдено фото)';
					}




					if($PRODUCT_ID = $el->Add($arLoadProductArray)){
                        $arAddAdmin[] = $PRODUCT_ID;
			//        echo "New ID: ".$PRODUCT_ID;
					}else{
						echo "Error: ".$el->LAST_ERROR;
					}

		}

}


    $string = '';
    foreach($arPropsNo as $k => $v){
        $string .= '<br>vin: '.$k.'<br>';
        $string .= implode("<br>", $v).'<br>';
        $string .= '-----------------';
    }
    $xmlAll = 'Поступило в выгрузку: '.count($xml->ContractList->Contract);
    $addAdmin = 'Попало в админку: '.count($arAddAdmin);
    $noCorrectAdmin = 'Из них некорректно оформлены свойства: '.count($arPropsNo);
    $noCorrectAdminPhoto = 'Из них некорректно оформлены фото: '.count($arNoImg);


    $message = $xmlAll.'<br>'.$addAdmin.'<br>'.$noCorrectAdmin.'<br>'.$noCorrectAdminPhoto.'<br>---<br>'.$string.' <br>*********************<br>Нет фото VIN - SpecId - ColorCode:<br> '.implode("<br>", $arNoImg).'<br>'.implode("<br>", $arNoPrew);

    //var_dump($message);
    $adminEmail = COption::GetOptionString('main', 'email_from');

    mail($adminEmail, 'Недостающие данные в спецпредложениях '.$SERVER_NAME, $message,
        "From: webmaster@$SERVER_NAME\r\n"
        ."Reply-To: webmaster@$SERVER_NAME\r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP/" . phpversion());


endif;