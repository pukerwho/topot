<?php get_header(); ?>


<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<div class="mb-4">
			<h1 class="w-1/2 text-3xl lg:text-5xl first-color"><?php echo post_type_archive_title(); ?></h1>
			<div class="text-2xl"><?php _e('Сайты, разработанные нашей студией', 'treba'); ?></div>	
		</div>
		<div class="flex flex-wrap lg:-mx-2 mt-20">
			<?php 
				$services_query = new WP_Query(array(
					'post_type' => 'portfolio',
					'posts_per_page' => 8,
				)); 
				if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
			?>
				<div class="w-1/2 overflow-hidden px-2 service_example_item animate-puk mb-4">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="" class="w-full">
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>