<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="main news">
    <section class="sc news-hero">
        <div class="sc-inner first-sc">
            <div class="hero-text a-center">
                <h1 class="size-h1-h2-m font-heading letter-spacing-title animate fadeIn">IN THE NEWS</h1>
                <p class="size-h4 letter-spacing-title-des animate fadeIn">Key updates and notable happenings.</p>
            </div>
        </div>
    </section>

    <section class="sc sc-news">
        <div class="sc-inner">
            <div class="news-grid first-grid">
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
            <div class="news-grid">
                <?php foreach ($news_arr as $news) {
                    include($root . "include/element-news-card.php");
                }
                ?>
            </div>
            <div class="news-pagination animate fadeIn">
                <?php include($root . "include/_wp-code/wp-pagenavi.php") ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>