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

class DD_Wolker_Menu extends Walker_Nav_Menu {
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
        $GLOBALS['dd_children'] = ( isset($children_elements[$element->ID]) )? 1:0;
        $GLOBALS['dd_depth'] = (int) $depth;
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}
add_filter('nav_menu_css_class','add_parent_css',10,2);
function  add_parent_css($classes, $item){
     global  $dd_depth, $dd_children;
     $classes[] = 'depth'.$dd_depth;
     if($dd_children)
         $classes[] = 'parent';
    return $classes;
}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101201494-1', 'auto');
  ga('send', 'pageview');

</script>
