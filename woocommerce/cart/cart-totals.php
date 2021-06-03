<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>
  <div class="cart-summary">
          <ul class="p-0 m-0 list-unstyled">
            <li class="justify-content-between s-total d-flex">
              <strong>Subtotal</strong>
              <span data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></span>
            </li>
            <li class="justify-content-between estimated d-flex">
              <strong>Estimated Delivery & Handling</strong>
              <span><?php wc_cart_totals_taxes_total_html(); ?></span>
            </li>
             <li class="justify-content-between tax d-flex">
              <strong>Taxes</strong>
              <span>—</span>
            </li>
            
              <?php
              if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
                $taxable_address = WC()->customer->get_taxable_address();
                $estimated_text  = '';

                if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                  /* translators: %s location. */
                  $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
                }

                if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                  foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                    ?>
                    <li class="justify-content-between tax d-flex tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                      <strong><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                      <span data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
                    </li>
                    <?php
                  }
                } else {
                ?>
                <li class="tax-total">
                  <strong><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                  <span data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></span>
                </li>
                <?php
                }
              }
              ?>
              
            
            <li class="justify-content-between total d-flex">
              <strong>Total</strong>
              <span data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></span>
            </li>
          </ul>
          <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
        </div>


	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
