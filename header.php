<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css?20200626">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/webclip.jpg" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <?php if ( is_single()): ?>
    <meta name="description" content="三重県四日市市の浄土宗三重県山光運寺は、仏教に出会えた奇跡に感謝し、仏様のお導きよって、より豊かにより幸せに共に生きる人が集うお寺です。日々の出来事や納骨堂のことなど住職からのブログです。" />
    <?php elseif ( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php elseif ( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>" />
    <?php elseif ( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php the_excerpt();?>" />
    <?php endif; ?>
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>｜三重県四日市市｜仏事・納骨永代供養・仏前結婚式等</title>

    <meta property="og:site_name" content="浄土宗三重山光運寺">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>｜三重県四日市市｜仏事・納骨永代供養・仏前結婚式等">
    <meta property="og:description" content="
      <?php if ( is_single()): ?>
      三重県四日市市の浄土宗三重県山光運寺は、仏教に出会えた奇跡に感謝し、仏様のお導きよって、より豊かにより幸せに共に生きる人が集うお寺です。日々の出来事や納骨堂のことなど住職からのブログです。
      <?php elseif ( is_home() || is_front_page() ): ?>
      <?php bloginfo('description'); ?>
      <?php elseif ( is_category() ): ?>
      <?php echo category_description(); ?>
      <?php elseif ( is_tag() ): ?>
      <?php echo tag_description(); ?>
      <?php else: ?>
      <?php the_excerpt();?>
      <?php endif; ?>
    ">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.kounji.com/">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">
    <meta property="og:image:secure_url" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>｜三重県四日市市｜仏事・納骨永代供養・仏前結婚式等">
    <meta name="twitter:description" content="
      <?php if ( is_single()): ?>
      三重県四日市市の浄土宗三重県山光運寺は、仏教に出会えた奇跡に感謝し、仏様のお導きよって、より豊かにより幸せに共に生きる人が集うお寺です。日々の出来事や納骨堂のことなど住職からのブログです。
      <?php elseif ( is_home() || is_front_page() ): ?>
      <?php bloginfo('description'); ?>
      <?php elseif ( is_category() ): ?>
      <?php echo category_description(); ?>
      <?php elseif ( is_tag() ): ?>
      <?php echo tag_description(); ?>
      <?php else: ?>
      <?php the_excerpt();?>
      <?php endif; ?>
    ">
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">
    <meta name="google-site-verification" content="DrYRqSVQhinjeoPdJClPhTK-cSBgvDmFxVg4n1DEkgw" />
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrapper">
      <main class="clearfix">
        <section class="l-header sp">
          <div class="l-header-logo"><a href="/kounji/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg"></a></div>
        </section>
