<?php
/*
Template Name: Stöd & Matchning
*/
?>

<?php get_header(); ?>

</div> <!-- End of container div -->

<!-- Header -->
<div class="header">
    <img class="home-header" src="<?php the_field('header'); ?>" />
    <div class="header-content">
        <h1><?php the_field('welcome_text'); ?></h1>
        <p><?php the_field('description_text'); ?></p>
    </div>
</div>

<!-- Opening info -->
<div class="container">
    <div class="row opening-info">
        <div class="col-md-5 home opening-info">
            <img class="home-opening-info" src="<?php the_field('image_opening_info'); ?>" />
        </div>
        <div class="col-md-7 home opening-info">
            <h2><?php the_field('title_opening_info'); ?></h2>
            <p><?php the_field('description_opening_info'); ?></p>
        </div>
    </div>

<!-- Page information with contact-->
    <div class="row info">
        <div class="col-md-8 home info">
            <h2><?php the_field('title_info'); ?></h2>
            <?php if( have_rows('info') ): ?>
                <?php while ( have_rows('info') ) : the_row(); ?>
                    <p><?php the_sub_field('description_info'); ?></p>
                    <h3><?php the_sub_field('hilight_title_info'); ?></h3>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 info">
            <h2><?php the_field('title_info_contact'); ?></h2>
            <?php if( have_rows('contact_info') ): ?>
                <?php while ( have_rows('contact_info') ) : the_row(); ?>
                    <img class="info-contact-img" src="<?php the_sub_field('info_contact_img'); ?>" />
                    <p><?php the_sub_field('info_contact_name_phone'); ?></p>
                    <p><?php the_sub_field('info_contact_email'); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
