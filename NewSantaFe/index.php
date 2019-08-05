<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый SANTA FE.");
?>

    <content-data>
        <div class="content">

            <!-- <style>
            /* Трансформация прелоадера в конце загрузки */
            .nav {
                z-index: 100
            }

            .banner::after {
                content: '';
                display: block;
                position: absolute;
                top: -52px;
                left: 0;
                right: 0;
                /* bottom: -100px; */
                height: 100vh;
                background-color: #fff;
                transition: 2s;
                transition-delay: 0.5s;
                opacity: 0;
                z-index: 1;
            }

            .preloader-start.banner::after {
                opacity: 1;
            }


            .overflow-hidden {
                overflow: hidden;
            }

            .overflow-hidden .sub-menu {
                z-index: -1;
            }

            .preloader__circle {
                display: block;
                position: absolute;
                bottom: 50%;
                margin-bottom: -75px;
                left: 50%;
                margin-left: -75px;
                width: 150px;
                height: 150px;
                border-width: 15px;
                border-style: solid;
                border-color: #003469;
                border-radius: 50%;
                will-change: transform;
                animation: 0.7s circle;
                animation-delay: 1s;
                animation-fill-mode: forwards;
                z-index: 15;
                opacity: 1;
            }

            @keyframes  circle {
                100% {
                    bottom: 65px;
                    transform: scale(0.4);
                    border-width: 7px;
                    border-style: solid;
                    border-color: #fff;
                    opacity: 1;
                }
            }

            .preloader__circle::after {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                margin-top: 37px;
                width: 30%;
                height: 30%;
                border-right: 7px solid #fff;
                border-bottom: 7px solid #fff;
                transform: rotate(45deg) scale(1);
                transition: 0.5s;
                transition-delay: 1.5s;
                will-change: transform;
            }

            .preloader-start .preloader__circle {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -60px;
                left: 50%;
                margin-left: -60px;
                width: 120px;
                height: 120px;
                background-color: #003469;
                border-width: 0px;
                border-radius: 50%;
                will-change: transform;
                animation: 2s preloader;
                animation-iteration-count: infinite;
                opacity: 1;
            }

            .preloader-start .preloader__circle::after {
                transform: rotate(45deg) scale(0);
            }

            .preloader__inner {
                position: absolute;
                top: 50%;
                margin-top: -60px;
                left: 50%;
                margin-left: -60px;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background-color: #fff;
                opacity: 0;
                will-change: transform;
                transition: 1s;
                transition-delay: 0.5s;
                z-index: 15;
            }

            .preloader-start .preloader__inner {
                animation: 2s preloaderInner;
                animation-iteration-count: infinite;
                opacity: 1;
            }

            .preloader.hidden {
                opacity: 0;
            }

            .preloader__circle.end-animation, .preloader__inner.end-animation{
                animation-iteration-count: 2.5;
                animation-fill-mode: forwards;
            }

            @keyframes  preloader {
                50% {
                    transform: scale(1.25);
                }
            }

            @keyframes  preloaderInner {
                50% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(1.25);
                }
            }
            </style> -->

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
                        <a target="_blank" href="https://www.hyundai.ru/NewSantaFe/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/NewSantaFe" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/25" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazyload lazypreview" data-bgset="/images/santaFe/m_pics/01_title/title.jpg [(max-width: 640px)] | /images/santaFe/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>Новый SANTA&nbsp;FE.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Инновации в каждом мгновении.</span>
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
                <!-- <div class="preloader__inner"></div> -->

                <div id="hotbuttons">
                    <!-- Установим активной модель. model Св-во codeName!!!!!! -->
                    <hot-buttons :car-id="25" model="santa fe" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свой SANTA FE" car-id="25"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'High-tech<br>дизайн.'
                    background = '/images/santaFe/pics/2_design/design_title.jpg'
                    background-mobile = '/images/santaFe/m_pics/02_design/design_title.jpg'
                    :slides="[
			{
				icon: '/images/santaFe/svg/design_1.svg',
				title: 'Уникальная решетка радиатора.',
				description: 'Широкая решетка радиатора с новой геометрией подчеркивает харизматичность SANTA FE.',
				background: '/images/santaFe/pics/2_design/design_1.jpg',
				zoom: 2.6,
				correct: {
					x: 100,
					y: 0
				}
			},
			{
				icon: '/images/santaFe/svg/design_2.svg',
				title: 'Светодиодные ходовые огни.',
				description: 'Хищный прищур ходовых огней добавляет автомобилю очаровательной дерзости.',
				background: '/images/santaFe/pics/2_design/design_2.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/santaFe/svg/design_3.svg',
				title: 'Светодиодные фары.',
				description: 'Расположены отдельно для максимальной видимости в любую погоду.',
				background: '/images/santaFe/pics/2_design/design_3.jpg',
				zoom: 3.6,
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
                High-tech
                <br>дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50" data-order="1">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/design_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/02_design/design_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/design_1.jpg"></div>
                        <div class="s-parallax__description">
                            <span>Панорамная крыша</span> с&nbsp;люком открывает прекрасный вид и&nbsp;наполняет салон светом.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50" data-order="3">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/design_2.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/02_design/design_3.jpg [(max-width: 640px)] | /images/santaFe/tablet/design_4.jpg"></div>
                        <div class="s-parallax__description">
                            <span>Светодиодные задние фонари</span> увеличивают видимость и&nbsp;покоряют своим внешний видом.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50" data-order="2">
                        <div data-bgset="/images/santaFe/m_pics/02_design/design_2a.jpg [(max-width: 640px)] | /images/santaFe/pics/2_design/design_1a.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                        <div data-bgset="/images/santaFe/m_pics/02_design/design_2a.jpg [(max-width: 640px)] | /images/santaFe/pics/2_design/design_2a.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div data-bgset="/images/santaFe/m_pics/02_design/design_2b.jpg [(max-width: 640px)] | /images/santaFe/pics/2_design/design_2b.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div data-bgset="/images/santaFe/m_pics/02_design/design_2c.jpg [(max-width: 640px)] | /images/santaFe/pics/2_design/design_2c.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Легкосплавные диски</span> дополняют инновационный и&nbsp;внушительный образ SANTA&nbsp;FE.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/santaFe/m_pics/02_design/design_4.jpg [(max-width: 640px)] | /images/santaFe/pics/2_design/design_4.jpg">
                        <div class="s-parallax__description">
                            <span>Светодиодные повторители</span> указателей поворота помогают водителю сделать маневры на&nbsp;дороге безопаснее.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <video class="dynamics__video" data-object-fit="cover" id="d-video1" preload="auto" loop muted>
                    <source data-src="/images/santaFe/video/performance_1.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/03_performance/performance_title.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_title.jpg"></div>
                <div class="dynamics__back dynamics__back--view0 lazyload lazypreview" data-bgset="/images/santaFe/m_pics/03_performance/performance_slider_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_slider_1.jpg"></div>
                <div class="dynamics__back dynamics__back--view1 lazyload lazypreview" data-bgset="/images/santaFe/m_pics/03_performance/performance_slider_2.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_slider_2.jpg"></div>
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
                                    R 2.2 CRDI
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    Theta-II 2.4 GDi
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
                                <span id="count2"></span>.4 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                9.3 л / 100 км
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
                                <span id="count4"></span>.4 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                7.5 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="dynamics__graph dynamics__graph--0">
                    <img src="/images/santaFe/pics/3_performance/d1.png">
                </div>
                <div class="dynamics__graph dynamics__graph--1">
                    <img src="/images/santaFe/pics/3_performance/d2.png">
                </div>
            </section>

            <section class="section dynamics dynamics--2">
                <video class="dynamics__video" data-object-fit="cover" id="d-video2" preload="auto" loop muted>
                    <source data-src="/images/santaFe/video/performance_2.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/03_performance/performance_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_1.jpg"></div>
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
                        <img src="/images/santaFe/svg/performance_3.svg">
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
                    title = 'Безупречный<br>комфорт.'
                    background = '/images/santaFe/pics/4_comfort/comfort_title.jpg'
                    background-mobile = '/images/santaFe/m_pics/04_comfort/comfort_title.jpg'
                    :slides="[
            {
                icon: '/images/santaFe/svg/comfort_2.svg',
                title: '7-дюймовая цифровая приборная панель.',
                description: 'Красочная и информативная приборная панель подсказывает водителю всю информацию о состоянии автомобиля и меняет цвет в зависимости от выбранного режима вождения.',
                background: '/images/santaFe/pics/4_comfort/comfort_2.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/santaFe/svg/comfort_1.svg',
                title: '8-дюймовая мультимедиа система с навигацией.',
                description: 'Современная мультимедиа система с большим экраном, навигацией и поддержкой Android Auto™ и Apple CarPlay™ дополняет особую атмосферу технологичности в интерьере автомобиля.',
                background: '/images/santaFe/pics/4_comfort/comfort_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/santaFe/svg/comfort_3.svg',
                title: '4 цвета интерьера.',
                description: 'Благородные и практичные цвета салона — то что нужно для семейного автомобиля.',
                background: '',
                zoom: 3.5,
                tabs: true,
                slides: [
                    {
                        name: 'Коричневый',
                        img: '/images/santaFe/pics/4_comfort/comfort_3a.jpg'
                    },
                    {
                        name: 'Черный',
                        img: '/images/santaFe/pics/4_comfort/comfort_3b.jpg'
                    },
                    {
                        name: 'Бежевый',
                        img: '/images/santaFe/pics/4_comfort/comfort_3c.jpg'
                    },
                    {
                        name: 'Красный',
                        img: '/images/santaFe/pics/4_comfort/comfort_3d.jpg'
                    }
                ],
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
                Безупречный
                <br>комфорт.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50" data-order="1">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/comfort_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/comfort_1.jpg"></div>
                        <div class="s-parallax__description">
                            <span>Система легкого доступа на&nbsp;3&nbsp;ряд сидений</span>. Достаточно нажать всего одну кнопку.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_3.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_6.jpg">
                        <div class="s-parallax__description">
                            Садиться в&nbsp;автомобиль стало проще благодаря <span>ручке для легкой посадки</span>
                            на&nbsp;3&nbsp;ряд сидений.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50" data-order="5">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/comfort_5-2.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_5.jpg [(max-width: 640px)] | /images/santaFe/tablet/comfort_5.jpg"></div>
                        <div class="s-parallax__description">
                            Отличный звук на&nbsp;любом сидении
                            с&nbsp; <span>премиальной аудиосистемой Krell</span>
                            из&nbsp;11&nbsp;динамиков.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="7" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_7.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_9.jpg">
                        <div class="s-parallax__description">
                            В&nbsp;Santa Fe&nbsp;прохладно летом и&nbsp;тепло зимой, об&nbsp;этом <span>заботятся вентиляция
                и&nbsp;подогрев сидений</span>.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_2.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_5.jpg">
                        <div class="s-parallax__description">
                <span>Оконные шторки для заднего ряда
                сидений</span>
                            обеспечивают конфиденциальность
                            и&nbsp;защиту от&nbsp;солнца.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100" data-order="4">
                        <div data-bgset="/images/santaFe/m_pics/04_comfort/comfort_4a.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_7a.jpg" class="lazyload lazypreview s-parallax__bg0"></div>
                        <div data-bgset="/images/santaFe/m_pics/04_comfort/comfort_4b.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_7b.jpg" class="lazyload lazypreview s-parallax__bg"></div>
                        <div data-bgset="/images/santaFe/m_pics/04_comfort/comfort_4c.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_7c.jpg" class="lazyload lazypreview s-parallax__bg"></div>
                        <div class="s-parallax__description s-parallax__description--black">
                            7-местный Santa Fe&nbsp;предлагает <span>несколько конфигураций сидений</span>, чтобы вместить все и&nbsp;всех.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="6" data-bgset="/images/santaFe/m_pics/04_comfort/comfort_6.jpg [(max-width: 640px)] | /images/santaFe/pics/4_comfort/comfort_10.jpg">
                        <div class="s-parallax__description">
                            Больше никаких проводов с&nbsp;новой <span>беспроводной системой подзарядки смартфонов</span>.
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
                <div data-bg="/images/santaFe/pics/5_tech/side_1.png" class="safety__back safety__back--1 lazypreview"></div>
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
                <div data-bg="/images/santaFe/pics/5_tech/side_2.png" class="safety__back safety__back--2 lazypreview">
                    <div class="marker marker--2">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/santaFe/svg/tech_11.svg">
                                <div class="marker__text">
                                    Звуковой
                                    <br>сигнал
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-beep">
                    <div class="schema">
                        <img data-src="/images/santaFe/pics/5_tech/scheme_1_1.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_2.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_3.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_4.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_5.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_6.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_7.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_8.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_9.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_10.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_11.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_12.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_13.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_14.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_15.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_16.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_17.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_18.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_19.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_20.jpg" alt="">
                        <img class="schema__animate" data-src="/images/santaFe/pics/5_tech/scheme_1_21.jpg" alt="">
                    </div>
                    <div class="safety__title">
                        Безопасный выезд с парковки задним ходом.
                    </div>
                    <div class="safety__text">
                        Система предупреждения столкновения сбоку при выезде с&nbsp;парковки задним ходом предупреждает водителя об&nbsp;опасности
                        и&nbsp;автоматически задействует тормоза, останавливая автомобиль.
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
                <div class="s-exit">
                    <div class="s-exit__circle1"></div>
                    <div class="s-exit__circle2"></div>
                    <div class="s-exit__center">
                        <video class="s-exit__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/tech_0.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="s-exit__description">
                        <div class="safety__title">
                            Безопасный выход с&nbsp;задних сидений.
                        </div>
                        <div class="safety__text">
                            Cистема безопасного выхода предотвращает разблокировку замков пассажирских дверей при обнаружении приближающегося сзади (в&nbsp;слепой зоне) транспорта.
                        </div>
                    </div>
                </div>
                <div data-bg="/images/santaFe/pics/5_tech/side_2.png" class="safety__back safety__back--3 lazypreview">
                    <div class="marker marker--3">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/santaFe/svg/tech_21.svg">
                                <div class="marker__text">
                                    Блокировка
                                    <br>дверей
                                </div>
                            </div>
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
                        <img src="/images/santaFe/pics/5_tech/tech_scheme_2.jpg" alt="">
                        <div class="s-back__circle s-back__circle--1"></div>
                        <div class="s-back__circle s-back__circle--2"></div>
                        <div class="s-back__circle s-back__circle--3"></div>
                        <div class="s-back__circle s-back__circle--4"></div>
                    </div>
                    <div class="s-back__description">
                        <div class="safety__title">
                            Система распознавания<br>пассажиров сзади.
                        </div>
                        <div class="safety__text">
                            В&nbsp;случае, если кто-то остался в&nbsp;салоне автомобиля, система распознавания пассажиров на&nbsp;заднем сиденье подаст напоминающий сигнал водителю, покидающему SANTA&nbsp;FE.
                        </div>
                    </div>
                </div>
                <div data-bgset="/images/santaFe/pics/5_tech/scheme_3.jpg [(max-width: 1262px)] | /images/santaFe/pics/5_tech/side_2.png" class="lazyload safety__back safety__back--4 lazypreview">
                    <div class="marker marker--4">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/santaFe/svg/tech_31.svg">
                                <div class="marker__text">
                                    Обнаружен
                                    <br>пассажир
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
                    <li class="s-parallax__item s-parallax__item--50" data-order="1">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/tech_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/05_tech/tech_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/tech_1.jpg"></div>
                        <div class="s-parallax__description">
                            <span>Проекционный экран</span> позволяет удобно контролировать дорожную ситуацию, выводя на&nbsp;лобовое стекло информацию
                            о&nbsp;скорости и&nbsp;подсказки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/santaFe/m_pics/05_tech/tech_3.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_3.jpg">
                        <div class="s-parallax__description">
                            Santa Fe&nbsp;не&nbsp;даст переутомиться&nbsp;&mdash; <span>система предупреждения водителя</span> распознает усталость водителя
                            и&nbsp;сообщит, что нужно отдохнуть.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload lazypreview" data-order="5" data-bgset="/images/santaFe/m_pics/05_tech/tech_5.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_4.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Адаптивный круиз-контроль</span>
                            с&nbsp;ассистентом движения в&nbsp;пробке автоматически поддерживает скорость
                            и&nbsp;дистанцию до&nbsp;следующего впереди автомобиля вплоть до&nbsp;полной остановки и&nbsp;продолжает поездку
                            после возобновления движени
                            при остановке не&nbsp;более 3-х секунд.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="7" data-bgset="/images/santaFe/m_pics/05_tech/tech_7.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_7.jpg">
                        <div class="s-parallax__description">
                            <span>Система кругового обзора</span>, состоящая
                            из&nbsp;4-х камер, помогает водителю полностью контролировать ситуацию
                            во&nbsp;время парковки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="9" data-bgset="/images/santaFe/m_pics/05_tech/tech_9.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_9.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            Открыть багажник за&nbsp;3&nbsp;секунды и&nbsp;загрузить все необходимое &mdash;
                            легко с&nbsp;<span>функцией автоматического
                открывания багажника.</span>
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="2" data-bgset="/images/santaFe/m_pics/05_tech/tech_2.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_2.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            Комфортное вождение ночью с&nbsp;<span>системой адаптивного освещения</span>, автоматически выставляющая дальний и&nbsp;ближний свет фар.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/santaFe/m_pics/05_tech/tech_4.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_5.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Система защиты от&nbsp;случайного столкновения</span> предупреждает о&nbsp;неизбежном столкновении и&nbsp;если
                            нужно экстренно тормозит.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50" data-order="6">
                        <video class="s-parallax__video" data-object-fit="cover" autoplay muted loop>
                            <source data-src="/images/santaFe/video/tech_6.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/santaFe/m_pics/05_tech/tech_6.jpg [(max-width: 640px)] | /images/santaFe/tablet/tech_6.jpg"></div>
                        <div class="s-parallax__description">
                            Менять полосу безопасно с&nbsp;<span>системой предотвращения аварий</span>, которая предупреждает водителя о&nbsp;наличии автомобиля в&nbsp;слепой зоне.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="8" data-bgset="/images/santaFe/m_pics/05_tech/tech_8.jpg [(max-width: 640px)] | /images/santaFe/pics/5_tech/tech_8.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Система удержания полосы</span> сканирует разделительные линии и&nbsp;край дороги
                            и&nbsp;не&nbsp;позволяет непреднамеренно съехать.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="25" model-type="Кроссовер" number-of-seats="5 или 7" engine="Бензиновый / Дизельный" drive="Полный" gear-box="Автоматическая"></specs-section>
                            <div class="specs" style="padding-top: 0px;">
                                <div class="section__center">
                                    <div class="dsclmr df-text-small-12px">
                                        <div class="dsclmr__icon"><svg width="2" height="9" viewBox="0 0 2 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.75H0V9H2V6.75Z" fill="white"></path> <path d="M0.133301 0H1.86663L1.5333 5.55H0.466634L0.133301 0Z" fill="white"></path></svg></div>
                                        <div class="dsclmr__body">Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Santa Fe (Family 2,4л 6AT 4WD) 2 099 000 руб., 2019 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 1 024 000 руб., сумма кредита 1 078 000 руб.. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.08.2019 по 31.08.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <div id="tdpopup">
                <sign-up-test-drive-form-popup v-if="isVisible" page="isModelPage"></sign-up-test-drive-form-popup>
            </div>
            <script>
                //Preloader
                //init();

                // function init(){
                // 	document.querySelector('body').classList.add('overflow-hidden');

                // 	var container = document.querySelector('.content'),
                // 		firstSlideBack = container.querySelector('.banner'),
                // 		str1,
                // 		str2;

                // 	str1 = firstSlideBack.style.backgroundImage.replace('url("','');
                // 	str2 = str1.replace('")','');

                // 	var img = new Image();

                // 	img.src = str2;
                // 	img.onload = function () {
                // 		//Правильно завершаем анимацию в конце цикла
                // 		document.querySelector('.preloader__circle').classList.add('end-animation');
                // 		document.querySelector('.preloader__inner').classList.add('end-animation');
                // 		setTimeout(function() {
                // 			document.querySelector('.preloader__circle').classList.remove('end-animation');
                // 			document.querySelector('.preloader__inner').classList.remove('end-animation');
                // 			document.querySelector('.banner').classList.remove('preloader-start');

                // 			setTimeout(function() {
                // 				document.querySelector('body').classList.remove('overflow-hidden');
                // 			}, 500)
                // 			setTimeout(function () {
                // 				document.querySelector('.banner').classList.add('isEntered');
                // 			}, 1000);
                // 		}, 500)
                // 	};
                // }
            </script>

        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>