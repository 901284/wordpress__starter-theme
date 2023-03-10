<?php
// initiate or override different features of theme

 function ithaca_theme_support() {
    // add dynamic title tag support
    add_theme_support('title-tag');
    // add custom logo support
    add_theme_support('custom-logo');
    // add featured image support
    add_theme_support('post-thumbnails');
    }

add_action('after_setup_theme', 'ithaca_theme_support');

// register styles
function ithaca_register_styles() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('ithaca-style', get_template_directory_uri() . "/style.css", $version, 'all');
    wp_enqueue_style('ithaca-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'ithaca_register_styles');

// register menus
function ithaca_menus() {
    $locations = array(
        // key and description
        'header' => 'Header Menu',
        'footer' => 'Footer Menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'ithaca_menus');

// register scripts
function ithaca_register_scripts() {

    wp_enqueue_script('ithaca-scripts', get_template_directory_uri() . "./assets/js/main.js", '1.0', true);

}

add_action('wp_enqueue_scripts', 'ithaca_register_scripts');

// trim posts excerpt length on archive pages
function ithaca_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'ithaca_custom_excerpt_length', 999 );

?>
