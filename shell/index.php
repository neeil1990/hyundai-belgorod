<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("shell");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <div id="servicepopup">
                <sign-up-service-form-popup v-if="isVisible"></sign-up-service-form-popup>
            </div>

            <section class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="head__banner">
                                <div class="head__composition">
                                    <h1 class="head__title">Моторные масла Shell Helix.</h1>
                                    <div class="head__subtitle">
                                        Рекомендованный поставщик смазочных материалов для автомобилей Hyundai c&nbsp;2005 года.
                                    </div>
                                    <img src="/images/service/shell/shell.png" alt="" class="shell-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brand-inner">
                                <img src="/images/service/shell/oil.png" alt="" class="brand__img">
                                <img src="/images/service/shell/oil_mob.png" alt="" class="brand__img brand__img--mobile">
                                <div class="brand__desc">
                                    <h2 class="brand__title">Shell Helix Ultra ECT AH 5W&#8209;30</h2>
                                    <p class="brand__subtitle">Спецификации API SN, ACEA C3</p>
                                    <p class="brand__text">Полностью синтетическое моторное масло, созданное на&nbsp;основе технологии Shell&nbsp;PurePlus, разработано с&nbsp;учётом жестких требований высокоэффективных бензиновых и&nbsp;дизельных двигателей Hyundai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="selection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h2 class="selection__title">Подберите масло</h2>
                                <h3 class="selection-car__title"></h3>
                                <img src="" alt="" class="selection-car__img">
                            </div>
                            <div class="map-oil">
                                <label class="df-label label-materials" for="">Материалы</label>
                                <a href="/assets/pdf/shell/104399_Shell_karta_smazokHyundai.pdf" target="_blank" class="df-download-link">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#download-link"></use>
                                    </svg>
                                    <span>Карта смазочных материалов</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form action="#" id="selection-form">
                                <div class="selection__tablet">
                                    <fieldset class="model">
                                        <label class="df-label" for="model">Модель</label>
                                        <select id="js-model-select" class="df-select" id="model" name="model" placeholder="Выберите модель">
                                            <option></option>
                                            <option data-data='{"code":"SOLARIS New"}' value="solarisnew">SOLARIS New</option>
                                            <option data-data='{"code":"ELANTRA"}' value="elantra">ELANTRA</option>
                                            <option data-data='{"code":"H-1"}' value="h-1">H-1</option>
                                            <option data-data='{"code":"i30"}' value="i30">i30</option>
                                            <option data-data='{"code":"i40"}' value="i40">i40</option>
                                            <option data-data='{"code":"TUCSON"}' value="tucson">TUCSON</option>
                                            <option data-data='{"code":"GRAND SANTA FE"}' value="grandsantafe">GRAND SANTA FE</option>
                                            <option data-data='{"code":"SANTA FE"}' value="santafe">SANTA FE</option>
                                            <option data-data='{"code":"Creta"}' value="creta">Creta</option>
                                            <option data-data='{"code":"Sonata New"}' value="sonatanew">Sonata New</option>
                                            <option data-data='{"code":"ix35"}' value="ix35">ix35</option>
                                            <!--                <option value="solaris" selected>SOLARIS New</option>
                                            <option value="solaris">SOLARIS New</option>
                                            <option value="elantra">ELANTRA</option>
                                            <option value="h1">H-1</option>
                                            <option value="i30">i30</option>
                                            <option value="i40">i40</option>
                                            <option value="tucson">TUCSON</option>
                                            <option value="grandsantafe">GRAND SANTA FE</option>
                                            <option value="santafe">SANTA FE</option>
                                            <option value="creta">Creta</option>
                                            <option value="sonata">Sonata New</option>
                                            <option value="ix35">ix35</option>-->
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="df-label" for="year">Год выпуска</label>
                                        <select id="js-year-select" class="df-select" id="year" name="year" placeholder="Выберите год выпуска">
                                            <option></option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <fieldset class="volume" data-car="solarisnew">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="3,3" data-oil="1,2,3">1.4</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="3,3" data-oil="1,2,3">1.6</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4" data-oil="1,2,3">1.7G</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="elantra" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4" data-oil="1,2,3">1.6</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="4,5" data-oil="1,2,3">2.0</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="h-1" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="5,1" data-oil="1,2,3">2.4</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="7,4" data-oil="1,2,3">2.5</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="i30" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="3,6" data-oil="1,2,3">1.4</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="3,6" data-oil="1,2,3">1.6</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="i40" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4" data-oil="1,2,3">2.0</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="4,5" data-oil="1">1.7D</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="tucson" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4,5" data-oil="4">1.6T</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="4" data-oil="1,2,3">2.0</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="7,6" data-oil="1">2.0 D</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="grandsantafe" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="5,7" data-oil="1,2,3">3.3</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="6,3-6,7" data-oil="1,2,3">2.2D</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="santafe" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4,8-5*" data-oil="1,2,3">2.4</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="6,3-6,7" data-oil="1,2,3">2.2D</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="creta" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="3,6" data-oil="1,2,3">1.6</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="4" data-oil="1,2,3">2.0</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="sonatanew" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4" data-oil="1,2,3">2.0</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="4,8" data-oil="4">2.4GDi</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset class="volume" data-car="ix35" style="display: none">
                                    <label class="df-label" for="">Объем двигателя</label>
                                    <ul class="df-tabs">
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button" data-volume="4-5,8" data-oil="1,2,3">2.0</button>
                                        </li>
                                        <li class="df-tabs__item">
                                            <button class="df-tabs__button df-tabs__button--active" data-volume="7,6-8" data-oil="1,2,3">2.0D</button>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <button class="df-button select-button">Подобрать</button>
                                </fieldset>
                                <fieldset class="map-oil__mobile">
                                    <label class="df-label label-materials" for="">Материалы</label>
                                    <a href="#" class="df-download-link">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#download-link"></use>
                                        </svg>
                                        <span>Карта смазочных материалов</span>
                                    </a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="choice">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="choice__title">Выберите масло</h2>
                            <div class="choice__item" data-product="1">
                                <div class="choice__item-img">
                                    <img src="/images/service/shell/01.png" alt="" class="choice__img">
                                    <!-- <img src="/images/service/shell/oil_mob1.png" alt="" class="choice__img choice__img--mobile"> -->
                                    <div class="df-credit-banner">
                                        <div class="df-credit-banner__center">
                                            <div class="df-credit-banner__name">Лучший<br>выбор</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="choice__item-info">
                                    <h3 class="choice__item-name">Shell Helix Ultra ECT AH 5W&#8209;30</h3>
                                    <div class="choice__item-desc">
                                        <p class="choice__item-text">Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей</p>
                                        <div class="choice__item-chars">
                                            <span class="choice__item-value"><span class="volume-value">3,3</span>&nbsp;л</span>
                                            <span class="choice__item-unit">Объём</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choice__item" data-product="2">
                                <div class="choice__item-img">
                                    <img src="/images/service/shell/04.png" alt="" class="choice__img">
                                    <!-- <img src="/images/service/shell/oil_mob1.png" alt="" class="choice__img choice__img--mobile"> -->
                                </div>
                                <div class="choice__item-info">
                                    <h3 class="choice__item-name">Shell Helix Ultra 0W&#8209;40</h3>
                                    <div class="choice__item-desc">
                                        <p class="choice__item-text">Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей</p>
                                        <div class="choice__item-chars">
                                            <span class="choice__item-value"><span class="volume-value">3,3</span>&nbsp;л</span>
                                            <span class="choice__item-unit">Объём</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choice__item" data-product="3">
                                <div class="choice__item-img">
                                    <img src="/images/service/shell/05.png" alt="" class="choice__img">
                                    <!-- <img src="/images/service/shell/oil_mob1.png" alt="" class="choice__img choice__img--mobile"> -->
                                </div>
                                <div class="choice__item-info">
                                    <h3 class="choice__item-name">Shell Helix Ultra 0W&#8209;30</h3>
                                    <div class="choice__item-desc">
                                        <p class="choice__item-text">Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей</p>
                                        <div class="choice__item-chars">
                                            <span class="choice__item-value"><span class="volume-value">3,3</span>&nbsp;л</span>
                                            <span class="choice__item-unit">Объём</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choice__item" data-product="4">
                                <div class="choice__item-img">
                                    <img src="/images/service/shell/03.png" alt="" class="choice__img">
                                    <!-- <img src="/images/service/shell/oil_mob1.png" alt="" class="choice__img choice__img--mobile"> -->
                                </div>
                                <div class="choice__item-info">
                                    <h3 class="choice__item-name">Shell Helix Ultra A5/B5 0W&#8209;30</h3>
                                    <div class="choice__item-desc">
                                        <p class="choice__item-text">Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей</p>
                                        <div class="choice__item-chars">
                                            <span class="choice__item-value"><span class="volume-value">3,3</span>&nbsp;л</span>
                                            <span class="choice__item-unit">Объём</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choice__btn">
                                <button class="df-button js-checkout-service">Записаться на сервис</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="advantages">
                <div class="container">
                    <h2 class="advantages__title">Преимущества</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="advantages__item">
                                <div class="advantages__pic">
                                    <img src="/images/service/shell/fix.svg" alt="" class="advantages__img">
                                </div>
                                <div class="advantages__desc">
                                    <h3 class="advantages__desc-title">Усиленная защита от&nbsp;износа и&nbsp;коррозии</h3>
                                    <p class="advantages__desc-text">Сохраняет свои характеристики при&nbsp;чрезвычайно высоких температурах, обеспечивая эффективную работу и&nbsp;защиту двигателя, благодаря большей устойчивости к&nbsp;разложению.<sup class="footnote">1</sup></p>
                                </div>
                            </div>
                            <div class="advantages__item">
                                <div class="advantages__pic">
                                    <img src="/images/service/shell/cloud.svg" alt="" class="advantages__img">
                                </div>
                                <div class="advantages__desc">
                                    <h3 class="advantages__desc-title">Чистота деталей</h3>
                                    <p class="advantages__desc-text">Масло Shell Helix Ultra увеличивает чистоту поршней двигателя на&nbsp;65%,<sup class="footnote">4</sup> а&nbsp;также обеспечивает защиту двигателя от&nbsp;образования различных отложений и&nbsp;повышает срок его службы.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="advantages__item">
                                <div class="advantages__pic">
                                    <img src="/images/service/shell/list.svg" alt="" class="advantages__img">
                                </div>
                                <div class="advantages__desc">
                                    <h3 class="advantages__desc-title">Легкий запуск при&nbsp;отрицательных температурах<sup class="footnote">2</sup></h3>
                                    <p class="advantages__desc-text">Содержит специальные базовые масла, произведенные из&nbsp;природного газа по&nbsp;технологии Shell PurePlus,<sup class="footnote">3</sup> с&nbsp;улучшенными низкотемпературными свойствами.</p>
                                </div>
                            </div>
                            <div class="advantages__item">
                                <div class="advantages__pic">
                                    <img src="/images/service/shell/support.svg" alt="" class="advantages__img">
                                </div>
                                <div class="advantages__desc">
                                    <h3 class="advantages__desc-title">Топливная эффективность</h3>
                                    <p class="advantages__desc-text">Превышение норм топливной экономичности не&nbsp;менее чем на&nbsp;1,7%<sup class="footnote">5</sup></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tech">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="tech__title">O технологии Pure&nbsp;Plus</h2>
                            <div class="tech__content" data-role="js-video">
                                <img src="/images/service/shell/preview.jpg" class="video-preview" alt="">
                                <img src="/images/service/shell/play.svg" alt="" class="video-play">
                                <div class="video-container" src="" allowfullscreen="" width="100%" height="" frameborder="0">
                                    <video id="video__tech" class="video-item" preload="" loop="" muted>
                                        <source src="/video/shell/shell.mp4" type="video/mp4">
                                        <source src="/video/shell/shell.webm" type="video/webm">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="questions">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="questions__title">Вопросы и&nbsp;ответы</h2>
                            <div class="questions__items">
                                <ul id="accordion-questions" class="df-accordion">
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Что такое вязкость?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            Вязкость — это мера текучести моторного масла при определенной температуре. Моторное масло должно эффективно прокачиваться по&nbsp;масляным каналам и&nbsp;обеспечивать разделение поверхностей, т.е. создание масляной пленки нужной толщины между поверхностями трения. При&nbsp;недостаточной толщине масляной пленки или ее отсутствии возможны возникновение контактов металл-металл и, как следствие, повышенный износ и&nbsp;задиры/сваривание поверхностей.<br><br>
                                            Именно поэтому, чтобы гарантировать эффективную работу вашего автомобиля, необходимо использовать смазочные материалы только той вязкости, которые рекомендуются автопроизводителем.
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Что обозначает маркировка масла «5W&#8209;30, 0W&#8209;30, 0W&#8209;40»?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            Существуют два класса вязкости: зимний (низкотемпературная вязкость) – с&nbsp;буквой&nbsp;«W» (Winter) и&nbsp;летний (высокотемпературная вязкость) – без&nbsp;буквенного обозначения. Летнее масло обеспечивает надежное смазывание при&nbsp;высокой температуре, но&nbsp;пуск двигателя при&nbsp;низкой температуре затруднен. Зимнее масло облегчает холодный пуск двигателя при&nbsp;низкой температуре, но&nbsp;не&nbsp;обеспечивает достаточной толщины масляной пленки при&nbsp;высоких температурах. Поэтому распространение получили всесезонные масла, которые наименее зависят от&nbsp;температуры. Всесезонные масла состоят из&nbsp;комбинации зимнего и&nbsp;летнего классов, разделенных знаком тире, например, 5W-30.
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Как правильно подобрать моторное масло для&nbsp;своего автомобиля Hyundai?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            При выборе масла для&nbsp;сервисного обслуживания легковых автомобилей Hyundai важны два критерия: класс вязкости и спецификации, которые определяют уровень эксплуатационных свойств моторного масла и&nbsp;применяемость его в&nbsp;двигателях различных типов и&nbsp;модельных годов. Данные требования указаны в:<br>
                                            - руководстве по&nbsp;эксплуатации на&nbsp;автомобили Hyundai<br>
                                            - в карте смазочных материалов<br>
                                            Вы всегда можете обратиться к&nbsp;официальному дилеру Хендэ для&nbsp;правильного подбора моторного масла Shell&nbsp;Helix.
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Что обозначают спецификации API (SN, SM и др.) и ACEA (С3, А5/B5 и др.)?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            Каждая из&nbsp;данных спецификаций содержит набор испытательных стендовых и&nbsp;лабораторных методов. Основная цель всех тестирований моторных масел, на&nbsp;которых базируются требования автопроизводителей – оценить характеристики моторных масел в&nbsp;реальных эксплуатационных условиях (защита от&nbsp;износа, склонность к&nbsp;образованию высокотемпературных и&nbsp;низкотемпературных отложений, антиокислительная стабильность, совместимость с&nbsp;каталитическими нейтрализаторами и&nbsp;сажевыми фильтрами, экономия топлива и&nbsp;т.п.), учитывая конструкционные особенности автомобиля и&nbsp;тип эксплуатации.<br><br>
                                            Классификация API (American Petroleum Institute)<br><br>
                                            Наиболее известная классификация моторных масел по&nbsp;уровню эксплуатационных свойств, используемая в&nbsp;международном масштабе. Категория S (Service) – моторные масла для&nbsp;бензиновых двигателей легковых автомобилей. Для&nbsp;каждого нового поколения масла присваивается дополнительная буква по&nbsp;алфавиту: API SA, SB, SC, SD, SE, SF, SG, SH, SJ, SL, SM, SN<br><br>
                                            В каждой из&nbsp;этих категорий классы эксплуатационных свойств масел обозначают первыми буквами латинского алфавита. Чем дальше по&nbsp;алфавиту находится класс масел, тем для более современных двигателей она разработана. Более новый класс заменяет предыдущий (например, API SN можно использовать в&nbsp;тех автомобилях, где рекомендуются моторные масла класса API SL). Введение в&nbsp;классификацию API каждого нового класса было обусловлено существенным ужесточением или изменением требований к&nbsp;эксплуатационным свойствам масел нового поколения.<br><br>
                                            Классификация ACEA (Association des Constructeurs Europeens de&nbsp;L-Atomobile)<br><br>
                                            Ассоциация Европейских производителей Автомобилей ACEA (Association des Constructeurs Europeens de&nbsp;L-Atomobile), представляет интересы европейских производителей легковых и&nbsp;грузовых автомобилей и&nbsp;автобусов на уровне ЕС. ACEA предъявляет к&nbsp;маслам более высокие требования по&nbsp;сравнению с&nbsp;классификацией API.<br><br>
                                            A - моторные масла для&nbsp;бензиновых двигателей легковых автомобилей;<br>
                                            B - моторные масла для&nbsp;дизельных двигателей легковых автомобилей;<br>
                                            С - моторные масла для&nbsp;бензиновых и&nbsp;дизельных двигателей легковых автомобилей, оснащенных сажевыми фильтрами и&nbsp;каталитическими нейтрализаторами (Евро-4 и&nbsp;выше)
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Почему моторное масло темнеет?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            Во-первых, в процессе работы двигателя в&nbsp;нем накапливаются продукты неполного сгорания топлива, имеющие темный цвет, как&nbsp;любые продукты окисления.<br><br>
                                            Во-вторых, качественное масло Shell Helix Ultra, благодаря наличию в&nbsp;нем эффективных моюще-диспергирующих присадок, удерживает продукты окисления в&nbsp;объеме, сохраняет чистыми внутренние поверхности двигателя, защищая их от&nbsp;отложений, лака и&nbsp;прочих загрязнений до&nbsp;момента очередной замены масла.<br><br>
                                            Таким образом, моторное масло в&nbsp;двигателе должно темнеть, и&nbsp;это показатель того, что оно эффективно работает. Для&nbsp;того, чтобы быть уверенным в&nbsp;качестве сервисного обслуживания вашего автомобиля рекомендуем обращаться только в&nbsp;официальные дилерские станции Hyundai.
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Можно ли в моторное масло добавлять дополнительные присадки?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            В соответствии с&nbsp;требованиями Hyundai не&nbsp;рекомендуется использовать дополнительные присадки в&nbsp;моторные масла (аналогично внесению изменений в&nbsp;конструкции двигателя и&nbsp;т. д). Дополнительные присадки способны разрушить баланс свойств масла и&nbsp;повлиять на&nbsp;его характеристики. Это также соотносится и&nbsp;с&nbsp;политикой концерна «Шелл», который является официальным рекомендованным поставщиком смазочных материалов для&nbsp;сервисного обслуживания автомобилей Hyundai: не&nbsp;рекомендовать дополнительных или&nbsp;вспомогательных присадок к&nbsp;маслам. Дополнительные присадки и&nbsp;прочие усовершенствования могут причинить больше проблем, чем&nbsp;преимуществ. Качественные смазочные материалы «Шелл» содержат композицию присадок. В&nbsp;процессе разработки они подбираются по&nbsp;составу и&nbsp;соотношению для выполнения требований стандартов Hyundai с&nbsp;целью повышения срока служба автомобиля и&nbsp;обеспечения его эффективной работы.
                                        </div>
                                    </li>
                                    <li class="df-accordion__item">
                                        <a href="#" class="df-accordion__header js-open-section">
                                            <h5>Как правильно подобрать масло на&nbsp;долив?</h5>
                                        </a>
                                        <div class="df-accordion__dropgown">
                                            Хорошей практикой является наличие в&nbsp;багажнике литровой канистры того&nbsp;же масла, которое уже залито в&nbsp;двигателе или обратитесь в&nbsp;официальную дилерскую станцию Hyundai для&nbsp;осуществления полной замены моторного масла в&nbsp;двигателе.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="note">
                                <div class="note-block">
                                    <img src="/images/service/warranty/note.svg" alt="" class="note-img">
                                    1 — На основании требований отраслевого стандарта API&nbsp;SN и&nbsp;стендовых испытаний на&nbsp;противо-износные свойства CEC-L-099-08 и&nbsp;эксплуатационных испытаний ASTM Sequence VIII<br>
                                    2 — По сравнению с&nbsp;моторными маслами более высокой вязкости<br>
                                    3 — Технология Shell&nbsp;PurePlus позволяет получить базовое масло, которое обеспечивает улучшение показателей вязкости, трения, летучести по&nbsp;сравнению с&nbsp;наиболее распространенными традиционными базовыми маслам<br>
                                    4 — В стендовых испытаниях в&nbsp;двигателях на&nbsp;оценку чистоты поршней моторное масло Shell&nbsp;Helix Ultra продемонстрировало результат на&nbsp;65% выше требований последнего отраслевого стандарта API&nbsp;SN на&nbsp;оценку чистоты поршней<br>
                                    5 — На основании результатов теста ACEA&nbsp;M111 на&nbsp;экономию топлива по&nbsp;сравнению с&nbsp;эталонным маслом
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="overlayed product-wrap" data-product="1">
                <div class="product-popup">
                    <div class="product__img">
                        <img src="/images/service/shell/01.png" alt="">
                    </div>
                    <div class="product__info">
                        <div class="product__title">Shell Helix Ultra ECT AH 5W&#8209;30<img src="/images/service/shell/shell_logo.jpg" alt="" class="popup-logo"></div>
                        <p class="product__desc">Cинтетическое энергосберегающее моторное масло класса «премиум» для&nbsp;самых современных двигателей Hyundai, созданное на&nbsp;основе технологии Shell&nbsp;PurePlus и&nbsp;технологии активных моющих присадок. Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей (без&nbsp;сажевых фильтров) Hyundai.</p>
                        <div>
                            <ul id="accordion--product1" class="df-accordion popup-accordion">
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Высокий уровень моющих свойств</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Помогает защитить двигатели Hyundai от образования отложений, снижающих его  мощность и эффективность
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенные низкотемпературные свойства</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Более легкий холодный пуск, быстрая подача масла для ускоренного прогрева.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенная защита от износа и коррозии</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Помогает увеличить ресурс двигателей Hyundai, защищая его рабочие поверхности от износа и нейтрализуя кислоты, образующиеся при сгорании топлива
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Спецификации, Одобрения и Рекомендации</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        API SL; ACEA A5/B5
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="df-close-button closeIt">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.00012207" y="14.5453" width="20.5702" height="2.05702" transform="rotate(-45 0.00012207 14.5453)"></rect>
                            <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)" ></rect>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="overlayed product-wrap" data-product="2">
                <div class="product-popup">
                    <div class="product__img">
                        <img src="/images/service/shell/04.png" alt="">
                    </div>
                    <div class="product__info">
                        <div class="product__title">Shell Helix Ultra 0W&#8209;40<img src="/images/service/shell/shell_logo.jpg" alt="" class="popup-logo"></div>
                        <p class="product__desc">Cинтетическое энергосберегающее моторное масло класса «премиум» для&nbsp;самых современных двигателей Hyundai, созданное на&nbsp;основе технологии Shell&nbsp;PurePlus и&nbsp;технологии активных моющих присадок. Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей (без&nbsp;сажевых фильтров) Hyundai.</p>
                        <div>
                            <ul id="accordion--product1" class="df-accordion popup-accordion">
                                <li class="df-accordion__item">
                                    <a href="#"class="df-accordion__header js-open-section">
                                        <h5>Низкая испаряемость</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Низкий расход масла для менее частого долива
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенные низкотемпературные свойства</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Более легкий холодный пуск, быстрая подача масла для ускоренного прогрева.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Уникальная технология активных моющих присадок</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Активные моющие присадки удерживают загрязнения в объеме масла и предотвращают образование отложений, снижающих эффективность двигателя.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Спецификации, Одобрения и Рекомендации</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        API SL; ACEA A5/B5
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="df-close-button closeIt">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.00012207" y="14.5453" width="20.5702" height="2.05702" transform="rotate(-45 0.00012207 14.5453)"></rect>
                            <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)" ></rect>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="overlayed product-wrap" data-product="3">
                <div class="product-popup">
                    <div class="product__img">
                        <img src="/images/service/shell/05.png" alt="">
                    </div>
                    <div class="product__info">
                        <div class="product__title">Shell Helix Ultra 0W&#8209;30<img src="/images/service/shell/shell_logo.jpg" alt="" class="popup-logo"></div>
                        <p class="product__desc">Cинтетическое энергосберегающее моторное масло класса «премиум» для&nbsp;самых современных двигателей Hyundai, созданное на&nbsp;основе технологии Shell&nbsp;PurePlus и&nbsp;технологии активных моющих присадок. Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей (без&nbsp;сажевых фильтров) Hyundai.</p>
                        <div>
                            <ul id="accordion--product1" class="df-accordion popup-accordion">
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Высокий уровень моющих свойств</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Помогает защитить двигатели Hyundai от образования отложений, снижающих его  мощность и эффективность
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенные низкотемпературные свойства</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Более легкий холодный пуск, быстрая подача масла для ускоренного прогрева.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенная защита от износа и коррозии</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Помогает увеличить ресурс двигателей Hyundai, защищая его рабочие поверхности от износа и нейтрализуя кислоты, образующиеся при сгорании топлива
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Спецификации, Одобрения и Рекомендации</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        API SL; ACEA A5/B5
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="df-close-button closeIt">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.00012207" y="14.5453" width="20.5702" height="2.05702" transform="rotate(-45 0.00012207 14.5453)"></rect>
                            <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)" ></rect>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="overlayed product-wrap" data-product="4">
                <div class="product-popup">
                    <div class="product__img">
                        <img src="/images/service/shell/03.png" alt="">
                    </div>
                    <div class="product__info">
                        <div class="product__title">Shell Helix Ultra A5/B5 0W&#8209;30<img src="/images/service/shell/shell_logo.jpg" alt="" class="popup-logo"></div>
                        <p class="product__desc">Cинтетическое энергосберегающее моторное масло класса «премиум» для&nbsp;самых современных двигателей Hyundai, созданное на&nbsp;основе технологии Shell&nbsp;PurePlus и&nbsp;технологии активных моющих присадок. Разработано для&nbsp;бензиновых и&nbsp;дизельных двигателей (без&nbsp;сажевых фильтров) Hyundai.</p>
                        <div>
                            <ul id="accordion--product1" class="df-accordion popup-accordion">
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Низкая испаряемость</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Низкий расход масла для менее частого долива
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Улучшенные низкотемпературные свойства</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Более легкий холодный пуск, быстрая подача масла для ускоренного прогрева.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Уникальная технология активных моющих присадок</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        Активные моющие присадки удерживают загрязнения в объеме масла и предотвращают образование отложений, снижающих эффективность двигателя.
                                    </div>
                                </li>
                                <li class="df-accordion__item">
                                    <a href="#" class="df-accordion__header js-open-section">
                                        <h5>Спецификации, Одобрения и Рекомендации</h5>
                                    </a>
                                    <div class="df-accordion__dropgown">
                                        API SL; ACEA A5/B5
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="df-close-button closeIt">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.00012207" y="14.5453" width="20.5702" height="2.05702" transform="rotate(-45 0.00012207 14.5453)"></rect>
                            <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)" ></rect>
                        </svg>
                    </button>
                </div>
            </div>

            <script type="text/javascript">
                var shellData = [{"name":"SOLARIS New","image":"solarisnew","from":"2017","to":0,"engines":[{"name":"1.4","volume":"3,3","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40","Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"1.6","volume":"3,3","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40","Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"ELANTRA","image":"elantra","from":"2016","to":0,"engines":[{"name":"1.6","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.0","volume":"4,5","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"H-1","image":"h-1","from":"2007","to":0,"engines":[{"name":"2.4","volume":"5,1","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.5","volume":"7,4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"i30","image":"i30","from":"2012","to":"2017","engines":[{"name":"1.4","volume":"3,6","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"1.6","volume":"3,6","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"i40","image":"i40","from":"2011","to":"2017","engines":[{"name":"2.0","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"1.7 D","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30"]}]},{"name":"TUCSON","image":"tucson","from":"2015","to":0,"engines":[{"name":"1.6T","volume":"4,5","values":["Shell Helix Ultra A5\/B5 0W-30"]},{"name":"2.0","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.0 D","volume":"7,6","values":["Shell Helix Ultra ECT AH 5W-30"]}]},{"name":"GRAND SANTA FE","image":"grandsantafe","from":"2013","to":0,"engines":[{"name":"3.3","volume":"5,7","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.2D","volume":"6,3-6,7","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"SANTA FE","image":"santafe","from":"2012","to":0,"engines":[{"name":"2.4","volume":"4,8-5*","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.2D","volume":"6,3-6,7","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"Creta","image":"creta","from":"2016","to":0,"engines":[{"name":"1.6","volume":"3,6","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.0","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]},{"name":"Sonata New","image":"sonatanew","from":"2017","to":0,"engines":[{"name":"2.0","volume":"4","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2,4GDI","volume":"4,8","values":["Shell Helix Ultra A5\/B5 0W-30"]}]},{"name":"ix35","image":"ix35","from":"2010-2015","to":0,"engines":[{"name":"2.0","volume":"4-5,8","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]},{"name":"2.0D","volume":"7,6-8 ","values":["Shell Helix Ultra ECT AH 5W-30","Shell Helix Ultra 0W-30","Shell Helix Ultra 0W-40"]}]}];
            </script>


        </div>
    </content-data>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>