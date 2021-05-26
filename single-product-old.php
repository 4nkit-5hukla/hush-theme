<?php
get_header(); ?>



<?php while ( have_posts() ) : ?>
			<?php the_post(); 
      
    $attachment_ids = $product->get_gallery_image_ids($post_id); 
?>



<section class="product-section-1 product-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-8 px-3">
            <div class="row">

            
            <?php 
            
             foreach( $attachment_ids as $attachment_id ) { ?>
             <div class="col-6 px-2 my-2">
                <img
                  src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>"
                  alt=""
                  class="w-100"
                />
              </div>
        
   <?php  }
     ?>
              
             
            </div>
          </div>
          <div class="col-12 col-md-4 pt-3 product-detail-outer">
            <div class="product-details">
              <p class="small-title hn-m m-0"><?php echo wc_get_product_category_list( $product->get_id()); ?></p>
              <p class="product-price w-100 text-right hn-m m-0">$135</p>
              <h4 class="product-title hn-m m-0"><?php the_title(); ?></h4>
              <div
                class="pdt-weight-variant d-flex justify-content-between pt-5"
              >
                <span class="dark-text hn-m">Select Quantity</span>
                <span class="light-text hn-m" style="opacity: 0.3"
                  >Weight Guide</span
                >
              </div>
              <div
                class="btn-group btn-group-toggle mt-2 variant-btn w-100"
                data-toggle="buttons"
              >
                <label class="btn btn-secondary active bordered">
                  <input type="radio" name="options" id="hatchback" checked />
                  7 Grams
                </label>
                <label class="btn btn-secondary bordered">
                  <input type="radio" name="options" id="sedan" />
                  14 Grams
                </label>
                <label class="btn btn-secondary bordered">
                  <input type="radio" name="options" id="suv" />
                  28 Grams
                </label>
              </div>
              <a href="shop.php" class="btn add-to-bag-btn px-3 mt-5">
                Add to Bag
              </a>
              <div class="product-desc w-100">
                <p class="hn-l">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed.
                </p>
              </div>
              <div class="additional-details">
                <div class="flower-type border-top collapse-menu px-0">
                  <div class="guide collapse-title">
                    Size Guide
                    <span
                      class="d-icon position-relative float-right collapsed"
                      data-toggle="collapse"
                      data-target="#size-guide"
                    >
                    </span>
                    <div
                      id="size-guide"
                      class="flower-list-toggle collapse hn-l"
                    >
                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                      sed diam nonumy eirmod tempor invidunt ut labore et dolore
                      magna aliquyam erat, sed diam voluptua.
                    </div>
                  </div>
                </div>
                <div class="flower-type border-top collapse-menu px-0">
                  <div class="grade-list collapse-title">
                    Free Delivery & Returns
                    <span
                      class="d-icon position-relative float-right collapsed"
                      data-toggle="collapse"
                      data-target="#delivery"
                    >
                    </span>
                    <div id="delivery" class="flower-list-toggle collapse hn-l">
                      Free standard delivery on orders over $175
                      <ul class="p-0 delivery-list m-0 pl-2">
                        <li>
                          Delivery may take longer than normal. Check your
                          estimated delivery date at checkout.
                        </li>
                        <li>
                          You can return your order for any reason, Free of
                          charge within 30 days.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="review flower-type border-top border-bottom collapse-menu px-0"
                >
                  <div class="grade-list collapse-title">
                    Reviews (28)
                    <span
                      class="d-icon position-relative float-right pr-4 collapsed d-block"
                      data-toggle="collapse"
                      data-target="#review"
                    >
                      <img src="images/Icon/ionic-ios-star.svg" alt="" />
                      <img src="images/Icon/ionic-ios-star.svg" alt="" />
                      <img src="images/Icon/ionic-ios-star.svg" alt="" />
                      <img src="images/Icon/ionic-ios-star.svg" alt="" />
                      <img src="images/Icon/ionic-ios-star-half.svg" alt="" />
                    </span>
                    <div id="review" class="flower-list-toggle collapse hn-l">
                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                      sed diam nonumy eirmod tempor invidunt ut labore et dolore
                      magna aliquyam erat, sed diam voluptua.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product-section-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 px-2">
            <p class="hn-l w-100 text-center explore">
              Explore the Ghost Train Haze Indica
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col position-relative px-2">
            <img
              src="images/placeholder-1680-1012.jpg"
              class="img-fluid w-100"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="product-section-3">
      <div class="container-fluid">
        <div class="row">
          <div class="about-section px-2">
            <h4 class="hn-m">YOUR NEW GO-TO INDICA</h4>
            <p class="hn-l w-100 text-center">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat, sed diam voluptua. At vero eos et accusam et justo duo
              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col position-relative px-2 about-section-image">
            <img
              src="images/placeholder-1680-1012.jpg"
              class="img-fluid w-100"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="trending-now product-section-4">
      <div class="container-fluid">
        <div class="row">
          <div class="about-section px-2">
            <h4 class="hn-m">YOUR NEW GO-TO INDICA</h4>
            <p class="hn-l w-100 text-center">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat, sed diam voluptua. At vero eos et accusam et justo duo
              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet
            </p>
          </div>
        </div>
        <div class="row trending-section">
          <h4 class="col px-2 d-none d-lg-block">Trending Now</h4>
          <h4 class="col px-2 d-lg-none">Gear Up</h4>
        </div>
        <div class="row justify-content-between">
          <div class="product-page-slider swiper swiper-container">
            <div class="swiper-wrapper px-2">
              <div class="swiper-slide mb-4">
                <div class="product-card card-border-bottom">
                  <div class="product-card-body">
                    <div class="product-image">
                      <a href="#">
                        <img src="./images/pdt1.jpg" alt="" class="w-100" />
                      </a>
                    </div>
                    <div
                      class="product-card-footer d-block d-md-flex justify-content-between no-gutters"
                    >
                      <div class="col-12 col-md-9">
                        <a href="#" class="text-decoration-none text-dark">
                          <h5 class="card-title pdt-title">Nike Air Force 1</h5>
                        </a>
                        <span class="pdt-type">Men's Shoe</span>
                      </div>
                      <div class="col-12 col-md-3 text-left text-md-right">
                        <span class="pdt-price">$200</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide mb-4">
                <div class="product-card card-border-bottom">
                  <div class="product-card-body">
                    <div class="product-image">
                      <a href="#">
                        <img src="./images/pdt2.jpg" alt="" class="w-100" />
                      </a>
                    </div>
                    <div
                      class="product-card-footer d-block d-md-flex justify-content-between no-gutters"
                    >
                      <div class="col-12 col-md-9">
                        <a href="#" class="text-decoration-none text-dark">
                          <h5 class="card-title pdt-title">Nike Air Force 1</h5>
                        </a>
                        <span class="pdt-type">Men's Shoe</span>
                      </div>
                      <div class="col-12 col-md-3 text-left text-md-right">
                        <span class="pdt-price">$200</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide mb-4">
                <div class="product-card card-border-bottom">
                  <div class="product-card-body">
                    <div class="product-image">
                      <a href="#">
                        <img src="./images/pdt3.jpg" alt="" class="w-100" />
                      </a>
                    </div>
                    <div
                      class="product-card-footer d-block d-md-flex justify-content-between no-gutters"
                    >
                      <div class="col-12 col-md-9">
                        <a href="#" class="text-decoration-none text-dark">
                          <h5 class="card-title pdt-title">Nike Air Force 1</h5>
                        </a>
                        <span class="pdt-type">Men's Shoe</span>
                      </div>
                      <div class="col-12 col-md-3 text-left text-md-right">
                        <span class="pdt-price">$200</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; // end of the loop. ?>
<?php get_footer( 'shop' );
