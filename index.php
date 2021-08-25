<?php get_header(); ?>

<div class="pt-40 pb-20">
  <div class="container mx-auto px-4 lg:px-0">

    <h1 class="text-3xl lg:text-5xl text-center font-bold mb-12"><span class="red-color">[ </span><?php _e('Блог', 'treba'); ?><span class="red-color"> ]</span></h1>

    <div class="flex justify-center">
      <div class="w-full lg:w-7/12">
        <?php 
          $services_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
          )); 
          if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
        ?>
          <div class="relative bg-light rounded-lg p-5 mb-6">
            <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
              <div class="text-xl text-gray-200 font-bold mb-4">
                <?php the_title(); ?>
              </div>
              <div class="text-gray-100 mb-4">
                <?php the_excerpt(); ?>
              </div>
              <div class="flex items-center red-color">
                <div class="mr-2">
                  <?php _e('Продолжить чтение', 'treba'); ?>  
                </div>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>