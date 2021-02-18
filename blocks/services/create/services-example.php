<div class="service_example py-20">
	<div class="container mx-auto">
		<div class="row">
			<h2 class="text-4xl md:text-5xl second-color mb-10"><?php _e('Вот примеры сайтов, которые мы уже сделали','treba'); ?></h2>
			<div>
				<?php $custom_query = new WP_Query( array( 
					'post_type' => 'portfolio', 
					'posts_per_page' => 5,
					'orderby' => 'date',
					'order' => 'DESC',
				));
				if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="w-1/2">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo carbon_get_the_post_meta('crb_portfolio_thumb'); ?>" alt="" class="w-full">
						</a>	
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>