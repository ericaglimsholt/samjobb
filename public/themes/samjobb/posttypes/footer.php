<?php
add_action('init', function () {
    register_post_type('Footer', [
        'has_archive' => true,
        'labels' => [
            'edit_item' => __('Editera footer'),
            'name' => __('Footer'),
            'singular_name' => __('Footer'),
        ],
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'menu_position' => 50,
        'public' => true,
    ]);
});
