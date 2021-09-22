<?php get_header(); ?>

<div class="pt-40 pb-16">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="text-center mb-12">
			<h1 class="text-3xl lg:text-5xl font-black mb-8"><?php _e('Все наши услуги', 'treba'); ?></h1>
			<div class="text-2xl"><?php _e('По этим направлениям мы можем гарантировать результат!', 'treba'); ?></div>	
		</div>
		<div>
			<?php $services = get_terms(array(
				'taxonomy' => 'uslugi', 
				'parent' => 0, 
				'hide_empty' => false,
				'orderby' => 'term_order',
			)); 
			foreach ($services as $service): ?>
				<div class="services_item block lg:flex bg-light rounded-lg py-6 px-4 mb-6">
					<div class="float-left lg:float-none mr-6">
						<img src="<?php echo carbon_get_term_meta($service->term_id, 'crb_uslugi_thumb'); ?>" alt="<?php echo $service->name ?>" width="55">
					</div>
					<div class="w-full">
						<div class="text-white text-2xl">							
							<a href="<?php echo get_term_link($service); ?>">
			      		<?php echo $service->name; ?>
			      	</a>
		      	</div>
		      	<div class="mb-8">
		      		<a href="<?php echo get_term_link($service); ?>" class="services_item_link">
		      			<?php _e('Перейти', 'treba'); ?> →
		      		</a>
		      	</div>
		      	<div>
		      		<?php if (carbon_get_term_meta($service->term_id, 'crb_uslugi_type_sites')): ?>
		      			<!-- Выводим по типу сайта услуги из категории -->
		      			<?php 
		      				$site_types = ['По тематике сайта', 'По CRM сайта', 'По региону', 'По типу сайта']; 
		      				foreach ($site_types as $site_type):
		      			?>
		      				
		      				<div class="mb-4">
		      					<div class="text-xl text-white mb-2">
		      						<?php echo $site_type; ?>	
		      					</div>
		      					<div class="flex flex-wrap flex-col lg:flex-row lg:-mx-2">
				      				<?php 
												$current_term = $service->term_id;
												$current_type_site_services = new WP_Query( array( 
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
												'meta_query' => array(
										      array(
														'key'       => '_crb_services_type',
														'value'     => $site_type,
														'compare'   => '='
										      )
										    )
											) );
											if ($current_type_site_services->have_posts()) : while ($current_type_site_services->have_posts()) : $current_type_site_services->the_post(); ?>
												<div class="w-full lg:w-1/2 lg:px-2 mb-2">
													<a href="<?php the_permalink(); ?>" class="text-lg white-link-with-hover">
									      		<?php the_title(); ?>
													</a>	
												</div>
											<?php endwhile; endif; wp_reset_postdata(); ?>
										</div>
									</div>

		      				
		      			<?php endforeach; ?>
		      			<!-- END Выводим по типу сайта услуги из категории -->
		      		<?php else: ?>
		      			<!-- Выводим все записи из этой категории -->
		      			<div class="flex flex-wrap flex-col lg:flex-row lg:-mx-2">
			      			<?php 
										$current_term = $service->term_id;
										$all_services = new WP_Query( array( 
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
									if ($all_services->have_posts()) : while ($all_services->have_posts()) : $all_services->the_post(); ?>
										<div class="w-full lg:w-1/2 lg:px-2 mb-2">
											<a href="<?php the_permalink(); ?>" class="text-lg white-link-with-hover">
							      		<?php the_title(); ?>
											</a>	
										</div>
									<?php endwhile; endif; wp_reset_postdata(); ?>
								</div>
								<!-- END Выводим все записи из этой категории -->

		      		<?php endif; ?>
		      	</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>