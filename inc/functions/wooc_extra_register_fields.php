    <?php 
    function wooc_extra_register_fields() {?>

            <div class="form-group col-sm-12">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Email"
                  value="<?php esc_attr_e( $_POST['email'] ); ?>"
                />
              </div>
          
             <div class="form-group col-sm-12">
                <input
                  type="password"
                  class="form-control"
                  name="pwd"
                  id="password"
                  placeholder="Password"
                  
                />
              </div>

          
           <div class="form-group col-sm-12">
                <input
                  type="text"
                  class="form-control"
                  name="account_first_name"
                  id="account_first_name"
                  placeholder="First Name"
                  value="<?php esc_attr_e( $_POST['account_first_name'] ); ?>"
                />
              </div>
               <div class="form-group col-sm-12">
                <input
                  type="text"
                  class="form-control"
                  name="account_last_name"
                  id="account_last_name"
                  placeholder="Last Name"
                  value="<?php esc_attr_e( $_POST['account_last_name'] ); ?>"
                />
              </div>
               <div class="form-group col-sm-12 date-field position-relative">
                <input
                  class="form-control"
                  onfocus="(this.type='date')"
                  onblur="(this.type='text')"
                  type="text"
                  name="b-date"
                  id="b-date"
                  placeholder="Date of Birth"
                  value="<?php if ( ! empty( $_POST['b-date'] ) ) esc_attr_e( $_POST['b-date'] ); ?>"
                />
              </div>
           
           
          
           <div class="clear"></div>
           <?php
     }
     add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );