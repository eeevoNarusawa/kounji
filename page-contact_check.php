<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <picture>
    <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp_check_visual.jpg">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/check_visual.jpg" alt="お問い合わせ">
  </picture>
  <div class="c-page-ttl u-font-serif u-vertical-writing">お問い合わせ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/kounji/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ<span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ内容確認</section>

<div class="c-page-wrap">
  <div class="c-page--min-width">
    <div class="p-check-copy">お問い合わせ内容をご確認いただき、<br class="sp">送信ボタンをクリックしてください。</div>
    <div class="p-check-wrap">
      <?php echo do_shortcode('[mwform_formkey key="27"]'); ?><?// 27 31 ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
