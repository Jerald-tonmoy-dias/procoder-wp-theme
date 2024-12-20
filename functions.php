<?php
/*
*My theme function
*/

// theme title
add_theme_support('title-tag', 'procoder');


// theme css and js file calling
function procode_theme_files()

{

  // for css
  wp_enqueue_style('procode-style', get_stylesheet_uri());
  wp_enqueue_style('procode-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
  wp_enqueue_style('procode-custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');

  // for js
  wp_enqueue_script('jquery');
  wp_enqueue_script('procode-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true);
  wp_enqueue_script('procode-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'procode_theme_files');
