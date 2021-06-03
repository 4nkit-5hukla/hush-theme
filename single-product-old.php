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
              <p class="product-price w-100 text-right hn-m m-0"><?php echo $product->get_price_html(); ?></p>
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
                  <?php echo  $post->post_content; ?>
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
                    <?php echo the_field('delivery_and_returns'); ?>
                     
                    </div>
                  </div>
                </div>
                <div
                  class="review flower-type border-top border-bottom collapse-menu px-0"
                >
                
                  <div class="grade-list collapse-title">
                  
                    <?php global $product;
                      if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
                          return;
                      }
                      $rating_count = $product->get_rating_count();
                      $review_count = $product->get_review_count();
                      $average      = $product->get_average_rating();
                        if ( $rating_count >= 0 ) : ?>
                        Review 
                        <?php if ( comments_open() ): ?>(<?php printf( _n( '%s',$review_count,'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)<?php endif ?>


                      <?php endif; ?>
                     
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
                      <?php echo do_shortcode('[product_reviews id='.$id.']'); ?>
                     
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

    <?php $section1 = get_field('section1');?>
    <?php if(!empty($section1)): ?>
    <section class="product-section-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 px-2">
            <p class="hn-l w-100 text-center explore">
              <?php echo $section1['title']; ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col position-relative px-2">
            <img
              src="<?php echo $section1['image']; ?>"
              class="img-fluid w-100"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php $section2 = get_field('section2');?>
    <?php if(!empty($section2)): ?>
    <section class="product-section-3">
      <div class="container-fluid">
        <div class="row">
          <div class="about-section px-2">
            <h4 class="hn-m"><?php echo $section2['title']; ?></h4>
            <p class="hn-l w-100 text-center">
             <?php echo $section2['description']; ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col position-relative px-2 about-section-image">
            <img
              src="<?php echo $section2['image']; ?>"
              class="img-fluid w-100"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
     
    <section class="trending-now product-section-4">
      <div class="container-fluid">
      <?php $section3 = get_field('section3');?>
    <?php if(!empty($section3)): ?>
        <div class="row">
          <div class="about-section px-2">
            <h4 class="hn-m"><?php echo $section3['title']; ?></h4>
            <p class="hn-l w-100 text-center">
              <?php echo $section3['description']; ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        <div class="row trending-section">
          <h4 class="col px-2 d-none d-lg-block">Trending Now</h4>
          <h4 class="col px-2 d-lg-none">Gear Up</h4>
        </div>
        <div class="row justify-content-between">
          <div class="product-page-slider swiper swiper-container">
            <div class="swiper-wrapper px-2">
              <?php
$args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => -1,
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'post-thumbnail' );
global $product; ?>

<div class="swiper-slide mb-4">
                <div class="product-card card-border-bottom">
                  <div class="product-card-body">
                    <div class="product-image">
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo "image-$id"; ?>" class="w-100" />
                      </a>
                    </div>
                    <div
                      class="product-card-footer d-block d-md-flex justify-content-between no-gutters"
                    >
                      <div class="col-12 col-md-9">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
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
<?php wp_reset_query(); ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    
   <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>
    
<?php get_footer( 'shop' );
