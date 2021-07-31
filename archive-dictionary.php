<?php get_header(); ?>

<div class="pt-40 pb-20">
  <div class="container mx-auto px-4 lg:px-0">

    <h1 class="text-3xl lg:text-5xl text-center font-bold mb-12"><span class="red-color">[ </span><?php _e('Словарь', 'treba'); ?><span class="red-color"> ]</span></h1>

    <div class="flex justify-center mb-6">
      <div class="w-full lg:w-7/12">
        <input id="search_dictionary_box" placeholder="<?php _e('Быстрый поиск', 'restx'); ?>" class="w-full text-lg text-black rounded px-3 py-3" />
      </div>
    </div>

    <div class="flex justify-center">
      <div class="w-full lg:w-7/12">
        <?php 
          $services_query = new WP_Query(array(
            'post_type' => 'dictionary',
            'posts_per_page' => -1,
          )); 
          if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
        ?>
          <div class="dictionary_item text-lg">
            <a href="<?php the_permalink(); ?>" data-metadata='{"name": "dict","category": "dictionary","tag": ["<?php echo get_the_title(); ?>"]}'>
              <?php the_title(); ?>
            </a>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>