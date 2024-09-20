<section id="<?php echo $development_project["project-name"] ?>" class="sc development-template <?php echo $development_project["image-side"] . ' ' . $development_project["template"]; ?>">
    <div class="sc-inner">
        <div class="heading">
            <div class="logo">
                <div class="logo-image animate fadeIn">
                    <img src="<?php echo $development_project["logo"] ?>" alt="<?php echo $development_project["project-name"] ?>">
                </div>
                <p class="animate fadeIn"><strong><?php echo $development_project["location"] ?></strong>, <?php echo $development_project["country"] ?></p>
            </div>
            <div class="description animate fadeIn">
                <?php echo $development_project["description"] ?>
            </div>
        </div>

        <div class="body">
            <div class="main-image-banner">
                <img src="<?php echo $development_project["img1"] ?>" alt="<?php echo $development_project["project-name"] ?>" class="animate matrixZoomOut">
            </div>
            <div class="main-content">
                <div class="text-content">
                    <div class="text">
                        <h3 class="animate fadeIn size-h3 font-heading letter-spacing-title-sm"><?php echo $development_project["topic"] ?></h3>
                        <p class="animate fadeIn"><?php echo $development_project["topic-description"] ?></p>
                        <ul class="socials animate fadeIn">
                            <li><a href="javascript:;" onclick="fbShare()" class="more-opacity-hover"><i class="ic ic-facebook size-icon-20"></i></a></li>
                            <li><a href="javascript:;" onclick="tweetShare()" class="more-opacity-hover"><i class="ic ic-twitter size-icon-20"></i></a></li>
                        </ul>
                    </div>
                    <div class="image-description hidden-device-sm">
                        <img src="<?php echo $development_project["img2"] ?>" alt="<?php echo $development_project["project-name"] ?>" class="animate fadeIn">
                    </div>
                </div>
                <div class="grid-images">
                    <img src="<?php echo $development_project["img3"] ?>" alt="<?php echo $development_project["project-name"] ?>" class="animate fadeIn">
                    <img src="<?php echo $development_project["img4"] ?>" alt="<?php echo $development_project["project-name"] ?>" class="animate fadeIn">
                    <img src="<?php echo $development_project["img5"] ?>" alt="<?php echo $development_project["project-name"] ?>" class="animate fadeIn">
                </div>
            </div>
            <div class="footer-banner animate fadeIn">
                <div class="link">
                    <a href="<?php echo $development_project["link"] ?>" target="_blank"><?php echo $development_project["link-name"] ?></a>
                </div>
                <?php
                $cover = $development_project["img6"];
                $cover_m = isset($development_project["img6-m"]) ? $development_project["img6-m"] : '';

                if (preg_match("/\.mp4$/", $cover)) { ?>
                    <figure class="object">
                        <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                    </figure>
                <?php } elseif (preg_match("/^https:/", $cover)) { ?>
                    <iframe
                        id="<?php echo $development_project["project-name"] ?>-iframe"
                        title="?php echo $development_project['project-name'] ?> video link"
                        src="<?php echo $cover; ?>&autoplay=1&mute=1&controls=0&rel=0&loop=1">
                        allow="accelerometer; autoplay; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    </iframe>
                <?php } elseif (preg_match("/\.(png|jpg|jpeg|gif)$/", $cover)) { ?>
                    <picture class="object">
                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img src="<?php echo $cover; ?>" alt="hero bg">
                    </picture>
                <?php } ?>


            </div>
        </div>
    </div>
    <div class="separator sc-width animate fadeIn"></div>
</section>