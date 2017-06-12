<?php

// Register employee custom post type.
require get_template_directory().'/posttypes/employee.php';

// Register employee custom post type.
require get_template_directory().'/posttypes/footer.php';

// Add meny in apperance
function register_my_menus() {
  register_nav_menus(
    array(
      'pages' => __( 'pages' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyCBKni9WfIvXyMwDe_a-KT6GBVQsHHnr28');
}

add_action('acf/init', 'my_acf_init');
