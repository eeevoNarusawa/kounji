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

//sidebarのフェードイン
jQuery(function(){
  function animation(){
    jQuery('.u-fade-sidebar').each(function(){
      var target = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > target - windowHeight + windowHeight/2 + windowHeight/5 + windowHeight/5 + windowHeight/15){
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

jQuery(function() {
    var topBtn = jQuery('.l-footer-totop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 820) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});

// 最初に、ビューポートの高さを取得し、0.01を掛けて1%の値を算出して、vh単位の値を取得
let vh = window.innerHeight * 0.01;
// カスタム変数--vhの値をドキュメントのルートに設定
document.documentElement.style.setProperty('--vh', `${vh}px`);
