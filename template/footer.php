<footer id="footer">
    <div class="footer-nav">
        <div class="vertical-logo animate fadeIn">
            <img src="./assets/svg/val-vector.svg" alt="val-vec">
        </div>
        <div class="logos">
            <div class="logos-wrap">
                <div class="developments animate fadeIn">
                    <?php
                    $developments_logo_arr = array(
                        array(
                            "logo-name" => "rosewood",
                            "logo" => "./assets/svg/rosewood-logo.svg",
                            "link" => "#rosewood",
                        ),
                        array(
                            "logo-name" => "intercontinental",
                            "logo" => "./assets/svg/intercontinental-logo.svg",
                            "link" => "#intercontinental",
                        ),
                        array(
                            "logo-name" => "swan-lake",
                            "logo" => "./assets/svg/swan-lake-logo.svg",
                            "link" => "#swan-lake",
                        ),
                    );

                    foreach ($developments_logo_arr as $development_logo) {
                    ?>
                        <div class="logo-hover-ci">
                            <a class="link-overlay" href="<?php echo $root; ?>development.php<?php echo $development_logo["link"] ?>">&nbsp;</a>
                            <img src="<?php echo $development_logo["logo"] ?>" alt="<?php echo $development_logo["logo-name"] ?>">
                        </div>
                    <?php
                    } ?>
                </div>
                <div class="groups">
                    <p class="animate fadeIn">Part of the group:</p>
                    <div class="groups-logos animate fadeIn">
                        <?php
                        $groups_logo_arr = array(
                            array(
                                "logo-name" => "sixty-deg",
                                "logo" => "./assets/svg/sixty-deg-logo.svg",
                                "link" => "#outer"
                            ),
                            array(
                                "logo-name" => "sixty-deg",
                                "logo" => "./assets/svg/sixty-deg-logo.svg",
                                "link" => "#outer"
                            ),
                        );

                        foreach ($groups_logo_arr as $group_logo) {
                        ?>
                            <div class="logo-hover-ci small">
                                <a class="link-overlay" href="<?php echo $group_logo["link"] ?>">&nbsp;</a>
                                <img src="<?php echo $group_logo["logo"] ?>" alt="<?php echo $group_logo["logo-name"] ?>">
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="links-and-detail animate fadeIn">
            <div class="links-and-detail-wrap">
                <address>
                    <p class="animate fadeIn">VALANTI Co., Ltd.</p>
                    <p class="animate fadeIn">
                        518/5 Maneeya Center Building, 11th floor<br>
                        Ploenchit Road, Lumpini, Pathumwan<br>
                        Bangkok Thailand 10330
                    </p>
                    <p>
                        <a href="tel:+6629998586" class="weight-medium animate fadeIn">+66 (0) 2 999 8586</a>
                    </p>
                    <p>
                        <a href="mailto:info@valanti.com" class="weight-medium animate fadeIn">info@valanti.com</a>
                    </p>
                </address>
                <div class="links">
                    <ul class="pages">
                        <li class="animate fadeIn"><a class="more-opacity-hover" href="<?php echo $root; ?>development.php">Developments</a></li>
                        <li class="animate fadeIn"><a class="more-opacity-hover" href="<?php echo $root; ?>about.php">About Us</a></li>
                        <li class="animate fadeIn"><a class="more-opacity-hover" href="<?php echo $root; ?>leadership.php">Leadership</a></li>
                        <li class="animate fadeIn"><a class="more-opacity-hover" href="<?php echo $root; ?>page.php">Terms & Conditions</a></li>
                        <li class="animate fadeIn"><a class="more-opacity-hover" href="<?php echo $root; ?>page.php">Privacy Policy</a></li>
                    </ul>
                    <ul class="socials animate fadeIn">
                        <li><a class="more-opacity-hover" href="#outer"><i class="ic ic-facebook"></i></a></li>
                        <li><a class="more-opacity-hover" href="#outer"><i class="ic ic-instagram"></i></a></li>
                        <li><a class="more-opacity-hover" href="#outer"><i class="ic ic-twitter"></i></a></li>
                        <li><a class="more-opacity-hover" href="#outer"><i class="ic ic-line"></i></a></li>
                        <li><a class="more-opacity-hover" href="#outer"><i class="ic ic-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
    // include($root . "include/_wp-code/wp-cookie-preference.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/common/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/index.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/development.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/about.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/contact.js?v=<?php echo time(); ?>"></script>


</body>

</html>