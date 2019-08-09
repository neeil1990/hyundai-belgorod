<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "С прибавлением!");
$APPLICATION->SetTitle("С прибавлением!");
?>

<content-data>
    <div class="content">
        <script>
            window.addEventListener('load', function () {
                document.querySelector('.main-img').classList.add('active');
            })
        </script>

        <div class="section-top">
            <div class="top-bg">
                <div class="container">
                    <a href="/offers" class="df-back-link">
                        Все предложения
                        <svg>
                            <use xlink:href="#back-link"></use>
                        </svg>
                    </a>
                    <div class="main-img">
                        <div class="main-img-inner lazyload lazypreview" data-bgset="/storage/special_offers/2e5ac81fe811610516c4aa94d346cef7_Family-car-proposal.jpg"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section-product" id="offerPage">
            <div class="container">
                <div class="product-desc">
                    <div class="df-text-main-16px"><h1 class="title-offer bordr-btm"><span class="nowrp">С прибавлением!</span></h1>

                        <div class="offer-terms bordr-btm">
                            <div class="offers-block">
                                <div class="row-inline clearfix">
                                    <div class="row-inline__cell">
                                        <div class="offer-price-count">Субсидия 10%* от стоимости автомобиля (25%* для Дальнего востока)<br></div>
                                    </div>
                                </div>
                                <div class="row-inline">
                                    <p class="offer-terms__text">
                                        Программа «Семейный автомобиль» продлена на 2019 год!<br><br>
                                        Программа идеально подходит для семей, имеющих двух и более детей.<br><br>
                                        В рамках государственной программы льготного автокредитования «Семейный автомобиль» покупателям предоставляется субсидия на внесение первоначального взноса в размере 10%* (25%* для клиентов жителей Дальневосточного федерального округа) от стоимости автомобиля на покупку в кредит новых автомобилей Hyundai SOLARIS и CRETA стоимостью до 1 000 000 руб.<br><br>
                                        Это означает, что клиенту необходимо внести минимально возможный первоначальный взнос, предусмотренный условиями программы кредитования, а государство добавит еще 10%* (25%* для жителей Дальнего востока) от стоимости автомобиля, тем самым уменьшив сумму кредита.
                                    </p>
                                    <offer-forms v-bind:form="'creditOffer'"></offer-forms>
                                </div>
                                <br/><br/>
                                <a href="javascript:void(0);" target="_blank" class="request-service-btn" data-role="credit-open">Оставить заявку</a>   <a href="/configurator" target="_blank" class="inverse-service-btn">Конфигуратор</a>   <a href="/start" target="_blank" class="inverse-service-btn">Кредитный калькулятор</a>


                                <!-- additional terms as footer -->

                                <div class="clearfix"></div>

                                <!-- additional terms as footer -->

                                <div class="clearfix"></div>

                                <div class="tip-supscript ">
                                    <p style="font-size: 10px;">
                                        *По данной программе государством предоставляется субсидия на оплату первоначального взноса в размере 10% (25% для клиентов жителей Дальневосточного федерального округа) стоимости автомобиля, если клиент удовлетворяет следующим условиям:<br>
                                        •         Клиент имеет 2-х или более несовершеннолетних детей (до 18 лет), что подтверждается отметками в паспорте или предоставлением оригиналов свидетельств о рождении каждого ребенка;<br>
                                        •         Клиент ранее в 2017-2019 г. не заключал кредитных договоров на приобретение автомобиля;<br>
                                        •         Клиент обязуется не заключать в 2019 году иных договоров по получению кредита на приобретение автомобиля;<br>
                                        •         Клиент имеет водительское удостоверение.
                                        <br>
                                        Оформление кредитов по программам будет доступно через банки-партнеры: Русфинанс Банк, Сетелем Банк и Совкомбанк.<br>
                                        Подробности во всех официальных дилерских центрах Hyundai.
                                    </p>
                                </div>

                                <div class="tip-supscript ">
                                    <p style="font-size: 10px;">

                                    </p>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <style>

                    .request-service-btn {
                        -moz-user-select: none;
                        background: #103a71 none repeat scroll 0 0;
                        border: 2px solid #103a71;
                        color: #fff !important;
                        display: inline-block;
                        font-family: "Arial",sans-serif;
                        font-size: 13px;
                        font-weight: bold;
                        padding: 16px 29px;
                        text-align: center;
                        text-transform: uppercase;
                        transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
                        text-decoration: none !important;
                        border-radius: 28px;
                    }
                    .request-service-btn:hover {
                        opacity: 0.8;
                    }

                    .inverse-service-btn {
                        -moz-user-select: none;
                        background: #transparent none repeat scroll 0 0;
                        border: 2px solid #fff;
                        color: #1d88ce !important;
                        display: inline-block;
                        font-family: "Arial",sans-serif;
                        font-size: 13px;
                        font-weight: bold;
                        padding: 16px 29px;
                        text-align: center;
                        text-transform: uppercase;
                        transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
                        text-decoration: none !important;
                    }
                    .inverse-service-btn:hover {
                        /*background: rgba(f, 136, 206, 0.8) none repeat scroll 0 0;
                        color: #1d88ce !mportant;
                        text-decoration: none;
                        border: 2px solid #1d88ce;*/
                        opacity: 0.8;
                    }
                </style></div>
        </div>

    </div>
    </div>
    </div>
</content-data>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
