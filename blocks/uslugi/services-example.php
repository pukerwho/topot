<div class="service_example pt-20">
	<div class="container mx-auto">
		<div class="row">
			<h2 class="w-1/2 text-2xl md:text-4xl second-color mb-10"><?php _e('Вот примеры сайтов, которые мы уже сделали','treba'); ?></h2>
			<div class="flex flex-wrap -mx-2 mb-10">
				<?php $custom_query = new WP_Query( array( 
					'post_type' => 'portfolio', 
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
				));
				if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="w-1/2 overflow-hidden px-2 service_example_item animate-puk mb-4">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="" class="w-full">
						</a>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
			<div class="more_btn flex justify-center">
				<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">
					<div class="first-btn text-black font-black">
						<?php _e('Наше портфолио', 'treba'); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>