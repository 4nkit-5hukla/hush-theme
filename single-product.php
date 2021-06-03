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
          <?php  } ?> 
        </div>
      </div>
      <div class="col-12 col-md-4 pt-3 product-detail-outer">
        <div class="product-details">
          <p class="small-title hn-m m-0">
            <?php echo wc_get_product_category_list( $product->get_id()); ?>
          </p>
          <p class="product-price w-100 text-right hn-m m-0">
            <?php echo $product->get_price_html(); ?>
          </p>
          <h4 class="product-title hn-m m-0"><?php the_title(); ?></h4> 

           <div
                class="pdt-weight-variant d-flex justify-content-between pt-5"
              >
                <span class="dark-text hn-m">Select Quantity</span>
                <span class="light-text hn-m" style="opacity: 0.3"
                  >Weight Guide</span
                >
              </div>

                    <div class="demo">
                        <?php
                          global $product;

                            /**
                             * Hook: woocommerce_before_single_product.
                             *
                             * @hooked woocommerce_output_all_notices - 10
                             */
                            do_action( 'woocommerce_before_single_product' );

                            if ( post_password_required() ) {
                              echo get_the_password_form(); // WPCS: XSS ok.
                              return;
                            }
                            ?>
                            <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

                              <?php
                              /**
                              * Hook: woocommerce_before_single_product_summary.
                              *
                              * @hooked woocommerce_show_product_sale_flash - 10
                              * @hooked woocommerce_show_product_images - 20
                              */
                              do_action( 'woocommerce_before_single_product_summary' );
                              ?>

                              <div class="summary entry-summary">
                                <?php
                                /**
                                * Hook: woocommerce_single_product_summary.
                                *
                                * @hooked woocommerce_template_single_title - 5
                                * @hooked woocommerce_template_single_rating - 10
                                * @hooked woocommerce_template_single_price - 10
                                * @hooked woocommerce_template_single_excerpt - 20
                                * @hooked woocommerce_template_single_add_to_cart - 30
                                * @hooked woocommerce_template_single_meta - 40
                                * @hooked woocommerce_template_single_sharing - 50
                                * @hooked WC_Structured_Data::generate_product_data() - 60
                                */
                                do_action( 'woocommerce_single_product_summary' );
                                ?>
                              </div>

                              
                            </div>


                            </div>
          <!-- <div class="pdt-weight-variant d-flex justify-content-between pt-5">
            <span class="dark-text hn-m">Select Quantity</span>
            <span class="light-text hn-m" style="opacity: 0.3">Weight Guide</span>
          </div> -->
          <div class="d-none btn-group btn-group-toggle mt-2 variant-btn w-100" data-toggle="buttons">
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
          <a href="shop.php" class="btn add-to-bag-btn px-3 mt-5 d-none">
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
                  <?php echo the_field('size_guide'); ?>
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
                  
                <span class="d-icon position-relative float-right pr-4 collapsed d-block" data-toggle="collapse" data-target="#review"
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


    
  <div id="reviews">
<div id="comments">
    

    <?php if ( have_comments() ) : ?>

        <ol class="commentlist">
            <?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            echo '<nav class="woocommerce-pagination">';
            paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
                'type'      => 'list',
            ) ) );
            echo '</nav>';
        endif; ?>

    <?php else : ?>

        <p class="woocommerce-noreviews"><?php _e( 'There are no reviews yet.', 'woocommerce' ); ?></p>

    <?php endif; ?>
</div>

<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->id ) ) : ?>

    <div id="review_form_wrapper">
        <div id="review_form">
            <?php
                $commenter = wp_get_current_commenter();

                $comment_form = array(
                    'title_reply'          => have_comments() ? __( 'Add a review', 'woocommerce' ) : __( 'Be the first to review', 'woocommerce' ) . ' &ldquo;' . get_the_title() . '&rdquo;',
                    'title_reply_to'       => __( 'Leave a Reply to %s', 'woocommerce' ),
                    'comment_notes_before' => '',
                    'comment_notes_after'  => '',
                    'fields'               => array(
                        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'woocommerce' ) . ' <span class="required">*</span></label> ' .
                                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
                        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'woocommerce' ) . ' <span class="required">*</span></label> ' .
                                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
                    ),
                    'label_submit'  => __( 'Submit', 'woocommerce' ),
                    'logged_in_as'  => '',
                    'comment_field' => ''
                );

                if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
                    $comment_form['comment_field'] = '<p class="comment-form-rating"><select name="rating" id="rating">
                        <option value="">' . __( 'Rate&hellip;', 'woocommerce' ) . '</option>
                        <option value="5">' . __( 'Perfect', 'woocommerce' ) . '</option>
                        <option value="4">' . __( 'Good', 'woocommerce' ) . '</option>
                        <option value="3">' . __( 'Average', 'woocommerce' ) . '</option>
                        <option value="2">' . __( 'Not that bad', 'woocommerce' ) . '</option>
                        <option value="1">' . __( 'Very Poor', 'woocommerce' ) . '</option>
                    </select></p>';
                }

                $comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . __( 'Your Review', 'woocommerce' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

                comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
            ?>
        </div>
    </div>

<?php else : ?>

    <p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>

<?php endif; ?>

<div class="clear"></div>
    
<?php get_footer( 'shop' );
