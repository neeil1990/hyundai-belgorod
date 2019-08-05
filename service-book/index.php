<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Электронная сервисная книжка в Мире Хёндэ");
?>

    <content-data>
        <div class="content">

            <section class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="head__banner">
                                <div class="head__composition">
                                    <h1 class="head__title">Электронная сервисная книжка.</h1>
                                    <div class="head__subtitle">
                                        Защищенная база данных с информацией о вашем Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Слайдер с OwlCarousel -->
            <!-- Подключить карусель, подключить файл со стилями _slider-1.sass, подключить код slider-1.js -->
            <section class="slider-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-1__center">
                                <h2 class="slider-1__title">Преимущества</h2>
                                <ul class="slider-1__list owl-carousel js-slider-1">
                                    <li class="slider-1__item slider-1__item--0">
                                        <div class="slider-1__img">
                                            <img src="/images/service/book/slider/0.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Контролируйте техническое состояние вашего автомобиля
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Информация о пройденных ТО записывается автоматически в хронологическом порядке
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--1">
                                        <div class="slider-1__img">
                                            <img src="/images/service/book/slider/1.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Храните сервисную историю
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Все данные об автомобиле надежно защищены
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--2">
                                        <div class="slider-1__img">
                                            <img src="/images/service/book/slider/2.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Следите за гарантийным статусом
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Электронная сервисная книжка всегда под рукой в профиле в Мире Хёндэ
                                        </div>
                                    </li>
                                    <li class="slider-1__item slider-1__item--3">
                                        <div class="slider-1__img">
                                            <img src="/images/service/book/slider/3.svg" alt="">
                                        </div>
                                        <div class="slider-1__sub-title">
                                            Упрощайте процесс обслуживания
                                        </div>
                                        <div class="slider-1__description df-text-main-16px">
                                            Комфортное и быстрое обслуживание автомобиля в дилерских центрах Hyundai
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="access">
                <div class="access__title">
                    <div class="df-banner-subline">Получите доступ к Электронной сервисной книжке удобным для вас способом</div>
                </div>
                <div class="access__block">
                    <h3 class="access__block__title">Онлайн</h3>
                    <div class="access__block__content container">
                        <div class="row">
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="circle h5 hidden-mobile">01</div>
                                <div class="circle-mobile hidden-desctop">
                                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M45.7276 37.2427L45.0205 37.9498L45.7276 38.6569L56.3342 49.2635L49.2632 56.3345L38.6566 45.7279L37.9495 45.0208L37.2424 45.7279L29.1459 53.8244L14.2092 14.2095L53.8241 29.1462L45.7276 37.2427Z" stroke="#666666" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="block-text df-text-main-16px">
                                    Зарегистрируйтесь в программе привилегий Мир Хёндэ
                                </div>
                                <a href="https://mir.hyundai.ru" class="df-button">Зарегистрироваться</a>
                                <div class="show-more hidden-desctop">
                                    <a href="https://mir.hyundai.ru" class="df-iconed-link js-show-more">
                                        <span>Узнать больше</span>
                                        <svg>
                                            <use xlink:href="#arrow-link"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12 collapsed">
                                <div class="circle h5">02</div>
                                <div class="block-text df-text-main-16px">
                                    В разделе «Гараж» введите vin-номер автомобиля, загрузите документы, подтверждающие владение автомобилем: фотографии СТС или ПТС с двух сторон в хорошем качестве
                                </div>
                            </div>
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12 collapsed">
                                <div class="circle h5">03</div>
                                <div class="block-text df-text-main-16px">
                                    После прохождения верификации автомобиля вы получите доступ к информации о вашем автомобиле и остальным возможностям программы привилегий Мир Хёндэ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="access__block access__block--bottom">
                    <div class="access__block__content container">
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <h3 class="access__block__title">В дилерском центре</h3>
                            </div>
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="circle h5 hidden-mobile">01</div>
                                <div class="circle-mobile hidden-desctop">
                                    <svg width="62" height="52" viewBox="0 0 62 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.6572 40.7048C32.2654 40.0057 46.5319 23.4733 46.5319 15.2847C46.5329 6.8566 39.5641 0 30.9993 0C22.4346 0 15.4668 6.8566 15.4668 15.2847C15.4668 23.4723 29.7342 40.0048 30.3415 40.7048C30.6704 41.084 31.3292 41.084 31.6572 40.7048ZM30.9993 1.70361C38.6104 1.70361 44.8006 7.79507 44.8006 15.2847C44.8006 22.1068 32.7121 36.7795 31.3341 38.4295L30.9993 38.8307L30.6655 38.4295C29.2866 36.7795 17.198 22.1068 17.198 15.2847C17.198 7.79603 23.3902 1.70361 30.9993 1.70361Z" fill="#66645F"/>
                                        <path d="M36.968 15.2846C36.968 12.0459 34.2899 9.4115 30.9996 9.4115C27.7094 9.4115 25.0312 12.0459 25.0312 15.2846C25.0312 18.5233 27.7094 21.1577 30.9996 21.1577C34.2899 21.1577 36.968 18.5233 36.968 15.2846ZM26.7644 15.2846C26.7644 12.9863 28.664 11.1151 31.0006 11.1151C33.3371 11.1151 35.2377 12.9854 35.2377 15.2846C35.2377 17.5839 33.3371 19.4541 31.0006 19.4541C28.664 19.4532 26.7644 17.5829 26.7644 15.2846Z" fill="#66645F"/>
                                        <path d="M61.526 50.8269L52.6975 29.4067C52.5642 29.084 52.2489 28.8752 51.8956 28.8752H43.8029C43.326 28.8752 42.9358 29.2564 42.9358 29.7275C42.9358 30.1968 43.325 30.5798 43.8029 30.5798H51.3127L59.4385 50.2964H2.56342L10.6893 30.5798H18.1991C18.676 30.5798 19.0652 30.1977 19.0652 29.7275C19.0652 29.2573 18.6769 28.8752 18.1991 28.8752H10.1054C9.75212 28.8752 9.43585 29.084 9.3035 29.4067L0.475999 50.8269C0.367005 51.0893 0.399119 51.3881 0.55969 51.6227C0.721234 51.8582 0.989825 52 1.27788 52H60.7212C61.0102 52 61.2778 51.8592 61.4394 51.6236C61.6019 51.3881 61.634 51.0902 61.526 50.8269Z" fill="#66645F"/>
                                    </svg>
                                </div>
                                <div class="block-text df-text-main-16px">
                                    Найдите удобный для вас дилерский центр Hyundai
                                </div>
                                <a href="/find-dealer" class="df-button">Найти дилера</a>
                                <div class="show-more hidden-desctop">
                                    <a href="/find-dealer" class="df-iconed-link js-show-more">
                                        <span>Узнать больше</span>
                                        <svg>
                                            <use xlink:href="#arrow-link"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12 collapsed">
                                <div class="circle h5">02</div>
                                <div class="block-text df-text-main-16px">
                                    Сотрудник дилерского центра заполнит за вас все данные для регистрации. Моментально добавит ваш автомобиль в профиль на сайте без загрузки документов
                                </div>
                            </div>
                            <div class="block-data col-xl-4 col-lg-4 col-md-4 col-sm-12 collapsed">
                                <div class="circle h5">03</div>
                                <div class="block-text df-text-main-16px">
                                    Пользуйтесь сервисной книжкой онлайн или получите pdf-версию у дилера, а также остальными возможностями программы привилегий Мира Хёндэ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="slider-1 important-things">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-1__center">
                                <h2 class="slider-1__title">Важно знать</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="df-list">
                                <li class="df-list__item df-text-main-16px">
                                    Электронная сервисная книжка доступна всем зарегистрированным пользователям Мира Хёндэ с верифицированным автомобилем
                                    <br>
                                    Если было проведено техническое обслуживание, оно будет отображено в Электронной сервисной книжке.
                                </li>
                                <li class="df-list__item df-text-main-16px">
                                    Ваши персональные данные надежно защищены.
                                    <br>
                                    Для получения печатной версии Электронной сервисной книжки мы используем верификацию через код подтверждения из смс.
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="df-list">
                                <li class="df-list__item df-text-main-16px">
                                    Пользуйтесь Электронной сервисной книжкой любым удобным способом.
                                    <br>
                                    Вы можете распечать, сохранить PDF или отправить на e-mail документ Электронной сервисной книжки в разделе «Гараж» или обратиться к любому официальному дилеру.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </content-data>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>