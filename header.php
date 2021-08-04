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
  <meta name="ahrefs-site-verification" content="37088a82688414b730e1b09f36a99e58578fbd0cb813a12ed11fa883f9c157ef">

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
  
  <header id="header" class="header py-6" role="banner">
    <div class="container mx-auto px-4 lg:px-0">
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
    <div class="w-full bg-light rounded-xl">
      <?php wp_nav_menu([
        'theme_location' => 'head_menu',
        'menu_id' => 'head_menu',
        'menu_class' => 'mobile_menu_list flex flex-col relative text-lg py-8 px-4'
      ]); ?>  
    </div>
  </div>
  <section id="content" role="main">