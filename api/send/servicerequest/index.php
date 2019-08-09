<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$output = implode(',<br> ', array_map(
    function ($v, $k) { return sprintf("%s: %s", $k, strip_tags($v)); },
    $_GET,
    array_keys($_GET)
));

if(CModule::IncludeModule("iblock")) {

    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 72,
        "NAME" => $_GET['name'],
        "ACTIVE" => "N",
        "PREVIEW_TEXT" => $output
    );
    $PRODUCT_ID = $el->Add($arLoadProductArray);

    $arEventFields = array(
        "MESSAGE" => $output,
    );
    CEvent::Send("SERVICE_REQUEST", SITE_ID, $arEventFields);

    if($PRODUCT_ID)
        print json_encode(array('status' => 1));
    else
        print json_encode(array('status' => 0));
}

