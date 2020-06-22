jQuery(function(){
  function animation(){
    jQuery('.u-fade-up').each(function(){
      var target = jQuery(this).offset().top + 80;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > target - windowHeight){
        jQuery(this).css('opacity','1');
        jQuery(this).css('transform','translateY(0)');
      }
    });
  }
  animation();
  jQuery(window).scroll(function (){
    animation();
  });
});
