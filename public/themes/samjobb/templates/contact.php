<?php
/*
Template Name: Kontakt
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

<!-- Opening contact and forms -->
<div class="row">
    <div class="col-md-6 contact">
        <h2><?php the_field('title'); ?></h2>
        <?php the_field('forms'); ?>
    </div>
    <div class="col-md-6 contact">
        <p><?php the_field('description'); ?></p>
        <hr>
        <p>Adress: <?php the_field('adress'); ?></p>
        <p>Telefonnummer: <?php the_field('phonenumber'); ?></p>
        <p>Mail: <?php the_field('email'); ?></p>
    </div>
</div>

<?php get_footer(); ?>
