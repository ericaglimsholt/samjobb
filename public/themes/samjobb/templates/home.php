<?php
/*
Template Name: Hem
*/
?>
<?php include_once("analyticstracking.php") ?>
<?php get_header(); ?>

</div> <!-- End of container div -->

<!-- Header -->
<div class="header">
    <img class="home-header" src="<?php the_field('header'); ?>" />
    <div class="header-content">
        <h1><?php the_field('welcome_text'); ?></h1>
        <?php the_field('description_text'); ?>
    </div>
</div>

<!-- Opening info with button -->
<div class="container">
    <div class="row opening-info">
        <div class="col-md-5 home opening-info">
            <img class="home-opening-info" src="<?php the_field('image_opening_info'); ?>" />
        </div>
        <div class="col-md-7 home opening-info">
            <h2><?php the_field('title_opening_info'); ?></h2>
            <p><?php the_field('description_opening_info'); ?></p>
            <a href="<?php the_field('button_nav_opening_info'); ?>">
                <button class="button" type="opening-info-button" name="button">
                    <?php the_field('button_text_opening_info'); ?>
                </button>
            </a>
        </div>
    </div>

</div> <!-- Closing container -->
<!-- What we offer -->
    <div class="what_we_offer">
        <div class="container">
            <h2><?php the_field('title_what_we_offer'); ?></h2>
            <div class="row we-offer">
            <?php if( have_rows('what_we_offer') ): ?>
                <?php while ( have_rows('what_we_offer') ) : the_row(); ?>
                        <div class="col-md-6 what-we-offer">
                            <h3><?php the_sub_field('title_we_offer'); ?></h3>
                            <p><?php the_sub_field('description_we_offer'); ?></p>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>

<div class="container news">
    <!-- SnapWidget -->
    <h2>Senaste från våra sociala medier</h2>
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/396705" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
</div>
<hr>
<div class="container">
    <div class="row partners">
        <?php if( have_rows('logotypes_partners') ): ?>
            <?php while ( have_rows('logotypes_partners') ) : the_row(); ?>
                    <div class="col-md-2 partners">
                        <img src="<?php the_sub_field('img_partners'); ?>" alt="">
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>




<?php get_footer(); ?>
