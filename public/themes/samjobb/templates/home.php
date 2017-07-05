<?php
/*
Template Name: Hem
*/
?>
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


    <div id="fb-root"></div>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container news">
    <!-- SnapWidget -->
    <h2>Senaste från våra sociala medier</h2>
    <div class="row">
        <div class="col-md-6">
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
                        <!-- SnapWidget -->
            <iframe src="https://snapwidget.com/embed/404734" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:100%;"></iframe>
        </div>

        <div class="col-md-6">
            <div class="fb-page"
                data-width="700"
            data-href="https://www.facebook.com/SamJobb/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/SamJobb/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SamJobb/">Samjobb</a></blockquote></div>
            </div>
        </div>
    </div>



<hr>

<div class="container">

<?php $images = get_field('logotypes'); ?>
<div class="row multiple-items partners">
    <?php if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="col-md-2 partners">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
<script>
$('.multiple-items').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,

});
</script>
