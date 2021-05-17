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
            <ul class="list-unstyled d-flex w-100 justify-content-end m-0 p-0 text-right top-menu">
              <li class="d-inline-block">
                <a href="#" class="text-decoration-none">Help</a>
              </li>
              <li class="d-inline-block">
                <a href="#" class="text-decoration-none">About Us</a>
              </li>
              <li class="d-inline-block">
                <a href="#" class="text-decoration-none login-form">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="middle-header py-0 position-relative">
      <div class="container-fluid">
        <div class="row mx-n2">
          <nav class="navbar navbar-expand-md navbar-light d-flex w-100 justify-content-between px-2">
            <div class="col col-md-2 col-lg-3 px-0">
              <a class="navbar-brand" href="/" style="width: 82px" aria-label="Home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hushlogonew2x.png" alt="" class="w-100" /></a>
            </div>
            <div class="col col-md-7 col-lg-6 order-md-2 order-3 order-lg-2 px-0 px-md-2 d-flex justify-content-end justify-content-lg-center tab-view">
              <ul class="mx-0 mt-0 list-unstyled d-flex d-md-none mb-0 header-icon">
                <li class="cart">
                  <a class="text-decoration-none text-dark" href="cart.php" aria-label="Cart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image 1.svg" alt="" />
                  </a>
                </li>
                <li class="heart-like">
                  <a class="text-decoration-none text-dark" href="#" aria-label="Wishlist">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image 9.svg" alt="" />
                  </a>
                </li>
              </ul>
              <button class="navbar-toggler border-0 float-right px-0" aria-label="Toggle Menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="d-none d-md-block d-lg-block">
                <ul class="navbar-nav mx-0 w-100 mt-2 mt-lg-0 justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Dried Cannabis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Concentrates</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Vape Pens</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Edibles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">New releases</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 d-md-none search-form-header">
                  <input class="mr-sm-2 form-input-box" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </div>
            </div>
            <div class="col col-md-3 col-lg-3 d-none d-md-flex d-lg-flex justify-content-end order-2 order lg-3 px-0 search-and-icon">
              <form class="form-inline my-2 my-lg-0 d-none d-md-block search-form-header" style="max-width: 180px">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" alt="search" width="27" height="27" />
                <input class="form-control w-100 form-input-box" type="search" placeholder="Search" aria-label="Search" />
              </form>
              <ul class="mx-0 mt-0 list-unstyled d-flex mb-0 header-icon">
                <li class="heart-like">
                  <a class="text-decoration-none text-dark" href="#" aria-label="Wishlist">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wishlist.png" alt="wishlist" width="27" height="27" />
                  </a>
                </li>
                <li class="cart">
                  <a class="text-decoration-none text-dark" href="cart.php" aria-label="Cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bag.png" alt="cart" width="27" height="27" />
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
        <p class="w-100 text-center m-0 py-1 hm-r notification position-relative">
          <span class="position-relative">Free shipping on all orders over $200 within Canada</span>
        </p>
      </div>
    </div>
  </header>