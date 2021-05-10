<?php get_header(); ?>


<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<h1 class="text-5xl first-color text-center mb-12">📈 <?php echo post_type_archive_title(); ?></h1>
		<div class="flex flex-wrap lg:-mx-2">
			<?php 
				$services_query = new WP_Query(array(
					'post_type' => 'cases',
					'posts_per_page' => 9,
				)); 
				if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
			?>
			<div class="w-full lg:w-1/3 relative lg:px-2 mb-5">
				<div class="h-full flex flex-col justify-between">
					<a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
					<div class="h-64">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?php the_title(); ?>" class="min-w-full h-full object-cover object-top">
					</div>
					<div class="h-full flex items-center justify-center bg-light rounded-b-lg text-center py-8 px-2">
						<span class="text-lg text-white opacity-75"><?php the_title(); ?></span>
					</div>	
				</div>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>