<?php
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
  remove_wp_defaults();
  // Enqueue scripts and styles here
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.css', false, wp_get_theme()->get('Version'));
}