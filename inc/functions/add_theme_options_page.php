<?php
if (!function_exists('add_theme_options_page')) {
  function add_theme_options_page()
  {
    // check function exists
    if (!function_exists('acf_add_options_page')) {
      return;
    }
    // register options page
    $my_options_page = acf_add_options_page(
      array(
        'page_title' => __('Theme Options'),
        'menu_title' => __('Theme Options'),
        'menu_slug' => 'theme-options',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_posts',
        'show_in_graphql' => true,
        'update_button' => __('Save Options'),
        'updated_message' => __('Options Saved'),
      )
    );
  }
  add_action('acf/init', 'add_theme_options_page');
}