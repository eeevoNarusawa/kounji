<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/check_visual.jpg" alt="お問い合わせ">
  <div class="c-page-ttl u-font-serif u-vertical-writing">お問い合わせ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ<span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ内容確認</section>

<div class="c-page-wrap">
  <div class="p-check-copy">お問い合わせ内容をご確認いただき、送信ボタンをクリックしてください。</div>
  <div class="p-check-wrap">
    <table class="p-contact-wrap--form"><?php echo do_shortcode('[mwform_formkey key="31"]'); ?></table>
  </div>
</div>
<?php get_footer(); ?>
