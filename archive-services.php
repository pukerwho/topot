<?php get_header(); ?>

<div class="pt-32 pb-16">
	<div class="container mx-auto px-2 lg:px-0">
		<h1 class="text-5xl first-color text-center mb-12"><?php _e('Все наши услуги', 'treba'); ?></h1>
		<div>
			<?php $services = get_terms(array(
				'taxonomy' => 'uslugi', 
				'parent' => 0, 
				'hide_empty' => false,
			)); 
			foreach ($services as $service): ?>
				<div class="services_item flex bg-light rounded-lg py-6 px-4 mb-6">
					<div class="mr-4">
						<img src="<?php echo carbon_get_term_meta($service->term_id, 'crb_uslugi_thumb'); ?>" alt="<?php echo $service->name ?>" width="60">
					</div>
					<div class="w-full">
						<div class="title text-white text-2xl">							
							<a href="<?php echo get_term_link($service); ?>">
			      		<?php echo $service->name; ?>
			      	</a>
		      	</div>
		      	<div class="mb-10">
		      		<a href="<?php echo get_term_link($service); ?>" class="services_item_link">
		      			<?php _e('Перейти', 'treba'); ?> →
		      		</a>
		      	</div>
		      	<div class="flex flex-wrap flex-col lg:flex-row lg:-mx-2">
		      		<?php 
								$current_term = $service->term_id;
								$custom_query = new WP_Query( array( 
								'post_type' => 'services', 
								'orderby' => 'date',
								'order' => 'DESC',
								'tax_query' => array(
							    array(
						        'taxonomy' => 'uslugi',
								    'terms' => $current_term,
						        'field' => 'term_id',
						        'include_children' => true,
						        'operator' => 'IN'
							    )
								),
							) );
							if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
								<div class="w-full lg:w-1/2 lg:px-2">
									<a href="<?php the_permalink(); ?>" class="white-link-with-hover">
					      		<?php the_title(); ?>
									</a>	
								</div>
							<?php endwhile; endif; wp_reset_postdata(); ?>
		      	</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>