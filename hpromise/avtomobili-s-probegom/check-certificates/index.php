<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
?>

    <div class="cont" style="min-height: calc(100vh - 83px - 99px);">
        <div class="nblock">
            <div class="autos_list_head check_sert" style="background-position: center bottom 50px;">
                <div class="clearfix"></div>
                <h1>Проверка сертификата <span style="display: inline-block"> H-Promise</span></h1>
                <div class="clearfix"></div>

                <div class="smartfilter form_search_block check_sert">
                    <div class="lg_100" style="text-align: left;">
                        <p>Сертификат H-Promise является подтверждением того, что автомобиль с пробегом прошел комплексную техническую диагностику и соответствует высочайшим стандартам качества Hyundai.</p>
                        <p>На каждый автомобиль действует гарантия* и программа помощи на дорогах в течение 1 года с момента покупки автомобиля.</p>
                        <div class="sert_form_check">
                            <span>VIN</span>
                            <input name="vin" type="text" class="auto_vin">
                            <button class="btn btn-search-by-vin">Проверить</button>
                            <div class="clearfix"></div>
                            <div class="check_result" style=""></div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="garant">* Гарантия H-Promise действует 1 год или 20 тысяч километров пробега (в зависимости от того,что наступит ранее) с даты покупки автомобиля покупателем у официального дилера Hyundai по программе H-Promise.</p>
                        <p class="garant">** Информация об активации сертификата H-Promise может быть недоступна, если проверка производится ранее, чем через месяц с момента выдачи сертификата дилером.</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>