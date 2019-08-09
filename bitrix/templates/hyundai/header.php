<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        window.dataLayer = window.dataLayer || [];
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="/images/favicon.ico">

    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta property="description" content="Официальный сайт Hyundai: модели и актуальные цены, обзоры и фото автомобилей, новости, запись на тест-драйв. Спешите купить новый Hyundai!" />

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/libs.css?id=2b939cb1312e066fe2c0">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/master.css?id=ba29d4bc23f02da318c0">

    <? if($APPLICATION->GetCurDir() == "/"): ?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/index/libs.css?id=f5f774e5913cde9ada59">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/index/index.css?id=84be1cfbb27517e3726d">
    <?else:?>
        <?
            $css = $_SERVER["DOCUMENT_ROOT"].$APPLICATION->GetCurDir()."/css.php";
            if (file_exists($css))
                require($css);
        ?>
    <? endif;?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>


<div class="dd-overlay"></div>
<div class="search-field">
    <div class="search-field-inner">
        <input type="text" class="search-input">
        <div class="search-close">
            <span class="df-close-button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.00012207" y="14.5453" width="20.5702" height="2.05702" transform="rotate(-45 0.00012207 14.5453)" fill="#002C5F"></rect>
                    <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)" fill="#002C5F"></rect>
                </svg>
            </span>
        </div>
    </div>
    <div class="search-body">
        <!-- <div class="search-item">
            <div class="search-item-inner">
                <div class="search-item-pic">
                    <img src="/images/news/thumbs/thumb1.jpg" alt="" class="search-pic__img">
                </div>
                <div class="search-item-content">
                    <div class="search-item-header">
                        <span class="search-item-section">Новости</span>
                        <p class="search-item-date">&nbsp;|&nbsp;<span class="search-date">13 сентября 2019</span></p>
                    </div>
                    <div class="search-item-text">
                        В первом обращении в роли сопредседателя Совета по водородным технологиям и релизации
                    </div>
                </div>
            </div>
        </div>
        <div class="search-item search-item--full">
            <div class="search-item-inner">
                <div class="search-item-content">
                    <div class="search-item-header">
                        <span class="search-item-section">Новости</span>
                        <p class="search-item-date">&nbsp;|&nbsp;<span class="search-date">13 сентября 2019</span></p>
                    </div>
                    <div class="search-item-text">
                        В первом обращении в роли сопредседателя Совета по водородным технологиям и релизации
                    </div>
                </div>
            </div>
        </div>
        <div class="search-item">
            <div class="search-item-inner">
                <div class="search-item-pic">
                    <img src="/images/news/thumbs/thumb2.jpg" alt="" class="search-pic__img">
                </div>
                <div class="search-item-content">
                    <div class="search-item-header">
                        <span class="search-item-section">Новости</span>
                        <p class="search-item-date">&nbsp;|&nbsp;<span class="search-date">13 сентября 2019</span></p>
                    </div>
                    <div class="search-item-text">
                        Hyundai Motor представляет автомобиль безопасности i30 Fastback N для гонок WorldSBK на&nbsp;сезон 2019
                    </div>
                </div>
            </div>
        </div>
        <div class="search-item">
            <div class="search-item-inner">
                <div class="search-item-pic">
                    <img src="/images/news/thumbs/thumb3.jpg" alt="" class="search-pic__img">
                </div>
                <div class="search-item-content">
                    <div class="search-item-header">
                        <span class="search-item-section">Спецпредложения</span>
                    </div>
                    <div class="search-item-text">
                        H-Promise. Автомобили с пробегом
                    </div>
                </div>
            </div>
        </div>
        <div class="search-show-all">
            <a href="#">Все результаты (<span class="search-counter">7</span>)</a>
        </div> -->
        <ul class="search-list"></ul>
        <div class="search-show-all">
            <a href="/search" class="search-all__link">Все результаты (<span class="search-counter">0</span>)</a>
        </div>
    </div>
</div>
<header class="header-main" role="navigation">
    <div class="header-top">
        <div class="support-service">
            <a class="support-service__link js-open-support-service__dropdown" href="#" role="button">
                <div class="support-service__text">Служба клиентской поддержки</div>
                <div class="support-service__phone">+7 4722 33-33-77</div>
                <svg role="img" aria-hidden="true" class="support-service__arrow">
                    <use xlink:href="#icon-Arrow_Dropdown"></use>
                </svg>
            </a>
            <div class="support-service__dropdown">
                <a class="support-service__dd-phone" href="tel:+74722333377">+7 4722 33-33-77</a>
                <hr>
                <a class="support-service__dd-mail" href="/contacts/">
                    <svg role="img" aria-hidden="true">
                        <use xlink:href="#icon-mail_icon"></use>
                    </svg>
                    Обратная связь
                </a>
            </div>
        </div>
        <nav class="header-top__nav" role="navigation">
            <ul class="header-top__list">
                <li class="header-top__item">
                    <a href="/service-request" class="header-top__link">
                        Запись на сервис
                    </a>
                </li>
                <li class="header-top__item">
                    <a href="/test-drive" class="header-top__link">
                        Тест-драйв
                    </a>
                </li>
                <li class="header-top__item header-top__item--search js-search">
                    <a href="#" class="header-top__link">
                        <svg role="img" aria-hidden="true" class="icon-magnifier">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-bottom__ps">
                    <div class="header-bottom__wrap">
                        <a href="/" aria-label="На главную" class="header-bottom__logo">
                            <svg role="img" aria-hidden="true">
                                <use xlink:href="#img-hyundai"></use>
                            </svg>
                        </a>
                        <div class="header-bottom__mobile-line">
                            <a href="/" aria-label="На главную" class="header-bottom__m-logo">
                                <svg role="img" aria-hidden="true">
                                    <use xlink:href="#img-hyundai"></use>
                                </svg>
                            </a>
                            <button class="hamburger hamburger--collapse js-open-mobile-menu" type="button" aria-label="Открыть мобильное меню">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <nav class="main-nav" role="navigation">
                            <ul class="main-nav__list">
                                <li class="main-nav__item">
                                    <a href="#" class="main-nav__link main-nav__link--contains-submenu js-main-submenu-open">
                                        Модельный ряд
                                        <svg role="img" aria-hidden="true" class="main-nav__arrow">
                                            <use xlink:href="#icon-Arrow_Dropdown"></use>
                                        </svg>
                                    </a>
                                    <div class="main-nav__dropdown main-nav__dropdown--showroom">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="showroom">
                                                        <a href="#" class="main-nav__dropdown-close js-main-submenu-close" aria-label="Закрыть меню">
                                                            <svg role="img" aria-hidden="true">
                                                                <use xlink:href="#close_icon"></use>
                                                            </svg>
                                                        </a>
                                                        <ul class="showroom__list">
                                                            <li class="showroom__line">
                                                                <h4 class="showroom__title">Новинки</h4>
                                                                <ul class="showroom__cars">
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/promo/solaris_super_series" class="d-car">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">СУПЕР СЕРИЯ</h5>
                                                                                <div class="d-car__name">/ SOLARIS</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 880 000 ₽</div>
                                                                            <div class="d-car__m-name">СУПЕР СЕРИЯ</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/assets/ss/ss_pic.png" alt="СУПЕР СЕРИЯ">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/NewElantra" class="d-car" aria-label="NEWELANTRA">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">Новая ЭЛАНТРА</h5>
                                                                                <div class="d-car__name">/ ELANTRA</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 1 049 000 ₽</div>
                                                                            <div class="d-car__m-name">ELANTRA</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041448.png" alt="Новая ELANTRA">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/i30N" class="d-car" aria-label="I30N">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">i30 N</h5>
                                                                                <div class="d-car__name">/ i30 N</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 2 200 000 ₽</div>
                                                                            <div class="d-car__m-name">i30 N</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041440.png" alt="i30N">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="showroom__line">
                                                                <h4 class="showroom__title">Городские</h4>
                                                                <ul class="showroom__cars">
                                                                    <li class="showroom__car showroom__car first-place">
                                                                        <a href="/Solaris" class="d-car" aria-label="SOLARIS">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">СОЛЯРИС</h5>
                                                                                <div class="d-car__name">/ SOLARIS</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 739 000 ₽</div>
                                                                            <div class="d-car__m-name">SOLARIS</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041395.png" alt="Solaris">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/Sonata" class="d-car" aria-label="SONATA">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">СОНАТА</h5>
                                                                                <div class="d-car__name">/ SONATA</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 1 344 000 ₽</div>
                                                                            <div class="d-car__m-name">SONATA</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041410.png" alt="SONATA">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="showroom__line">
                                                                <h4 class="showroom__title">Кроссоверы</h4>
                                                                <ul class="showroom__cars">
                                                                    <li class="showroom__car showroom__car first-place">
                                                                        <a href="/Creta" class="d-car" aria-label="CRETA">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">КРЕТА</h5>
                                                                                <div class="d-car__name">/ CRETA</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 957 000 ₽</div>
                                                                            <div class="d-car__m-name">CRETA</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041417.png" alt="Creta">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/NewTucson" class="d-car" aria-label="NEWTUCSON">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">Новый ТУССАН</h5>
                                                                                <div class="d-car__name">/ TUCSON</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 1 499 000 ₽</div>
                                                                            <div class="d-car__m-name">TUCSON</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041387.png" alt="Новый TUCSON">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="showroom__car showroom__car">
                                                                        <a href="/NewSantaFe" class="d-car" aria-label="NEWSANTAFE">
                                                                            <div class="d-car__top-line">
                                                                                <h5 class="d-car__title">Новый САНТА ФЭ</h5>
                                                                                <div class="d-car__name">/ SANTA FE</div>
                                                                            </div>
                                                                            <div class="d-car__price">от 2 099 000 ₽</div>
                                                                            <div class="d-car__m-name">SANTA FE</div>
                                                                            <div class="d-car__img">
                                                                                <img class="showroom-lazyload" data-showroomsrc="/storage/cars/1561041379.png" alt="Новый SANTA FE">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="main-nav__item">
                                    <a href="#" data-test="dd-service-open" class="main-nav__link main-nav__link--contains-submenu js-main-submenu-open">
                                        Сервис
                                        <svg role="img" aria-hidden="true" class="main-nav__arrow">
                                            <use xlink:href="#icon-Arrow_Dropdown"></use>
                                        </svg>
                                    </a>
                                    <div data-test="dd-service" class="main-nav__dropdown main-nav__dropdown--grey">
                                        <div class="container df-dropdown">
                                            <ul class="row">
                                                <a href="#" class="main-nav__dropdown-close js-main-submenu-close" aria-label="Закрыть меню">
                                                    <svg role="img" aria-hidden="true">
                                                        <use xlink:href="#close_icon"></use>
                                                    </svg>
                                                </a>
                                                <li class="df-dropdown__item col-lg-3 col-md-12">
                                                    <h4 class="df-dropdown__title js-dropdown-submenu-open">
                                                        Сервисы
                                                        <svg role="img" aria-hidden="true">
                                                            <use xlink:href="#menu-arrow"></use>
                                                        </svg>
                                                    </h4>
                                                    <ul class="df-dropdown__submenu">
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/maintenance#app" class="df-dropdown__link"><span>Калькулятор ТО</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/all-offers#service" class="df-dropdown__link"><span>Акции сервис</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="df-dropdown__item col-lg-3 col-md-12">
                                                    <h4 class="df-dropdown__title js-dropdown-submenu-open">
                                                        Обслуживание и ремонт
                                                        <svg role="img" aria-hidden="true">
                                                            <use xlink:href="#menu-arrow"></use>
                                                        </svg>
                                                    </h4>
                                                    <ul class="df-dropdown__submenu">
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/maintenance" class="df-dropdown__link"><span>Обслуживание</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/bodyworks" class="df-dropdown__link"><span>Кузовной ремонт</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/warranty" class="df-dropdown__link"><span>Гарантия</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/manuals" class="df-dropdown__link"><span>Руководства и каталоги</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service-book" class="df-dropdown__link"><span>Электронная сервисная книжка</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service-request" class="df-dropdown__link"><span>Запись на сервис</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="df-dropdown__item col-lg-3 col-md-12">
                                                    <h4 class="df-dropdown__title js-dropdown-submenu-open">
                                                        Запасные части и аксессуары
                                                        <svg role="img" aria-hidden="true">
                                                            <use xlink:href="#menu-arrow"></use>
                                                        </svg>
                                                    </h4>
                                                    <ul class="df-dropdown__submenu">
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/brand-collection" class="df-dropdown__link"><span>Бренд-коллекция</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/parts" class="df-dropdown__link"><span>Оригинальные запасные части</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="https://acc.hyundai.ru/" class="df-dropdown__link"><span>Оригинальные аксессуары</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/pl2" class="df-dropdown__link"><span>Запчасти Product Line 2</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/shell" class="df-dropdown__link"><span>Моторное масло</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="df-dropdown__item col-lg-3 col-md-12">
                                                    <h4 class="df-dropdown__title js-dropdown-submenu-open">
                                                        Сервисные предложения
                                                        <svg role="img" aria-hidden="true">
                                                            <use xlink:href="#menu-arrow"></use>
                                                        </svg>
                                                    </h4>
                                                    <ul class="df-dropdown__submenu">
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/best" class="df-dropdown__link"><span>Лучшее для своих</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="/service/assistance" class="df-dropdown__link"><span>Помощь на дороге</span></a>
                                                        </li>
                                                        <li class="df-dropdown__submenu-item">
                                                            <a href="https://era.hyundai.ru/" class="df-dropdown__link"><span>На связи</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="main-nav__item">
                                    <a href="https://hpromise.hyundai.ru/" target="_blank" class="main-nav__link">
                                        С пробегом
                                    </a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="/all-offers" class="main-nav__link">
                                        Спецпредложения
                                    </a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="/configurator" class="main-nav__link">
                                        Конфигуратор
                                    </a>
                                </li>
                                
                                <li class="main-nav__item">
                                    <a href="/motorstudio_moscow" class="main-nav__link">
                                        Motorstudio
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mir">
                                    <a href="https://mir.hyundai.ru/" target="_blank" class="main-nav__link main-nav__link--iconed">
                                        Мир Хендэ
                                        <svg role="img" aria-hidden="true">
                                            <use xlink:href="#right-link"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mobile">
                                    <a href="/find-dealer" class="main-nav__link">
                                        Найти дилера
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mobile">
                                    <a href="/service-request" class="main-nav__link">
                                        Запись на сервис
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mobile">
                                    <a href="/test-drive" class="main-nav__link">
                                        Тест-драйв
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mobile js-search">
                                    <a href="#" class="main-nav__link">
                                        <svg role="img" aria-hidden="true" class="icon-magnifier">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                        Поиск
                                    </a>
                                </li>
                                <li class="main-nav__item main-nav__item--mobile main-nav__item--support">
                                    <div class="support-service-m">
                                        <div class="support-service-m__text">Служба клиентской поддержки</div>
                                        <a class="support-service-m__phone" href="tel:+74722333377">+7 4722 33-33-77</a>
                                        <hr>
                                        <a class="support-service-m__mail" href="/contacts/">
                                            <svg role="img" aria-hidden="true">
                                                <use xlink:href="#icon-mail_icon"></use>
                                            </svg>
                                            Обратная связь
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
