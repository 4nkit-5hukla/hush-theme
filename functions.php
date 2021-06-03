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
  // 'HTML_Minify' => get_template_directory() . '/inc/classes/HTML_Minify.php',
  //TODO: functions include
  'add_theme_options_page' => get_template_directory() . '/inc/functions/add_theme_options_page.php',
  'remove_wp_defaults' => get_template_directory() . '/inc/functions/remove_wp_defaults.php',
  'woocommerce_template_single_price' => get_template_directory() . '/inc/functions/woocommerce_template_single_price.php',
  'bbloomer_product_reviews_shortcode' => get_template_directory() . '/inc/functions/bbloomer_product_reviews_shortcode.php',
  //'wooc_extra_register_fields' => get_template_directory() . '/inc/functions/wooc_extra_register_fields.php',

  
  
  // 'do_minify' => get_template_directory() . '/inc/functions/do_minify.php',
  //TODO: theme scripts
  'theme_scripts' => get_template_directory() . '/inc/actions/theme_scripts.php',
  'hush_register_form' => get_template_directory() . '/inc/actions/hush_register_form.php',
  'hush_user_register' => get_template_directory() . '/inc/actions/hush_user_register.php',
  //TODO: filters
  'remove_ver' => get_template_directory() . '/inc/filters/remove_ver.php',
  'wc_wc20_variation_price_format' => get_template_directory() . '/inc/filters/wc_wc20_variation_price_format.php',
  'hush_registration_errors' => get_template_directory() . '/inc/filters/hush_registration_errors.php',
  /* 'minify_css' => get_template_directory() . '/inc/filters/minify_css.php', */
  //TODO: minify output
  // 'minify_start' => get_template_directory() . '/inc/actions/minify_start.php',
);
//TODO: Loop through all fille in the array above
foreach ($include_files as $handler => $file) {
  //TODO: Check if the file exists
  if (file_exists($file)) {
    //TODO: include the file once
    include_once $file;
  }
}

add_action('woocommerce_after_shop_loop_item', 'add_star_rating' );
function add_star_rating()
{
global $woocommerce, $product;
$average = $product->get_average_rating();

echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}


function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );

add_action( 'widgets_init', 'search' );
function search() {
  register_sidebar( array(
      'name' => __( 'search', 'theme-slug' ),
      'id' => 'search',
    ) );
}






