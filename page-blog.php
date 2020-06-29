<?php get_header(); ?>
<?php get_sidebar(); ?>
<section class="c-page-visual">
  <picture>
    <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp_blog_visual.jpg">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog_visual.jpg" alt="光運寺ブログ">
  </picture>
  <h1><div class="c-page-ttl u-font-serif u-vertical-writing">光運寺ブログ</div></h1>
</section>

<section class="c-page-breadcrumbs"><a href="/kounji/">HOME</a><span class="c-page-breadcrumbs__arrow">＞</span>光運寺ブログ</section>

<div class="c-page-wrap">
  <div class="c-page--min-width">
    <section class="p-blog-cat">
      <?php
      	$args = array(
      		'parent' => 0,
      		'orderby' => 'term_order',
      		'order' => 'ASC'
      	);
      	$categories = get_categories( $args );
      ?>
      <?php foreach( $categories as $category ) : ?>
      <div class="p-blog-cat--item">
        <a href="<?php echo get_category_link( $category->term_id ); ?>">
          <div class="u-cat-<?php echo $category->slug; ?> u-cat-item u-cat-list">
        		<?php echo $category->name; ?>
        	</div>
        </a>
      </div>
      <?php endforeach; ?>
      <div class="p-blog-cat--item">
        <a href="/kounji/blog/">
          <div class="u-cat-all u-cat-item p-blog-cat--item u-cat-list">すべて</div>
        </a>
      </div>
    </section>

    <section class="p-blog-wrap">
      <?php query_posts('posts_per_page=6&paged='.$paged); ?>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <div class="p-blog-cont">
        <div class="p-blog-cont--catch">
          <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(array(420,280)); ?>
            <?php else: ?>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog_no_img.jpg">
            <?php endif; ?>
          </a>
        </div>
        <div class="p-blog-cont--date">
          <div class="p-blog-cont--cat">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo '<span class="u-cat-item u-cat-' . $cat->category_nicename . '" >'; } ?><?php the_category(' '); ?></span>
          </div>
          <div class="p-blog-cont--day"><?php the_time('Y.m.d'); ?></div>
        </div>
        <div class="p-blog-cont--ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      </div>

      <?php
        endwhile;
      else:
      ?>
      <p>記事はありません</p>
      <?php
        endif;
      ?>
      <div class="p-blog-cont--pager u-font-serif">
        <?php global $wp_rewrite;
      	$paginate_base = get_pagenum_link(1);
      	if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
      		$paginate_format = '';
      		$paginate_base = add_query_arg('paged','%#%');
      	}
      	else{
      		$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
      		user_trailingslashit('page/%#%/','paged');;
      		$paginate_base .= '%_%';
      	}
      	echo paginate_links(array(
      		'base' => $paginate_base,
      		'format' => $paginate_format,
      		'total' => $wp_query->max_num_pages,
      		'mid_size' => 4,
      		'current' => ($paged ? $paged : 1),
      		'prev_text' => '＜',
      		'next_text' => '＞',
      	)); ?>
      </div>
    </section>
  </div><? //.c-page--min-width ?>
</div><? //.c-page-wrap ?>
<?php get_footer(); ?>
