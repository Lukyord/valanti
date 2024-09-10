<div class="swiper-slide with-bg">
    <div class="location a-center animate fadeIn">
        <div class="bg-image">
            <picture class="object">
                <source media="(min-width:992px)" srcset="<?php echo $location["bg-image"] ?>">
                <source media="(min-width:0px)" srcset="<?php echo $location["bg-image-m"] ?>">
                <img src="<?php echo $cover; ?>" alt="bg image">
            </picture>
        </div>
        <div class="content">
            <h3 class="font-heading letter-spacing-title-sm size-h3"><?php echo $location["title"] ?></h3>
            <p class="margin-top-24"><?php echo $location["description"] ?></p>
            <p class="margin-top-40"><strong>Bangkok</strong>, Thailand</p>
        </div>
    </div>
</div>