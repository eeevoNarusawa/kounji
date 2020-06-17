<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact_visual.jpg" alt="お問い合わせ">
  <div class="c-page-ttl u-font-serif u-vertical-writing">お問い合わせ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>お問い合わせ</section>

<div class="c-page-wrap">
  <section class="p-contact-tel">
    <div class="p-contact-tel--note">お電話にてお問い合わせをいただく場合は、参拝時間内（9:00～16:00）にお願いいたします。</div>
    <div class="c-btn p-contact-tel--btn"><a href="#"><div class="c-btn__text u-font-serif">TEL.059-352-3042</div></a></div>
  </section>

  <section class="p-contact-wrap h-adr">
    <div class="p-contact-wrap--note">メールでお問い合わせの方は下記のフォームに必要事項を記入していただき、<br>確認ボタンをクリックしてください。</div>
    <table class="p-contact-wrap--form"><?php echo do_shortcode('[mwform_formkey key="31"]'); ?></table>
  </section>
</div>
<?php get_footer(); ?>
