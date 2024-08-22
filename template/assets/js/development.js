//UNDER DEVELOPMENT
jQuery(function ($) {
    if ($(".development-under-development .swiper").length) {
        $(".development-under-development .swiper").each(function () {
            var _this = $(this);

            const swiper = new Swiper(_this[0], {
                resistanceRatio: 0,
                spaceBetween: 0,
                navigation: {
                    nextEl: ".under-dev-slide-swiper-button-next",
                    prevEl: ".under-dev-slide-swiper-button-prev",
                },
                effect: "slide",
                loop: false,
                speed: 800,
                slidesPerView: "auto",
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
            });

            function checkArrowPosition() {
                var swiperHeight = _this.height();
                $("[class*='-under-development']").css({
                    "--swiper-height": `${swiperHeight}px`,
                });
            }

            $(window).on("load resize", checkArrowPosition);

            var swiperSlide = _this.find(".swiper-slide .location");
            swiperSlide.each(function (index) {
                var delay = index * 0.3;
                $(this).css({
                    "animation-delay": `${delay}s`,
                });
            });
        });
    }
});
