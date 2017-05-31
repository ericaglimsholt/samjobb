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
<div class="row contact-row">
    <div class="col-md-6 contact">
        <h2><?php the_field('title'); ?></h2>
        <div class="forms">
            <?php the_field('forms'); ?>
        </div>
    </div>
    <div class="col-md-6 contact">
        <p><?php the_field('description'); ?></p>
        <hr>
        <p>Adress: <?php the_field('adress'); ?></p>
        <p>Telefonnummer: <?php the_field('phonenumber'); ?></p>
        <p>Mail: <?php the_field('email'); ?></p>
    </div>
</div>

<?php
$employees = array (
    'numberposts'	=> -1,
    'post_type'		=> 'employee',
);

$the_query = new WP_Query( $employees );
 ?>

 <div class="employee-hr">
     <hr>
 </div>

<!-- Show employee -->
<div class="row">

    <div class="col-md-12 employee-contact">
        <h2><?php the_field('title_employee'); ?></h2>
    </div>
    <?php if( $the_query->have_posts() ): ?>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-4 employee-contact">
            <img src="<?php the_field('image'); ?>" alt="">
            <p class="employee-name"><?php the_field('name'); ?></p>
            <p class="employee-work"><?php the_field('work_area'); ?></p>
            <hr>
            <p class="employee-description"><?php the_field('description'); ?></p>
        </div>
    	<?php endwhile; ?>
    <?php endif; ?>
<?php wp_reset_query(); ?>
</div>


<?php get_footer(); ?>
