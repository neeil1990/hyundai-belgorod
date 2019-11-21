<footer>
    <div class="nblock">
        <div class="footer-copy">&copy; <?=date('Y')?> HYUNDAI</div>
        <div class="footer-social">
            <a target="_blank" href="https://vk.com/HyundaiRussia" class="footer-social-vk"></a>
            <a target="_blank" href="https://www.facebook.com/HyundaiRussia" class="footer-social-fb"></a>
            <a target="_blank" href="https://www.instagram.com/HyundaiRussia/" class="footer-social-ins"></a>
            <a target="_blank" href="https://twitter.com/HyundaiRussia" class="footer-social-tw"></a>
        </div>
        <a href="http://www.hyundai.ru" class="footer-offsite" target="_blank">WWW.HYUNDAI.RU</a>
        <div class="footer_mob_link">
            <a href="#">Правила акции</a>
            <span></span>
            <a href="#">Обратная связь</a>
        </div>
        <span class="scroll_top"></span>
    </div>
</footer>
</div>

<div class="hidden-form js-hidden-form hide-this" style="display: none">
    <!-- forms here -->
    <div class="js-car-order-form"></div>
    <div class="js-car-question-form"></div>
    <div class="js-car-testdrive-form"></div>
</div>

<div class="hidden-counters hide-this" style="display: none">
    <!-- counters here -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    // На случай, если code.jquery.com отвалиться...
    if (typeof (jQuery) == 'undefined') {
        document.write('<' + 'script src="' + '/bitrix/templates/common/js/jquery-1.11.3.min.js' + '">' + '</' + 'script>');
    }
</script>







<script>new Image().src='https://auction.hyundai.ru/bitrix/spread.php?s=QklUUklYX1NNX0FCVEVTVF9zMQEBMTU5NzQ3OTcwOAEvAQEBAkJJVFJJWF9TTV9HVUVTVF9JRAEzNjI3MzY5ATE1OTc0Nzk3MDgBLwEBAQJCSVRSSVhfU01fTEFTVF9WSVNJVAEyMS4wOC4yMDE5IDExOjIxOjQ4ATE1OTc0Nzk3MDgBLwEBAQI%3D&k=67e9ffcbe331137965380d6a34097df6';
</script>



<script src="/local/templates/hyundai_2017/js/libs/custom_scroll/jquery.mousewheel.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/custom_scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/mask/jquery.mask.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/slick/slick.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/popup.js?v=1566375708"></script>
<script src="/local/templates/hyundai_2017/js/libs/loupe/jquery.loupe.min.js"></script>
<script src="/local/templates/hyundai_2017/js/libs/custom_form_fields.js?v=1566375708"></script>
<script src="/local/templates/hyundai_2017/js/libs/hpromise_view.js?v=1566375708"></script>
<script src="/local/templates/hyundai_2017/js/common.js?v=1566375708"></script>

<?
if($url = $APPLICATION->GetCurDir(false)){
    if(count(explode('/',$url)) > 4)
        $limit = -2;
    else
        $limit = 0;

    $arDir = implode('/',explode('/',$url,$limit));
    $js = $_SERVER["DOCUMENT_ROOT"].$arDir."/js.php";
    if (file_exists($js))
        require($js);
    else{
        ?>
        <script>
            $(document).ready(function(){
                $('body').addClass('main');
            });
        </script>
        <?
    }
}
?>


<!-- авто в наличи -->
<script id="wJumpToCars" src="https://cars.hyundai-belgorod.ru/widgets/jumpToCars.js"></script>


<!-- StreamWood code -->
<link href="https://clients.streamwood.ru/StreamWood/sw.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://clients.streamwood.ru/StreamWood/sw.js" charset="utf-8"></script>
<script type="text/javascript">
  swQ(document).ready(function(){
    swQ().SW({
      swKey: '38f55a3075ec53b4b58de7814c425247',
      swDomainKey: 'f50cd93840df35c3d177121ad4fc0652'
    });
    swQ('body').SW('load');
  });
</script>
<!-- /StreamWood code -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49157044, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49157044" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript>
<!-- /Yandex.Metrika counter -->



<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","lwvwad28");
</script>
<!-- calltouch -->

</body>
</html>
