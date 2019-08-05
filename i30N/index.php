<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("i30N");
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
                        <a target="_blank" href="https://www.hyundai.ru/i30N/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/i30n" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/28" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazypreview lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/title.jpg [(max-width: 640px)] | /images/cars/i30n/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span><img src="/images/cars/i30n/pics/n.png" alt="" class="title-img"><b class="banner__title-inner">евероятный i30 N.</b></span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Спорткар на каждый день.</span>
                    </div>
                </div>
                <div class="blue-label">
                    <div class="blue-label__top">
                        <span>от</span> <span id="price-from"></span> &#8381;
                    </div>
                    <!-- <hr>
                    <div class="blue-label__bottom">
                        В кредит — от <span id="credit-from"></span> ₽/мес
                    </div> -->
                </div>
                <a href="#view360" class="js-next-slide banner__circle scroll"></a>
                <div class="preloader__inner"></div>

                <div id="hotbuttons">
                    <!-- Установим активной модель. model Св-во codeName или Link!!!!!! -->
                    <hot-buttons :car-id="28" model="i30N" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свой i30 N" car-id="28" default-color="161"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'Дерзкий<br>дизайн.'
                    background = '/images/cars/i30n/pics/title_design.jpg'
                    background-mobile = '/images/cars/i30n/m_pics/design_1.jpg'
                    :slides="[
            {
				icon: '/images/cars/i30n/svg/design_1.svg',
				title: 'Дерзкий дизайн.',
				description: 'Агрессивный бампер с увеличенными воздухозаборниками и каскадная решётка радиатора производят мощное впечатление.',
				background: '/images/cars/i30n/pics/design_slider_1.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/i30n/svg/design_2.svg',
				title: 'Полностью светодиодные фары.',
				description: 'i30 N оснащён светодиодными фарами и дневными ходовыми огнями для максимально эффектного вида и заметности на дороге.',
				background: '/images/cars/i30n/pics/design_slider_2.jpg',
				zoom: 3.0,
				correct: {
					x: -70,
					y: 0
				}
			},
			{
				icon: '/images/cars/i30n/svg/design_3.svg',
				title: 'Спортивный вид.',
				description: 'Эксклюзивные колёса 18&Prime; и 19&Prime; с высокопроизводительными тормозами - бренд N не оставит равнодушным ни один заинтересованный взгляд.',
				background: '/images/cars/i30n/pics/design_slider_3.jpg',
				zoom: 3.6,
				correct: {
					x: 0,
					y: -30
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
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="1">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/i30n/video/stop.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/design_5.jpg">
                        </div>
                        <div class="s-parallax__description">
                            Стильный <span>задний спойлер с&nbsp;тормозным световым сигналом</span> обеспечивает улучшенную аэродинамику.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/i30n/m_pics/design_6.jpg [(max-width: 640px)] | /images/cars/i30n/pics/design_1.jpg">
                        <div class="s-parallax__description">
                            Складные <span>зеркала с&nbsp;электроприводом</span> в&nbsp;чёрном оформлении.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/i30n/m_pics/design_10.jpg [(max-width: 640px)] | /images/cars/i30n/pics/design_3.jpg">
                        <div class="s-parallax__description">
                            Брендированные накладки N на пороги.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/i30n/m_pics/design_7.jpg [(max-width: 640px)] | /images/cars/i30n/pics/design_2.jpg">
                        <div class="s-parallax__description">
                            <span>Задний бампер</span> собирается в&nbsp;единую неповторимую композицию с&nbsp;<span>двойным хромированным раструбом глушителя</span>, смело подчёркивая мощь и&nbsp;спортивный характер.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="5">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/i30n/video/led_v2.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/tech_9.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Задние светодиодные фонари</span> превосходно сочетаются с&nbsp;общим агрессивным дизайном.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <video class="dynamics__video" id="d-video1" preload="auto" loop muted data-object-fit="cover">
                    <source data-src="/images/cars/i30n/video/performance.mp4" type="video/mp4">
                </video>
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/dynamic_1.jpg [(max-width: 640px)] | /images/cars/i30n/pics/title30.04.jpg"></div>
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
                                    2.0 T-GDI
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    2.0 T-GDI PP
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
                </ul>
                <div class="dynamics__graph dynamics__graph--0">
                    <img src="/images/cars/i30n/pics/graph_1.png">
                </div>
                <div class="dynamics__graph dynamics__graph--1">
                    <img src="/images/cars/i30n/pics/graph_2.png">
                </div>
            </section>

            <section class="section dynamics dynamics--2">
                <div data-bgset="/images/cars/i30n/m_pics/dynamic_2.jpg [(max-width: 640px)] | /images/cars/i30n/pics/performance_2.jpg" class="s-parallax__bg0 lazyload lazypreview"></div>
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
                        Настоящий<br> спортсмен.
                    </div>
                    <div class="d-composition__description">
                        Передний привод в&nbsp;сочетании с&nbsp;механической шестиступенчатой коробкой передач дарит i30&nbsp;N взрывную производительность. Укороченный ход рычага переключения передач усиливает это ощущение при каждой поездке.
                    </div>
                </div>
            </section>

            <section class="section s-parallax dynamics dynamics--3">
                <div class="safety__head">
                    <h2 class="presentation__main presentation__main--small">
            <span>
                Великолепная
                <br>динамика.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="1" data-bgset="/images/cars/i30n/m_pics/dynamics_3.jpg [(max-width: 640px)] | /images/cars/i30n/pics/dynamics_1.jpg">
                        <div class="s-parallax__description">
                            <span>Задний спойлер и&nbsp;диффузор</span> создают большее сцепление с&nbsp;поверхностью дороги при поворотах на&nbsp;высоких скоростях, понижая подъёмную силу.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/i30n/video/e-lsd.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/dynamics_4.jpg [(max-width: 640px)] | /images/cars/i30n/pics/dynamics_4.jpg">
                        </div>
                        <div class="s-parallax__description">
                            i30&nbsp;N дерзок и&nbsp;неповторим в&nbsp;поворотах благодаря <span>дифференциалу повышенного трения</span> с&nbsp;электронным управлением (E&#8209;LSD).
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 s-parallax__slider lazyload" data-order="5">
                        <div class="s-parallax__slide s-parallax__slide--1"></div>
                        <div class="s-parallax__slide s-parallax__slide--2"></div>
                        <div class="s-parallax__slide s-parallax__slide--3"></div>
                        <div class="s-parallax__slide s-parallax__slide--4"></div>
                        <div class="s-parallax__slide s-parallax__slide--5"></div>
                        <div class="s-parallax__description s-parallax__description--long">
                            <span>Система контроля движения N</span>. Каждый режим меняет характер автомобиля, адаптируя настройки двигателя, электронной регулировки жёсткости амортизаторов (ECS), рулевого управления и&nbsp;даже звучания двигателя.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="7" data-bgset="/images/cars/i30n/m_pics/dynamics_6.jpg [(max-width: 640px)] | /images/cars/i30n/pics/dynamics_5.jpg">
                        <div class="s-parallax__description">
                            <span>Агрессивные расширенные воздухозаборники</span> спроектированы специально для улучшения аэродинамики и&nbsp;охлаждения тормозов.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/i30n/video/turbo.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/title_2.jpg [(max-width: 640px)] | /images/cars/i30n/pics/_title.jpg">
                        </div>
                        <div class="s-parallax__description">
                            Новый <span>турбированный двигатель</span> с&nbsp;системой прямого впрыска и&nbsp;функцией увеличения наддува позволяет кратковременно увеличивать крутящий момент на&nbsp;7%.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="4" data-bgset="/images/cars/i30n/m_pics/dynamics_5.jpg [(max-width: 640px)] | /images/cars/i30n/pics/dynamics_2.jpg">
                        <div class="s-parallax__description">
                            <span>Система Lauch Control</span> позволяет точнее контролировать крутящий момент и&nbsp;стартовать максимально эффективно.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="6" data-bgset="/images/cars/i30n/m_pics/dynamics_4.jpg [(max-width: 640px)] | /images/cars/i30n/pics/dynamics_4.jpg">
                        <div class="s-parallax__description">
                            В&nbsp;<span>режиме N&nbsp;Custom</span> ты сам подбираешь текущие параметры функционирования и&nbsp;производительности оборудования.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="8">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/i30n/video/multi.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/i30n/m_pics/comfort_7.jpg">
                        </div>
                        <div class="s-parallax__description">
                            Электронная панель для переключения между <span>четырьмя режимами движения.</span>
                        </div>
                    </li>
                </ul>
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                    title = 'Настоящий<br>комфорт.'
                    background = '/images/cars/i30n/pics/title_comfort.jpg'
                    background-mobile = '/images/cars/i30n/m_pics/comfort_1.jpg'
                    :slides="[
            {
                icon: '/images/cars/i30n/svg/comfort_1.svg',
                title: 'Приборная панель N.',
                description: 'Спроектирована под потребности гонщиков. Мониторинг температуры масла двигателя, крутящего момента, режима работы турбины – всё это одним взглядом. Контроль скорости переключения передач и адаптивных пределов «красных зон» происходит в зависимости от температуры двигателя.',
                background: '/images/cars/i30n/pics/comfort_slider_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/i30n/svg/comfort_2.svg',
                title: 'Беспроводная зарядка смартфона.',
                description: 'Удобная ниша зарядного устройства для вашего телефона.',
                background: '/images/cars/i30n/pics/comfort_slider_2.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/i30n/svg/comfort_3.svg',
                title: '2 варианта интерьера.',
                description: 'Комбинация алькантары и кожи в комплектации Ultimate. Тканевый салон в комплектации Sport.',
                background: '',
                zoom: 2.2,
                tabs: true,
                slides: [
                    {
                        name: 'Комбинированный',
                        img: '/images/cars/i30n/pics/comfort_slider_3a.jpg'
                    },
                    {
                        name: 'Ткань',
                        img: '/images/cars/i30n/pics/comfort_slider_3b.jpg'
                    }
                ],
                correct: {
                    x: 0,
                    y: -110
                }
            }
        ]"
                ></presentation-section>
            </section>

            <section class="comfort section s-parallax">
                <div class="s-parallax__head">
                    <h2>
            <span>
                Дерзкий
                <br>дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/i30n/m_pics/comfort_6.jpg [(max-width: 640px)] | /images/cars/i30n/pics/comfort_3.jpg">
                        <!-- <div class="s-parallax__back lazyload" data-bgset="/images/cars/i30n/m_pics/comfort_3.jpg">
                        </div>			 -->
                        <div class="s-parallax__description">
                            В новом i30&nbsp;N двигатель можно запустить <span>по&nbsp;нажатию кнопки "Engine Start Stop".</span>
                        </div>
                    </li>
                    <!-- <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop>
                            <source data-src="/images/cars/i30n/video/multi.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload" data-bgset="/images/cars/i30n/m_pics/comfort_7.jpg">
                        </div>
                        <div class="s-parallax__description">
                            Электронная панель для переключения между  <span>четырьмя режимами движения.</span>
                        </div>
                    </li>                -->
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3" data-bg="/images/cars/i30n/pics/comfort_4.jpg">
                        <div class="s-parallax__description">
                            Электропривод регулировки сидений.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="5" data-bg="/images/cars/i30n/pics/comfort_6.jpg">
                        <div class="s-parallax__description">
                            Регулировка длины подушки сиденья водителя.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="2" data-bgset="/images/cars/i30n/m_pics/comfort_5.jpg [(max-width: 640px)] | /images/cars/i30n/pics/comfort_2.jpg">
                        <div class="s-parallax__description">
                            <span>Подогрев руля и&nbsp;сидений</span> сделает вождение комфортным в&nbsp;холодное время года.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="4" data-bgset="/images/cars/i30n/m_pics/comfort_8.jpg [(max-width: 640px)] | /images/cars/i30n/pics/comfort_5.jpg">
                        <div class="s-parallax__description">
                            <span>Камера заднего вида</span> с&nbsp;динамической разметкой траектории.
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
                <div data-bgset="/images/cars/i30n/m_pics/safety_1.jpg [(max-width: 640px)] | /images/cars/i30n/pics/angle_1.jpg" class="safety__back safety__back--1 lazyload lazypreview"></div>
            </section>

            <section class="section s-parallax safety safety--2">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="3" data-bgset="/images/cars/i30n/m_pics/safety_8.jpg [(max-width: 640px)] | /images/cars/i30n/pics/comfort_10.png">
                        <div class="s-parallax__description">
                            <span>Электронно-управляемая подвеска</span> регулирует работу амортизаторов в&nbsp;зависимости от режима движения.
                        </div>
                    </li>
                </ul>
            </section>

            <!-- <section class="section safety safety--3">
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
                        <video class="s-exit__video" autoplay muted loop>
                            <source data-src="/images/cars/i30n/video/05_tech_cam.mp4" type="video/mp4">
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
                <div data-bg="/images/cars/i30n/pics/angle_3.png" class="safety__back safety__back--3">
                    <div class="marker marker--3">
                        <div class="marker__circle1"></div>
                        <div class="marker__circle2"></div>
                        <div class="marker__center">
                            <div class="marker__composition">
                                <img src="/images/cars/i30n/svg/tech_2.svg">
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
                <div data-bgset="/images/cars/i30n/pics/angle_4.png" class="lazyload safety__back safety__back--4">
                <div class="marker marker--4">
                    <div class="marker__circle1"></div>
                    <div class="marker__circle2"></div>
                    <div class="marker__center">
                        <div class="marker__composition">
                            <img src="/images/cars/i30n/svg/tech_3.svg">
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
                            Настоящий
                            <br>комфорт.
                        </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload" data-order="1">
                        <video class="s-parallax__video" autoplay muted loop>
                            <source data-src="/images/cars/i30n/video/06_tech_trunk.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload" data-bgset="/images/cars/i30n/m_pics/tech_4.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Интеллектуальная система открывания багажника</span> позволит погрузить вещи, если у&nbsp;вас заняты руки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload" data-order="3" data-bgset="/images/cars/i30n/m_pics/tech_6.jpg [(max-width: 640px)] | /images/cars/i30n/pics/tech_3.jpg">
                        <div class="s-parallax__description">
                            <span>Система подушек безопасности</span> система предупреждения водителя с&nbsp;дополнительной подушкой безопасности для&nbsp;защиты ног водителя.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload" data-order="2">
                        <video class="s-parallax__video" autoplay muted loop>
                            <source data-src="/images/cars/i30n/video/07_tech_ahss.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload" data-bgset="/images/cars/i30n/m_pics/tech_5.jpg">
                        </div>
                        <div class="s-parallax__description s-parallax__description--black">
                            <span>Стальной корпус повышенной жесткости</span> обеспечивает надёжную защиту для водителя и пассажиров.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload" data-order="4" data-bgset="/images/cars/i30n/m_pics/tech_7.jpg [(max-width: 640px)] | /images/cars/i30n/pics/tech_4.jpg">
                        <div class="s-parallax__description">
                            <span>Безопасные стеклоподъёмники</span> опускают стекло на&nbsp;15&nbsp;сантиметров, если в&nbsp;проёме обнаружен объект.
                        </div>
                    </li>
                </ul>
            </section> -->

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="28" model-type="Хэтчбэк" number-of-seats="5" engine="Бензиновый" drive="Передний" gear-box="Механическая"></specs-section>
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