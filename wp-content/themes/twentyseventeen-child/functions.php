<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
  'main'    => __( 'Page Menu', 'twentyseventeen-child' ),
) );
