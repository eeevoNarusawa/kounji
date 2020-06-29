jQuery(function(){
  var nav    = jQuery('.nav'),
      offset = nav.offset();

  jQuery(window).scroll(function () {
    if(jQuery(window).scrollTop() > offset.top - 20) {
      nav.addClass('fixed');
    } else {
      nav.removeClass('fixed');
    }
  });
});
