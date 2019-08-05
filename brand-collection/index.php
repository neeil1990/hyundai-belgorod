<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бренд-коллекция.");
?>

    <content-data>
        <div class="content">

            <script src="https://api-maps.yandex.ru/2.1/?apikey=ffa519d3-303f-463c-afa2-29eec493cd33&lang=ru_RU" type="text/javascript"></script>
            <section class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner__center">
                                <div class="banner__composition">
                                    <h1 class="banner__title">Бренд-коллекция.</h1>
                                    <div class="banner__subtitle df-banner-subline">Ваш уникальный стиль.</div>
                                </div>
                                <div class="banner__description">
                                    *Приобрести аксессуары вы можете у&nbsp;дилеров Hyundai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <nav class="nav" role="navigation">
                <a href="#" class="nav__head js-menu-open">
                    Главная
                    <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="white"/>
                    </svg>
                </a>
                <ul class="nav__menu">
                    <li class="nav__item">
                        <a href="/brand-collection" class="nav__link df-text-radio-button-14px active">Главная</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/accessories" class="nav__link df-text-radio-button-14px ">Аксессуары</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/office" class="nav__link df-text-radio-button-14px ">Для офиса</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/car" class="nav__link df-text-radio-button-14px ">В автомобиле</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/poli" class="nav__link df-text-radio-button-14px ">Робокар Поли</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/all" class="nav__link df-text-radio-button-14px ">Весь каталог</a>
                    </li>
                    <li class="nav__item">
                        <a href="https://www.hyundai.ru/brand-collection/where-buy" class="nav__link df-text-radio-button-14px ">Где купить</a>
                    </li>
                </ul>
            </nav>

            <section class="new">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="new__title">Новинки</h2>
                            <ul class="new__list owl-carousel js-slider">
                            </ul>
                            <a href="https://www.hyundai.ru/brand-collection/all" class="df-forward-link">
                                Весь каталог
                                <svg>
                                    <use xlink:href="#forward-link"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div id="buy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <where-buy></where-buy>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-product">
                <div class="p-product__center">
                    <ul class="p-product__list owl-carousel js-p-slider">
                    </ul>
                    <div id="buyPopup" class="p-product__find-dealer">
                        <where-buy></where-buy>
                    </div>
                </div>
            </div>

            <script type="text/template" id="list-template">
                <% products.forEach(function(product) { %>
                <li class="p-product__product" data-id="<%- product.id %>">
                    <div class="p-product__img">
                        <img src="<%- product.img %>" alt="">
                    </div>
                    <div class="p-product__right">
                        <a href="#" class="p-product__close js-close-p-product">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14.5454" width="20.5702" height="2.05702" transform="rotate(-45 0 14.5454)"/>
                                <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)"/>
                            </svg>
                        </a>
                        <div class="p-product__top">
                            <div class="p-product__line p-product__line--top">
                                <h2 class="p-product__title"><%= product.name %></h2>
                                <div class="p-product__price p-product__price--mobile df-lead-text-22px"><%= product.price %><sup>*</sup></div>
                            </div>
                            <div class="p-product__art df-text-small-12px">арт. <span><%= product.art %></span></div>
                            <div class="p-product__price df-lead-text-22px"><%= product.price %><sup>*</sup></div>
                            <div class="p-product__text">
                                <%= product.description %>
                            </div>
                            <div class="p-product__line">
                                <div class="p-product__description h6">Материал</div>
                                <div class="p-product__value df-text-small-12px"><%= product.material %></div>
                            </div>
                            <div class="p-product__line">
                                <div class="p-product__description h6">Размер (см)</div>
                                <div class="p-product__value df-text-small-12px"><%= product.size %></div>
                            </div>
                            <div class="p-product__note df-text-small-12px">
                                Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                            </div>
                            <div class="p-product__button df-button js-p-find-dealer">Найти дилера</div>
                        </div>
                        <div class="p-product__dsclmr df-text-small-12px">
                            <div class="p-product__star">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.66411 7.31201L3.96011 5.31401L5.23811 7.31201L6.62411 6.32201L5.16611 4.54001L7.34411 3.96401L6.89411 2.32601L4.71611 3.11801L4.84211 0.76001H3.06011L3.20411 3.11801L1.00811 2.32601L0.558105 3.96401L2.73611 4.54001L1.27811 6.32201L2.66411 7.31201Z" fill="white"/>
                                </svg>
                            </div>
                            Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                        </div>
                    </div>
                </li>
                <% }); %>
            </script>
        </div>
    </content-data>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>