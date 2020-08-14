          <footer>
            <div class="l-footer-wrap">
              <div class="l-footer-name">
                <?php if ( is_home() || is_front_page() ): ?><h1><?php endif; ?>浄土宗 三重山 光運寺<?php if ( is_home() || is_front_page() ): ?></h1><?php endif; ?>
              </div>
              <div class="l-footer-address">〒510-0082 三重県四日市市中部3-12</div>
              <div class="l-footer-tel">TEL.059-352-3042</div>
              <div class="l-footer-map"><a href="https://goo.gl/maps/qSqfzkxncvgYZ1xt8" target="_blank">Google Map<i class="fas fa-map-marker-alt"></i></a></div>
              <div class="l-footer-pp"><a href="/privacypolicy/" target="_blank"><i class="far fa-clone l-footer-pp__icon"></i>Privacy Policy</a></div>
            </div>
          </footer>

          <? // margin-leftを取ったコンテンツsection ?>
        </section><!-- /.c-cont--wrap -->


        <div class="l-footer-totop"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/to_top.jpg"></a></div>
      </main>
      <div class="menu-trigger" href="">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <div class="menu-logo"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a></div>
        <ul>
          <a href="/gaiyo/"><li class="u-font-serif">光運寺について</li></a>
          <a href="/nenjyu/"><li class="u-font-serif">年中行事</li></a>
          <a href="/butsuji_info/"><li class="u-font-serif">仏事のご案内</li></a>
          <a href="/eitai/"><li class="u-font-serif">納骨堂・永代供養</li></a>
          <a href="/butsuzen_wedding/"><li class="u-font-serif">仏前結婚式</li></a>
          <a href="/blog/"><li class="u-font-serif">お知らせ・ブログ</li></a>
        </ul>
        <div class="c-btn menu-btn"><a href="/contact/"><div class="c-btn__text">お問い合わせはこちら</div></a></div>
      </nav>
      <div class="overlay"></div>
    </div><!-- /.wrapper -->

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fixed.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fade.js?2020070301"></script>
    <?php if ( is_home() || is_front_page() ) : ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fitie.js"></script>
    <?php endif; ?>
    <?php if(is_page('contact')){ ?>
      <script src="//yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <?php } ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169022167-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-169022167-1');

      $(window).on("load", function(){
                   setTimeout(function(){

                 $('a[href^="tel:"]').on("click", function(){
                   gtag('event', 'click', {'event_category': 'tel','event_label': window.location.href, 'value': '1'});
                 });
                }, 1000);
              });
    </script>
  </body>
</html>
