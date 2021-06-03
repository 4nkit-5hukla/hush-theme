(function ($) {
  $(document).ready(function () {
    let open = false;
    new Swiper('.home-banner', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
    new Swiper('.just-in-slides', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
    new Swiper('.product-slider, .product-page-slider', {
      slidesPerView: 1.1,
      spaceBetween: 15,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      coverflow: {
        rotate: 40,
        stretch: 0,
        depth: 50,
        modifier: 1,
        slideShadows: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.1,
        },
        768: {
          slidesPerView: 1.6,
        },
        1024: {
          slidesPerView: 3.1,
          loop: true,
        },
        1920: {
          slidesPerView: 3,
          loop: true,
        },
      },
    });
    // My Account Page Slider//
    new Swiper('.my-account-page-slider', {
      slidesPerView: 1.1,
      spaceBetween: 15,
      loop: true,
      scrollbar: {
        el: '.swiper-scrollbar',
        hide: true,
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      coverflow: {
        rotate: 40,
        stretch: 0,
        depth: 50,
        modifier: 1,
        slideShadows: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.1,
        },
        768: {
          slidesPerView: 2.4,
        },
        1024: {
          slidesPerView: 5.3,
          loop: true,
        },
        1920: {
          slidesPerView: 5.3,
          loop: true,
        },
      },
    });
    $('.open-suite').click(function () {
      $(this).parent().toggleClass('suite-open');
      $('#suite-open').removeClass('suite-hidden');
      $('#suite-open').addClass('suite-show');
    });
    $('.login-form').click(function (e) {
      e.preventDefault();
      $('#enquirypopup').modal('hide');
      $('#signinpopup').modal('show');
    });
    $('.joinus').click(function (e) {
      e.preventDefault();
      $('#signinpopup').modal('hide');
      $('#enquirypopup').modal('show');
    });
    const openSidebar = function () {
      $('.mob-menu').addClass('open');
      $('.overlay1').addClass('active-opacity');
      open = true;
    };
    const closeSidebar = function () {
      $('.mob-menu').removeClass('open');
      $('.overlay1').removeClass('active-opacity');
      open = false;
    };
    $('.navbar-toggler-icon, .close-menu').click(function (event) {
      event.stopPropagation();
      const toggle = open ? closeSidebar : openSidebar;
      toggle();
    });
    $(document).click(function (event) {
      if (!$(event.target).closest('.mob-menu,.close-menu').length) {
        closeSidebar();
      }
    });
    $('.radio_btn_label').click(function () {
      let current_radio = $(this).attr('data-radio');
      $('.radio-content .radio_content').removeClass('active');
      $('.custom-radio').removeClass('active');
      $(this).addClass('active');
      $(`.${current_radio}`).addClass('active');
    });
    $('.selected-shipping .custom-radio').click(function () {
      $('.custom-radio').removeClass('active');
      $(this).addClass('active');
    });
    $('.continue').click(function (e) {
      e.preventDefault();
      $('.edit').removeClass('show');
      $('.address-form').hide();
      $('.editable-address-outer').addClass('show');
      $('.address-form').removeClass('show');
    });
    $('.add-new-address-btn').click(function (e) {
      e.preventDefault();
      $('.suite-checkbox').removeClass('suite-open');
      $('#suite-open').removeClass('suite-show');
      $('#suite-open').addClass('suite-hidden');
      $('.editable-address-outer').removeClass('show');
      $('.address-form').addClass('show');
    });
    $('.continue-to-payment').click(function (e) {
      e.preventDefault();
      $('.editable-address-outer').removeClass('show');
      $('.shipping-detail-added').addClass('show');
      $('.payment-form-outer').addClass('show');
      $('.edit').addClass('show');
      $('#payment').addClass('show');
    });
    $('.edit').click(function (e) {
      e.preventDefault();
      $(this).removeClass('show');
      $('.payment-edit').removeClass('show');
      $('.payment-review').removeClass('show');
      $('#review-order').removeClass('show');
      $('.payment-form-outer').removeClass('show');
      $('.shipping-detail-added').removeClass('show');
      $('.editable-address-outer').removeClass('show');
      $('.address-form').addClass('show');
      $('#review-order').removeClass('show');
      $('#payment').removeClass('show');
      $('.shipping-detail-added').removeClass('show');
    });
    $('.review-order').click(function (e) {
      e.preventDefault();
      $('.payment-form-outer').removeClass('show');
      $('.payment-review').addClass('show');
      $('#review-order').addClass('show');
      $('.edit').addClass('show');
      $('.payment-edit').addClass('show');
    });
    $('.payment-edit').click(function (e) {
      e.preventDefault();
      $(this).removeClass('show');
      $('#payment').removeClass('collapse');
      $('.payment-review').removeClass('show');
      $('.payment-form-outer').addClass('show');
      $('#review-order').removeClass('show');
    });
    $('.product-price-variant > .v-price').click(function () {
      $('.product-price-variant > .v-price').removeClass('active');
      $(this).addClass('active');
    });
    $('.reset_variations').click(function () {
      $('.v-price').removeClass('active');
    });
    $('.register_btn').click(function (e) {
      e.preventDefault();
    });
  });
})(jQuery);
