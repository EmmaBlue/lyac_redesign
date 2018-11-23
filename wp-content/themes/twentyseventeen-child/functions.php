<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function twentyseventeenchild_enqueue_styles() {
    wp_enqueue_script( 'fadeIn', get_theme_file_uri() . '/js/fadeIn.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'style', get_theme_file_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentyseventeenchild_enqueue_styles' );
// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
  'main'    => __( 'Page Menu', 'twentyseventeen-child' ),
) );