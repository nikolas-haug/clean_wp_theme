<?php 

// Enqueue styles
function clean_wp_enqueue_scripts() {

    wp_enqueue_style( 'bootstrap', get_theme_file_uri() . '/css/bootstrap.css' );

}
add_action( 'wp_enqueue_scripts', 'clean_wp_enqueue_scripts' );