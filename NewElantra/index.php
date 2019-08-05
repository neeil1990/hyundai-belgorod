<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Выберите свою ELANTRA");
$APPLICATION->SetTitle("Выберите свою ELANTRA");
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
                        <a target="_blank" href="https://www.hyundai.ru/NewElantra/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/Elantra" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/27" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazypreview lazyload" data-bgset="/images/cars/elantra/m_pics/title.jpg [(max-width: 640px)] | /images/cars/elantra/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>Новая ELANTRA.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Так устроен комфорт.</span>
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
                    <hot-buttons :car-id="27" model="elantra" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свою ELANTRA" car-id="27"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'Дерзкий<br>дизайн.'
                    background = '/images/cars/elantra/pics/title_design.jpg'
                    background-mobile = '/images/cars/elantra/m_pics/design_title.jpg'
                    :slides="[
			{
				icon: '/images/santaFe/svg/design_1.svg',
				title: 'Новая каскадная решетка радиатора.',
				description: 'Широкая решетка радиатора с новой геометрией подчеркивает харизматичность ELANTRA.',
				background: '/images/cars/elantra/pics/design_slider_1.jpg',
				zoom: 2.6,
				correct: {
					x: 100,
					y: 0
				}
			},
			{
				icon: '/images/santaFe/svg/design_3.svg',
				title: 'Светодиодные фары.',
				description: 'Хищный прищур фар добавляет автомобилю очаровательной дерзости.',
				background: '/images/cars/elantra/pics/design_slider_2.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/elantra/svg/design_3.svg',
				title: 'Новый дизайн дисков.',
				description: 'Новые 17-дюймовые легкосплавные диски дополняют образ ELANTRA.',
				background: '/images/cars/elantra/pics/design_slider_3.jpg',
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
                Дерзкий
                <br>дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/elantra/m_pics/design_4.jpg [(max-width: 640px)] | /images/cars/elantra/pics/design_1.jpg">
                        <div class="s-parallax__description">
                            <span>Электропривод складывания боковых зеркал</span> позволит не&nbsp;переживать о&nbsp;том, что их случайно заденут.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/01_design_led.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/design_6.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Светодиодные задние фонари</span> увеличивают видимость и&nbsp;покоряют своим внешним видом.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/elantra/m_pics/design_5.jpg [(max-width: 640px)] | /images/cars/elantra/pics/design_2.jpg">
                        <div class="s-parallax__description">
                            <span>Подсветка ручек двери</span> поможет открыть автомобиль ночью.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <video class="dynamics__video" id="d-video1" preload="auto" loop muted data-object-fit="cover">
                    <source data-src="/images/cars/elantra/video/02_performance.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/performance_1.jpg [(max-width: 640px)] | /images/cars/elantra/pics/performance_1.jpg"></div>
                <!-- <div class="dynamics__back dynamics__back--view0 lazyload" data-bgset="/images/cars/elantra/m_pics/performance_slider_1.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_slider_1.jpg"></div>
                <div class="dynamics__back dynamics__back--view1 lazyload" data-bgset="/images/cars/elantra/m_pics/performance_slider_2.jpg [(max-width: 640px)] | /images/santaFe/tablet/performance_slider_2.jpg"></div> -->
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
                                    1.6 MPI
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    2.0 MPI
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
                                6.5 л / 100 км
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
                                <span id="count4"></span>.8 сек
                            </div>
                            <div class="dynamics__text">
                                Разгон до 100 км/ч
                            </div>
                        </div>
                    </li>
                    <li class="dynamics__spec">
                        <div class="dynamics__specs-w dynamics__specs-w--2">
                            <div class="dynamics__description">
                                7.0 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="dynamics__graph dynamics__graph--0">
                    <img src="/images/cars/elantra/pics/engine_1.png">
                </div>
                <div class="dynamics__graph dynamics__graph--1">
                    <img src="/images/cars/elantra/pics/engine_2.png">
                </div>
            </section>

            <section class="section dynamics dynamics--2">
                <div data-bgset="/images/cars/elantra/m_pics/performance_3a.jpg [(max-width: 640px)] | /images/cars/elantra/pics/performance_2a.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                <div data-bgset="/images/cars/elantra/m_pics/performance_3b.jpg [(max-width: 640px)] | /images/cars/elantra/pics/performance_2b.jpg" class="s-parallax__bg lazyload lazypreview"></div>
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
                        <img src="/images/cars/elantra/svg/performance.svg">
                    </div>
                    <div class="d-composition__title">
                        6-ступенчатая<br> АКПП и МКПП.
                    </div>
                    <div class="d-composition__description">
                        Неудержимая мощь, помноженная
                        на&nbsp;жгучий темперамент,&nbsp;— вот абсолютная формула скорости. Новая ELANTRA исполняет самые дерзкие желания,
                        чтобы разбудить новые.
                    </div>
                </div>
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                    title = 'Настоящий<br>комфорт.'
                    background = '/images/cars/elantra/pics/title_comfort.jpg'
                    background-mobile = '/images/cars/elantra/m_pics/comfort_title.jpg'
                    :slides="[
            {
                icon: '/images/cars/elantra/svg/comfort_1.svg',
                title: 'Цифровая приборная панель Supervision.',
                description: 'Красочная и лаконичная приборная панель подсказывает водителю всю информацию о состоянии автомобиля.',
                background: '/images/cars/elantra/pics/comfort_slider_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/elantra/svg/comfort_2.svg',
                title: '7-дюймовая мультимедиа система.',
                description: 'Современная мультимедиа система с большим экраном и поддержкой Android Auto™ и Apple CarPlay™ дополняет атмосферу технологичности.',
                background: '/images/cars/elantra/pics/comfort_slider_2.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/santaFe/svg/comfort_3.svg',
                title: '3 цвета интерьера.',
                description: 'Комбинация натуральной и искусственной кожи в отделке сидений.',
                background: '',
                zoom: 3.0,
                tabs: true,
                slides: [
                    {
                        name: 'Черный',
                        img: '/images/cars/elantra/pics/comfort_slider_3a.jpg'
                    },
                    {
                        name: 'Серый',
                        img: '/images/cars/elantra/pics/comfort_slider_3b.jpg'
                    },
                    {
                        name: 'Бежевый',
                        img: '/images/cars/elantra/pics/comfort_slider_3c.jpg'
                    }
                ],
                correct: {
                    x: 0,
                    y: -20
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
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/elantra/m_pics/comfort_4.jpg [(max-width: 640px)] | /images/cars/elantra/pics/comfort_1.jpg">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/03_comfort_warmers.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/comfort_4.jpg">
                        </div>
                        <div class="s-parallax__description">
                            В&nbsp;новой ELANTRA прохладно летом и&nbsp;тепло зимой, об&nbsp;этом заботятся <span>вентиляция и&nbsp;подогрев сидений.</span>
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/cars/elantra/m_pics/comfort_6.jpg [(max-width: 640px)] | /images/cars/elantra/pics/comfort_3.jpg">
                        <div class="s-parallax__description">
                            <span>Подогрев руля</span> сделает комфортным вождение в&nbsp;морозную погоду.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="5" data-bgset="/images/cars/elantra/m_pics/comfort_8.jpg [(max-width: 640px)] | /images/cars/elantra/pics/comfort_5.jpg">
                        <div class="s-parallax__description">
                            Вождение станет более комфортным и&nbsp;безопасным с&nbsp;<span>самозатемняющимся внутрисалонным зеркалом.</span>
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/elantra/m_pics/comfort_5.jpg [(max-width: 640px)] | /images/cars/elantra/pics/comfort_2.jpg">
                        <div class="s-parallax__description">
                            <span>Сохранение настроек сиденья водителя и&nbsp;боковых зеркал</span>&nbsp;—
                            новая ELANTRA радушно встретит вас каждый раз!
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="6" data-bgset="/images/cars/elantra/m_pics/comfort_7.jpg [(max-width: 640px)] | /images/cars/elantra/pics/comfort_4.jpg">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/04_comfort_charger.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/comfort_7.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Беспроводное зарядное устройство</span> стандарта Qi позволит зарядить ваш смартфон в&nbsp;любой момент.
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
                <div data-bgset="/images/cars/elantra/pics/angle_1.png" class="safety__back safety__back--1 lazyload lazypreview"></div>
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
                <div data-bgset="/images/cars/elantra/pics/angle_2.png" class="safety__back safety__back--2 lazyload lazypreview">
                    <div class="marker marker--2">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/elantra/svg/tech_1.svg">
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
                        <img data-src="/images/cars/elantra/pics/tech_scheme_1.jpg" alt="">
                    </div>
                    <div class="safety__title">
                        Система помощи при&nbsp;парковке.
                    </div>
                    <div class="safety__text">
                        Своевременно предупреждает о&nbsp;приближении к&nbsp;препятствию, повышая безопасность манёвра.
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
                        <video class="s-exit__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/05_tech_cam.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="s-exit__description">
                        <div class="safety__title">
                            Камера заднего вида.
                        </div>
                        <div class="safety__text">
                            Помогает водителю полностью контролировать ситуацию во время парковки.
                        </div>
                    </div>
                </div>
                <div data-bg="/images/cars/elantra/pics/angle_3.png" class="safety__back safety__back--3">
                    <div class="marker marker--3">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/elantra/svg/tech_2.svg">
                                <div class="marker__text">
                                    Передача
                                    <br>видео
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
                        <img data-src="/images/cars/elantra/pics/tech/tech_scheme_3_1.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_2.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_3.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_4.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_5.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_6.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_7.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_8.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_9.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_10.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_11.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_12.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_13.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_14.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_15.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_16.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_17.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_18.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_19.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_20.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_21.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_22.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_23.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_24.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_25.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/elantra/pics/tech/tech_scheme_3_26.jpg" alt="">
                    </div>
                    <div class="s-back__description">
                        <div class="safety__title">
                            Система мониторинга «слепых» зон.
                        </div>
                        <div class="safety__text">
                            Менять полосу безопасно&nbsp;— система предупреждает водителя об&nbsp;автомобиле в&nbsp;«слепой» зоне.
                        </div>
                    </div>
                </div>
                <div data-bgset="/images/cars/elantra/pics/angle_4.png" class="lazyload safety__back safety__back--4 lazypreview">
                    <div class="marker marker--4">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/elantra/svg/tech_3.svg">
                                <div class="marker__text">
                                    Датчик
                                    <br>движения
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
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="1">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/06_tech_trunk.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/tech_4.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Интеллектуальная система открывания багажника</span> позволит погрузить вещи, если у&nbsp;вас заняты руки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/elantra/m_pics/tech_6.jpg [(max-width: 640px)] | /images/cars/elantra/pics/tech_3.jpg">
                        <div class="s-parallax__description">
                            <span>Система подушек безопасности</span> система предупреждения водителя с&nbsp;дополнительной подушкой безопасности для&nbsp;защиты ног водителя.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/elantra/video/07_tech_ahss.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/elantra/m_pics/tech_5.jpg">
                        </div>
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Стальной корпус повышенной жесткости</span> обеспечивает надёжную защиту для водителя и пассажиров.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/elantra/m_pics/tech_7.jpg [(max-width: 640px)] | /images/cars/elantra/pics/tech_4.jpg">
                        <div class="s-parallax__description">
                            <span>Безопасные стеклоподъёмники</span> опускают стекло на&nbsp;15&nbsp;сантиметров, если в&nbsp;проёме обнаружен объект.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="27" model-type="Седан" number-of-seats="5" engine="Бензиновый" drive="Передний" gear-box="Автоматическая / Механическая"></specs-section>
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