//HORIZONTAL SCROLL
// gsap.registerPlugin(ScrollTrigger);
jQuery(document).ready(function ($) {
    let totalMarginLeft = 0;
    let totalMarginRight = 0;
    function updateMargins() {
        if ($(".about-hero .sc-inner").length) {
            var scInner = $(".about-hero .sc-inner");

            var arrowPanelWidth = $(".scroll-arrows").outerWidth();

            // Get the left position of the .sc-inner element
            var scInnerLeftPosition = scInner.offset().left;

            // Get the width of the .sc-inner element
            var scInnerWidth = scInner.outerWidth();

            // Calculate the right position of the .sc-inner element
            var scInnerRightPosition = scInnerLeftPosition + scInnerWidth;

            // Get the value of the --container-spacing-x CSS variable
            var containerSpacingXRem = parseFloat(
                getComputedStyle(document.documentElement).getPropertyValue(
                    "--container-spacing-x"
                )
            );

            // Get the root font size (font-size of the html element)
            var rootFontSize = parseFloat(
                getComputedStyle(document.documentElement).fontSize
            );

            // Convert rem value to pixels
            var containerSpacingX = containerSpacingXRem * rootFontSize;

            // Calculate the total margin-left (left offset + container spacing)
            totalMarginLeft = scInnerLeftPosition + containerSpacingX;

            // Calculate the total margin-right (right offset + container spacing)
            totalMarginRight =
                window.innerWidth - scInnerRightPosition + containerSpacingX;

            // Update the --margin-left and --margin-right CSS variables
            $(".horizontal-scroll-sc").css({
                "--margin-left": totalMarginLeft + "px",
                "--margin-right": totalMarginRight + "px",
                "--arrow-panel-width": arrowPanelWidth + "px",
            });
        }
    }

    updateMargins();

    let lastWidth = $(window).width();
    $(window).on("resize", function () {
        if ($(window).width() !== lastWidth) {
            updateMargins();
        }
    });

    if ($(".horizontal-scroll-sc").length) {
        let horizontalSections = gsap.utils.toArray(".horizontal-scroll-sc");
        let leftArrowScrollUp = $(".scroll-up-left-arrow");
        let rightArrowScrollDown = $(".scroll-down-right-arrow");

        function initHorizontalScroll() {
            horizontalSections.forEach((horizontalSection) => {
                // Initialize variables
                let horizontalContents = gsap.utils.toArray(
                    $(horizontalSection).find(".horizontal-scroll-content")
                );
                let arrowsPanel = $(".horizontal-scroll-sc").siblings(
                    ".scroll-arrows"
                );
                let titleOld = $(horizontalSection).find(".title.old");
                let titleRecent = $(horizontalSection).find(".title.recent");
                let titlePresent = $(horizontalSection).find(".title.present");
                let gridGap = 0;

                const setGridGap = () => {
                    gridGap =
                        $(window).innerWidth() > 991
                            ? Math.min(window.innerWidth * 0.147569444444, 250)
                            : window.innerWidth * 0.25641025641;

                    $(".horizontal-scroll-flex-container").css(
                        "--grid-gap",
                        gridGap + "px"
                    );
                };
                setGridGap();

                // Function to calculate max width
                const getMaxWidth = () => {
                    let maxWidth = 0;
                    horizontalContents.forEach((section, index) => {
                        maxWidth += section.offsetWidth;
                        // Add gap except for the last element
                        if (index < horizontalContents.length - 1) {
                            maxWidth += gridGap;
                        }
                    });

                    maxWidth += totalMarginLeft + totalMarginRight;
                    return maxWidth;
                };

                // Function to calculate section widths
                const getSectionWidths = () => {
                    let widthOld = 0;
                    let widthRecent = 0;
                    let widthPresent = 0;
                    let widthOffset = window.innerWidth * 0.7;
                    horizontalContents.forEach((content, index) => {
                        let section = $(content).data("timeline");
                        let sectionWidth = content.offsetWidth;

                        switch (section) {
                            case "old":
                                widthOld += sectionWidth;
                                break;
                            case "recent":
                                widthRecent += sectionWidth;
                                break;
                            case "present":
                                widthPresent += sectionWidth;
                                break;
                        }

                        // Add gap except for the last element
                        if (index < horizontalContents.length - 1) {
                            switch (section) {
                                case "old":
                                    widthOld += gridGap;
                                    break;
                                case "recent":
                                    widthRecent += gridGap;
                                    break;
                                case "present":
                                    widthPresent += gridGap;
                                    break;
                            }
                        }
                    });
                    return { widthOld, widthRecent, widthPresent, widthOffset };
                };

                // Update ScrollTrigger and GSAP animation
                const updateScrollTrigger = () => {
                    let maxWidth = getMaxWidth();
                    let { widthOld, widthRecent, widthPresent, widthOffset } =
                        getSectionWidths();

                    // Clear previous ScrollTrigger instances
                    ScrollTrigger.getAll().forEach((trigger) => trigger.kill());

                    gsap.to(horizontalContents, {
                        x: () => `-${maxWidth - window.innerWidth}`,
                        ease: "none",
                        scrollTrigger: {
                            trigger: horizontalSection,
                            start: "top top",
                            pin: true,
                            scrub: true,
                            anticipatePin: 1,
                            end: () => `+=${maxWidth}`,
                            onUpdate: (self) => {
                                let progress = self.progress;

                                if (progress <= 0) {
                                    leftArrowScrollUp.addClass("opacity-03");
                                } else {
                                    leftArrowScrollUp.removeClass("opacity-03");
                                }

                                if (progress >= 1) {
                                    rightArrowScrollDown.addClass("opacity-03");
                                } else {
                                    rightArrowScrollDown.removeClass(
                                        "opacity-03"
                                    );
                                }

                                if (progress > 0 && progress < 1) {
                                    arrowsPanel.addClass("visible");
                                    $(horizontalSections).addClass(
                                        "in-progress"
                                    );
                                    $("html").addClass("header-hidden");
                                } else {
                                    arrowsPanel.removeClass("visible");
                                    $(horizontalSections).removeClass(
                                        "in-progress"
                                    );
                                    $("html").removeClass("header-hidden");
                                }

                                if (progress >= 0.1) {
                                    $(horizontalSections).addClass(
                                        "in-progress"
                                    );
                                } else {
                                    $(horizontalSections).removeClass(
                                        "in-progress"
                                    );
                                }

                                if (
                                    progress >= 0 &&
                                    progress < widthOld / maxWidth
                                ) {
                                    titleOld.addClass("active");
                                    titleRecent.removeClass("active");
                                    titlePresent.removeClass("active");
                                } else if (
                                    progress >= widthOld / maxWidth &&
                                    progress <
                                        (widthOld + widthRecent + widthOffset) /
                                            maxWidth
                                ) {
                                    titleOld.removeClass("active");
                                    titleRecent.addClass("active");
                                    titlePresent.removeClass("active");
                                } else if (
                                    progress >=
                                    (widthOld + widthRecent + widthOffset) /
                                        maxWidth
                                ) {
                                    titleOld.removeClass("active");
                                    titleRecent.removeClass("active");
                                    titlePresent.addClass("active");
                                }
                            },
                        },
                    });
                };

                updateScrollTrigger();
                ScrollTrigger.addEventListener(
                    "refreshInit",
                    updateScrollTrigger
                );
                ScrollTrigger.refresh(); // Ensure ScrollTrigger is updated initially
            });
        }

        initHorizontalScroll();

        let lastWidth = $(window).width();
        $(window).on("resize", function () {
            if ($(window).width() !== lastWidth) {
                setTimeout(function () {
                    initHorizontalScroll(); // Reinitialize horizontal scroll on resize
                }, 300);
            }
        });

        // Add animation on scroll
        function isElementInView($element) {
            let elementLeft = $element.offset().left;
            let elementRight = elementLeft + $element.outerWidth();
            let elementTop = $element.offset().top;
            let elementBottom = elementTop + $element.outerHeight();

            let viewportCenterFromLeft =
                $(window).scrollLeft() + $(window).width() * 0.2;
            let viewportRight = $(window).width() * 0.8;

            let viewportTop = $(window).scrollTop() + $(window).height() * 0.2;
            let viewportBottom = viewportTop + $(window).height() * 0.8;

            let isInHorizontalView =
                elementRight > viewportCenterFromLeft &&
                elementLeft < viewportRight;

            let isInVerticalView =
                elementBottom > viewportTop && elementTop < viewportBottom;

            return isInVerticalView && isInHorizontalView;
        }

        function animateOnScroll() {
            horizontalSections.forEach((horizontalSection) => {
                let horizontalContents = $(horizontalSection).find(
                    ".horizontal-scroll-content"
                );

                $(horizontalContents)
                    .find(".hrz-image")
                    .css("transform", "translateX(20px)");
                $(horizontalContents)
                    .find(".hrz-year, .hrz-text")
                    .css("opacity", 0);

                $(horizontalContents).each(function (index, content) {
                    let $content = $(content);

                    // Check for hrz-image visibility
                    $content.find(".hrz-image").each(function () {
                        if (isElementInView($(this))) {
                            $(this).addClass("moveInRight");
                        }
                    });

                    // Check for hrz-year visibility
                    $content.find(".hrz-year").each(function () {
                        if (isElementInView($(this))) {
                            $(this).addClass("hrzFadeIn");
                        }
                    });

                    // Check for hrz-text visibility
                    $content.find(".hrz-text").each(function () {
                        if (isElementInView($(this))) {
                            $(this).addClass("hrzFadeIn");
                        }
                    });
                });
            });
        }

        $(window).on("scroll", throttle(animateOnScroll, 200));

        //=======================================================================================================
        // ARROW SCROLL
        let scrollInterval;
        const scrollSpeed = 30;
        function startScroll(direction) {
            scrollInterval = setInterval(() => {
                gsap.to(window, {
                    scrollTo: {
                        y: `+=${direction * scrollSpeed}`,
                        autoKill: false,
                    },
                    ease: "none",
                    duration: 0.1,
                });
            }, 16);
        }
        function stopScroll() {
            clearInterval(scrollInterval);
        }
        $(".angle-left")
            .on("mousedown touchstart", function () {
                startScroll(-1); // scroll left
            })
            .on("mouseup touchend mouseleave", function () {
                stopScroll();
            });
        $(".angle-right")
            .on("mousedown touchstart", function () {
                startScroll(1); // scroll right
            })
            .on("mouseup touchend mouseleave", function () {
                stopScroll();
            });
    }
});
