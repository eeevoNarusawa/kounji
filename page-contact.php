<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <picture>
    <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp_contact_visual.jpg">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact_visual.jpg" alt="お問い合わせ">
  </picture>
  <h1><div class="c-page-ttl u-font-serif u-vertical-writing">お問い合わせ</div></h1>
</section>

<section class="c-page-breadcrumbs"><a href="/kounji/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ</section>

<div class="c-page-wrap">
  <div class="c-page--min-width">
    <section class="p-contact-tel u-fade-up">
      <div class="p-contact-tel--note">お電話にてお問い合わせをいただく場合は、参拝時間内（9:00～16:00）にお願いいたします。</div>
      <div class="c-btn p-contact-tel--btn"><a href="tel:0593523042"><div class="c-btn__text u-font-serif">TEL.059-352-3042</div></a></div>
    </section>

    <section class="p-contact-wrap h-adr">
      <div class="p-contact-wrap--note u-fade-up">メールでお問い合わせの方は下記のフォームに必要事項を記入していただき、<br class="pc">確認ボタンをクリックしてください。</div>
      <?php echo do_shortcode('[mwform_formkey key="27"]'); ?><?// 27 31 ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
