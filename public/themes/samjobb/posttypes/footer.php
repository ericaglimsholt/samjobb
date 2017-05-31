<?php
add_action('init', function () {
    register_post_type('Footer', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny anställd'),
            'edit_item' => __('Editera footer'),
            'add_new' => __( 'Lägg till anställd'),
            'name' => __('Footer'),
            'search_items' => __('Sök i footer'),
            'singular_name' => __('Footer'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 50,
        'public' => true,
    ]);
});
