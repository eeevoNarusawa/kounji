          <footer>
            <div class="l-footer-name">浄土宗 三重山 光運寺</div>
            <div class="l-footer-address">〒510-0082 三重県四日市市中部3-12</div>
            <div class="l-footer-tel">TEL.059-352-3042</div>
            <div class="l-footer-map">Google Map<i class="fas fa-map-marker-alt"></i></div>
            <div class="l-footer-pp"><i class="far fa-clone l-footer-pp__icon"></i>Privacy Policy</div>
          </footer>

          <? // margin-leftを取ったコンテンツsection ?>
        </section><!-- /.c-cont--wrap -->



      </main>
      <div class="menu-trigger" href="">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <ul>
          <li>メニュー名</li>
          <li>メニュー名</li>
          <li>メニュー名</li>
        </ul>
      </nav>
      <div class="overlay"></div>
    </div><!-- /.wrapper -->

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
    <?php if(is_page('contact')){ ?>
      <script src="//yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <?php } ?>
  </body>
</html>
