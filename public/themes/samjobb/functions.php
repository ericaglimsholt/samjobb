<?php

// Register employee custom post type.
require get_template_directory().'/posttypes/employee.php';

add_filter( 'wpcf7_form_elements', 'delicious_wpcf7_form_elements' );

function delicious_wpcf7_form_elements( $form ) {
$form = do_shortcode( $form );
return $form;
}
