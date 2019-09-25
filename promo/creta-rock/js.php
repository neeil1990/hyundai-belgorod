<script src="/js/lazypreview.js?id=12ad41ccdaca74f79107"></script>
<script src="/js/special/libs.js?id=6f86079d2390a5e7c70b"></script>

<script>
    $(document).ready(function () {
        var oldWindowWidth = 0;

        videoInit()

        $(window).on('resize', videoInit);

        function videoInit() {
            var windowWidth = $(window).outerWidth();

            //Для iOs
            if (oldWindowWidth === windowWidth) {
                return null;
            }

            oldWindowWidth = windowWidth;

            if (windowWidth > 1760) {
                if ($('.large-video').length > 0) {
                    return null;
                }
                $('.offers-video').html('');

                $('.offers-video').append(
                    '<video id="video" class="large-video" muted autoplay playsinline loop data-object-fit="cover">' +
                    '<source src="/video/CretaRockEdition/Ready-to-go-big_compressed.mp4">' +
                    '</video>'
                )
            } else if (windowWidth > 640) {
                if ($('.medium-video').length > 0) {
                    return null;
                }
                $('.offers-video').html('');

                $('.offers-video').append(
                    '<video id="video" class="medium-video" muted autoplay playsinline loop data-object-fit="cover">' +
                    '<source src="/video/CretaRockEdition/Ready-to-go_compressed.mp4">' +
                    '</video>'
                )
            } else {
                if ($('.mobile-video').length > 0) {
                    return null;
                }
                $('.offers-video').html('');

                $('.offers-video').append(
                    '<video id="video" class="mobile-video" muted autoplay loop playsinline>' +
                    '<source src="/video/CretaRockEdition/Ready-to-go-mobile_compressed.mp4">' +
                    '</video>'
                )
            }
        }
    });
</script>