<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/local/templates/hyundai_2017/favicon.ico">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <script type="text/javascript" data-skip-moving="true">(function(w, d, n) {var cl = "bx-core";var ht = d.documentElement;var htc = ht ? ht.className : undefined;if (htc === undefined || htc.indexOf(cl) !== -1){return;}var ua = n.userAgent;if (/(iPad;)|(iPhone;)/i.test(ua)){cl += " bx-ios";}else if (/Android/i.test(ua)){cl += " bx-android";}cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");cl += w.devicePixelRatio && w.devicePixelRatio >= 2? " bx-retina": " bx-no-retina";var ieVersion = -1;if (/AppleWebKit/.test(ua)){cl += " bx-chrome";}else if ((ieVersion = getIeVersion()) > 0){cl += " bx-ie bx-ie" + ieVersion;if (ieVersion > 7 && ieVersion < 10 && !isDoctype()){cl += " bx-quirks";}}else if (/Opera/.test(ua)){cl += " bx-opera";}else if (/Gecko/.test(ua)){cl += " bx-firefox";}if (/Macintosh/i.test(ua)){cl += " bx-mac";}ht.className = htc ? htc + " " + cl : cl;function isDoctype(){if (d.compatMode){return d.compatMode == "CSS1Compat";}return d.documentElement && d.documentElement.clientHeight;}function getIeVersion(){if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)){return -1;}var rv = -1;if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)){rv = 11;}else if (!!d.documentMode && d.documentMode >= 10){rv = 10;}else if (!!d.documentMode && d.documentMode >= 9){rv = 9;}else if (d.attachEvent && !/Opera/.test(ua)){rv = 8;}if (rv == -1 || rv == 8){var re;if (n.appName == "Microsoft Internet Explorer"){re = new RegExp("MSIE ([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}else if (n.appName == "Netscape"){rv = 11;re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}}return rv;}})(window, document, navigator);</script>

    <link href="/local/templates/hyundai_2017/js/libs/custom_scroll/jquery.mCustomScrollbar.min.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/js/libs/rangeslider/css/ion.rangeSlider.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/js/libs/slick/slick.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/js/libs/loupe/loupe.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/desktop.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/small_desk.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/tablet.css" type="text/css" rel="stylesheet" />
    <link href="/local/templates/hyundai_2017/mobile.css" type="text/css" rel="stylesheet" />


</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper">
    <div class="head_wrap_border">
        <header class="nblock">
            <a href="/" class="header-logo">
            </a>
            <span class="header-logooff"></span>
            <ul class="topnav">
                <li><a href="/trade-in/">HYUNDAI TRADE-IN</a></li>
                <li class="parent">
                    <span>Автомобили с пробегом</span>
                    <ul>
                        <li><a href="/avtomobili-s-probegom/">Поиск автомобилей с пробегом</a></li>
                        <li><a href="/avtomobili-s-probegom/check-certificates/">Проверка сертификата H-Promise</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </li>
                <li><a href="/dealers-h-promise/">Дилеры H-PROMISE</a></li>
            </ul>

            <div class="compare_btns">
                <a href="?action=DELETE_FROM_COMPARE_LIST&id=0" class="clear_compare"></a>
                <a href="/hpromise/avtomobili-s-probegom/" class="compare_add"></a>
            </div>

            <button type="button" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="http://www.hyundai.ru" class="top_mob_offsite" target="_blank">WWW.HYUNDAI.RU</a>
            <div class="top_mob_social">
                <a target="_blank" href="https://vk.com/HyundaiRussia" class="footer-social-vk"></a>
                <a target="_blank" href="https://www.facebook.com/HyundaiRussia" class="footer-social-fb"></a>
                <a target="_blank" href="https://www.instagram.com/HyundaiRussia/" class="footer-social-ins"></a>
                <a target="_blank" href="https://twitter.com/HyundaiRussia" class="footer-social-tw"></a>
            </div>

        </header>
        <div class="clearfix"></div>
    </div>