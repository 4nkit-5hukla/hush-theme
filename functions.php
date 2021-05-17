<?php
//TODO: Turn Off Admin Bar
show_admin_bar(false);

$include_files = array(
  //TODO: head actions
  'init' => get_template_directory() . '/inc/actions/init.php',
  'setup' => get_template_directory() . '/inc/actions/hush_theme_setup.php',
  'after_head' => get_template_directory() . '/inc/actions/after_head.php',
  'before_closing' => get_template_directory() . '/inc/actions/before_closing.php',
  //TODO: class include
  'HTML_Minify' => get_template_directory() . '/inc/classes/HTML_Minify.php',
  //TODO: functions include
  'add_theme_options_page' => get_template_directory() . '/inc/functions/add_theme_options_page.php',
  'remove_wp_defaults' => get_template_directory() . '/inc/functions/remove_wp_defaults.php',
  'do_minify' => get_template_directory() . '/inc/functions/do_minify.php',
  //TODO: theme scripts
  'theme_scripts' => get_template_directory() . '/inc/actions/theme_scripts.php',
  //TODO: filters
  'remove_ver' => get_template_directory() . '/inc/filters/remove_ver.php',
  /* 'minify_css' => get_template_directory() . '/inc/filters/minify_css.php', */
  //TODO: minify output
  'minify_start' => get_template_directory() . '/inc/actions/minify_start.php',
);
//TODO: Loop through all fille in the array above
foreach ($include_files as $handler => $file) {
  //TODO: Check if the file exists
  if (file_exists($file)) {
    //TODO: include the file once
    include_once $file;
  }
}