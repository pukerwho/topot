<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-148889633-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- End Google Analytics -->

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="copyright" content="treba-solutions.com">
  <meta name="ahrefs-site-verification" content="9a91c9f8bb7de37d7814e5b41231bd39c880f0a9532deda08c5c1143e3029726">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;800&display=swap" rel="stylesheet">

  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  <div class="overflow-hidden absolute right-0" style="width: 722px; height: 320px; z-index: -1;">
    <?php get_template_part('blocks/elements/header-wave'); ?>
  </div>
  
  <header id="header" class="header fixed py-4 lg:py-6" role="banner">
    <div class="container">
      <div class="header_content flex justify-between items-center text-white">
        <div class="flex items-center">
          <div class="header_logo">
            <a href="<?php echo home_url(); ?>" class="flex items-center">
              <!-- <img src=" echo get_stylesheet_directory_uri(); /img/treba-logo.svg" alt="Лого" width="36"> -->
              <span class="text-xl uppercase"><span class="font-black">Treba</span></span>
            </a>
          </div>
          <div class="hidden text-2xl red-color lg:block lg:pl-6 lg:pr-2">|</div>
          <div class="header_menu hidden lg:block">
            <?php wp_nav_menu([
              'theme_location' => 'head_menu',
              'menu_id' => 'head_menu',
              'menu_class' => 'flex justify-between text-lg'
            ]); ?>
          </div>
        </div>
        <div class="flex items-center">
          <div class="hidden lg:block header_order mr-4">
            <div class="first-btn cursor-pointer text-md md:text-sm order-js" data-order="В шапке кликнули">
              <?php _e('Оставить заявку', 'treba'); ?>
            </div>
          </div>
          <div class="lang flex items-center">
            <?php if (function_exists('pll_the_languages')) { 
              pll_the_languages(); 
            } ?>
          </div>
        </div>
        <div class="header_humburger block lg:hidden">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile_menu block lg:hidden px-4">

    <!-- Меню -->
    <div class="w-full bg-light rounded-xl mb-6 p-4">
      <div class="font-black text-white uppercase text-xl mb-4"><?php _e('Меню', 'treba'); ?></div>
      <?php wp_nav_menu([
        'theme_location' => 'head_menu',
        'menu_id' => 'head_menu',
        'menu_class' => 'mobile_menu_list flex flex-col relative text-lg'
      ]); ?>  
    </div>
    <!-- END Меню -->

    <!-- Портфолио -->
    <div class="w-full bg-light rounded-xl mb-6 p-4">
      <div class="font-black text-white uppercase text-xl mb-4"><?php _e('Новая работа', 'treba'); ?></div>
      <div class="mb-4">
        <?php $portfolio_menu = new WP_Query( array( 
          'post_type' => 'portfolio', 
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        if ($portfolio_menu->have_posts()) : while ($portfolio_menu->have_posts()) : $portfolio_menu->the_post(); ?>
        <div class="h-48 relative">
          <a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0 z-10"></a>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
          <div class="w-full absolute left-0 bottom-0 text-center bg-black bg-opacity-40 backdrop-filter backdrop-blur backdrop-contrast-200 px-6 py-4">
            <span class="text-white font-bold"><?php the_title(); ?></span>
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      
      <div>
        <div class="border border-gray-700 px-4 py-3">
          <a href="<?php get_post_type_archive_link('portfolio'); ?>" class="block bg-third text-white font-bold text-center px-4 py-3">
            <?php _e('Все работы', 'treba'); ?>
          </a>  
        </div>
      </div>
    </div>
    <!-- END Портфолио -->

    <!-- Кейс -->
    <div class="w-full bg-light rounded-xl mb-6 p-4">
      <div class="font-black text-white uppercase text-xl mb-4"><?php _e('Свежие кейсы', 'treba'); ?></div>
      <div class="mb-4">
        <?php $portfolio_menu = new WP_Query( array( 
          'post_type' => 'cases', 
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        if ($portfolio_menu->have_posts()) : while ($portfolio_menu->have_posts()) : $portfolio_menu->the_post(); ?>
        <div class="relative mb-6">
          <a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0 z-10"></a>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="<?php the_title(); ?>" class="w-full h-full mb-2">
          <div>
            <?php the_title(); ?>
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      
      <div>
        <div class="border border-gray-700 px-4 py-3">
          <a href="<?php get_post_type_archive_link('cases'); ?>" class="block bg-third text-white font-bold text-center px-4 py-3">
            <?php _e('Больше кейсов', 'treba'); ?>
          </a>  
        </div>
      </div>
    </div>
    <!-- END Кейс -->
  </div>
  <section id="content" role="main">