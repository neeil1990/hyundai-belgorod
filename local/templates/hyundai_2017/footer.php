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

</body>
</html>
