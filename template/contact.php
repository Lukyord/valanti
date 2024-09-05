<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="main contact">
    <section class="sc contact-hero">
        <div class="sc-inner first-sc">
            <div class="hero-text a-center">
                <h1 class="size-h1-h2-m font-heading letter-spacing-title animate fadeIn">CONTACT</h1>
                <p class="size-h4 letter-spacing-title-des animate fadeIn">Reach out to our team or leave your <br class="hidden-device-sm">details<br class="hidden-device-md"> below to receive more information.</p>
            </div>
        </div>
    </section>

    <section class="sc contact-content">
        <div class="sc-inner">
            <div class="map-and-detail">
                <div class="detail hidden-device-sm">
                    <h3 class="font-heading size-h3 letter-spacing-title-sm animate fadeIn">VALANTI CO., LTD.</h3>
                    <p class="margin-top-20 animate fadeIn">
                        518/5 Maneeya Center Building, 11th floor <br>
                        Ploenchit Road, Lumpini, Pathumwan <br>
                        Bangkok Thailand 10330
                        <br><br>
                        Office: <br>
                        <a href="tel:+6629998586" class="weight-semibold">+66 (0) 2 999 8586</a>
                        <br><br>
                        Email: <br>
                        <a href="mailto:info@valanti.com" class="weight-semibold">info@valanti.com</a>
                    </p>
                </div>
                <div class="map animate fadeIn">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe> -->
                    <img src="./assets/img/design/map-mock.jpg" alt="company map">
                    <div class="pin" style="top: 25%; right: 25%">
                        <a href="#outer">
                            <button class="button button-hyperion"><span><span>Explore in Google Maps</span></span><i class="ic ic-angle-right size-icon-32 c-gray-dark"></i></button>
                        </a>
                        <div class="pin-image">
                            <img src="./assets/svg/map-pin.svg" alt="map pin">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="entry-form" data-form-style="space-between">
                    <form class="wpcf7-form" action="<?php echo $root ?>misc.php">
                        <div class="fields">
                            <div class="field animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="fullname-lastname">*Name</label>
                                    <span class="wpcf7-form-control-wrap" data-name="fullname-lastname">
                                        <input type="text" name="fullname-lastname" id="fullname-lastname" autocomplete="given-name family-name" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>
                            <div class="field half-width animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="tel">*Phone number</label>
                                    <input type="tel" name="tel" id="tel" autocomplete="tel" required>
                                </div>
                            </div>
                            <div class="field half-width animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="email">*Email address</label>
                                    <input type="email" name="email" id="email" autocomplete="email" required>
                                </div>
                            </div>
                            <div class="field half-width animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="company">Company</label>
                                    <input type="text" name="company" id="company" autocomplete="organization">
                                </div>
                            </div>
                            <div class="field half-width animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="city">*City</label>
                                    <span class="wpcf7-form-control-wrap" data-name="city">
                                        <input type="text" name="city" id="city" autocomplete="address-level2" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>

                            <div class="field half-width animate fadeIn">
                                <div class="input with-select">
                                    <label class="label anim fixed" for="interest">I am interested in</label>
                                    <input type="text" name="interest" id="interest" autocomplete="interest" class="select-others" placeholder="Please specify">
                                    <div class="select">
                                        <select class="select2 with-others" data-placeholder="">
                                            <option value=""></option>
                                            <option value="Option1">Sales / Marketing</option>
                                            <option value="Option2">Investment</option>
                                            <option value="Option3">Careeers</option>
                                            <option value="others">Others Please Specify</option>
                                        </select>
                                    </div>
                                    <span class="trigger-dropdown"><i class="ic ic-angle-down"></i></span>
                                </div>
                            </div>
                            <div class="field half-width animate fadeIn">
                                <div class="input with-select">
                                    <label class="label anim fixed" for="how-did-you-hear-about-us">How did you hear about us?</label>
                                    <input type="text" name="how-did-you-hear-about-us" id="how-did-you-hear-about-us" class="select-others" placeholder="Please specify">
                                    <div class="select">
                                        <select class="select2 with-others" data-placeholder="">
                                            <option value=""></option>
                                            <option value="Option1">PR / News</option>
                                            <option value="Option2">Referral</option>
                                            <option value="Option3">Social Media + word of mouth</option>
                                            <option value="others">Others Please Specify</option>
                                        </select>
                                    </div>
                                    <span class="trigger-dropdown"><i class="ic ic-angle-down"></i></span>
                                </div>
                            </div>

                            <div class="field animate fadeIn">
                                <div class="input">
                                    <label class="label anim fixed" for="text">Message</label>
                                    <textarea name="text" id="text" autocomplete="off" required></textarea>
                                </div>
                            </div>

                            <div class="form-footer">
                                <a href="javascript:;" class="animate fadeIn">
                                    <button type="submit" class="button button-hyperion"><span><span>Get in touch</span></span><i class="ic ic-angle-right size-icon-32 c-gray-dark"></i></button>
                                </a>
                                <div class="input checkbox border-none animate fadeIn">
                                    <span class="wpcf7-form-control-wrap" data-name="terms">
                                        <input type="checkbox" name="terms" id="terms" autocomplete="off" class="checkbox" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                    <label class="label size-subtitle1" for="terms">I understand that the information I have<br>
                                        provided is subject to the <a href="<?php echo $root; ?>page.php" class="weight-semibold" target="_blank">Privacy Policy*</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>