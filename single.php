<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <picture>
    <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp_blog_detail_visual.jpg">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog_detail_visual.jpg" alt="<?php the_title(); ?>">
  </picture>
  <div class="c-page-ttl u-font-serif u-vertical-writing">光運寺ブログ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/kounji/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span><a href="/kounji/blog">光運寺ブログ</a><span class="c-page-breadcrumbs__arrow">＞</span><?php the_title(); ?></section>

<div class="c-page-wrap c-page--min-width">
  <section class="p-single-wrap">
    <div class="p-single-date">
      <div class="p-single-date--cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo '<span class="u-cat-item u-cat-' . $cat->category_nicename . '" >'; } ?><?php the_category(' '); ?></span></div>
      <div class="p-single-date--day"><?php the_time('Y.m.d'); ?></div>
    </div>
    <div class="p-single-ttl"><?php the_title(); ?></div>
    <div class="p-single-cont">
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
    <div class="p-single-back"><<a href="/kounji/blog/">ブログ一覧に戻る</a></div>
  </section>
</div>
<?php get_footer(); ?>
