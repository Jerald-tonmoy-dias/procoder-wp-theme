<?php 
/*
*My theme function
*/

// theme title
add_theme_support( 'title-tag', 'procoder' );


// theme css and js file calling
function procode_theme_files(){
    wp_enqueue_style('procode-style', get_stylesheet_uri());
    wp_enqueue_script('procode-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'procode_theme_files' );