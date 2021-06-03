<footer>
    <div class="footer-top py-5">
        <div class="container">
        <?php $top_footer = get_field('top_footer', 'option'); ?>
            <?php if(!empty($top_footer)): ?>
            <div class="row f-menu">
                <?php foreach($top_footer as $column): ?>
                <div class="col-12 col-md-3 col-lg-3">
                    <h4 class="f-menu-title"><?php echo $column['heading']; ?></h4>
                    <?php if(!empty($column['list'])): ?>
                    <ul class="footer-menu-list p-0 list-unstyled d-none d-md-block">
                        <?php foreach($column['list'] as $id => $element): ?>
                        <li>
                            <a href="<?php echo $element['list_item']['url']; ?>" class="text-decoration-none"><?php echo $element['list_item']['title']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
  <div class="footer-bottom py-5" style="background-color:#141414;">
    <div class="secondary-container">
      <div class="row">
        <div class="col-12 col-md-3">
        <?php $bottom_footer = get_field('bottom_footer', 'option'); ?>
         <?php if(!empty($bottom_footer['user_links'])): ?>
          <ul class="footer-menu-list-light p-0 list-unstyled">
          <?php foreach($bottom_footer['user_links'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['list_item']['url']; ?>" class="text-decoration-none text-uppercase text-white"><?php echo $element['list_item']['title']; ?></a>
            </li>
             <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
          <h5 class="mb-3 text-white text-uppercase"><?php echo $bottom_footer['footer_menu_1']['heading']; ?></h5>
          <?php if(!empty($bottom_footer['footer_menu'])): ?>
          <ul class="footer-menu-list p-0 list-unstyled">
         <?php foreach($bottom_footer['footer_menu']['footer_menu'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['menu']['url']; ?>" class="text-decoration-none "><?php echo $element['menu']['title']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
         <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
        <h5 class="mb-3 text-white text-uppercase"><?php echo $bottom_footer['footer_menu_1']['heading']; ?></h5>
         <?php if(!empty($bottom_footer['footer_menu_1'])): ?>
          <ul class="footer-menu-list p-0 list-unstyled">
          <?php foreach($bottom_footer['footer_menu_1']['footer_menu'] as $id => $element): ?>
            <li>
              <a href="<?php echo $element['menu']['url']; ?>" class="text-decoration-none"><?php echo $element['menu']['title']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="col-12 col-md-3 footer-widgets">
         <?php if(!empty($bottom_footer['social_icon'])): ?>
          <ul class="footer-menu-list social-icon p-0 list-unstyled d-block">
          <?php foreach($bottom_footer['social_icon']['icon_item'] as $id => $element): ?>
            <li class="d-inline-block"> 
               <a href="<?php echo $element['link']['url']; ?>" class="text-decoration-none" aria-label="Twitter"><i class="<?php echo $element['icon']; ?>"></i>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="secondary-container border-top-footer">
      <div class="row below-footer pt-3">
        <div class="col-12 col-md-6 mb-2">
          <p><?php echo $bottom_footer['text']; ?></p>
        </div>
        <div class="col-12 col-md-6 mb-2">
         <?php if(!empty($bottom_footer['copyright_menu'])): ?>
          <ul class="below-footer-menu text-left text-md-right">
          <?php foreach($bottom_footer['copyright_menu'] as $id => $element): ?>
            <li class="d-block d-md-inline-block">
              <a href="<?php echo $element['menu_item']['url']; ?>" class="ml-0 ml-md-2 ml-lg-3"><?php echo $element['menu_item']['title']; ?></a>
            </li>
           <?php endforeach; ?>
          </ul>
           <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Form -->

  <div
      id="signinpopup"
      class="modal fade in px-0 sign-in-popup"
      role="dialog"
    >
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header custom-modal-header d-block border-0 p-0">
            <div class="form-logo mx-auto" style="width: 82px">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/06/logo2.png" alt="" class="w-100" />
            </div>
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title text-uppercase">
              YOUR ACCOUNT FOR EVERYTHING HUSH
            </h4>
          </div>
          <div class="modal-body" id="customer_login">
           <?php  do_action( 'woocommerce_before_customer_login_form' ); ?>
           <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
            <?php endif; ?>
              	<form class="woocommerce-form woocommerce-form-login login form-inline" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="form-group col-sm-12">
			
				<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="Email address" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="form-group col-sm-12">
			
				<input class="form-control woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" required="required" placeholder="Password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<label class="custom-control-label woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Keep me signed in', 'woocommerce' ); ?></span>
				</label>
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="forget-password"><?php esc_html_e( 'Forgotten your password?', 'woocommerce' ); ?></a>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>

        <p class="col-sm-12 text-center terms-and-pp">
                By logging in, you agree to Nike’s
                <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>.
              </p>
              <div class="text-center col-sm-12 join-us-btn">
				<button type="submit" class="btn btn-default woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'SIGN IN', 'woocommerce' ); ?>"><?php esc_html_e( 'SIGN IN', 'woocommerce' ); ?></button>
        </div>
			</p>
			<p class="woocommerce-LostPassword lost_password forget-password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgotten your password?', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>
            <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
            <?php endif; ?>
            <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
            <p class="col-sm-12 text-center sign-in">
              Not a member? <a href="#" class="joinus">Join US</a>
            </p>
          </div>
        </div>
      </div>
    </div>

  <!-- End Login Form -->

  <!-- Register Form -->

  <div id="enquirypopup" class="modal fade in px-0" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header custom-modal-header d-block border-0 p-0">
            <div class="form-logo mx-auto" style="width: 82px">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/06/logo2.png" alt="" class="w-100" />
            </div>
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title text-uppercase">BECOME A MEMBER</h4>
            <p>
              Create your Nike Member profile and get first access to the very
              best of Nike products, inspiration and community.
            </p>
          </div>
          <div class="modal-body">
            	<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="form-group col-sm-12">
		
				<input type="email" class="form-control woocommerce-Input woocommerce-Input--text input-text" required="required" placeholder="Email Address" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="form-group col-sm-12">
					
					<input type="password" class="form-control woocommerce-Input woocommerce-Input--text input-text" placeholder="Password" name="password" required="required" id="reg_password"/>
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="btn btn-default woocommerce-Button woocommerce-button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>
            <p class="col-sm-12 text-center sign-in">
              Already a member?
              <a href="#" class="signin login-form">Sign In</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    

  <!-- Register Form End -->
</footer>
<?php wp_footer();?>
</body>
</html>