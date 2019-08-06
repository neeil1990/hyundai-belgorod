<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест-драйв");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <section id="signup" class="form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form__wrap">
                                <div v-if="!init">
                                    <div class="placeholder">
                                        <ul class="placeholder__list">
                                            <li class="placeholder__item">
                                                <div class="placeholder__img"></div>
                                                <div class="placeholder__content">
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                </div>
                                            </li>
                                            <li class="placeholder__item">
                                                <div class="placeholder__img"></div>
                                                <div class="placeholder__content">
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                </div>
                                            </li>
                                            <li class="placeholder__item">
                                                <div class="placeholder__img"></div>
                                                <div class="placeholder__content">
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                </div>
                                            </li>
                                            <li class="placeholder__item">
                                                <div class="placeholder__img"></div>
                                                <div class="placeholder__content">
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                    <div class="placeholder__line"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>					</div>
                                <signup-forms v-else v-bind:form="'test-drive'" page="isTestDrivePage"></signup-forms>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </content-data>



<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>