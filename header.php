<!doctype html>
<html <?php language_attributes();?>>

<head>
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header>
    <div class="top-header secondary-bg-color d-none d-lg-block">
      <div class="container-fluid">
        <div class="row mx-n2">
          <div class="col-12 px-2">
            <?php $top_header = get_field('top_header', 'option'); ?>
            <?php if(!empty($top_header['menu'])): ?>
            <ul class="list-unstyled d-flex w-100 justify-content-end m-0 p-0 text-right top-menu">
                <?php foreach($top_header['menu'] as $id => $element): ?>
                <li class="d-inline-block">
                    <a href="<?php echo $element['item']['url']; ?>" class="text-decoration-none"><?php echo $element['item']['title']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php $middle_header = get_field('middle_header', 'option'); ?>
    <?php //print_r($middle_header); ?>
    <div class="middle-header py-0 position-relative">
      <div class="container-fluid">
        <div class="row mx-n2">
          <nav class="navbar navbar-expand-md navbar-light d-flex w-100 justify-content-between px-2">
            <div class="col col-md-2 col-lg-3 px-0">
              <a class="navbar-brand" href="/" style="width: 82px" aria-label="Home">
              <img src="<?php echo $middle_header['logo']; ?>" alt="logo" class="w-100" />
              </a>
            </div>
            <div class="col col-md-7 col-lg-6 order-md-2 order-3 order-lg-2 px-0 px-md-2 d-flex justify-content-end justify-content-lg-center tab-view">
              <ul class="mx-0 mt-0 list-unstyled d-flex d-md-none mb-0 header-icon">
                <li class="cart">
                  <a class="text-decoration-none text-dark" href="<?php echo $middle_header['cart']['link']; ?>" aria-label="Cart">
                  <img src="<?php echo $middle_header['cart']['icon']; ?>" alt="cart icon" />
                  </a>
                </li>
                <li class="heart-like">
                  <a class="text-decoration-none text-dark" href="<?php echo $middle_header['wish_list']['link']; ?>" aria-label="Wishlist">
                    <img src="<?php echo $middle_header['wish_list']['icon']; ?>" alt="wishlist" />
                  </a>
                </li>
              </ul>
              <button class="navbar-toggler border-0 float-right px-0" aria-label="Toggle Menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="d-none d-md-block d-lg-block">
              <?php if(!empty($middle_header['main_menu'])): ?>
                <ul class="navbar-nav mx-0 w-100 mt-2 mt-lg-0 justify-content-center">
                <?php foreach($middle_header['main_menu'] as $id => $element): ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $element['item']['url']; ?>"><?php echo $element['item']['title']; ?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <form class="form-inline my-2 my-lg-0 d-md-none search-form-header">
                  <input class="mr-sm-2 form-input-box" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </div>
            </div>
            <div class="col col-md-3 col-lg-3 d-none d-md-flex d-lg-flex justify-content-end order-2 order lg-3 px-0 search-and-icon">
              <form class="form-inline my-2 my-lg-0 d-none d-md-block search-form-header" style="max-width: 180px">
                <img class="icon" src="<?php echo $middle_header['search_box']['icon']; ?>" alt="search" width="27" height="27" />
                
                <input class="form-control w-100 form-input-box" type="search" placeholder="Search" aria-label="Search" />
              </form>
              <ul class="mx-0 mt-0 list-unstyled d-flex mb-0 header-icon">
                
                <li class="cart">
                  <a class="text-decoration-none text-dark" href="<?php echo $middle_header['wish_list']['link']; ?>" aria-label="Wishlist">
                    <img src="<?php echo $middle_header['wish_list']['icon']; ?>" alt="wishlist" />
                  </a>
                </li>
                <li class="heart-like">
                  <a class="text-decoration-none text-dark" href="<?php echo $middle_header['cart']['link']['url']; ?>" aria-label="<?php echo $middle_header['cart']['link']['title']; ?>">
                  <img src="<?php echo $middle_header['cart']['icon']; ?>" alt="cart icon" />
                  </a> 
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="overlay1">
      </div>
      
      <div id="mob-menu" class="mob-menu position-fixed">
        <span class="d-none close-menu"><i class="fa fa-times"></i></span>
        <ul class="navbar-nav mob-menu-link mx-0 w-100 mt-2 mt-lg-0 justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEW RELEASES</a>
          </li>
        </ul>
        <ul class="list-unstyled p-0 mx-0 mob-second-menu">
          <li class="d-flex">
            <span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="" class="" />
            </span>
            Hush
          </li>
          <li class="d-flex">
            <span>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="" class="" />
            </span>
            Hush
          </li>
        </ul>
        <p class="leran-more">Become a Nike Member for the best products, inspiration and stories in sports. Learn
          More.<a href="">Learn More.</a></p>
        <div class="sidebar-buttons">
          <div class="btn primary-btn px-3 text-white">BTN1</div>
          <div class="btn btn-white border px-3">BTN2</div>
        </div>
        <ul class="list-unstyled px-0 mx-0 mob-second-menu mt-4 pt-1">
          <li class="d-flex"><span><i class="fa fa-calendar-check-o mr-3" aria-hidden="true"></i>
            </span>Bag</li>
          <li class="d-flex"><span><i class="fa fa-first-order mr-3" aria-hidden="true"></i>
            </span>Orders</li>
          <li class="d-flex"><span><i class="fa fa-question-circle-o mr-3" aria-hidden="true"></i>
            </span>Help</li>
        </ul>
      </div>
    </div>
    <div class="bottom-header secondary-bg-color py-3">
      <div class="container-fluid">
      <?php $bottom_header = get_field('bottom_header', 'option'); ?>
           
        <p class="w-100 text-center m-0 py-1 hm-r notification position-relative">
        
          <span class="position-relative"><?php echo $bottom_header['offer_text']; ?></span>
           
        </p>
        
      </div>
    </div>
  </header>