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

function woocommerce_template_single_price() {
    global $product;
    if ( ! $product->is_type('variable') ) { 
        woocommerce_get_template( 'single-product/price.php' );
    }
}
add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );

function wc_wc20_variation_price_format( $price, $product ) {
    // Main Price
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    // Sale Price
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    if ( $price !== $saleprice ) {
        $price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
    }

    return $price;
}