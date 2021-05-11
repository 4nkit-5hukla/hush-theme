<?php
add_action('after_setup_theme', 'hush_theme_setup');
function hush_theme_setup()
{
  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(1568, 9999);
}