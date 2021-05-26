<?php get_header();?>
<?php $sections = get_field('sections'); ?>
<?php foreach($sections as $section): ?>
<?php extract($section); ?>
<?php if($enable): ?>
<?php switch($acf_fc_layout) { ?>
<?php case 'banner': ?>
<section class="banner-section">
   <div class="container-fluid">
      <div class="row d-block banner-slider px-2">
         <div class="home-banner swiper-container">
            <div class="swiper-wrapper">
               <?php if(!empty($slides)): ?>
               <?php foreach($slides as $i => $slide): ?>
               <?php extract($slide); ?>
               <?php $id = $i+1; ?>
               <div class="<?php echo "new-home-banner slider$id position-relative swiper-slide" ?>">
                  <img src="<?php echo $image; ?>" class="slider-img" alt="<?php echo "slider$id" ?>" />
                  <div class="banner-content d-none d-md-block position-absolute">
                     <span class="hn-b"><?php echo $small_title; ?></span>
                     <h1 class="py-2 hn-l"><?php echo $large_title; ?></h1>
                     <a href="<?php echo $button['url']; ?>" aria-label="<?php echo $button['title']; ?>" class="btn primary-btn px-3 m-0"><?php echo $button['title']; ?></a>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php break; ?>
<?php case 'product_slider': ?>
<?php extract($view_all); ?>
<section class="trending-now">
   <div class="container-fluid">
      <div class="row">
         <h4 class="col px-2 d-none d-lg-block"><?php echo $heading; ?></h4>
         <h4 class="col px-2 d-lg-none"><?php echo $mobile_heading; ?></h4>
         <a href="<?php echo $url; ?>" class="slider-view text-decoration-none px-2"><?php echo $title; ?></a>
      </div>
      <div class="row justify-content-between trending-slides">
         <div class="product-slider swiper swiper-container">
            <div class="swiper-wrapper px-2">

            <?php
              $params = array('posts_per_page' => -1, 'post_type' => 'product', 'order' => 'ASC');
              $wc_query = new WP_Query($params);
              ?>
              <?php if ($wc_query->have_posts()) : ?>
              <?php while ($wc_query->have_posts()) :
                              $wc_query->the_post(); 
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );          
                              ?>
              

                <div class="swiper-slide mb-4">
                  <div class="product-card">
                     <div class="product-card-body">
                        <div class="product-image">
                           <a href="<?php the_permalink(); ?>" aria-label="Product-Link">
                           <img src="<?php echo $image[0]; ?>" alt="<?php echo "image-$id"; ?>" class="w-100" />
                           </a>
                        </div>
                        <div class="product-card-footer d-block d-md-flex justify-content-between no-gutters">
                           <div class="col-12 col-md-9">
                              <a href="<?php the_permalink(); ?>" aria-label="Product-Link" class="text-decoration-none text-dark">
                                 <h5 class="card-title pdt-title"><?php the_title(); ?></h5>
                              </a>
                              <span class="pdt-type"><?php echo wc_get_product_tag_list( $product->get_id()); ?></span>
                           </div>
                           <div class="col-12 col-md-3 text-left text-md-right">
                              <span class="pdt-price"><?php echo $product->get_price_html(); ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else:  ?>
              <p>
                  <?php _e( 'No Products'); ?>
              </p>
              <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php break; ?>
<?php case 'offer_show_case': ?>
<section class="trending-now">
   <div class="container-fluid">
      <div class="row">
         <h4 class="col px-2"><?php echo $heading; ?></h4>
      </div>
      <div class="row justify-content-between">
         <?php if(!empty($offer)): ?>
         <?php foreach($offer as $i => $offers): ?>
         <?php extract($offers); ?>
         <?php $id = $i+1; ?>
         <div class="col-12 col-md-6 mb-4 px-2">
            <div class="product-card">
               <div class="product-card-body position-relative">
                  <div class="product-image">
                     <img src="<?php echo $image; ?>" alt="<?php echo "image-$id"; ?>" class="w-100" />
                  </div>
                  <div class="product-card-footer btn-box position-absolute">
                     <span class="text-white w-100 d-block for-her"><?php echo $category; ?></span>
                     <a href="<?php echo $url; ?>" aria-label="<?php echo $button['title']; ?>" class="btn btn-white px-3 m-0">
                     <?php echo $button['title']; ?>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php break; ?>
<?php case 'just_in': ?>
<?php extract($view_all); ?>
<section class="trending-now just-in-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-6 px-2">
            <h4 class="col px-2 d-none d-lg-block"><?php echo $heading; ?></h4>
         </div>
      </div>
      <div class="justin-slides row d-block px-2">
         <div class="just-in-slides swiper-container">
            <div class="swiper-wrapper">
               <?php if(!empty($slides)): ?>
               <?php foreach($slides as $i => $slide): ?>
               <?php extract($slide); ?>
               <?php $id = $i+1; ?>
               <div class="just-in-slider slider$id swiper-slide">
                  <img src="<?php echo $image; ?>" class="slider-img" alt="<?php echo "slider$id" ?>" />
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <div class="container d-block d-md-none pt-3">
      <div class="row">
         <div class="col-12 px-2">
            <h2 class="py-0 text-uppercase">RUN THROUGH IT</h2>
            <p class="hn-l run-trhough">
               Don't let rain snow, or wind slow you down. Our shield collections
               designed to meet winter head-on.
            </p>
            <a href="shop.php" class="btn primary-btn px-3 m-0"> SHOP NOW </a>
         </div>
      </div>
   </div>
</section>
<?php break; ?>
<?php case 'product_image_slider': ?>
<?php extract($view_all); ?>
<section class="trending-now">
   <div class="container-fluid">
      <div class="row">
         <h4 class="col px-2 d-none d-lg-block"><?php echo $heading; ?></h4>
         <h4 class="col px-2 d-lg-none"><?php echo $mobile_heading; ?></h4>
         <a href="<?php echo $url; ?>" class="slider-view text-decoration-none px-2"><?php echo $title; ?></a>
      </div>
      <div class="row justify-content-between trending-slides">
         <div class="product-slider swiper swiper-container">
            <div class="swiper-wrapper px-2">
               <?php if(!empty($product_list)): ?>
               <?php foreach($product_list as $i => $product): ?>
               <?php extract($product); ?>
               <?php $id = $i+1; ?>
               <div class="swiper-slide mb-4">
                  <div class="product-card">
                     <div class="product-card-body">
                        <div class="product-image">
                           <a href="javascript:void(0)" aria-label="Product-Link">
                           <img src="<?php echo $image; ?>" alt="<?php echo "image-$id"; ?>" class="w-100" />
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php break; ?>
<?php case 'product_image_slider': ?>
<?php extract($view_all); ?>
<section class="trending-now">
   <div class="container-fluid">
      <div class="row">
         <h4 class="col px-2 d-none d-lg-block"><?php echo $heading; ?></h4>
         <h4 class="col px-2 d-lg-none"><?php echo $mobile_heading; ?></h4>
         <a href="<?php echo $url; ?>" class="slider-view text-decoration-none px-2"><?php echo $title; ?></a>
      </div>
      <div class="row justify-content-between trending-slides">
         <div class="product-slider swiper swiper-container">
            <div class="swiper-wrapper px-2">
               <?php if(!empty($product_list)): ?>
               <?php foreach($product_list as $i => $product): ?>
               <?php extract($product); ?>
               <?php $id = $i+1; ?>
               <div class="swiper-slide mb-4">
                  <div class="product-card">
                     <div class="product-card-body">
                        <div class="product-image">
                           <a href="javascript:void(0)" aria-label="Product-Link">
                           <img src="<?php echo $image; ?>" alt="<?php echo "image-$id"; ?>" class="w-100" />
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php break; ?>
<?php } ?>
<?php endif; ?>
<?php endforeach; ?>


<?php get_footer();?>