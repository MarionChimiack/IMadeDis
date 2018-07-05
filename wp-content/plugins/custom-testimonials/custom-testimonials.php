<?php
/*
Plugin Name: Custom Testimonials Slider
Author: Marion
Description: Add and Display Testimonials in a Slider
Version: 1.0
*/
function plugin_testimonials_init(){
  $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'marion' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'marion' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'marion' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'marion' ),
        'add_new'               => __( 'Add New', 'marion' ),
        'add_new_item'          => __( 'Add New Testimonial', 'marion' ),
        'new_item'              => __( 'New Testimonial', 'marion' ),
        'edit_item'             => __( 'Edit Testimonial', 'marion' ),
        'view_item'             => __( 'View Testimonial', 'marion' ),
        'all_items'             => __( 'All Testimonials', 'marion' ),
        'featured_image'        => _x( 'Logo', 'marion' ),
        'remove_featured_image' => _x( 'Remove Logo', 'marion' ),
  );

  $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'plugin_testimonials_init');

function marion_plugin_install(){
  plugin_testimonials_init();
  //testimonial_plugin_scripts();
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'marion_plugin_install' );

function marion_plugin_deactivation() {
    unregister_post_type( 'testimonial' );
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'marion_plugin_deactivation' );

function testimonial_plugin_scripts()
{
    wp_enqueue_style( 'testimonial', plugin_dir_url( __FILE__ ) .'css/style.css' );

    wp_register_script( 'carousel_script', plugin_dir_url( __FILE__ ) . 'js/custom-carousel.js', '', '1.1', true );
    wp_enqueue_script( 'carousel_script' );

}
add_action('init', 'testimonial_plugin_scripts');

function my_custom_init() {

        add_post_type_support( 'testimonial', 'thumbnail' );
}
add_action('init', 'my_custom_init');

function testimonial_plugin_shortcode(){
  $args = [
      'post_type'      => 'testimonial',
      'posts_per_page' => 4,
  ];
  $loop = new WP_Query($args);
  $content = '';
  while ($loop->have_posts()) {
      $loop->the_post();
      $content .= '<div class="item">';
      $content .= '<img src="' . get_the_post_thumbnail_url() . '" class="clientLogo" alt="'. get_the_title() .'" />';
      $content .= get_the_content();
      $content .= '- ' . get_post_meta(get_the_ID(), 'client', TRUE);
      $content .= '</div>';
  }
  return $content;
}
function testimonials_shortcodes_init()
{
    add_shortcode('testimonials', 'testimonial_plugin_shortcode');
}
add_action( 'init', 'testimonials_shortcodes_init');
