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
