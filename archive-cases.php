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
			<div class="w-full lg:w-1/2 relative px-2 mb-12 lg:mb-20">
				<a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
				<div class="flex flex-wrap lg:-mx-2" style="background: url(<?php echo carbon_get_the_post_meta('crb_case_bg'); ?>);">
					<div class="cases_item_subtitle rounded-b-lg text-sm px-10 py-1">
						<?php echo carbon_get_the_post_meta('crb_case_subtitle'); ?>
					</div>
					<div class="cases_item_title w-10/12 text-3xl text-center pb-8 pt-20 mx-auto mb-4">
						<?php echo carbon_get_the_post_meta('crb_case_title'); ?>
					</div>
					<div class="w-10/12 mx-auto mb-12">
						<div class="flex -mx-4">
							<?php 
								$cases_params = carbon_get_the_post_meta('crb_case_params'); 
								foreach ($cases_params as $cases_param):
							?>
								<div class="w-1/<?php echo count($cases_params); ?> px-4">
									<div class="text-4xl font-black text-center second-color mb-4">
										<?php echo $cases_param['crb_case_param_number']; ?>
									</div>
									<div class="text-xl text-center">
										<?php echo $cases_param['crb_case_params_text']; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="w-10/12 mx-auto">
						<?php $cases_thumb = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'crb_case_thumb'), 'large'); ?>
						<img src="<?php echo $cases_thumb[0]; ?>" alt="<?php the_title(); ?>">
					</div>
				</div>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>