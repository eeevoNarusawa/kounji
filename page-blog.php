<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog_visual.jpg" alt="光運寺ブログ">
  <div class="c-page-ttl u-font-serif u-vertical-writing">光運寺ブログ</div>
</section>

<section class="c-page-breadcrumbs"><a href="/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>光運寺ブログ</section>

<div class="c-page-wrap">
  <div class="p-blog">
    <section class="p-blog-cat">
      <?php $cat = get_the_category(); $cat = $cat[0]; {
      echo '<span class="' . $cat->category_nicename . '" />';
      } ?>
      <?php the_category(','); ?></span>
    </section>

    <section class="p-blog-wrap">
      <?php query_posts('posts_per_page=6&paged='.$paged); ?>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <div class="p-blog-cont">
        <div class="p-blog-cont--catch"></div>
        <div class="p-blog-cont--date">
          <div class="p-blog-cont--cat"></div>
          <div class="p-blog-cont--day"></div>
        </div>
        <div class="p-blog-cont--ttl"><?php the_title(); ?></div>
      </div>

      <?php
        endwhile;
      else:
      ?>
      <p>記事はありません</p>
      <?php
        endif;
      ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
