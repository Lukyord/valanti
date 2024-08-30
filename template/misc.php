<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="main misc">
    <section class="sc misc-hero">
        <div class="hero-text a-center">
            <h1 class="size-h1-h2-m font-heading letter-spacing-title-lg animate fadeIn">SORRY, <br />
                PAGE NOT FOUND</h1>
            <p class="margin-top-20 animate fadeIn">The requested URL was not found on this server.</p>
            <div class="back-button margin-top-60">
                <a href="<?php echo $root ?>index.php">
                    <button class="button button-hyperion"><span><span>Back to home</span></span><i class="ic ic-angle-right size-icon-32 c-gray-dark"></i></button>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>