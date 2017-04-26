<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
    </div> <!-- End of container div -->

    <!-- Header -->
    <div class="header">
        <img class="home-header" src="<?php the_field('header'); ?>" />
        <div class="header-content">
            <h1><?php the_field('welcome_text'); ?></h1>
            <p><?php the_field('description_text'); ?></p>
            <a href="<?php the_field('button_nav'); ?>">
                <button class="button" type="slider-button" name="button">
                    <?php the_field('button_text'); ?>
                </button>
            </a>
        </div>
    </div>

    <!-- About us sum -->
    <div class="container">
        <div class="row about-us">
            <div class="col-md-5 home about-us">
                <img class="home-about-us" src="<?php the_field('image_about_us'); ?>" />
            </div>
            <div class="col-md-7 home about-us">
                <h2><?php the_field('title_about_us'); ?></h2>
                <p><?php the_field('description_about_us'); ?></p>
                <a href="<?php the_field('button_nav_about_us'); ?>">
                    <button class="button" type="about-us-button" name="button">
                        <?php the_field('button_text_about_us'); ?>
                    </button>
                </a>
            </div>
        </div>

        </div> <!-- End of container div -->
        <!-- What we offer-->
        <div class="what_we_offer">
            <div class="container">
            <h2><?php the_field('title_what_we_offer'); ?></h2>
            <div class="row we-offer">
                <div class="col-md-6 what-we-offer">
                    <h3><?php the_field('title_what_we_offer_1'); ?></h3>
                    <?php the_field('description_what_we_offer_1'); ?>
                </div>
                <div class="col-md-6 we-offer">
                    <h3><?php the_field('title_what_we_offer_2'); ?></h3>
                    <?php the_field('description_what_we_offer_2'); ?>
                </div>
            </div>
            <div class="row we-offer">
                <div class="col-md-6 what-we-offer">
                    <h3><?php the_field('title_what_we_offer_3'); ?></h3>
                    <?php the_field('description_what_we_offer_3'); ?>
                </div>
                <div class="col-md-6 we-offer">
                    <h3><?php the_field('title_what_we_offer_4'); ?></h3>
                    <?php the_field('description_what_we_offer_4'); ?>
                </div>
            </div>
        </div>
    </div>

        <!-- News-->
        <div class="news">
            <h2><?php the_field('title_news'); ?></h2>
        </div>



	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
