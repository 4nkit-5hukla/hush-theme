<?php
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
  remove_wp_defaults();
  // Enqueue scripts and styles here
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.css', false, wp_get_theme()->get('Version'));
  wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'));
  wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'));
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'));
}