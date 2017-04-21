<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
    </div> <!-- End of container div -->

    <div class="slider">
        <img class="home-slider" src="<?php the_field('slider'); ?>" />
    </div>

	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
