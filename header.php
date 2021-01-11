<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?> id="test" data-scrollery>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header py-6" role="banner">
    <div class="container mx-auto px-4 lg:px-0">
      <div class="header_content flex justify-between items-center text-white">
        <div class="header_logo">
          <a href="<?php echo home_url(); ?>" class="flex items-center">
            <span class="text-xl uppercase"><span class="font-black">Treba</span></span>
          </a>
        </div>
        <div class="header_menu hidden lg:block">
          <?php wp_nav_menu([
            'theme_location' => 'head_menu',
            'menu_id' => 'head_menu',
            'menu_class' => 'flex justify-between text-lg'
          ]); ?>
        </div>
        <div class="lang flex items-center">
          <?php if (function_exists('pll_the_languages')) { 
            pll_the_languages(); 
          } ?>
        </div>
        <!-- <div class="header_contact hidden lg:flex">
          <div class="phone-btn second-btn flex mr-4">
            <img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt="" width="15px">
          </div>
          <a href="#">
            <div class="first-btn flex">
              Обратная связь
            </div>
          </a>
        </div> -->
        <div class="header_humburger block lg:hidden">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile_menu block lg:hidden">
    <?php wp_nav_menu([
      'theme_location' => 'head_menu',
      'menu_id' => 'head_menu',
      'menu_class' => 'mobile_menu_list flex flex-col relative text-lg z-10 pl-4'
    ]); ?>
    <div class="mobile_menu_bg_one"></div>
    <div class="mobile_menu_bg_two"></div>
  </div>
  <section id="content" role="main">