<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function theme_enqueue_assets() {
	// Stylesheets
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'build-style', get_theme_file_uri('/build/index.css'));
	wp_enqueue_style( 'animatecss', get_theme_file_uri('/node_modules/animate.css/animate.min.css'));
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/main.css');

	// Scripts
	wp_enqueue_script('child-script', get_theme_file_uri('/build/index.js'), NULL, '1.0', $args = ['strategy' => 'defer', 'in_footer' => true]);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}