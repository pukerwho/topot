<div class="cases">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="relative">
			<h2 class="display-inline text-4xl md:text-5xl text-center second-color mb-4"><?php _e('Кейсы', 'topot'); ?></h2>
			<div class="text-show"></div>	
		</div>
		<div class="text-center text-xl md:text-2xl mb-12">
			<?php _e('Описываем процесс и полученный результат', 'topot'); ?>. <br><?php _e('Здесь вы сможете лучше узнать, как мы работаем', 'topot'); ?>. 
		</div>
		<?php $custom_query = new WP_Query( array( 
			'post_type' => 'cases', 
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC',
		));
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="cases_item w-full md:w-1/2 block mx-auto mb-20">
				<div class="cases_item_title text-center text-white text-2xl md:text-3xl px-3 md:px-6 md:py-8 py-4">
					<?php the_title(); ?>
				</div>
				<div class="cases_item_img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				</div>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class="more_btn flex justify-center mb-20">
			<a href="<?php echo get_post_type_archive_link( 'cases' ); ?>">
				<div class="second-btn text-black">
					<?php _e('Больше кейсов', 'topot'); ?>
				</div>
			</a>
		</div>
	</div>
</div>