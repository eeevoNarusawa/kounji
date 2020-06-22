<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <picture>
    <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp_check_visual.jpg">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/check_visual.jpg" alt="お問い合わせ">
  </picture>
  <div class="c-page-ttl u-font-serif u-vertical-writing">お問い合わせ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/kounji/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ</section>

<div class="p-comp-wrap">
  <div class="c-page--min-width">
    <section class="p-comp-tel">
      <div class="p-comp-tel--note">
        お問い合わせありがとうございました。<br class="sp">後日当山よりご連絡いたします。<br>
        1週間経っても返事がない場合は、<br class="sp">お手数をお掛けいたしますが<br>
        お電話にてご連絡ください。
      </div>
      <div class="c-btn p-contact-tel--btn"><a href="#"><div class="c-btn__text u-font-serif">TEL.059-352-3042</div></a></div>
    </section>

    <section class="p-comp-top"><a href="/kounji/"><div class="p-comp-top__text">トップに戻る</div></a></section>
  </div>
</div>
<?php get_footer(); ?>
