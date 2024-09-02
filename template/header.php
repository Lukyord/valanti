<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VALANTI</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="VALANTI">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#E0DAD0">
    <meta name="theme-color" content="#E0DAD0">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-default.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/development.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/misc.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/about.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/news.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/contact.css?v=<?php echo time(); ?>">


    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <header id="header">
            <div class="header-nav">
                <nav>
                    <div class="contact">
                        <a href="<?php echo $root; ?>contact.php">Contact</a>
                    </div>
                    <div class="logo">
                        <a class="link-overlay" href="<?php echo $root; ?>index.php" aria-label="Go back to homepage">&nbsp;</a>
                        <img src="./assets/svg/logo.svg" alt="logo">
                    </div>
                    <div class="header-menu-ctrl">
                        <a class="ctrl" href="javascript:;">
                            <div class="menu-icon-outer">
                                <img src="./assets/svg/menu-icon-outer.svg" alt="menu-icon-outer">
                            </div>
                            <div class="menu-icon-inner">
                                <img src="./assets/svg/menu-icon-inner.svg" alt="menu-icon-inner">
                            </div>
                        </a>
                    </div>
                </nav>
                <div class="header-menu">
                    <div class="panel-scroll" data-lenis-prevent>
                        <div class="panel-wrap">
                            <div class="panel-body">
                                <ul class="menu font-heading">
                                    <li><a href="<?php echo $root; ?>about.php">ABOUT US</a></li>
                                    <li><a href="<?php echo $root; ?>development.php">DEVELOPMENTS</a></li>
                                    <li><a href="<?php echo $root; ?>leadership.php">LEADERSHIP</a></li>
                                    <li><a href="<?php echo $root; ?>news.php">IN THE NEWS</a></li>
                                    <li class="hidden-device-md"><a href="<?php echo $root; ?>contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                            <ul class="panel-footer">
                                <li><a href="<?php echo $root; ?>page.php">Terms & Conditions</a></li>
                                <li><a href="<?php echo $root; ?>page.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </header>