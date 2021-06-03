<?php 
add_action( 'woocommerce_register_form', 'hush_register_form' );
function hush_register_form() {
    $first_name = ( ! empty( $_POST['first_name'] ) ) ? trim( $_POST['first_name'] ) : '';
    $last_name = ( ! empty( $_POST['last_name'] ) ) ? trim( $_POST['last_name'] ) : '';
    $dob = ( ! empty( $_POST['dob'] ) ) ? trim( $_POST['dob'] ) : '';
        ?>
        <p class="form-group col-sm-12">
			
				<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" placeholder="First Name" name="first_name" id="first_name"  value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25"/><?php // @codingStandardsIgnoreLine ?>
			</p>
      <p class="form-group col-sm-12">
				
				<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" placeholder="First Name" name="last_name" id="last_name" value="<?php echo esc_attr( wp_unslash( $last_name ) ); ?>" size="25" /><?php // @codingStandardsIgnoreLine ?>
			</p>
      <p class="form-group col-sm-12 date-field position-relative">
			
				<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text form-control" 
        onfocus="(this.type='date')"
                  onblur="(this.type='text')"
                  name="dob"
                  id="dob"
                  placeholder="Date of Birth"
          value="<?php echo esc_attr( wp_unslash( $dob ) ); ?>" size="25" /><?php // @codingStandardsIgnoreLine ?>
			</p>
        <?php
    }