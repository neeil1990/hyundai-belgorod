<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Sonata купить. Цена на новый Хендай Солярис");
$APPLICATION->SetTitle("");
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
                        <a target="_blank" href="https://www.hyundai.ru/Sonata/gallery" class="nav__link">
                            Галерея
                        </a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <a target="_blank" href="/test-drive/Sonata" class="df-button nav__button js-open-p-td">
                        Тест-драйв
                    </a>
                    <a target="_blank" href="/configurator/car/24" class="df-button nav__button">
                        Конфигуратор
                    </a>
                    <a target="_blank" href="/find-dealer" class="df-button nav__button">
                        Найти дилера
                    </a>
                </div>
            </section>

            <section class="banner section section--big lazyload lazypreview" data-bgset="/images/cars/sonata/m_pics/01_title/title.jpg [(max-width: 640px)] | /images/cars/sonata/pics/title.jpg">
                <div class="banner__head">
                    <h1 class="banner__title">
                        <span>SONATA.</span>
                    </h1>
                    <div class="banner__subtitle h3">
                        <span>В новом исполнении.</span>
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
                    <hot-buttons :car-id="24" model="Sonata" :buttons="[1,1,1]"></hot-buttons>
                </div>
            </section>

            <section id="view360" class="section">
                <view-360 title="Выбери свою SONATA" car-id="24"></view-360>
            </section>

            <section id="design" class="design">
                <presentation-section
                    title = 'На тон<br>элегантнее.'
                    background = '/images/cars/sonata/pics/2_design/design_title.jpg'
                    background-mobile = '/images/cars/sonata/m_pics/02_design/design_title.jpg'
                    :slides="[
			{
				icon: '/images/cars/sonata/svg/d1.svg',
				title: 'Светодиодные фары.',
				description: 'Яркие светодиодные фары не только улучшают видимость в темное время суток, но и дополняют образ Hyundai Sonata.',
				background: '/images/cars/sonata/pics/2_design/d1.jpg',
				zoom: 2.6,
				correct: {
					x: 100,
					y: 0
				}
			},
			{
				icon: '/images/cars/sonata/svg/d2.svg',
				title: 'Каскадная решётка радиатора.',
				description: 'Визуальная концепция экстерьера строится вокруг массивной решётки радиатора с подчёркнутой геометрией формы.',
				background: '/images/cars/sonata/pics/2_design/d2.jpg',
				zoom: 4,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/sonata/svg/d3.svg',
				title: 'Дневные ходовые огни.',
				description: 'Яркие светодиодные фары не только улучшают видимость в темное время суток, но и дополняют образ Hyundai Sonata.',
				background: '/images/cars/sonata/pics/2_design/d3.jpg',
				zoom: 3.6,
				correct: {
					x: 0,
					y: 0
				}
			},
			{
				icon: '/images/cars/sonata/svg/d4.svg',
				title: 'Легкосплавные диски.',
				description: '18-дюймовые легкосплавные диски элегантно дополняют дизайн экстерьера.',
				background: '/images/cars/sonata/pics/2_design/d4.jpg',
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
                На тон
                <br>Элегантнее
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/sonata/tablet/design_1.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/design_1.jpg">
                        <div class="s-parallax__description">
                            <span>Панорамная крыша</span> с&nbsp;люком открывает прекрасный вид и&nbsp;наполняет салон светом.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/cars/sonata/tablet/design_2.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/design_2.jpg">
                        <div class="s-parallax__description">
                            <span>Интеллектуальная система открывания багажника.</span> Достаточно поднести к автомобилю ключ Smart Key, и багажник откроется автоматически.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/sonata/tablet/design_3.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/design_3.jpg">
                        <div class="s-parallax__description">
                            <span>Выхлопная система с двумя глушителями</span> подчёркивает динамические возможности автомобиля, акцентируя его спортивный характер.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/sonata/pics/2_design/design_4.jpg [(max-width: 640px)] | /images/cars/sonata/pics/2_design/design_4.jpg">
                        <div class="s-parallax__description">
                            <span>Задние комбинированные фонари</span> со светодиодами будут притягивать к себе все взгляды.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="dynamics" class="section dynamics dynamics--1 view0">
                <!-- <div class="dynamics__back lazyload lazypreview" data-bgset="/images/cars/sonata/m_pics/03_performance/performance_title.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/performance_title.jpg"></div> -->
                <div class="dynamics__back dynamics__back--view0 lazyload lazypreview" data-bgset="/images/cars/sonata/m_pics/03_performance/performance_slider_1.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/performance_slider_1.jpg"></div>
                <div class="dynamics__back dynamics__back--view1 lazyload lazypreview" data-bgset="/images/cars/sonata/m_pics/03_performance/performance_slider_2.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/performance_slider_2.jpg"></div>
                <div class="dynamics__head">
                    <h2 class="dynamics__title">
            <span>
                На рывок
                <br>стремительнее.
            </span>
                    </h2>
                    <div class="dynamics__wrap">
                        <ul class="dynamics__tabs">
                            <li class="dynamics__tab">
                                <a data-view="view0" href="#" class="dynamics__link js-change-view active">
                                    Theta 2.4 GDI
                                </a>
                            </li>
                            <li class="dynamics__tab">
                                <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                    Nu 2.0 MPI
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
            </section>

            <section id="comfort" class="comfort">
                <presentation-section
                    title = 'На размер<br>просторнее'
                    background = '/images/cars/sonata/pics/4_comfort/comfort_title.jpg'
                    background-mobile = '/images/cars/sonata/m_pics/04_comfort/comfort_title.jpg'
                    :slides="[
            {
                icon: '/images/cars/sonata/svg/c1.svg',
                title: 'Двухзонный автоматический климат-контроль.',
                description: 'Позволяет водителю и пассажиру на переднем сиденье настраивать режим работы кондиционера независимо друг от друга.',
                background: '/images/cars/sonata/pics/4_comfort/c1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: '/images/cars/sonata/svg/c2.svg',
                title: 'Вентилируемые передние сиденья.',
                description: 'В жаркое время года вы по достоинству оценит вентиляцию сидений. Вы не захотите выходить из автомобиля.',
                background: '/images/cars/sonata/pics/4_comfort/c2.jpg',
                zoom: 1.5,
                correct: {
                    x: 0,
                    y: -230
                }
            },
            {
                icon: '/images/cars/sonata/svg/c3.svg',
                title: 'Автоматический обдув лобового стекла.',
                description: 'Автоматический обдув лобового стекла. При запотевании автоматически включает функцию обдува лобового и боковых стёкол.',
                background: '/images/cars/sonata/pics/4_comfort/c3.jpg',
                zoom: 2.1,
                correct: {
                    x: 0,
                    y: 150
                }
            }
        ]"
                ></presentation-section>
            </section>

            <section class="comfort section s-parallax">
                <div class="s-parallax__head">
                    <h2>
            <span>
                На размер<br>просторнее.
            </span>
                    </h2>
                </div>
                <ul class="s-parallax__list s-parallax__list--left">
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/sonata/tablet/comfort_1.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/comfort_1.jpg">
                        <div class="s-parallax__description">
                            <span>Поддержка Apple CarPlay Android и Auto.</span> Управляйте своим телефоном с экрана мультимедиа системы с помощью тач-скрина или голосом. Используйте установленные приложения. Наслаждайтесь.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="3" data-bgset="/images/cars/sonata/pics/4_comfort/comfort_2.jpg [(max-width: 640px)] | /images/cars/sonata/pics/4_comfort/comfort_2.jpg">
                        <div class="s-parallax__description">
                            <span>Приборная панель Supervision с цветным дисплеем диагональю 4.2 дюйма</span> отображает различную полезную информацию бортового компьютера, включая дальность поездки, максимальное расстояние до необходимой дозаправки и т.д.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="5" data-bgset="/images/cars/sonata/tablet/comfort_3.jpg [(max-width: 640px)] | /images/cars/sonata/tablet/comfort_3.jpg">
                        <div class="s-parallax__description">
                            <span>Система памяти настроек водительского сиденья (IMS)</span> хранить в памяти настройки положения сиденья для двух водителей.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/sonata/pics/4_comfort/comfort_4.jpg [(max-width: 640px)] | /images/cars/sonata/pics/4_comfort/comfort_4.jpg">
                        <div class="s-parallax__description">
                            <span>Шторка на заднем стекте с электроприводом.</span> Регулируйте затемнение заднего стекла с помощью электропривода шторки.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="4" data-bgset="/images/cars/sonata/pics/4_comfort/comfort_5.jpg [(max-width: 640px)] | /images/cars/sonata/pics/4_comfort/comfort_5.jpg">
                        <div class="s-parallax__description">
                            <span>Беспроводная система подзарядки</span> теперь проще, чем когда-либо. Без неудобства. Без проводов.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--50 lazyload lazypreview" data-order="6" data-bgset="/images/cars/sonata/pics/4_comfort/comfort_6.jpg [(max-width: 640px)] | /images/cars/sonata/pics/4_comfort/comfort_6.jpg">
                        <div class="s-parallax__description">
                            <span>Подогрев передних и задних сидений</span> в холодную погоду обеспечивает одинаково комфортные условия как для водителя, так и для остальных пассажиров.
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
                <div data-bgset="/images/cars/i30n/m_pics/safety_1.jpg [(max-width: 640px)] | /images/cars/sonata/pics/5_tech/st.jpg" class="safety__back safety__back--1 lazyload lazypreview"></div>
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
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="1" data-bgset="/images/cars/sonata/pics/5_tech/s1.jpg [(max-width: 640px)] | /images/cars/sonata/pics/5_tech/s1.jpg">
                        <div class="s-parallax__description">
                            Система мониторинга слепых зон (BSD) обнаруживает автомобили и другие объекты в слепых зонах, оповещает с помощью светового и звукового сигналов.
                        </div>
                    </li>
                    <li class="s-parallax__item s-parallax__item--50 lazyload lazypreview" data-order="2" data-bgset="/images/cars/sonata/pics/5_tech/s2.jpg [(max-width: 640px)] | /images/cars/sonata/pics/5_tech/s2.jpg">
                        <div class="s-parallax__description">
                            Динамическая подсветка поворота (DBL) реагирует на поворот рулевого колеса, изменяя луч света и обеспечивая дополнительную боковую подсветку дороги при повороте.
                        </div>
                    </li>
                </ul>
                <ul class="s-parallax__list s-parallax__list--right">
                    <li class="s-parallax__item s-parallax__item--right s-parallax__item--100 lazyload lazypreview" data-order="3" data-bgset="/images/cars/sonata/pics/5_tech/s3.jpg [(max-width: 640px)] | /images/cars/sonata/pics/5_tech/s3.jpg">
                        <div class="s-parallax__description s-parallax__description--black">
                            Система помощи при парковке предупреждает водителя об опасном сближении с объектами во время парковки.
                        </div>
                    </li>
                </ul>
            </section>

            <section id="specs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <specs-section car-id="24" model-type="Седан" number-of-seats="5" engine="Бензиновый" drive="Передний" gear-box="Механическая / Автоматическая"></specs-section>
                            <div class="specs" style="padding-top: 0px;">
                                <div class="section__center">
                                    <div class="dsclmr df-text-small-12px">
                                        <div class="dsclmr__icon"><svg width="2" height="9" viewBox="0 0 2 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.75H0V9H2V6.75Z" fill="white"></path> <path d="M0.133301 0H1.86663L1.5333 5.55H0.466634L0.133301 0Z" fill="white"></path></svg></div>
                                        <div class="dsclmr__body">Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Sonata (Primary 2.0 MPI 6AT) 1 344 000 руб., 2019 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 13.8% годовых, первоначальный взнос 639 700 руб., сумма кредита 704 300 руб.. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.08.2019 по 31.08.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru</div>
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