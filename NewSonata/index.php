<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("SONATA.");
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
                        <a target="_blank" href="/NewSonata/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/NewSonata" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/29" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/title_mob.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>SONATA.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Искусственный интеллект.<br>Истинные чувства.</span>
                    </div>
                </div>
                <div class="blue-label">
                    <div class="blue-label__top">
                        <span>от</span> <span id="price-from"></span> &#8381;
                    </div>
                    <hr>
                    <div class="blue-label__bottom">
                        <!-- В кредит — от <span id="credit-from"></span> ₽/мес -->
                        Доступно в&nbsp;рассрочку
                    </div>
                </div>
                <a href="#view360" class="js-next-slide banner__circle scroll"></a>
                <!-- <div class="preloader__inner"></div> -->

                <div id="hotbuttons">
                    <!-- Установим активной модель. model Св-во codeName!!!!!! -->
                    <hot-buttons :car-id="29" model="NewSonata" :buttons="[1,1,1]" page="isModelPage"></hot-buttons>
                </div>
            </section>

            <div class="reservation">
                <div class="container">
                    <div class="col-md-12 reservation__inner">
                        <div class="reservation__desc">
                            <img src="/images/cars/new-sonata/svg/reserve.svg" alt="" class="reservation__icon">
                            <p class="reservation__text">Мгновенное бронирование у&nbsp;любого дилера</p>
                        </div>
                        <div class="reservation__info">
                            <div class="reservation__stock">
                                <img src="/images/cars/new-sonata/svg/check.svg" alt="">
                                <span class="reservation__stock-text">Есть в наличии</span>
                            </div>
                            <a target="_blank" href="https://showroom.hyundai.ru/" class="reservation__button df-button">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>

            <section id="view360" class="section">
                <view-360 title="Выберите свою SONATA" car-id="29"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                        title = 'Дизайн.'
                        background = '/images/cars/new-sonata/pics/2_design/design_title.jpg'
                        background-mobile = '/images/cars/new-sonata/m_pics/design_title.jpg'
                        :slides="[
			{
				icon: '/images/cars/new-sonata/svg/design1.svg',
				title: 'Светодиодные фары проекционного типа.',
				description: 'Обеспечивают отличную видимость в\u00A0любую погоду и\u00A0невероятно красиво смотрятся.',
				background: '/images/cars/new-sonata/pics/2_design/design_slider_1.jpg',
				zoom: 2.6,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/new-sonata/svg/design2.svg',
				title: 'Каскадная решётка радиатора.',
				description: 'Широкая хромированная решётка радиатора с\u00A0фирменной геометрией подчеркивает харизматичность автомобиля.',
				background: '/images/cars/new-sonata/pics/2_design/design_slider_2.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/new-sonata/svg/wheel.svg',
				title: 'Легкосплавные диски.',
				description: 'Для автомобиля доступны 2\u00A0варианта эффектных дисков с\u00A0глубокой проработкой дизайна\u00A0- 17&quot;\u00A0и\u00A018&quot;.',
				background: '/images/cars/new-sonata/pics/2_design/design_slider_3.jpg',
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
                Дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/new-sonata/m_pics/design_1.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/2_design/design_1.jpg">
                        <div class="s-parallax__description">
                            <span>Скрытые светодиодные ходовые огни</span>&nbsp;— одно из&nbsp;инновационных решений в&nbsp;SONATA.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/02_design_repeater.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/design_3.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_2.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Светодиодные повторители указателей поворота.</span>
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/01_design_led.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/design_2.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_1.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Комбинированные задние LED-фонари</span> создают неповторимое впечатление.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/new-sonata/m_pics/design_4.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/2_design/design_2.jpg">
                        <div class="s-parallax__description">
                            <span>Задний LED-стоп-сигнал.</span>
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <video class="dynamics__video" id="d-video1" preload="auto" loop muted data-object-fit="cover">
                    <source data-src="/images/cars/new-sonata/video/03_performance.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/performance_2.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_3b.jpg"></div>
                <div class="dynamics__head">
                    <h2 class="dynamics__title">
            <span>
                Двигатель
                <br>и трансмиссия.
            </span>
                    </h2>
                    <div class="dynamics__wrap">
                        <ul class="dynamics__tabs">
                            <li class="dynamics__tab">
                                <a data-view="view0" href="#" class="dynamics__link js-change-view active">
                                    2.5 MPi
                                </a>
                            </li>
                            <!-- <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    2.0 MPI
                                </a>
                            </li> -->
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
                                <span id="count2"></span>.2 сек
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
                <!-- <ul class="dynamics__specs dynamics__specs--1">
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
                </ul> -->
                <div class="dynamics__graph dynamics__graph--0">
                    <img src="/images/cars/new-sonata/pics/3_performance/diagram_25mpi.png">
                </div>
                <!-- <div class="dynamics__graph dynamics__graph--1">
                    <img src="/images/cars/new-sonata/pics/3_performance/diagram_25mpi.png">
                </div> -->
            </section>

            <section class="section dynamics dynamics--2">
                <div data-bgset="/images/cars/new-sonata/m_pics/performance_3.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/3_performance/performance_1.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                <div class="dynamics__head">
                    <h2 class="dynamics__title dynamics__title--small">
            <span>
                Двигатель
                <br>и трансмиссия.
            </span>
                    </h2>
                </div>
                <div class="d-composition">
                    <div class="d-composition__icon">
                        <img src="/images/cars/new-sonata/svg/performance.svg">
                    </div>
                    <div class="d-composition__title">
                        6-ступенчатая АКПП.
                    </div>
                    <div class="d-composition__description">
                        Трансмиссия управляется новым удобным электронным селектором. Это повышает надежность и&nbsp;безопасность движения. Аналогично, клавишей управляется электронный стояночный тормоз с&nbsp;режимом автоматического удержания, помогающий водителю расслабиться при движении в&nbsp;плотном городском потоке, убрав ногу с&nbsp;педали тормоза.
                    </div>
                </div>
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                        title = 'Комфорт.'
                        background = '/images/cars/new-sonata/pics/4_comfort/comfort_title.jpg'
                        background-mobile = '/images/cars/new-sonata/m_pics/comfort_1.jpg'
                        :slides="[
            {
                icon: '/images/cars/new-sonata/svg/comfort1.svg',
                title: '10-дюймовая мультимедийная система с\u00A0навигацией.',
                description: 'Навигационный HD-дисплей 10,25\u00A0дюйма обладает интуитивно понятным интерфейсом и\u00A0возможностью настроить одновременное отображение нескольких потоков информации.',
                background: '/images/cars/new-sonata/pics/4_comfort/comfort_slider_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/new-sonata/svg/comfort2.svg',
                title: 'Ваша зона комфорта.',
                description: 'Эргономичные сиденья с\u00A0S-образным изгибом позволяют в\u00A0полной мере насладиться комфортной поездкой, не\u00A0ощущая усталости. Премиальное релаксационное сиденье переднего пассажира обеспечивает самые комфортные ощущения, снимая напряжение с\u00A0мышц.',
                background: '/images/cars/new-sonata/pics/4_comfort/comfort_slider_2.jpg',
                zoom: 1.9,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/new-sonata/svg/comfort3.svg',
                title: 'Беспроводное зарядное устройство.',
                description: 'Чтобы зарядить смартфон во\u00A0время поездки, достаточно положить его на\u00A0специальную площадку системы беспроводной зарядки.',
                background: '/images/cars/new-sonata/pics/4_comfort/comfort_slider_3.jpg',
                zoom: 1.8,
                correct: {
                    x: 0,
                    y: -90
                }
            }
        ]"
                ></presentation-section>
            </section>

            <section class="comfort section s-parallax">
                <div class="s-parallax__head">
                    <h2>
            <span>
                Комфорт.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 s-parallax__item--100-tablet lazyload lazypreview" data-order="1">
                        <div data-bgset="/images/cars/new-sonata/m_pics/comfort_1a.jpg [(max-width: 767px)] | /images/cars/new-sonata/pics/4_comfort/comfort_1a.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
                        <div data-bgset="/images/cars/new-sonata/m_pics/comfort_1b.jpg [(max-width: 767px)] | /images/cars/new-sonata/pics/4_comfort/comfort_1b.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div data-bgset="/images/cars/new-sonata/m_pics/comfort_1c.jpg [(max-width: 767px)] | /images/cars/new-sonata/pics/4_comfort/comfort_1c.jpg" class="s-parallax__bg lazyload lazypreview"></div>
                        <div class="s-parallax__description">
                            Детализация <span>цифровой приборной панели&nbsp;12.3"</span> завораживает глубиной проработки и&nbsp;превосходной чёткостью изображения.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 s-parallax__item--100-mob lazyload lazypreview" data-order="3" data-bgset="/images/cars/new-sonata/m_pics/comfort_3.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_3.jpg">
                        <div class="s-parallax__description">
                            <span>Проекционный дисплей</span> выводит всю важную информацию на&nbsp;лобовое стекло автомобиля.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/new-sonata/m_pics/comfort_4.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_5.jpg">
                        <div class="s-parallax__description">
                            Автоматическая система управления <span>кондиционированием.</span>
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload lazypreview" data-order="8" data-bgset="/images/cars/new-sonata/m_pics/comfort_7.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_7.jpg">
                        <div class="s-parallax__description">
                            <span>Мультимедийная система&nbsp;10.25"</span> с&nbsp;поддержкой Bluetooth для 2&nbsp;устройств.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 s-parallax__item--50-mob lazyload lazypreview" data-order="2" data-bgset="/images/cars/new-sonata/m_pics/comfort_2.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_2.jpg">
                        <div class="s-parallax__description">
                            <span>Премиальная аудиосистема</span> BOSE с&nbsp;12&nbsp;динамиками и&nbsp;память сидений для двух водителей.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="5" data-bgset="/images/cars/new-sonata/m_pics/comfort_5.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_4.jpg">
                        <div class="s-parallax__description">
                            <span>Блок управления</span> передним пассажирским сиденьем.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="7" data-bgset="/images/cars/new-sonata/m_pics/comfort_6.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_6.jpg">
                        <div class="s-parallax__description">
                            <span>Вентилируемые</span> передние сиденья.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="9" data-bgset="/images/cars/new-sonata/m_pics/comfort_8.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/4_comfort/comfort_8.jpg">
                        <div class="s-parallax__description">
                            <span>Система кругового обзора</span> обеспечивает контроль вокруг автомобиля на&nbsp;360&nbsp;градусов.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="safety" class="section safety safety--1">
                <div class="safety__head">
                    <h2 class="safety__main">
            <span>
                Безопасность.
            </span>
                    </h2>
                </div>
                <video class="safety__video" id="d-video2" preload="auto" loop muted data-object-fit="cover">
                    <source data-src="/images/cars/new-sonata/video/04_tech_title.mp4" type="video/mp4">
                </video>
                <div class="safety__back safety__back--0 lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/tech_title.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_4.jpg"></div>
            </section>

            <section class="section safety safety--2">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Безопасность.
            </span>
                    </h2>
                </div>
                <div class="safety__center-pic">
                    <img src="/images/cars/new-sonata/pics/5_tech/tech_1a.png" alt="" class="safety__center-img--change-1">
                    <img src="/images/cars/new-sonata/pics/5_tech/tech_1b.png" alt="" class="safety__center-img--change safety__center-img--change-2">
                </div>
                <div class="safety__center">
                    <p class="safety__title safety__title--right">Самые высокие стандарты безопасности.</p>
                    <p class="safety__text safety__text--left">Новая структура подкапотного пространства обеспечивает максимальную прочность благодаря технологии горячей штамповки. 6&nbsp;подушек безопасности настроены в&nbsp;специальном щадящем режиме для снижения риска возможных травм.</p>
                </div>
            </section>

            <section class="section safety safety--3">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Безопасность.
            </span>
                    </h2>
                </div>
                <div class="s-exit">
                    <div class="s-exit__circle1"></div>
                    <div class="s-exit__circle2"></div>
                    <div class="s-exit__center">
                        <video class="s-exit__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/05_tech_1_fca.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="s-exit__description">
                        <div class="safety__title">
                            Система автоматического торможения перед препятствием.
                        </div>
                        <div class="safety__text">
                            Специальные датчики отслеживают препятствия спереди и,&nbsp;в&nbsp;экстренном случае, задействуют тормоза, останавливая автомобиль.
                        </div>
                    </div>
                </div>
                <div data-bg="/images/cars/new-sonata/pics/5_tech/side_3.png" class="safety__back safety__back--3">
                    <div class="marker marker--3">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/new-sonata/svg/tech1.svg">
                                <div class="marker__text">
                                    Датчик
                                    <br>обнаружения
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
                Безопасность.
            </span>
                    </h2>
                </div>
                <div class="s-back">
                    <div class="s-back__img">
                        <img data-src="/images/cars/new-sonata/pics/5_tech/tech_2_01.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_02.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_03.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_04.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_05.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_06.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_07.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_08.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_09.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_10.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_11.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_12.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_13.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_14.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_15.jpg" alt="">
                        <img class="schema__animate" data-src="/images/cars/new-sonata/pics/5_tech/tech_2_16.jpg" alt="">
                    </div>
                    <div class="s-back__description">
                        <div class="safety__title">
                            Безопасный выезд с&nbsp;парковки задним ходом.
                        </div>
                        <div class="safety__text">
                            Система предотвращения столкновения сбоку при выезде с&nbsp;парковки задним ходом предупреждает водителя об&nbsp;опасности и&nbsp;автоматически задействует тормоза, останавливая автомобиль.
                        </div>
                    </div>
                </div>
                <div data-bgset="/images/cars/new-sonata/pics/5_tech/side_2.png" class="lazyload safety__back safety__back--4 lazypreview">
                    <div class="marker marker--4">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/new-sonata/svg/tech2.svg">
                                <div class="marker__text">
                                    Звуковой
                                    <br>сигнал
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
                Безопасность.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="1">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/06_tech_2_bsm.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/tech_2.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_6.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Система обзора слепых зон</span> проецирует изображение с&nbsp;боковых камер на&nbsp;цифровую приборную панель.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload lazypreview" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/07_tech_3_lfa.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/tech_4.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_7.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Система удержания автомобиля в&nbsp;центре полосы движения</span> помогает водителю придерживаться выбранной полосы, предотвращая аварийные ситуации.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 s-parallax__item--100-mob lazyload lazypreview" data-order="5" data-bgset="/images/cars/new-sonata/m_pics/tech_6.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/5_tech/tech_4.jpg">
                        <div class="s-parallax__description">
                            <span>Cистема безопасного выхода</span> предотвращает разблокировку замков пассажирских дверей при обнаружении приближающегося сзади (в&nbsp;слепой зоне) транспорта.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="2" data-bgset="/images/cars/new-sonata/m_pics/tech_3.jpg [(max-width: 640px)] | /images/cars/new-sonata/pics/5_tech/tech_3.jpg">
                        <div class="s-parallax__description s-parallax__description--black-mob">
                            <span>Адаптивный круиз-контроль с&nbsp;системой Старт-Стоп</span> автоматически поддерживает скорость и&nbsp;дистанцию до&nbsp;впередиидущего автомобиля вплоть до&nbsp;полной остановки (длительностью до&nbsp;3-х секунд).
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="4">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/new-sonata/video/08_tech_4_bca.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/new-sonata/m_pics/tech_5.jpg [(max-width: 640px)] | /images/cars/new-sonata/covers/cover_8.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Система предотвращения столкновений с&nbsp;автомобилями в&nbsp;слепой зоне</span> предупреждает водителя (в&nbsp;случае обнаружения угрозы столкновения при перестроении) подтормаживанием и&nbsp;подруливанием.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="29" model-type="Седан" number-of-seats="5" engine="Бензиновый" drive="Передний" gear-box="Автоматическая"></specs-section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </content-data>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>