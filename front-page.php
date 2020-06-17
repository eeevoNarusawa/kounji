<?php get_header(); ?>
<?php get_sidebar(); ?>
  <section class="p-top-about">
    <div class="u-vertical-writing u-font-serif c-top-vertical-ttl"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/border.png">光運寺について</div>
    <div class="p-top-about__wrap">
      <h3 class="u-font-serif__white p-top-about--subttl">
        仏教に出会えた奇跡に感謝し、<br>
        仏様のお導きよって、<br>
        より豊かにより幸せに<br>
        共に生きる人が集うお寺です。
      </h3>
      <p class="p-top-about--copy">
        正安３年２月（西暦１３０１年）、聖覚法印を開基として、上野国国府の明観上人が一宇を建立、三重山東源院尊乗寺と称しました。応仁の乱で兵火に遇い、のち源誉超順上人によって再興され、浄土宗総本山知恩院第二十七世徳誉光然上人の来賜を仰ぎ浄土宗となり光運寺となりました。
      </p>
      <div class="c-btn p-top-btn__about"><a href="#"><div class="c-btn__text">光運寺について</div></a></div>
    </div>
  </section>

  <section class="p-top-eitai">
    <div class="p-top-eitai--logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jyodosyumon.jpg" alt="浄土宗紋"></div>
    <div class="p-top-eitai--ttl u-font-serif">光運寺の納骨堂・永代供養</div>
    <div class="p-top-eitai--wrap">
      <div class="p-top-eitai--bg"></div>
      <div class="p-top-eitai--slider">
        <div class="p-top-eitai--slider__items">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eitai_slide01.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eitai_slide02.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eitai_slide03.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eitai_slide04.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/eitai_slide05.jpg">
        </div>
      </div>
      <div class="p-top-eitai--cont">
        <div class="u-vertical-writing u-font-serif p-top-eitai--subttl">光運寺納骨堂『白蓮』</div>
        <div class="p-top-eitai--copy">永代供養付きの納骨堂で、 個人・夫婦・ご家族でもご利用いただけます。年間管理費不要で生前にお申込みすることができます。 檀信徒以外の方も納骨できますので、お気軽にご相談ください。</div>
        <div class="c-btn p-top-btn__eitai"><a href="#"><div class="c-btn__text">納骨堂・永代供養について</div></a></div>
      </div>
    </div>
  </section>

  <section class="p-top-info">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_info_visual.jpg" alt="仏事のご案内">
    <div class="p-top-info--wrap">
      <div class="u-vertical-writing u-font-serif c-top-vertical-ttl"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/border.png">仏事のご案内</div>
      <div class="p-top-info--wrap__bg"></div>
      <div class="p-top-info--subttl u-font-serif">いつまでも想いつづける</div>
      <div class="p-top-info--copy">
        仏事にはすべてに理由があります。<br>
        共に大切なご家族をお浄土におくり、いつまでも想いを大切にしてまいりましょう。
      </div>
      <div class="p-top-info--conts">
        <div class="p-top-info--banner">
          <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_info_sogi.png" alt="葬儀"></a>
        </div>
        <div class="p-top-info--banner">
          <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_info_hoji.png" alt="法事"></a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top-banner">
    <div class="p-top-banner__left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_banner_overview.jpg" alt="寺院概要"></div>
    <div class="p-top-banner__right">
      <div class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_banner_event.jpg" alt="年中行事"></div>
      <div class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_banner_wedding.jpg" alt="仏前結婚式"></div>
    </div>
  </section>

  <section class="p-top-blog">
    <div class="p-top-blog--wrap">
      <div class="p-top-blog--ttl u-font-serif u-vertical-writing">
        <div class="p-top-blog--ttl__main">光運寺ブログ</div>
        <div class="p-top-blog--ttl__sub">Blog</div>
      </div>
      <div class="p-top-blog--conts">
        <?php query_posts('posts_per_page=5&paged='.$paged); ?>
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
        ?>
        <div class="p-top-blog--item">
          <div class="p-top-blog--item__cat"><?php the_category(','); ?></div>
          <div class="p-top-blog--item__date"><?php the_time('Y.m.d'); ?></div>
          <div class="p-top-blog--item__ttl"><?php the_title(); ?></div>
          <div class="p-top-blog--item__brackets"><i class="fas fa-chevron-right"></i></div>
        </div>

        <?php
          endwhile;
        else:
        ?>
        <p>記事はありません</p>
        <?php
          endif;
        ?>
      </div>
      <div class="p-top-blog--link"><a href="#">一覧を見る<i class="fas fa-chevron-right p-top-blog--link__brackets"></i></a></div>
    </div>

  </section>

<?php get_footer(); ?>
