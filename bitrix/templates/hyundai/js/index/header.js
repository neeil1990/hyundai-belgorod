//Header
$(function () {
    svg4everybody();

    $('.js-open-support-service__dropdown').on('click', function (e) {
        e.preventDefault();

        $(this).parents('.support-service').toggleClass('isOpened');
    });

    $(document).on('click', function(e) {
        var $target = $(e.target);

        if ($target.closest('.support-service').length === 0) {
            $('.support-service').removeClass('isOpened');
        }
    });

    $('.js-main-submenu-open').on('click', function(e) {
        e.preventDefault();

        lazyLoadShowroomImages();

        var $this = $(this),
            $next = $this.next('.main-nav__dropdown');

        $next.slideToggle(scroll);
        $this.toggleClass('isOpened');

        if ($this.hasClass('isOpened') && $(window).outerWidth() >= 1263) {
            $('.dd-overlay').addClass('active');
        } else if ($(window).outerWidth() >= 1263) {
            $('.dd-overlay').removeClass('active');
        }

        function scroll() {
            if ($this.hasClass('isOpened') && $this.offset().top < $(window).scrollTop()) {
                $('.main-nav').animate({ scrollTop: ($this.offset().top + $('.main-nav').scrollTop() - $('.header-main').outerHeight()) }, 500);
            }
        }

        $('.main-nav__dropdown').not($next).slideUp().prev().removeClass('isOpened');
    });

    function lazyLoadShowroomImages() {
        var $imgsArr = $('.showroom-lazyload');

        $imgsArr.each(function() {
            var $this = $(this);
            var src = $this.data('showroomsrc');

            if (src && !$this.attr('src')) {
                $this.attr('src', src);
            }
        })
    }

    $('.js-main-submenu-close').on('click', function(e) {
        e.preventDefault();

        $('.js-main-submenu-open').removeClass('isOpened');
        $('.js-main-submenu-open').next('.main-nav__dropdown').slideUp();
        $('.dd-overlay').removeClass('active');
    });

    $('.dd-overlay').on('click', function(){
        if ($(window).outerWidth() >= 1263) {
            $('.js-main-submenu-open').removeClass('isOpened');
            $('.js-main-submenu-open').next('.main-nav__dropdown').slideUp();
            $('.dd-overlay').removeClass('active');
        } else {
            $('.main-nav').slideUp();
            $('.hamburger').removeClass('is-active');
            $('.dd-overlay').removeClass('active');
        }
    });

    $('.js-open-mobile-menu').on('click', function(e) {
        e.preventDefault();

        $('.main-nav').slideToggle();
        $('.hamburger').toggleClass('is-active');

        if ($('.hamburger').hasClass('is-active') && $(window).outerWidth() < 1263) {
            $('.dd-overlay').addClass('active');
        } else {
            $('.dd-overlay').removeClass('active');
        }
    });

    $('.js-dropdown-submenu-open').on('click', function() {
        var $this = $(this),
            $next = $this.next('.df-dropdown__submenu');

        $next.slideToggle();
        $this.toggleClass('isOpened');

        $('.df-dropdown__submenu').not($next).slideUp().prev().removeClass('isOpened');
    });

    let searchBtn     = $('.js-search'),
        searchField   = $('.search-field'),
        searchInput   = $('.search-input'),
        searchClose   = $('.search-close'),
        searchBody    = $('.search-body'),
        searchList    = $('.search-list'),
        searchCounter = $('.search-counter'),
        searchShowAll = $('.search-show-all'),
        showAllLink   = $('.search-all__link'),
        body          = $('body');

    searchBtn.on('click', function() {
        searchField.fadeIn(300);
        body.addClass('is-search');
        searchInput.focus();
    });
    searchClose.on('click', function() {
        searchField.fadeOut(300);
        body.removeClass('is-search');
    });
    $(document).mouseup(function (e) {
        if (body.hasClass('is-search') && !searchField.is(e.target)
            && searchField.has(e.target).length === 0) {
            searchField.fadeOut(300);
            body.removeClass('is-search');
        }
    });
    searchInput.on('input', function() {
        setTimeout(function() {
            if (searchInput.val().length > 3) {
                $.getJSON('searchjson?q='+searchInput.val(), function(data) {
                    var items = [];

                    for (var i = 0; i < 4; i++) {
                        if (data.items[i].img != null) { // item with image
                            items.push('<li class="search-item"><a href="'+data.items[i].url+'" class="search-item-inner"><div class="search-item-pic"><img src="'+data.items[i].img+'" class="search-pic__img"></div><div class="search-item-content"><div class="search-item-header"><span class="search-item-section">'+data.items[i].type+'</span><p class="search-item-date">&nbsp;|&nbsp;<span class="search-date">'+data.items[i].title+'</span></p></div><div class="search-item-text">'+data.items[i].text+'</div></div></a></li>');
                        } else { // without image
                            items.push('<li class="search-item search-item--full"><a href="'+data.items[i].url+'" class="search-item-inner"><div class="search-item-content"><div class="search-item-header"><span class="search-item-section">'+data.items[i].type+'</span><p class="search-item-date">&nbsp;|&nbsp;<span class="search-date">'+data.items[i].title+'</span></p></div><div class="search-item-text">'+data.items[i].text+'</div></div></a></li>');
                        }
                    }

                    searchList.fadeIn(300);
                    searchList.html(items.join(''));
                    searchShowAll.fadeIn(300);
                    searchCounter.html(data.items.length);
                    showAllLink.attr('href', '/search?q='+searchInput.val());

                });
            } else {
                searchList.fadeOut(300);
                searchShowAll.fadeOut(300);
            }
        }, 100);

        $(document).keypress(function(e) {
            if (body.hasClass('is-search') && e.which == 13) {
                window.location.href = '/search?q='+searchInput.val();
            }
        });

    });

    //vacancy popup
    var vacancyLink  = $('.vacancy__link'),
        vacancyPopup = $('.vacancy-popup'),
        vacancyWrap  = $('.vacancy-popup .df-popup__wrap');

    vacancyLink.on('click', function(e) {
        e.preventDefault();
        vacancyPopup.fadeIn(400);
    });

    $(document).mouseup(function (e) {
        if (!vacancyWrap.is(e.target) && vacancyWrap.has(e.target).length === 0) {
            vacancyPopup.fadeOut(400);
        }
    });

    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            vacancyPopup.fadeOut(400);
        }
    });

    //cookie popup
    var cookieLink  = $('.cookie-more'),
        cookiePopup = $('.cookie-popup'),
        cookieClose = $('.cookie__close'),
        cookieAgree = $('.cookie-agree'),
        cookieMain  = $('.cookie'),
        cookieInfo  = $('.cookie-popup__info'),
        cookieWrap  = $('.cookie-popup .df-popup__wrap');

    $(window).on('load', function() {
        if (!$.cookie('cookieAreShown')) {
            cookieMain.addClass('is-show');
        }
    });

    cookieLink.on('click', function(e) {
        e.preventDefault();
        cookiePopup.fadeIn(400);
    });

    $(document).mouseup(function (e) {
        if (!cookieWrap.is(e.target) && cookieWrap.has(e.target).length === 0) {
            cookiePopup.fadeOut(400);
        }
    });

    cookieClose.on('click', function() {
        cookiePopup.fadeOut(400);
    });

    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            cookiePopup.fadeOut(400);
        }
    });

    cookieAgree.on('click', function(e) {
        e.preventDefault();
        cookiePopup.fadeOut(400);
        cookieMain.removeClass('is-show');
        setTimeout(function() {
            $.cookie('cookieAreShown', true);
            cookieMain.hide();
        }, 1200);
    });

    new PerfectScrollbar('.cookie-popup__info', {
        wheelSpeed: 2,
        minScrollbarLength: 20
    });
});