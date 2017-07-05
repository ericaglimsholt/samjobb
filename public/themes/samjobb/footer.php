<?php
/*
Template Name: Footer
*/
?>

<?php
$footer = array (
    'numberposts'	=> -1,
    'post_type'		=> 'footer',
);

$the_query = new WP_Query( $footer );
?>



<!-- End of container div, starts in header.php -->
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4 footer">

                <h5>Om SamJobb</h5>
                <p><?php the_field('about-samjobb'); ?></p>
                <h5>Följ SamJobb</h5>
                <a target="_blank" href="<?php the_field('facebook-link'); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook-icon.png" alt="">
                </a>
                <a target="_blank" href="<?php the_field('instagram-link'); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram-icon.png" alt="">
                </a>
            </div>
            <div class="col-md-4 footer">
                <h5>Öppetider</h5>
                <p><?php the_field('opening-hours'); ?></p>
            </div>
            <div class="col-md-4 footer">
                <h5>Kontakta oss</h5>
                <?php echo do_shortcode( '[contact-form-7 id="292" title="Footer kontaktformulär"]' ); ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </div>
</div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    </body>
</html>
