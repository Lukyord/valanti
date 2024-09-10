// SCROLL TOP IF INDEX
jQuery(function ($) {
    if ($("#index-main").length) {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            0
        );
    }
});

// HERO
jQuery(function ($) {
    if ($(".index-hero .locations").length) {
        $(".index-hero .locations").each(function () {
            var itemLength = $(this).find(".location").length;

            if (itemLength <= 4) {
                $(this).addClass("less-than-4");
            }

            //match height
            $(this).find(".image").matchHeight({
                byRow: true,
            });
        });
    }
});

//AWARDS
jQuery(function ($) {
    if ($(".index-awards .awards").length) {
        $(".index-awards .awards").each(function () {
            var award = $(this).find(".award");

            award.each(function (index) {
                var delay = index * 0.3;
                $(this).css({
                    "animation-delay": `${delay}s`,
                });
            });
        });
    }
});

//UNDER DEVELOPMENT
jQuery(function ($) {
    if ($(".index-under-development .swiper").length) {
        $(".index-under-development .swiper").each(function () {
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

            var swiperHeight = _this.height();
            $("[class*='-under-development']").css({
                "--swiper-height": `${swiperHeight}px`,
            });

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

// IMAGE BANNER 2 FLOATING TEXT
jQuery(function ($) {
    if ($(".index-news .title").length) {
        function getFloatingTextLeft() {
            var distanceFromLeft = $(".index-news .title").offset().left;
            var floatingText = $(".image-banner-2 .sc-banner .floating-text");
            if ($(window).width() < 1728) {
                floatingText.css(
                    "--image-banner2-left",
                    `${distanceFromLeft}px`
                );
            } else {
                floatingText.css(
                    "--image-banner2-left",
                    `min(6.3657407407vw, 110px)`
                );
                ("");
            }
        }

        getFloatingTextLeft();

        let lastWidth = $(window).width();
        $(window).on("resize", function () {
            if ($(window).width() !== lastWidth) {
                getFloatingTextLeft();
            }
        });
    }
});
