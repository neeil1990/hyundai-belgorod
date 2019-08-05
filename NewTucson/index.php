<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый TUCSON.");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <section class="nav">
                <ul class="nav__menu">
                    <li class="nav__item">
                        <a href="#design" class="nav__link scroll">
                            Дизайн
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#dynamics" class="nav__link scroll">
                            Динамика
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#comfort" class="nav__link scroll">
                            Комфорт
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#safety" class="nav__link scroll">
                            Безопасность
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#specs" class="nav__link scroll">
                            Характеристики
                        </a>
                    </li>
                    <li class="nav__item">
                        <a target="_blank" href="https://www.hyundai.ru/NewTucson/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/Tucson" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/26" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazypreview lazyload" data-bgset="/images/cars/tucson/m_pics/title.jpg [(max-width: 640px)] | /images/cars/tucson/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>Новый TUCSON.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Везет тому, кто ведет!</span>
                    </div>
                </div>
                <div class="blue-label">
                    <div class="blue-label__top">
                        <span>от</span> <span id="price-from"></span> &#8381;
                    </div>
                    <hr>
                    <div class="blue-label__bottom">
                        В кредит — от <span id="credit-from"></span> ₽/мес
                    </div>
                </div>
                <a href="#view360" class="js-next-slide banner__circle scroll"></a>

                <div id="hotbuttons">
                    <!-- Установим активной модель. model Св-во codeName!!!!!! -->
                    <hot-buttons :car-id="26" model="tucson" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свой TUCSON" car-id="26"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'Смелый<br>дизайн.'
                    background = '/images/cars/tucson/pics/_title_design.jpg'
                    background-mobile = '/images/cars/tucson/m_pics/design_title.jpg'
                    :slides="[
			{
				icon: '/images/cars/tucson/svg/design_2.svg',
				title: 'Новая каскадная решетка радиатора.',
				description: 'Фирменная хромированная решетка радиатора создает неповторимый и легко узнаваемый облик TUCSON.',
				background: '/images/cars/tucson/pics/design_3b.jpg',
				zoom: 2.6,
				correct: {
					x: 100,
					y: 0
				}
			},
			{
				icon: '/images/cars/tucson/svg/design_3.svg',
				title: 'Светодиодные фары.',
				description: 'Полностью светодиодные фары обеспечивают отличную видимость в любую погоду и дополняют технологичный образ обновлённого TUCSON.',
				background: '/images/cars/tucson/pics/design_3a.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			}
		]"
                ></presentation-section>
            </section>

            <section class="section s-parallax design design--2">
                <div class="s-parallax__head">
                    <h2>
            <span>
                Смелый
                <br>дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/tucson/m_pics/design_1a.jpg [(max-width: 640px)] | /images/cars/tucson/pics/design_2a.jpg">
                        <div data-bgset="/images/cars/tucson/m_pics/design_1a.jpg [(max-width: 640px)] | /images/cars/tucson/pics/design_2a.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                        <div data-bgset="/images/cars/tucson/m_pics/design_1b.jpg [(max-width: 640px)] | /images/cars/tucson/pics/design_2b.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div data-bgset="/images/cars/tucson/m_pics/design_1c.jpg [(max-width: 640px)] | /images/cars/tucson/pics/design_2c.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>17,&nbsp;18&nbsp;или 19-дюймовые<br>легкосплавные диски</span> добавляют образу TUCSON динамики и&nbsp;индивидуальности.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/tucson/video/1_led_rear_lamp.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/tucson/m_pics/design_2.jpg">
                        </div>
                        <div class="s-parallax__description s-parallax__description--black-mob">
                            <span>Светодиодные задние фонари</span> увеличивают видимость и&nbsp;покоряют своим внешним видом.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/tucson/m_pics/design_3.jpg [(max-width: 640px)] | /images/cars/tucson/pics/design_1.jpg">
                        <div class="s-parallax__description">
                            <span>Панорамная крыша с&nbsp;люком</span> дарит чувство открытого пространства, создавая особую атмосферу в&nbsp;салоне автомобиля.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <video class="dynamics__video" id="d-video1" preload="auto" loop muted data-object-fit="cover">
                    <source data-src="/images/cars/tucson/video/2_performance.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/tucson/m_pics/performance_2.jpg"></div>
                <div class="dynamics__head">
                    <h2 class="dynamics__title">
            <span>
                Великолепная
                <br>динамика.
            </span>
                    </h2>
                    <div class="dynamics__wrap">
                        <ul class="dynamics__tabs">
                            <li class="dynamics__tab">
                                <a data-view="view0" href="#" class="dynamics__link js-change-view active">
                                    2.0 MPI
                                </a>
                            </li>
                            <li class="dynamics__tab dynamics__tab--right">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    1.6 T-GDi
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view2" href="#" class="dynamics__link js-change-view">
                                    2.0 Diesel
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="dynamics__specs dynamics__specs--0">
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--0">
                            <div class="dynamics__description">
                                <span id="count1"></span> л.с.
                            </div>
                            <div class="dynamics__text">
                                Максимальная мощность
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--1">
                            <div class="dynamics__description">
                                <span id="count2"></span>.1 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                7.9 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="dynamics__specs dynamics__specs--1">
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--0">
                            <div class="dynamics__description">
                                <span id="count3"></span> л.с.
                            </div>
                            <div class="dynamics__text">
                                Максимальная мощность
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--1">
                            <div class="dynamics__description">
                                <span id="count4"></span>.1 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                7.7 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="dynamics__specs dynamics__specs--2">
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--0">
                            <div class="dynamics__description">
                                <span id="count5"></span> л.с.
                            </div>
                            <div class="dynamics__text">
                                Максимальная мощность
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--1">
                            <div class="dynamics__description">
                                <span id="count6"></span>.5 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                6.8 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="section dynamics dynamics--2">
                <div data-bgset="/images/cars/tucson/m_pics/performance_3.jpg [(max-width: 640px)] | /images/cars/tucson/pics/performance_1.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                <div class="dynamics__head">
                    <h2 class="dynamics__title dynamics__title--small">
            <span>
                Великолепная
                <br>динамика.
            </span>
                    </h2>
                </div>
                <div class="d-composition">
                    <div class="d-composition__icon">
                        <img src="/images/cars/tucson/svg/performance_1.svg">
                    </div>
                    <div class="d-composition__title">
                        Система управления полным приводом HTRAC.
                    </div>
                    <div class="d-composition__description">
                        HTRAC создает идеальный режим для комфортного вождения, подстраиваясь под тип дороги, и&nbsp;обеспечивает устойчивость на&nbsp;поворотах и&nbsp;скользком покрытии.
                    </div>
                </div>
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                    title = 'Настоящий<br>комфорт.'
                    background = '/images/cars/tucson/pics/comfort_title.jpg'
                    background-mobile = '/images/cars/tucson/m_pics/comfort_title.jpg'
                    :slides="[
            {
                icon: '/images/cars/tucson/svg/comfort_3.svg',
                title: 'Беспроводное зарядное устройство.',
                description: 'Чтобы зарядить смартфон во время поездки, достаточно положить его в гнездо беспроводной зарядки. Здесь же под рукой – разъемы AUX, USB и 12V.',
                background: '/images/cars/tucson/pics/comfort_3.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/tucson/svg/comfort_1.svg',
                title: '8-дюймовая мультимедиа система с навигацией.',
                description: 'Современная мультимедиа система с большим экраном, навигацией и поддержкой Android Auto™ и Apple CarPlay™.',
                background: '/images/cars/tucson/pics/comfort_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 50
                }
            },
            {
                icon: '/images/cars/tucson/svg/comfort_2.svg',
                title: 'Подогрев и вентиляция сидений.',
                description: 'В обновленном TUCSON прохладно летом и тепло зимой. Об этом заботятся вентиляция и подогрев передних сидений, и подогрев задних сидений.',
                background: '/images/cars/tucson/pics/comfort_2.jpg',
                zoom: 2.5,
                correct: {
                    x: 0,
                    y: 0
                }
            }
        ]"
                ></presentation-section>
            </section>

            <section class="comfort section s-parallax">
                <div class="s-parallax__head">
                    <h2>
            <span>
                Настоящий
                <br>комфорт.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/tucson/m_pics/comfort_2a.jpg [(max-width: 640px)] | /images/cars/tucson/pics/comfort_5a.jpg">
                        <div data-bgset="/images/cars/tucson/m_pics/comfort_2a.jpg [(max-width: 640px)] | /images/cars/tucson/pics/comfort_5a.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                        <div data-bgset="/images/cars/tucson/m_pics/comfort_2b.jpg [(max-width: 640px)] | /images/cars/tucson/pics/comfort_5b.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div class="s-parallax__description">
                            <span>Цвет интерьера и&nbsp;отделка на&nbsp;ваш выбор:</span> чёрный или бежевый, ткань или кожа.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="2" data-bgset="/images/cars/tucson/m_pics/comfort_3.jpg [(max-width: 640px)] | /images/cars/tucson/pics/comfort_6.jpg">
                        <div class="s-parallax__description">
                            <span>Красочная и&nbsp;информативная панель приборов с&nbsp;4.2-дюймовым</span> дисплеем подсказывает водителю всю необходимую информацию.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/tucson/m_pics/comfort_7.jpg [(max-width: 640px)] | /images/cars/tucson/pics/comfort_7.jpg">
                        <video class="s-parallax__video lazyload" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/tucson/video/3_luggage_trunk.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__description">
                            <span>В багажник обновлённого TUCSON</span> помещается всё, что может пригодиться в&nbsp;дороге.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="safety" class="section safety safety--1">
                <div class="safety__head">
                    <h2 class="safety__main">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <div class="safety__circles">
                    <div class="safety__circle1"></div>
                    <div class="safety__circle2"></div>
                </div>
                <div data-bgset="/images/cars/tucson/pics/side_1.png" class="lazyload lazypreview safety__back safety__back--1"></div>
            </section>

            <section class="section safety safety--2">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <div data-bgset="/images/cars/tucson/pics/side_2.png" class="lazyload lazypreview safety__back safety__back--2">
                    <div class="marker marker--2">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/tucson/svg/tech_1.svg">
                                <div class="marker__text">
                                    Автоматическое
                                    <br>торможение
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-beep">
                    <div class="schema">
                        <img data-src="/images/cars/tucson/pics/schem/scheme_1.jpg" alt="">
                    </div>
                    <div class="safety__title">
                        Система предупреждения столкновений с&nbsp;функцией обнаружения пешеходов.
                    </div>
                    <div class="safety__text">
                        Система использует фронтальную камеру и&nbsp;радар для отслеживания движения перед автомобилем. При обнаружении препятствия система автоматически замедлит или остановит автомобиль.
                    </div>
                </div>
            </section>

            <section class="section safety safety--3">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <div class="safety__circles">
                    <div class="safety__circle1"></div>
                    <div class="safety__circle2"></div>
                </div>
                <div data-bgset="/images/cars/tucson/pics/side_3.png" class="lazyload lazypreview safety__back safety__back--3">
                    <div class="marker marker--3">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/tucson/svg/tech_2.svg">
                                <div class="marker__text">
                                    Предупреждение
                                    <br>водителя
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-back">
                    <!-- <div class="schema">
                        <img data-src="/images/cars/tucson/pics/schem/scheme_2.jpg" alt="">
                    </div> -->
                    <div class="s-back__img">
                        <img data-src="/images/cars/tucson/pics/schem/scheme_1_1.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_2.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_3.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_4.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_5.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_6.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_7.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_8.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_9.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_10.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_11.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_12.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_13.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_14.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_15.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_16.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_17.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_18.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_19.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_20.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/tucson/pics/schem/scheme_1_21.jpg" alt="">
                    </div>
                    <div class="s-back__description">
                        <div class="safety__title">
                            Безопасный выезд с&nbsp;парковки задним ходом.
                        </div>
                        <div class="safety__text">
                            Система предупреждения столкновения сбоку при выезде с&nbsp;парковки задним ходом предупреждает водителя об&nbsp;опасности в&nbsp;случае обнаружения двигающегося наперерез автомобиля.
                        </div>
                    </div>
                </div>
            </section>

            <section class="safety section safety--4">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <div class="s-back">
                    <div class="s-back__img">
                        <div class="schema">
                            <img data-src="/images/cars/tucson/pics/schem/scheme_3.jpg" alt="">
                        </div>
                    </div>
                    <div class="s-back__description">
                        <div class="safety__title">
                            Система мониторинга слепых зон.
                        </div>
                        <div class="safety__text">
                            Система предупреждает водителя о&nbsp;транспортных средствах, находящихся в&nbsp;слепой зоне.
                        </div>
                    </div>
                </div>
                <div data-bgset="/images/cars/tucson/pics/side_4.png" class="lazyload safety__back safety__back--4 lazypreview">
                    <div class="marker marker--4">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/tucson/svg/tech_3.svg">
                                <div class="marker__text">
                                    Задняя камера
                                    <br>и радар
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section s-parallax safety safety--5">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/tucson/m_pics/tech_3.jpg [(max-width: 640px)] | /images/cars/tucson/pics/tech_2.jpg">
                        <img src="/images/cars/tucson/pics/tech_2_logo.png" alt="" class="s-parallax__icon">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Прочный кузов и 6 подушек<br>безопасности</span> обеспечивают надёжную защиту для водителя и&nbsp;пассажиров - TUCSON получил 5&nbsp;звёзд по&nbsp;результатам теста EURO NCAP.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/tucson/video/5_parking_assist.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/tucson/m_pics/tech_1.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Камера заднего вида</span> помогает водителю полностью контролировать ситуацию во&nbsp;время парковки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/tucson/m_pics/tech_6.jpg [(max-width: 640px)] | /images/cars/tucson/pics/tech_5.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Система удержания в полосе движения</span> предупреждает водителя о&nbsp;пересечении линии разметки и&nbsp;подруливает в&nbsp;случае необходимости.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="6" data-bgset="/images/cars/tucson/m_pics/tech_7.jpg [(max-width: 640px)] | /images/cars/tucson/pics/tech_6.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Адаптивный круиз-контроль</span> контролирует расстояние до&nbsp;движущегося впереди автомобиля, автоматически ускоряя или замедляя ход.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="2" data-bgset="/images/cars/tucson/m_pics/tech_2.jpg [(max-width: 640px)] | /images/cars/tucson/pics/tech_1.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            В тёмное время суток <span>система автоматически переключает дальний свет на&nbsp;ближний </span> при обнаружении автомобиля, двигающегося по&nbsp;встречной полосе.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="5" data-bgset="/images/cars/tucson/m_pics/tech_4.jpg [(max-width: 640px)] | /images/cars/tucson/pics/tech_3.jpg">
                        <div class="s-parallax__description">
                            С функцией <span>автоматического открывания двери багажника </span>погрузка в&nbsp;автомобиль остаётся легкой, даже если у&nbsp;вас заняты руки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="7">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/tucson/video/4_vehicle_stability_management.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/tucson/m_pics/tech_5.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Система динамической стабилизации</span> сохраняет устойчивость и&nbsp;управляемость автомобиля, предотвращая критические ситуации.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="26" model-type="Универсал" number-of-seats="5" engine="Бензиновый / Дизель" drive="Передний / Полный" gear-box="Автоматическая / Механическая"></specs-section>
                        </div>
                    </div>
                </div>
            </section>

            <div id="tdpopup">
                <sign-up-test-drive-form-popup v-if="isVisible" page="isModelPage"></sign-up-test-drive-form-popup>
            </div>

        </div>
    </content-data>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>