<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("configurator");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <div id="app">
                <div class="configurator-holder">
                    <configurator></configurator>
                    <div id="dbm"></div>
                </div>
            </div>

            <div id="forms">
                <sign-up-test-drive-form-popup page="isConfiguratorPage" v-if="isVisible"></sign-up-test-drive-form-popup>
            </div>
        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>