<?php
// theme title
add_theme_support('title-tag', 'procoder');


// add css and js file to the theme
function procode_theme_files()
{

  // for css
  wp_enqueue_style('procode-style', get_stylesheet_uri());
  wp_enqueue_style('procode-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
  wp_enqueue_style('procode-custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
  // wp_enqueue_style('procode-google-fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);

  // for js
  wp_enqueue_script('jquery');
  wp_enqueue_script('procode-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true);
  wp_enqueue_script('procode-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'procode_theme_files');


// google font enque
function procode_google_fonts()
{
  wp_enqueue_style('procode-google-fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'procode_google_fonts');


// theme function
function procode_customizer_register($wp_customize)
{
  // add section
  $wp_customize->add_section('procode_header_section', array(
    'title' => __('Header Section', 'procode'),
    'description' => sprintf(__('If you want to update settings, you can do it from here', 'procode')),
    // 'priority' => 30
  ));
  $wp_customize->add_setting('procode_header_logo', array(
    // 'default' => get_template_directory_uri() . '/img/logo.png',
    // 'type' => 'theme_mod'
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'procode_header_logo', array(
    'label' => __('Upload Logo', 'procode'),
    'section' => 'procode_header_section',
    'settings' => 'procode_header_logo',
    'priority' => 1
  )));

}

add_action( 'customize_register', 'procode_customizer_register');

// menu register 
register_nav_menu( 'main_menu', __('Main Menu','procodertheme'));