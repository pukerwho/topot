<?php get_header(); ?>


<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<h1 class="text-5xl first-color text-center mb-12"><?php echo post_type_archive_title(); ?></h1>
		<div class="flex flex-wrap lg:-mx-2">
			<?php 
				$services_query = new WP_Query(array(
					'post_type' => 'portfolio',
					'posts_per_page' => 9,
				)); 
				if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
			?>
				<a href="<?php the_permalink(); ?>" class="w-full lg:w-1/3 block lg:px-2 mb-4">
					<div>
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="<?php the_title(); ?>" class="w-full object-cover" style="height: 275px;">
					</div>
					<div class="bg-light rounded-b-lg text-center py-8 px-2">
						<span class="text-lg text-white opacity-75"><?php the_title(); ?></span>
					</div>
				</a>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>