<?php
add_action('init', function () {
    register_post_type('Employee', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny anställd'),
            'edit_item' => __('Editera anställda'),
            'add_new' => __( 'Lägg till anställd'),
            'name' => __('Anställda'),
            'search_items' => __('Sök på anställda'),
            'singular_name' => __('Anställd'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 50,
        'public' => true,
    ]);
});
