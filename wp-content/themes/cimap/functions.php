<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/public/css/app.css', array(), '1', 'all');

    wp_enqueue_script('jquery');
    // wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array ('jquery'), 2.10, true);
    // wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array ( 'popper' ), 5.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/public/js/app.js', array (), 1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );