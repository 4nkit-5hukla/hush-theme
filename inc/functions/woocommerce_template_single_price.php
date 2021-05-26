<?php
function woocommerce_template_single_price() {
    global $product;
    if ( ! $product->is_type('variable') ) { 
        woocommerce_get_template( 'single-product/price.php' );
    }
}