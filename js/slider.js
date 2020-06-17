jQuery(function(){
  jQuery('.p-top-eitai--slider__items').slick({
    accessibility: true,
    autoplay: false,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left slick-slide-arrow slick-slide-arrow__prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-slide-arrow slick-slide-arrow__next"></i>',
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
