<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="main development">
    <section class="sc development-hero">
        <div class="sc-inner first-sc">
            <div class="hero-text a-center">
                <h1 class="size-h1-h2-m font-heading letter-spacing-title animate fadeIn">DEVELOPMENTS</h1>
                <p class="size-h4 letter-spacing-title-des animate fadeIn">Crafting experiences of unparalleled grandeur.</p>
            </div>
        </div>
        <div class="separator sc-width animate fadeIn"></div>
    </section>

    <?php
    $development_project_arr = array(
        array(
            "project-name" => "rosewood",
            "logo" => "./assets/svg/rosewood-logo.svg",
            "location" => "Luang Prabang",
            "country" => "Laos PDR",
            "description" => "Hidden in the luxuriant nature that surrounds the historic royal settlement of Luang Prabang, a river—emanating from a flowing waterfall—runs through the heart of this exotic retreat. Taking its cue from the French-Lao architecture for which the town is known, the interiors of the Luang Prabang resort reflect the influences of ancient temples, while luxurious tented villas celebrate the explorer spirit.",
            "topic" => "WHERE HISTORY AND LUXURY CONVERGE",
            "topic-description" => "The resort offers 23 spacious Luang Prabang accommodations, including four deluxe rooms, four specialty suites, three riverside villas, six pool villas and six luxury tents. Each of the resort’s guest housings is bordered by the riverbank. The 75-square-meter luxury tented villas include private dining areas and wrap-around decks. Lao tradition and French colonial style are sensitively woven throughout the design and architecture, including the use of indigenous materials and locally inspired artwork.",
            "img1" => "./assets/img/design/development-rosewood1.jpg",
            "img2" => "./assets/img/design/development-rosewood2.jpg",
            "img3" => "./assets/img/design/development-rosewood3.jpg",
            "img4" => "./assets/img/design/development-rosewood4.jpg",
            "img5" => "./assets/img/design/development-rosewood5.jpg",
            "img6" => "./assets/vdo/development-rosewood6.mp4",
            "img6-m" => "./assets/vdo/development-rosewood6-m.mp4",
            "image-side" => "image-side-right",
            "template" => "type-1",
        ),
        array(
            "project-name" => "intercontinental",
            "logo" => "./assets/svg/intercontinental-logo.svg",
            "location" => "Nakhon Ratchasima",
            "country" => "Thailand",
            "description" => "Enjoy a world of inspired experiences and discovery – from wine tasting in the hills, to trekking and outdoor explorations in one of Asia’s largest natural spaces. InterContinental Khao Yai Resort is set in a breathtaking slice of paradise. It is nestled in the lush tropical landscape of numerous lakes and abundant trees on the cusp of a national park and a UNESCO World Heritage Site.",
            "topic" => "RECONNECT WITH LIFE'S BEAUTY ON AN INVITING JOURNEY INTO A NATURE",
            "topic-description" => "InterContinental Khao Yai Resort is blessed with a natural setting unlike any other – the lush tropical landscape of numerous lakes and abundant trees, set on the edge of a national park. We are also proudly a Khao Yai family resort, offering trekking and wildlife tours, bicycles and swimming, shopping and vineyards, historic tours, and world-class golf courses – there is no shortage of fulfilling ways to explore.",
            "img1" => "./assets/img/design/development-intercontinental1.jpg",
            "img2" => "./assets/img/design/development-intercontinental2.jpg",
            "img3" => "./assets/img/design/development-intercontinental3.jpg",
            "img4" => "./assets/img/design/development-intercontinental4.jpg",
            "img5" => "./assets/img/design/development-intercontinental5.jpg",
            "img6" => "./assets/vdo/development-intercontinental6.mp4",
            "img6-m" => "./assets/vdo/development-intercontinental6-m.mp4",
            "image-side" => "image-side-left",
            "template" => "type-1",
        ),
        array(
            "project-name" => "swan-lake",
            "logo" => "./assets/svg/swan-lake-logo.svg",
            "location" => "Nakhon Ratchasima",
            "country" => "Thailand",
            "description" => "Nestled amidst the verdant expanse of Khao Yai, Swan Lake weaves together the threads of nature and comfort, crafting an idyllic sanctuary for those in pursuit of a serene refuge.",
            "topic" => "A LUXURIOUS SANCTURY IN THE HEART OF NATURE",
            "topic-description" => "Immersed in the tranquil embrace of the Pak Chong district, Swan Lake Khao Yai stands as a beacon of luxury, mirroring the serenity and allure of the renowned lake it is named after. Brought to life in 2018, this condominium project is a testament to modern living, offering state-of-the-art amenities such as a swimming pool, gym, and top-notch security, all meticulously curated to deliver an unrivaled residential experience.",
            "img1" => "./assets/img/design/development-swan-lake1.jpg",
            "img2" => "./assets/img/design/development-swan-lake2.jpg",
            "img3" => "./assets/img/design/development-swan-lake3.jpg",
            "img4" => "./assets/img/design/development-swan-lake4.jpg",
            "img5" => "./assets/img/design/development-swan-lake5.jpg",
            "img6" => "./assets/img/design/development-swan-lake6.jpg",
            "img6-m" => "./assets/img/design/development-swan-lake6-m.jpg",
            "image-side" => "image-side-right",
            "template" => "type-2",
        )
    );

    foreach ($development_project_arr as $development_project) {
        include($root . "include/element-development-section.php");
    }
    ?>

    <section class="sc development-under-development">
        <div class="sc-inner">
            <div class="under-dev-slide-swiper-button-prev swiper-button-prev hidden-device-sm"></div>
            <div class="under-dev-slide-swiper-button-next swiper-button-next hidden-device-sm"></div>
            <div class="under-development">
                <div class="title-and-description a-center">
                    <h2 class="font-heading size-h2 letter-spacing-title-md animate fadeIn">UNDER DEVELOPMENT</h2>
                    <p class="animate fadeIn">Transforming ideas into reality.</p>
                </div>
                <div class="slides pc-only swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $location_arr = array(
                            array(
                                "title" => "SUKHUMVIT  </br >BRANDED RESIDENCES",
                                "description" => "Unparalleled Address: Sukhumvit Branded Residence puts you at the heart of Sukhumvit's vibrant energy, offering an exclusive address coveted by discerning residents.",
                                "bg-image" => "../../../assets/img/design/under-development1.jpg",
                            ),
                            array(
                                "title" => "BANGKOK RIVERSIDE LUXURY HOTEL AND RESIDENCES",
                                "description" => "Elegance reimagined by the river: submerge yourself in tranquility at the Luxury Hotel and Residences, where riverside delights meet refined elegance.",
                                "bg-image" => "../../../assets/img/design/under-development2.jpg",
                            ),
                            array(
                                "title" => "SUPER LUXURY HOT SPRINGS RESORT AND BRANDED RESIDENCES, CHIANG DAO",
                                "description" => "Luxury redefined by nature: immerse yourself in wellness at the hot springs resort in Chiang Dao, where geothermal wonders meet unparalleled luxury.",
                                "bg-image" => "../../../assets/img/design/under-development3.jpg",
                            ),
                            array(
                                "title" => "BANGKOK RIVERSIDE LUXURY HOTEL AND RESIDENCES",
                                "description" => "Elegance reimagined by the river: submerge yourself in tranquility at the Luxury Hotel and Residences, where riverside delights meet refined elegance.",
                                "bg-image" => "../../../assets/img/design/under-development1.jpg",
                            ),
                            array(
                                "title" => "SUPER LUXURY HOT SPRINGS RESORT AND BRANDED RESIDENCES, CHIANG DAO",
                                "description" => "Luxury redefined by nature: immerse yourself in wellness at the hot springs resort in Chiang Dao, where geothermal wonders meet unparalleled luxury.",
                                "bg-image" => "../../../assets/img/design/under-development2.jpg",
                            ),
                        );

                        foreach ($location_arr as $location) {
                            include($root . "include/element-development-under-dev-slide.php");
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include($root . "footer.php"); ?>