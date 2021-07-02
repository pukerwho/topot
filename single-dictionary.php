<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="pt-32 pb-20">
    <div class="container mx-auto px-4 lg:px-0">
      
      <h1 class="text-3xl lg:text-5xl text-center font-bold mb-12"><span class="red-color">[ </span><?php the_title(); ?><span class="red-color"> ]</span></h1>
      <div class="w-full lg:w-4/5 page bg-light shadow-md rounded-lg my-0 mx-auto lg:my-8 px-4 lg:px-8 py-8">
        <article class="content text-lg">
          <?php the_content(); ?>
        </article>
        <div class="italic">
          <?php _e('Обновлено', 'treba'); ?>: <?php echo get_the_modified_time('d.m.Y') ?>
        </div>
      </div>

      <!-- Хлебные крошки -->
      <div class="breadcrumbs mb-4" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <ul class="flex justify-center uppercase">
          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
            <a itemprop="item" href="<?php echo home_url(); ?>" class="red-color hover:text-white">
              <span itemprop="name"><?php _e( 'Главная', 'treba' ); ?></span>
            </a>                        
            <meta itemprop="position" content="1">
          </li>
          <span class="mx-1">—</span>
          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
            <a itemprop="item" href="<?php echo get_post_type_archive_link( 'dictionary' ); ?>" class="red-color hover:text-white">
              <span itemprop="name"><?php _e( 'Словарь', 'treba' ); ?></span>
            </a>                        
            <meta itemprop="position" content="2">
          </li>
          <span class="mx-1">—</span>
          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
      <!-- END Хлебные крошки -->

    </div>
  </div>
<?php endwhile; else: ?>
  <p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>