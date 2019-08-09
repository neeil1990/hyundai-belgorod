<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Везёт же новеньким!");
$APPLICATION->SetTitle("Везёт же новеньким!");
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
                            <div class="main-img-inner lazyload lazypreview" data-bgset="/storage/special_offers/c4b4091523c14066560a7b616957b995_First-car-proposal.jpg"></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section-product" id="offerPage">
                <div class="container">
                    <div class="product-desc">
                        <div class="df-text-main-16px"><h1 class="title-offer bordr-btm"><span class="nowrp">Везёт же новеньким!</span></h1>
                            <div class="offer-terms bordr-btm">
                                <div class="offers-block">
                                    <div class="row-inline clearfix">
                                        <div class="row-inline__cell">
                                            <div class="offer-price-count">Субсидия 10%* от стоимости автомобиля (25%* для Дальнего востока)</div>
                                        </div>
                                    </div>
                                    <div class="row-inline">
                                        <p class="offer-terms__text">Программа &laquo;Первый автомобиль&raquo; продлена на 2019 год!<br /><br />Программа идеально подходит для клиентов, которые планируют приобрести свой первый автомобиль в 2019 году.<br /><br />В рамках государственной программы льготного автокредитования &laquo;Первый автомобиль&raquo; покупателям предоставляется субсидия на внесение первоначального взноса в размере 10%* (25%* для клиентов жителей Дальневосточного федерального округа) от стоимости автомобиля на покупку в кредит новых автомобилей Hyundai SOLARIS и CRETA стоимостью до 1 000 000 руб.<br /><br />Это означает, что клиенту необходимо внести минимально возможный первоначальный взнос, предусмотренный условиями программы кредитования, а государство добавит еще 10%* (25%* для жителей Дальнего востока) от стоимости автомобиля, тем самым уменьшив сумму кредита.</p>
                                        <offer-forms v-bind:form="'creditOffer'"></offer-forms>
                                    </div>
                                    <br /><br /><!-- additional terms as footer --><!-- additional terms as footer -->
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="tip-supscript ">
                                        <p style="font-size: 10px;">*По данной программе государством предоставляется субсидия на оплату первоначального взноса в размере 10% (25% для клиентов жителей Дальневосточного федерального округа) стоимости автомобиля, если клиент удовлетворяет следующим условиям:<br />&bull; Клиент подтверждает, что не имел ранее в собственности автомобиль;<br />&bull; Клиент ранее в 2017-2019 г. не заключал кредитных договоров на приобретение автомобиля;<br />&bull; Клиент обязуется не заключать в 2019 году иных договоров по получению кредита на приобретение автомобиля;<br />&bull; Клиент имеет водительское удостоверение. <br />Оформление кредитов по программам будет доступно через банки-партнеры: Русфинанс Банк, Сетелем Банк и Совкомбанк.<br />Подробности во всех официальных дилерских центрах Hyundai.</p>
                                    </div>
                                    <div class="tip-supscript ">
                                        <p style="font-size: 10px;">&nbsp;</p>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div></div>
                    </div>

                </div>
            </div>
        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>