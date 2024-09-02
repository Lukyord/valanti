<div class="news-card animate fadeIn">
    <a class="link-overlay" href="<?php echo $root; ?>news-single.php">&nbsp;</a>
    <div class="news-image">
        <img src="<?php echo $news["image"] ?>" alt="<?php echo $news["title"] ?>">
    </div>
    <div class="news-detail a-center">
        <h3 class="size-h3 font-heading letter-spacing-title-sm"><?php echo $news["title"] ?></h3>
        <?php
        if (!empty($news["author"])) {
        ?>
            <p style="margin-bottom: -6px">By <?php echo $news["author"] ?></p>
        <?php } ?>
        <p><?php echo $news["description"] ?></p>
        <p class="margin-top-16"><strong><?php echo $news["press"] ?></strong>, <?php echo $news["date"] ?></p>
    </div>
</div>