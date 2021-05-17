<?php
function remove_wp_defaults()
{
  wp_deregister_style("wp-block-library");
  wp_deregister_script("wp-embed");
  // Move Scripts To Footer
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);

  remove_action('wp_head', array($GLOBALS['woocommerce'], 'generator'));
  wp_deregister_style("wc-block-vendors-style");
  wp_deregister_style("woocommerce-layout");
  wp_deregister_style("woocommerce-smallscreen");
  wp_deregister_style("woocommerce-general");
  wp_deregister_style("woocommerce-inline");
  add_filter('woocommerce_enqueue_styles', '__return_empty_array');

  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
}