<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

//do_action( 'woocommerce_before_cart' ); ?>




<section class="cart-section">
  <div class="container-fluid">
    <div class="row justify-content-between px-2 px-md-3">
      <div class="cart-left-part">
        <h1 class="hn-m">Bag</h1>
        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

        <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

					?>
          
          
          <div class="cart-item d-flex">
          <div class="item-thumbnail">
            <img src="images/pdt3.jpg" alt="Item" class="w-100 d-none" />
          </div>
          <div class="item-detail">
            <h6 class="hn-m pt-2"><?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="item-title mt-0">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ));
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?></h6>
            <p class="item-category hn-l">
            <?php foreach(get_the_terms( $product_id, 'product_tag' ) as $tag): ?>
              <?php echo $tag->name; ?>
            <?php endforeach; ?>
            </p>
          
            <p class="item-tag hn-l">
               <?php foreach(get_the_terms( $product_id, 'product_cat' ) as $cat): ?>
              <?php echo $cat->name; ?>
            <?php endforeach; ?>
            </p>
            
            <p class="item-conf hn-l">Weight 3.5g | Quantity 1</p>
            <?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove-item hn-m" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove Item</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
          </div>
        </div>

					<?php
				}
			}
			?>
        
        </form>
      </div>


     

      <div class="cart-right-part mt-5 mt-lg-0">
        <h5 class="hn-m">Summary</h5>
       
        <?php
		do_action( 'woocommerce_cart_collaterals' );
	?>
      </div>
    </div>
  </div>
</section>
