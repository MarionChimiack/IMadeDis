<?php
if (!function_exists('marion_setup')):
  function marion_setup(){
    register_nav_menus( array(
       'primary'   => __( 'Primary Menu', 'marion' ),
       'mobile'   => __( 'Mobile Menu', 'marion' ),
     ) );
     add_theme_support( 'post-thumbnails' );
  }
endif;
add_action( 'after_setup_theme','marion_setup' );

function marion_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/sass/main.css' );

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
}
add_action( 'wp_enqueue_scripts', 'marion_scripts' );

function marion_footer_scripts(){
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', '', '1.1', true );
        wp_enqueue_script('script');

        wp_register_script( 'nav_script', get_template_directory_uri() . '/js/nav.js', '', '1.1', true );
        wp_enqueue_script('nav_script');
}
add_action ('wp_enqueue_scripts', 'marion_footer_scripts');

function marion_custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 223,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'marion_custom_logo_setup' );

function footer_init(){
  register_sidebar( array(
    'name '          =>  __('Footer Col 1', 'marion'),
    'id'             => 'footer-col-1',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-section">',
    'after_title'    => '</h3>'
  ) );
  register_sidebar( array(
    'name '          =>  __('Footer Col 2', 'marion'),
    'id'             => 'footer-col-2',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-section">',
    'after_title'    => '</h3>'
  ) );
  register_sidebar( array(
    'name '          =>  __('Footer Col 3', 'marion'),
    'id'             => 'footer-col-3',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-section">',
    'after_title'    => '</h3>'
  ) );
  register_sidebar( array(
    'name '          =>  __('Footer Col 4', 'marion'),
    'id'             => 'footer-col-4',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-section">',
    'after_title'    => '</h3>'
  ) );
}
add_action ( 'widgets_init', 'footer_init');
