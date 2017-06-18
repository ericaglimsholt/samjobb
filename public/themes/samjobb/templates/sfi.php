<?php
/*
Template Name: SFI
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

<!-- Page information with contact and logotypes-->
    <div class="row info">
        <div class="col-md-8 home info">
            <h2><?php the_field('title_info_logo'); ?></h2>
            <p><?php the_field('description_info_logo'); ?></p>
            <?php if( have_rows('logo_info_logo') ): ?>
                <?php while ( have_rows('logo_info_logo') ) : the_row(); ?>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="logotypes_info" src="<?php the_sub_field('img_info_logo'); ?>" alt="Logotype">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 info employee-contact">
            <h2><?php the_field('title_info_contact'); ?></h2>
            <?php if( have_rows('choose_employee') ): ?>
              <?php while( have_rows('choose_employee') ): the_row();   ?>
                  <?php $posts = get_sub_field('choose_employee'); if( $posts ): ?>
                    <?php foreach( $posts as $post): ?>
                        <img src="<?php the_field('image'); ?>" alt="">
                        <p class="employee-name"><?php the_field('name'); ?></p>

                        <div class="same-line">
                            <p class="employee-work"><?php the_field('work_area'); ?></p>
                            <a href="mailto:<?php the_field('mail_address'); ?>?" target="_top">
                                 <button type="button" name="button-mini">Maila mig</button>
                             </a>
                        </div>
                    <?php endforeach; ?>
                   <?php wp_reset_postdata();  ?>
                  <?php endif; ?>
            <?php endwhile; endif?>
        </div>
    </div>

<?php get_footer(); ?>
