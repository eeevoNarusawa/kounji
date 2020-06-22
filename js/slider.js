jQuery(function(){
  jQuery('.p-top-visual--slider__items').slick({
    fade: true,
    accessibility: true,
    autoplay: true,
    arrows: true,
    pauseOnHover: false,
    autoplaySpeed: 1800,
    speed: 2000,
    lazyLoad: true,
    pauseOnFocus: false,
    prevArrow: '<i class="fas fa-chevron-left slick-slide-arrow slick-slide-arrow__prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-slide-arrow slick-slide-arrow__next"></i>',
  });

  jQuery('.p-top-eitai--slider__items').slick({
    accessibility: true,
    autoplay: false,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left slick-slide-arrow slick-slide-arrow__prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-slide-arrow slick-slide-arrow__next"></i>',
  });

  jQuery('.p-gaiyo-slider--sp__items').slick({
    arrows: false,
    autoplay: true,
    /* ポイントここから～ */
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 5000,
    /* ～ここまで */
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  jQuery('.p-gaiyo-slider__items').slick({
    arrows: false,
    autoplay: true,
    /* ポイントここから～ */
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 5000,
    /* ～ここまで */
    slidesToShow: 4,
    slidesToScroll: 1,
  });

  jQuery('.p-eitai-slider--sp__items').slick({
    arrows: false,
    autoplay: true,
    /* ポイントここから～ */
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 5000,
    /* ～ここまで */
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  jQuery('.p-eitai-slider__items').slick({
    arrows: false,
    autoplay: true,
    /* ポイントここから～ */
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 5000,
    /* ～ここまで */
    slidesToShow: 4,
    slidesToScroll: 1,
  });

});
