<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Solaris");
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
                        <a target="_blank" href="https://www.hyundai.ru/Solaris/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/Solaris" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/23" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/01_title/title.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>Новый SOLARIS.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>Свой для каждого.</span>
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
                    <hot-buttons :car-id="23" model="solaris" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свой SOLARIS" car-id="23"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'High-tech<br>дизайн.'
                    background = '/images/cars/Solaris/pics/2_design/design_title.jpg'
                    background-mobile = '/images/cars/Solaris/m_pics/02_design/design_title.jpg'
                    :slides="[
			{
				icon: '/images/cars/Solaris/svg/design_2.svg',
				title: 'Противотуманные фары.',
				description: 'Противотуманные фары обеспечивают великолепную видимость даже в тяжелые погодные условия.',
				background: '/images/cars/Solaris/pics/2_design/design_2.jpg',
				zoom: 2.6,
				correct: {
					x: 100,
					y: 0
				}
			},
			{
				icon: '/images/cars/Solaris/svg/design_1.svg',
				title: 'Новая решетка.',
				description: 'Новая решетка радиатора прибавляет автомобилю элегантности и подчеркивает принадлежность к семейству автомобилей Hyundai.',
				background: '/images/cars/Solaris/pics/2_design/design_1.jpg',
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
                Дерзкий
                <br>дизайн.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/Solaris/video/design_4_1_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/02_design/d1.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/2_design/d1.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Светодиодные дневные ходовые огни</span> помогают новому Solaris соответствовать стилю современного мегаполиса.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/Solaris/m_pics/02_design/d2.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/2_design/d2.jpg">
                        <div class="s-parallax__description">
                            <span>Зеркала с повторителями указателей поворота</span> обеспечивают великолепный обзор в Hyundai Solaris и дополнительную безопасность при маневре.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/Solaris/video/design_4_3_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/Solaris/pics/2_design/d3.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/2_design/d3.jpg">
                        </div>
                        <div class="s-parallax__description">
                            Стильные <span>задние LED-фонари</span> теперь будут притягивать ещё больше восхищенных взглядов.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/03_performance/performance_title.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/performance_title.jpg"></div>
                <div class="dynamics__back dynamics__back--view0 lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/03_performance/performance_slider_1.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/performance_slider_1.jpg"></div>
                <div class="dynamics__back dynamics__back--view1 lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/03_performance/performance_slider_2.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/performance_slider_2.jpg"></div>
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
                                    1.4 MPI
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    1.6 MPI
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
                                9.3 л / 100 км
                            </div>
                            <div class="dynamics__text">
                                Средний расход топлива
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="section dynamics dynamics--2">
                <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/Solaris/m_pics/03_performance/performance_1.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/performance_1.jpg"></div>
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
                        <img src="/images/cars/Solaris/svg/performance_3.svg">
                    </div>
                    <div class="d-composition__title">
                        6-ступенчатая АКПП и МКПП.
                    </div>
                    <div class="d-composition__description">
                        6-ступенчатая коробка АКПП наделяет Hyundai Solaris плавностью переключения и комфортом в движении. 6-ступенчатая МКПП обеспечит экономичную и динамичную езду.
                    </div>
                </div>
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                    title = 'Безупречный<br>комфорт.'
                    background = '/images/cars/Solaris/pics/4_comfort/comfort_title.jpg'
                    background-mobile = '/images/cars/Solaris/m_pics/04_comfort/comfort_title.jpg'
                    :slides="[
            {
                icon: '/images/cars/Solaris/svg/c1.svg',
                title: 'Электроусилитель руля',
                description: 'Электроусилитель рулевого управления создает дополнительное усилие во время поворота рулевого колеса и бережёт ваши силы в пути.',
                background: '/images/cars/Solaris/pics/4_comfort/comfort_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/Solaris/svg/c2.svg',
                title: 'Регулировка руля в четырёх направлениях',
                description: 'Новый Solaris имеет чуткий руль с обогревом, который регулируется в четырёх направлениях.',
                background: '/images/cars/Solaris/pics/4_comfort/comfort_2.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/Solaris/svg/c3.svg',
                title: 'Регулировка водительского сиденья',
                description: 'Задайте нужные положения водительского сидения и совершайте длительные путешествия с максимальным комфортом.',
                background: '/images/cars/Solaris/pics/4_comfort/comfort_3.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: -30
                }
            },
            {
                icon: '/images/cars/Solaris/svg/c4.svg',
                title: 'Кнопка «Старт»',
                description: 'Оцените удобство кнопки запуска двигателя! А ключ зажигания достаточно носить в кармане!',
                background: '/images/cars/Solaris/pics/4_comfort/comfort_4.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/Solaris/svg/c5.svg',
                title: 'Выдвижной подлокотник',
                description: 'Новый Solaris умеет продемонстрировать «чувство локтя» в дальних поездках.',
                background: '/images/cars/Solaris/pics/4_comfort/comfort_5.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: -70
                }
            },
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
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/Solaris/tablet/comfort_1.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_1.jpg">
                        <div class="s-parallax__description">
                            <span>Подогрев форсунок.</span> Благодаря подогреву форсунок стеклоомывателя водитель в любую погоду сможет поддерживать чистоту лобового стекла.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/cars/Solaris/tablet/comfort_2.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_2.jpg">
                        <div class="s-parallax__description">
                            <span>Увеличенный объем бензобака.</span> В новом Solaris мы увеличили ёмкость бензобака, что позволит совершать путешествия на дальние расстояния.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--100 lazyload lazypreview" data-order="5" data-bgset="/images/cars/Solaris/tablet/comfort_3.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_3.jpg">
                        <div class="s-parallax__description">
                            <span>Увеличенный объем бачка омывающей жидкости.</span> Больше объём бачка омывателя в новом Solaris – меньше грязи на стёклах.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="7" data-bgset="/images/cars/Solaris/tablet/comfort_4.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_4.jpg">
                        <div class="s-parallax__description">
                            <span>Бокс для очков.</span> Храните свой аксессуар в удобном и легкодоступном месте.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="9" data-bgset="/images/cars/Solaris/tablet/comfort_5.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_5.jpg">
                        <div class="s-parallax__description">
                            <span>USB и AUX порты</span> помогут упростить взаимодействие с мультимедийной системой автомобиля.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="2" data-bgset="/images/cars/Solaris/tablet/comfort_6.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_6.jpg">
                        <div class="s-parallax__description">
                            <span>Подогрев передних и задних сидений.</span> Быстрый подогрев передних и задних сидений не даст водителю
                            и пассажирам замерзнуть и сделает поездки более комфортными.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/Solaris/video/comfort_4_4_2.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview"  data-bgset="/images/cars/Solaris/tablet/comfort_7.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_7.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Автоматическое открывание багажника.</span> Багажник в новом Solaris открывается автоматически из салона, что позволяет водителю избежать контакта с наружными деталями кузова автомобиля.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="6" data-bgset="/images/cars/Solaris/tablet/comfort_8.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_8.jpg">
                        <div class="s-parallax__description">
                            <span>Полноразмерное запасное колесо.</span> Незаменимая деталь, дающая водителю чувство уверенности.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="8">
                        <video class="s-parallax__video" autoplay muted loop data-object-fit="cover">
                            <source data-src="/images/cars/Solaris/video/comfort_4_8_1.mp4" type="video/mp4">
                        </video>
                        <div class="s-parallax__back lazyload lazypreview" data-bgset="/images/cars/Solaris/tablet/comfort_9.jpg [(max-width: 640px)] | /images/cars/Solaris/tablet/comfort_9.jpg">
                        </div>
                        <div class="s-parallax__description">
                            <span>Современная мультимедиа система с 7″ экраном</span> поддерживает мобильные интерфейсы Apple CarPlay* и Android Auto**, что предоставляет совершенно новый уровень взаимодействия с автомобилем.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="safety" class="section safety safety--1">
                <div class="safety__head">
                    <h2 class="safety__main">
            <span>
                Всесторонняя
                <br>защита.
            </span>
                    </h2>
                </div>
                <div data-bgset="/images/cars/i30n/m_pics/safety_1.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/5_tech/st.jpg" class="safety__back safety__back--1 lazyload lazypreview"></div>
            </section>

            <section class="section s-parallax safety safety--2">
                <div class="safety__head">
                    <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Всесторонняя
                <br>защита.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/Solaris/pics/5_tech/s1.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/5_tech/s1.jpg">
                        <div class="s-parallax__description">
                            <span>Фронтальные и боковые передние подушки безопасности</span>, а также шторки безопасности для передних и задних пассажиров делают Solaris одним из самых защищенных автомобилей в своем классе.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/Solaris/pics/5_tech/s2.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/5_tech/s2.jpg">
                        <div class="s-parallax__description">
                            <span>Государственная система экстренного реагирования при авариях «ЭРА-ГЛОНАСС»</span> – это использование технологий ГЛОНАСС в целях повышения безопасности на транспорте.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/Solaris/pics/5_tech/s3.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/5_tech/s3.jpg">
                        <div class="s-parallax__description">
                            Изображение <span>с камеры заднего вида</span> транслируется на большой дисплей центральной консоли, а динамическая разметка на мониторе поможет с легкостью рассчитать траекторию движения автомобиля.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/cars/Solaris/pics/5_tech/s4.jpg [(max-width: 640px)] | /images/cars/Solaris/pics/5_tech/s4.jpg">
                        <div class="s-parallax__description">
                            <span>Система контроля давления в шинах</span> предназначена для предупреждения об опасном изменении давления в шинах.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="23" model-type="Седан" number-of-seats="5" engine="Бензиновый" drive="Передний" gear-box="Механическая / Автоматическая"></specs-section>
                            <div class="specs" style="padding-top: 0px;">
                                <div class="section__center">
                                    <div class="dsclmr df-text-small-12px">
                                        <div class="dsclmr__icon"><svg width="2" height="9" viewBox="0 0 2 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.75H0V9H2V6.75Z" fill="white"></path> <path d="M0.133301 0H1.86663L1.5333 5.55H0.466634L0.133301 0Z" fill="white"></path></svg></div>
                                        <div class="dsclmr__body">Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Solaris (1.4 6MT Active) 739 000 руб. 2019 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 332 800 руб., сумма кредита 406 200 руб.. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.08.2019 по 31.08.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.</div>
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

        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>