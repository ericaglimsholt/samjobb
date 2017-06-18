<?php
/*
Template Name: Styrelse
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

<div class="container">

<!-- Show board members -->
<div class="row">
  <?php if( have_rows('choose_employee') ): ?>
    <?php while( have_rows('choose_employee') ): the_row();   ?>
        <?php $posts = get_sub_field('add_employee'); if( $posts ): ?>
          <?php foreach( $posts as $post): ?>
              <div class="col-md-4 employee-contact">
                  <img src="<?php the_field('image'); ?>" alt="">
                  <p class="employee-name"><?php the_field('name'); ?></p>
                  <p class="employee-work"><?php the_field('work_area'); ?></p>
                  <hr>
                  <p class="employee-description"><?php the_field('description'); ?></p>
                  <a href="mailto:<?php the_field('mail_address'); ?>?" target="_top">
                      <button type="button" name="button-mini">Maila mig</button>
                  </a>
              </div>
          <?php endforeach; ?>
         <?php wp_reset_postdata();  ?>
        <?php endif; ?>
  <?php endwhile; endif?>
</div>

<?php get_footer(); ?>
