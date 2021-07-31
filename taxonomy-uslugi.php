<?php get_header(); ?>

<?php 
	$current_cat_id = get_queried_object_id();
?>

<div class="pt-40 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<div class="text-center mb-20">
			<h1 class="text-3xl lg:text-5xl font-black mb-8"><?php single_term_title(); ?></h1>
			<div class="text-2xl"><?php _e('В этой категории собраны все наши услуги по данной теме', 'treba'); ?></div>	
		</div>
		<div class="w-full lg:w-7/12 mx-auto">
			
		
			<div class="flex flex-wrap md:-mx-4">
				<?php 
					$query = new WP_Query( array( 
						'post_type' => 'services', 
						'posts_per_page' => -1,
						'order'    => 'DESC',
						'tax_query' => array(
					    array(
				        'taxonomy' => 'uslugi',
						    'terms' => $current_cat_id,
				        'field' => 'term_id',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					) );
					if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
				?>
					<div class="w-full border-separate pb-12 mb-12">
						<!-- Title -->
						<div class="flex justify-between items-center relative third-color hover:text-white mb-4">
							<a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
							<div class="text-2xl font-bold">
								<?php the_title(); ?>
							</div>
							<div class="hidden lg:block">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
								  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							</div>
						</div>
						<!-- END Title -->

						<!-- Description -->
						<div class="content mb-6">
							<?php echo apply_filters( 'the_content', carbon_get_the_post_meta('crb_services_welcome_text') ); ?>	
						</div>
						<!-- END Description -->

						<!-- Action -->
						<div class="flex justify-between items-center">
							<div class="relative mr-2">
								<a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0 z-10"></a>
								<div class="flex items-center text-white">
									<div class="mr-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
										  <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
										</svg>
									</div>
									<div class="text-xl">
										<?php _e('Подробнее', 'treba'); ?>
									</div>
								</div>
							</div>
							<div>
								<div class="cursor-pointer">
									<div class="w-full ">
										<div class="order_btn first-btn text-center order-js" data-order="<?php the_title(); ?>">
											<?php _e('Оставить заявку', 'treba'); ?>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- END Action -->

					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>