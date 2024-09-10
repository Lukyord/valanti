<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="index-main" class="main index-main">
    <section class="sc index-hero" data-section="dark-bg">
        <div class="hero-bg">
            <figure class="object-fit animate matrixZoomOut">
                <video playsinline autoplay muted loop src="./assets/vdo/index-hero-vdo.mp4"></video>
            </figure>
        </div>
        <div class="sc-inner">
            <div class="hero-text a-center">
                <h1 class="size-h1 font-heading letter-spacing-title-lg animate fadeIn" style="animation-delay: 1s">BEYOND LUXURY</h1>
                <p class="size-h4 letter-spacing-title-des animate fadeIn" style="animation-delay: 1.2s">Crafting experiences of unparalleled grandeur.</p>
            </div>

            <div class="locations animate fadeIn" style="animation-delay: 1.5s">
                <?php
                $location_arr = array(
                    array(
                        "link" => "#rosewood",
                        "logo" => "./assets/svg/rosewood-logo-white.svg",
                        "description" => "Nestled in the lush landscapes of Laos and moments away from the UNESCO World Heritage Site."
                    ),
                    array(
                        "link" => "#intercontinental",
                        "logo" => "./assets/svg/intercontinental-logo-white.svg",
                        "description" => "Set in a breathtaking slice of paradise at the cusp of Khao Yai National Park."
                    ),
                    array(
                        "link" => "#swan-lake",
                        "logo" => "./assets/svg/swan-lake-logo-white.svg",
                        "description" => "A beacon of luxury, mirroring the serenity and allure of the legendary lake."
                    ),
                );
                foreach ($location_arr as $location) {
                    include($root . "include/element-index-hero-location.php");
                }
                ?>
            </div>
        </div>
    </section>

    <section class="sc index-awards" style="--awards-bg: url('../../assets/img/design/awards-bg.jpg')">
        <div class="sc-inner">
            <div class="awards">
                <div class="award animate fadeIn">
                    <div class="image">
                        <img src="./assets/svg/award1.svg" alt="award1">
                    </div>
                    <div class="text size-description2 a-center">
                        <h6 class="weight-bold">InterContinental Khao Yai Resort</h6>
                        <div>
                            <p><strong>Luxury Awards Asia-Pacific 2024:</strong> <br>
                                Best Upcountry Hotel in Thailand
                            </p>
                        </div>
                    </div>
                </div>
                <div class="award animate fadeIn">
                    <div class="image">
                        <img src="./assets/svg/award2.svg" alt="award2">
                    </div>
                    <div class="text size-description2 a-center">
                        <h6 class="weight-bold">InterContinental Khao Yai Resort</h6>
                        <div>
                            <p><strong>The Hot List 2023:</strong> <br>
                                The Best New Hotels around the World
                            </p>
                        </div>
                    </div>
                </div>
                <div class="award animate fadeIn">
                    <div class="image">
                        <img src="./assets/svg/award3.svg" alt="award3">
                    </div>
                    <div class="text size-description2 a-center">
                        <h6 class="weight-bold">Swan Lake Residences Khao Yai</h6>
                        <div>
                            <p><strong>Dot Property Southeast Asia Awards 2022</strong> <br>
                                Best Green Development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="award animate fadeIn">
                    <div class="image">
                        <img src="./assets/svg/award4.svg" alt="award4">
                    </div>
                    <div class="text size-description2 a-center">
                        <h6 class="weight-bold">Rosewood Luang Prabang</h6>
                        <div>
                            <p><strong>Readers' Choice Awards:</strong> <br>
                                No. 1, Best Hotel in Asia 2021</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="separator animate fadeIn"></div>
        </div>
    </section>


    <section class="sc index-under-development" style="--under-development-bg: url('../../assets/img/design/under-dev-bg.jpg')">
        <div class=" sc-inner">
            <div class="under-development">
                <div class="title-and-description a-center">
                    <h2 class="font-heading size-h2 letter-spacing-title-md animate fadeIn">UNDER DEVELOPMENT</h2>
                    <p class="animate fadeIn">Transforming ideas into reality.</p>
                </div>
                <div class="slides swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $location_arr = array(
                            array(
                                "title" => "SUKHUMVIT  </br >BRANDED RESIDENCES",
                                "description" => "Unparalleled Address: Sukhumvit Branded Residence puts you at the heart of Sukhumvit's vibrant energy, offering an exclusive address coveted by discerning residents.",
                            ),
                            array(
                                "title" => "BANGKOK RIVERSIDE LUXURY HOTEL AND RESIDENCES",
                                "description" => "Elegance reimagined by the river: submerge yourself in tranquility at the Luxury Hotel and Residences, where riverside delights meet refined elegance.",
                            ),
                            array(
                                "title" => "SUPER LUXURY HOT SPRINGS RESORT AND BRANDED RESIDENCES, CHIANG DAO",
                                "description" => "Luxury redefined by nature: immerse yourself in wellness at the hot springs resort in Chiang Dao, where geothermal wonders meet unparalleled luxury.",
                            ),
                            array(
                                "title" => "BANGKOK RIVERSIDE LUXURY HOTEL AND RESIDENCES",
                                "description" => "Elegance reimagined by the river: submerge yourself in tranquility at the Luxury Hotel and Residences, where riverside delights meet refined elegance.",
                            ),
                            array(
                                "title" => "SUPER LUXURY HOT SPRINGS RESORT AND BRANDED RESIDENCES, CHIANG DAO",
                                "description" => "Luxury redefined by nature: immerse yourself in wellness at the hot springs resort in Chiang Dao, where geothermal wonders meet unparalleled luxury.",
                            ),
                        );

                        foreach ($location_arr as $location) {
                            include($root . "include/element-index-under-dev-slide.php");
                        }
                        ?>
                    </div>
                </div>
                <div class="under-dev-slide-swiper-button-prev swiper-button-prev hidden-device-sm"></div>
                <div class="under-dev-slide-swiper-button-next swiper-button-next hidden-device-sm"></div>
            </div>
        </div>
    </section>

    <section class="sc image-banner image-banner-1" data-section="dark-bg">
        <div class="sc-banner">
            <div class="image animate fadeIn">
                <?php
                $cover = './assets/img/design/image-banner1.jpg';
                $cover_m = './assets/img/design/image-banner1-m.jpg';
                if (preg_match("/\.(mp4)$/", $cover)) { ?>
                    <figure class="object">
                        <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                    </figure>
                <?php } else { ?>
                    <picture class="object">
                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img src="<?php echo $cover; ?>" alt="hero bg">
                    </picture>
                <?php } ?>
            </div>
            <div class="floating-text animate fadeIn">
                <p>To embark on interesting, unique, and fun projects that redefine the standards of our <br class="hidden-device-sm" />
                    customers' lives. We believe in the power of creativity and innovation to transform the ordinary into the extraordinary.</p>
            </div>
        </div>
    </section>

    <section class="sc comprehensive-lifestyle" style="--comprehensive-lifestyle-bg: url('../../assets/img/design/comprehensive-lifestyle-bg.jpg')">
        <div class="sc-inner">
            <div class="text a-center">
                <h2 class="size-h1-h2-m font-heading letter-spacing-title animate fadeIn">A COMPREHENSIVE LIFESTYLE APPROACH</h2>
                <p class="size-h4 letter-spacing-title-des animate fadeIn">Unified methods for enhancing overall quality of life.</p>
            </div>
        </div>
    </section>

    <section class="sc image-banner image-banner-2" data-section="dark-bg">
        <div class="sc-banner">
            <div class="image">
                <?php
                $cover = './assets/img/design/image-banner2.jpg';
                $cover_m = './assets/img/design/image-banner2-m.jpg';
                if (preg_match("/\.(mp4)$/", $cover)) { ?>
                    <figure class="object">
                        <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                    </figure>
                <?php } else { ?>
                    <picture class="object">
                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img src="<?php echo $cover; ?>" alt="hero bg">
                    </picture>
                <?php } ?>
            </div>

            <div class="floating-text">
                <h3 class="size-h2-h3-m font-heading letter-spacing-title-sm  animate fadeIn">CREATING HEALTH-PROMOTING <br />
                    ENVIRONMENTS</h3>
                <p class="animate fadeIn">Real estate developers are increasingly focusing on creating health-promoting environments that prioritize residents' wellbeing. These environments feature sustainable materials for better indoor air quality, green spaces for physical activity and relaxation, and amenities like fitness centers and nature trails. By emphasizing health-promoting environments, developers contribute to healthier communities and improved quality of life for residents.</p>
            </div>

        </div>
    </section>

    <section class="sc hollistic-wellness" data-section="mixed-bg">
        <div class="images dark-bg-sc">
            <img src="./assets/img/design/hollistic1.jpg" alt="hollistic1" class="animate fadeIn">
            <img src="./assets/img/design/hollistic2.jpg" alt="hollistic2" class="animate fadeIn" style="animation-delay: 0.2s">
            <img src="./assets/img/design/hollistic3.jpg" alt="hollistic3" class="animate fadeIn" style="animation-delay: 0.4s">
        </div>
        <div class="text-wrap">
            <div class="text">
                <h3 class="size-h3 animate fadeIn font-heading letter-spacing-title-sm">HOLISTIC WELLNESS <br />
                    INTEGRATION IN REAL ESTATE </h3>
                <p class="animate fadeIn">This approach involves strategic building design for natural light and noise reduction, incorporating biophilic elements to alleviate stress. Properties also feature wellness amenities such as mindfulness spaces and community wellness programs. By embracing holistic wellness, developers create environments that support residents' overall health and lifestyle.</p>
            </div>
        </div>
    </section>

    <section class="sc index-news">
        <div class="sc-inner">
            <div class="title">
                <h2 class="size-h2 font-heading letter-spacing-title-md animate fadeIn">IN THE NEWS</h2>
                <p class="animate fadeIn">Key updates and notable happenings.</p>
            </div>

            <div class="news-grid">
                <?php
                $news_arr = array(
                    array(
                        "image" => "./assets/img/design/news1.jpg",
                        "title" => "Best Upcountry Hotel in Thailand at the Travel + Leisure Asia-Pacific Awards.",
                        "description" => "The winners showcase the best in high-end travel, as chosen by Travel + Leisure Southeast Asia, Hong Kong, and Macau's readers.",
                        "press" => "Prestige Thailand",
                        "date" => "June 2024",

                    ),
                    array(
                        "image" => "./assets/img/design/news2.jpg",
                        "title" => "PILLARS OF LEADERSHIP",
                        "author" => "Joseph Allen",
                        "description" => "A select few individuals undergird the luxury landscape. Like mighty Atlas bearing the globe, each of these exemplars supports a portion of the gilded world, fostering its bounty and excellence.",
                        "press" => "Robb Report Thailand",
                        "date" => "May 2023",
                    ),
                    array(
                        "image" => "./assets/img/design/news3.jpg",
                        "title" => "INTERNATIONAL LUXURY HOSPITALITY",
                        "author" => "Joseph Allen",
                        "description" => "Based in Bangkok, Thailand, Elysian Development Co., Ltd. is recognized for its dedication to outstanding quality and savoir-faire within the luxury hospitality industry.",
                        "press" => "Robb Report Thailand",
                        "date" => "April 2022",

                    ),
                    array(
                        "image" => "./assets/img/design/news4.jpg",
                        "title" => "Readers' Choice Awards: No. 1, Best Hotel in Asia 2021",
                        "description" => "Rosewood Luang Prabang has been recognized as one of the best new resorts in the world by leading travel magazines and organizations.",
                        "press" => "Condé Nast Traveler",
                        "date" => "October 2021",
                    ),
                );

                foreach ($news_arr as $news) {
                    include($root . "include/element-news-card.php");
                }
                ?>
            </div>
        </div>
    </section>

    <section class="sc image-banner image-banner-3 animate fadeIn" data-section="dark-bg">
        <div class="sc-banner">
            <div class="image">
                <?php
                $cover = './assets/img/design/image-banner3.jpg';
                $cover_m = './assets/img/design/image-banner3-m.jpg';
                if (preg_match("/\.(mp4)$/", $cover)) { ?>
                    <figure class="object">
                        <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                    </figure>
                <?php } else { ?>
                    <picture class="object">
                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img src="<?php echo $cover; ?>" alt="hero bg">
                    </picture>
                <?php } ?>
            </div>
            <div class="floating-text">
                <h3 class="size-h2-h3-m font-heading letter-spacing-title-md">
                    DOT PROPERTY SOUTHEAST<br />
                    ASIA AWARDS 2022: BEST<br />
                    GREEN DEVELOPMENT</h3>
                <div class="description">
                    <p>30 winners from across Thailand were honoured at Dot Property Thailand Awards 2022. Swan Lake Residences Khao Yai empowers residents to connect with nature in Thailand’s beautiful Khao Yai.</p>
                    <p><strong>Bangkok Post</strong>, August 2022</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>