<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обслуживание");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <section class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="head__banner">
                                <div class="head__composition">
                                    <h1 class="head__title">Обслуживание.</h1>
                                    <div class="df-text-main-16px">
                                        Большинство организаций, занимающихся техническим обслуживанием автомобилей подтвердят, что большей части поломок, с которыми сталкиваются владельцы автомобилей, можно избежать, придерживаясь рекомендаций производителя по регулярному обслуживанию и ремонту автомобиля. Надлежащий уход за автомобилем позволит улучшить его ходовые характеристики, снизить расход топлива и повысить безопасность.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section id="app">
                            <div v-if="!init">
                                <div class="placeholder">
                                    <ul class="placeholder__list">
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                        <li class="placeholder__item">
                                            <div class="placeholder__img"></div>
                                            <div class="placeholder__content">
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                                <div class="placeholder__line"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>				</div>
                            <service-calculator v-else></service-calculator>
                        </section>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="find-dealer">
                            <div class="find-dealer__left"></div>
                            <div class="find-dealer__right">
                                <div class="find-dealer__composition">
                                    <h3 class="find-dealer__title">Workshop Automation</h3>
                                    <div class="find-dealer__text df-text-main-16px">
                                        Автоматизированная система обслуживания клиентов и&nbsp;контроля за&nbsp;рабочими процессами в&nbsp;дилерском центре, реализованная как мобильное приложение для планшетных компьютеров.
                                    </div>
                                    <a href="/find-dealer" class="df-iconed-link">
                                        Найти дилера
                                        <svg>
                                            <use xlink:href="#arrow-link"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Слайдер с OwlCarousel -->
            <!-- Подключить карусель, подключить файл со стилями _slider-1.sass, подключить код slider-1.js -->
            <section class="slider-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-1__center">
                                <h2 class="slider-1__title">Преимущества системы WA</h2>
                                <ul class="slider-1__list owl-carousel js-slider-1">
                                    <li class="slider-1__item slider-1__item--0">
                                        <div class="slider-1__img">
                                            <img src="/images/service/slider-1/0.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Обратная связь
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Интерактивный опрос при выдаче автомобиля о качестве обслуживания
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--1">
                                        <div class="slider-1__img">
                                            <img src="/images/service/slider-1/1.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Отслеживание хода работ
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Онлайн информация в клиентской зоне о статусе выполнения работ
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--2">
                                        <div class="slider-1__img">
                                            <img src="/images/service/slider-1/2.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Всегда вовремя
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Отсутствие задержек благодаря системе он-лайн оповещений о ходе выполнения работ между мастером-консультантом и механиком
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--3">
                                        <div class="slider-1__img">
                                            <img src="/images/service/slider-1/3.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Фото и голосовая запись
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Фото и аудио фиксация ваших пожеланий и состояния вашего автомобиля. Фотографии до и после ремонта
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--4">
                                        <div class="slider-1__img">
                                            <img src="/images/service/slider-1/4.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Специальные предложения
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Интерактивное отображение наших специальных предложений для вас
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Слайдер с OwlCarousel -->
            <!-- Подключить карусель, подключить файл со стилями _slider-2.sass, подключить код slider-2.js -->
            <section class="slider-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10 offset-lg-1">
                            <div class="slider-2__center">
                                <h2 class="slider-2__title">Принципы периодического обслуживания</h2>
                                <ul class="slider-2__list owl-carousel js-slider-2">
                                    <li class="slider-2__item slider-2__item--0" style="background-image: url(/images/service/slider-2/0.png)">
                                        <div class="slider-2__wrap">
                                            <div class="slider-2__sub-title">
                                                Регулярность
                                            </div>
                                            <div class="slider-2__description df-text-main-16px">
                                                Чтобы владение автомобилем приносило только положительные эмоции необходимо регулярно проводить техническое обслуживание в соответствии с регламентом завода-изготовителя.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="slider-2__item slider-2__item--1" style="background-image: url(/images/service/slider-2/1.png)">
                                        <div class="slider-2__wrap">
                                            <div class="slider-2__sub-title">
                                                Периодичность
                                            </div>
                                            <div class="slider-2__description df-text-main-16px">
                                                При нормальных условиях эксплуатации периодическое техническое обслуживание нужно проходить каждые 15000 км или 1 раз в год в зависимости от того, что наступит раньше.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="slider-2__item slider-2__item--2" style="background-image: url(/images/service/slider-2/2.png)">
                                        <div class="slider-2__wrap">
                                            <div class="slider-2__sub-title">
                                                Авторизованный сервис
                                            </div>
                                            <div class="slider-2__description df-text-main-16px">
                                                Невыполнение или ненадлежащее выполнение периодического технического обслуживания, в том числе прохождение технического обслуживания НЕ у Авторизованного Сервисного Партнёра Хёндэ (Hyundai), может стать причиной отказа в проведении ремонта автомобиля по гарантии.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="slider-2__item slider-2__item--3" style="background-image: url(/images/service/slider-2/3.png)">
                                        <div class="slider-2__wrap">
                                            <div class="slider-2__sub-title">
                                                Дополнительные работы
                                            </div>
                                            <div class="slider-2__description df-text-main-16px">
                                                По результатам проверок в рамках периодического технического обслуживания Авторизованный Сервисный Партнёр Хёндэ (Hyundai) может порекомендовать проведение дополнительных работ, не входящих в регламент ТО
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Подключить карусель, подключить файл со стилями _sign-up-service.sass -->
            <section class="sign-up-service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10 offset-lg-1">
                            <div class="sign-up-service__center">
                                <div class="sign-up-service__icon">
                                    <svg viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.06674 26.8895C9.84756 26.8895 10.5813 26.5881 11.1309 26.0421L14.1781 23.0134L19.9752 28.7724C20.3116 29.1056 20.8982 29.1066 21.2346 28.7714C21.5819 28.4262 21.5819 27.8652 21.2346 27.5201L14.8078 21.1355C14.4955 20.8252 13.8608 20.8262 13.5485 21.1355L9.87159 24.7908C9.58429 25.0763 9.24393 25.119 9.06674 25.119C8.88956 25.119 8.5482 25.0763 8.26089 24.7898L2.52385 19.0875C2.23654 18.8021 2.1935 18.4639 2.1935 18.2888C2.1935 18.1128 2.23654 17.7746 2.52385 17.4881L16.868 3.23589C17.4326 2.67491 18.6869 2.287 19.4887 2.44714L30.213 4.57767L22.3417 12.3995C22.1766 12.5637 22.0805 12.7924 22.0805 13.0252C22.0805 13.2609 22.1736 13.4837 22.3417 13.6508L28.6354 19.9041C28.9717 20.2373 29.5583 20.2383 29.8947 19.9041C30.0629 19.736 30.156 19.5132 30.156 19.2775C30.156 19.0418 30.0629 18.819 29.8947 18.6519L24.2307 13.0252L31.2171 6.08356C31.8327 5.47185 32.07 4.74079 31.8678 4.07935C31.6656 3.41692 31.0599 2.93949 30.205 2.77139L19.8381 0.711489C19.6018 0.663746 19.3486 0.640869 19.0813 0.640869C17.813 0.640869 16.4175 1.18096 15.6086 1.98463L1.26352 16.2379C0.714941 16.7839 0.411621 17.513 0.411621 18.2888C0.411621 19.0646 0.71394 19.7937 1.26452 20.3398L7.00157 26.0421C7.55215 26.5891 8.28492 26.8895 9.06674 26.8895Z" fill="#66645F"/>
                                        <path d="M43.5082 32.1818C43.1719 31.8476 42.5852 31.8476 42.2489 32.1818C42.0807 32.3489 41.9866 32.5717 41.9866 32.8074C41.9866 33.0432 42.0807 33.266 42.2489 33.4331L56.2346 47.3282C56.606 47.6972 56.7472 48.293 56.622 48.9614C56.5009 49.6159 56.1335 50.2734 55.5899 50.8135L52.2094 54.1724C51.5247 54.8527 50.6748 55.2426 49.8789 55.2426C49.3984 55.2426 48.98 55.0904 48.7017 54.8129L34.9932 41.1943C34.8251 41.0262 34.6018 40.9347 34.3636 40.9347C34.1273 40.9347 33.9021 41.0262 33.7339 41.1943C33.5657 41.3604 33.4736 41.5832 33.4736 41.8199C33.4736 42.0556 33.5657 42.2784 33.7339 42.4455L47.4414 56.0632C48.059 56.6769 48.8979 57.0021 49.8659 57.0021C51.1443 57.0021 52.4566 56.4262 53.4677 55.4226L56.8503 52.0637C58.6882 50.2356 58.9775 47.55 57.4939 46.075L43.5082 32.1818Z" fill="#66645F"/>
                                        <path d="M60.6002 8.74216C60.4851 8.47062 60.2429 8.27268 59.9516 8.21698C59.6623 8.16029 59.3549 8.25577 59.1497 8.45968L53.5368 14.0376C52.9752 14.5926 51.9261 14.5917 51.3685 14.0366L47.9389 10.631C47.6496 10.3435 47.4914 9.9596 47.4914 9.55279C47.4914 9.14698 47.6496 8.76404 47.9389 8.47559L53.5518 2.89863C53.763 2.68975 53.8531 2.39136 53.7961 2.10192C53.739 1.81248 53.5418 1.57078 53.2685 1.45739C51.6989 0.802914 50.0781 0.470703 48.4494 0.470703C45.6124 0.470703 43.0057 1.50812 41.1097 3.39296C38.3238 6.16006 37.4358 10.251 38.7302 14.335L38.8123 14.5907L19.0264 34.2498L18.7792 34.1851C17.7511 33.9136 16.703 33.7763 15.6659 33.7763C12.8259 33.7763 10.2141 34.8167 8.31313 36.7046C5.29395 39.7034 4.53015 44.4459 6.36408 48.7865C6.4792 49.058 6.72146 49.255 7.01276 49.3117C7.31008 49.3684 7.60639 49.2769 7.81461 49.069L13.4295 43.49C13.7078 43.2135 14.1032 43.0544 14.5137 43.0544C14.9241 43.0544 15.3195 43.2135 15.5978 43.491L19.0254 46.8977C19.3157 47.1851 19.4749 47.569 19.4749 47.9749C19.4749 48.3827 19.3147 48.7646 19.0244 49.0521L13.4125 54.63C13.2033 54.8389 13.1112 55.1363 13.1693 55.4267C13.2273 55.7162 13.4245 55.9569 13.6978 56.0713C15.2645 56.7257 16.8872 57.0579 18.5159 57.0579C21.3529 57.0579 23.9596 56.0195 25.8566 54.1347C28.7447 51.2661 29.5886 46.8728 28.0579 42.6704L27.9618 42.4059L47.3833 23.1078L47.6396 23.1884C48.8418 23.5633 50.0741 23.7533 51.2994 23.7533C54.1404 23.7533 56.7522 22.7129 58.6532 20.8251C61.6724 17.8252 62.4362 13.0838 60.6002 8.74216ZM57.3939 19.5728C55.8302 21.1275 53.6649 21.9838 51.2994 21.9838C50.0171 21.9838 48.7307 21.7392 47.4774 21.2578C47.1511 21.1324 46.7717 21.212 46.5254 21.4567L26.2801 41.5733C26.0218 41.83 25.9477 42.2238 26.0949 42.556C27.7466 46.284 27.158 50.3371 24.5963 52.8834C23.0356 54.4341 20.8764 55.2885 18.5159 55.2885C17.8402 55.2885 17.1484 55.2169 16.4577 55.0766L15.6469 54.9125L20.2827 50.3033C20.9094 49.6827 21.2558 48.8551 21.2568 47.9739C21.2568 47.0936 20.9114 46.2661 20.2848 45.6444L16.8571 42.2388C16.2305 41.6161 15.3986 41.272 14.5127 41.272C13.6257 41.272 12.7939 41.6161 12.1692 42.2378L7.52931 46.8489L7.36413 46.0413C6.73848 42.9728 7.56334 39.9501 9.57246 37.9548C11.1361 36.4012 13.3004 35.5438 15.6649 35.5438C16.7741 35.5438 17.8942 35.7298 18.9914 36.0938C19.3097 36.1993 19.6681 36.1147 19.9033 35.88L40.474 15.4431C40.7223 15.1954 40.8024 14.8244 40.6752 14.4982C39.2597 10.8657 39.9064 7.09005 42.368 4.64522C44.3761 2.65096 47.4063 1.82143 50.5076 2.45303L51.3175 2.61714L46.6816 7.22433C46.0539 7.84698 45.7095 8.67353 45.7095 9.55378C45.7095 10.434 46.0539 11.2616 46.6796 11.8842L50.1092 15.2889C50.7348 15.9115 51.5677 16.2547 52.4537 16.2547C53.3376 16.2547 54.1705 15.9125 54.7961 15.2899L59.436 10.6797L59.6002 11.4874C60.2268 14.5549 59.402 17.5776 57.3939 19.5728Z" fill="#66645F"/>
                                    </svg>
                                </div>
                                <div class="sign-up-service__body">
                                    <div class="sign-up-service__text">
                                        <h3 class="sign-up-service__title">Записаться на сервис?</h3>
                                        <div class="sign-up-service__description df-text-main-16px">
                                            Обратитесь к ближайшему официальному дилеру Hyundai или позвоните в службу поддержки клиентов <a href="tel:+74722333377">+7 4722 33-33-77</a>
                                        </div>
                                    </div>
                                    <div class="sign-up-service__buttons">
                                        <a href="#" class="df-button sign-up-service__button js-sign-up-service">Записаться</a>
                                        <a href="/offers#service" class="df-iconed-link sign-up-service____link">
                                            Сервисные акции
                                            <svg>
                                                <use xlink:href="#arrow-link"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="disclamer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10 offset-lg-1">
                            <div class="disclamer__center">
                                <div class="disclamer__star">
                                    <svg>
                                        <use xlink:href="#icon-star"></use>
                                    </svg>
                                </div>
                                <div class="disclamer__text df-text-small-12px">
                                    Стоимость Технического обслуживания носит исключительно информационный характер, указана на&nbsp;основании данных, предоставленных официальными дилерами Hyundai, и&nbsp;может отличаться от&nbsp;действительных цен официальных дилеров Hyundai.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </content-data>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>