<?php get_header(); ?>

<div class="pt-40 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<div class="text-center mb-20">
			<h1 class="text-3xl lg:text-5xl font-black mb-8">📈 <?php echo post_type_archive_title(); ?></h1>
			<div class="text-2xl"><?php _e('Делимся реальными результатами нашей работы', 'treba'); ?></div>	
		</div>
		<div class="flex flex-wrap lg:-mx-4">
			<?php 
				$services_query = new WP_Query(array(
					'post_type' => 'cases',
					'posts_per_page' => 9,
				)); 
				if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
			?>
				<div class="cases_row flex items-center lg:-mx-4 mb-16 pb-16 border-separate">
					<div class="w-full lg:w-1/2 lg:px-4 mb-8 lg:mb-0">
						<div class="cases_row_img">
							<?php $cases_thumb = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'crb_case_thumb'), 'large'); ?>
							<img src="<?php echo $cases_thumb[0]; ?>" alt="<?php the_title(); ?>">	
						</div>
					</div>
					<div class="w-full lg:w-1/2 lg:px-4">
						<!-- SUBTITLE -->
						<div class="hand-font text-2xl third-color-dark mb-4">
							<?php echo carbon_get_the_post_meta('crb_case_subtitle'); ?>
						</div>
						<!-- END SUBTITLE -->

						<!-- TITLE -->
						<div class="text-3xl font-black text-white mb-4">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<!-- END TITLE -->

						<!-- DESCRIPTION -->
						<div class="text-2xl mb-4">
							<?php echo carbon_get_the_post_meta('crb_case_title'); ?>
						</div>
						<!-- END DESCRIPTION -->

						<!-- AUTHOR -->
						<div class="flex items-center">
							<!-- Аватарка -->
							<div class="avatar mr-4">
								<?php 
									$avatar = get_avatar(get_the_author_meta('ID'));
								?>
								<?php if ($avatar): ?>
	                <?php echo $avatar; ?>
	              <?php else: ?>
	                <img src="<?php bloginfo('template_part'); ?>/img/user.svg" width="35px">
	              <?php endif; ?>
							</div>
							<!-- END Аватарка -->

							<!-- Имя -->
							<div class="text-white">
	              <?php if(!empty(get_the_author_meta('facebook'))): ?>
									<a href="<?php the_author_meta('facebook'); ?>"><?php echo get_the_author(); ?></a>
								<?php else: ?>
									<?php echo get_the_author(); ?>
								<?php endif; ?>
							</div>
							<!--END Имя -->

							<div class="px-2">-</div>

							<!-- Дата -->
							<?php echo get_the_modified_time('j/n/Y') ?>
							<!-- END Дата -->
						</div>
						<!-- END AUTHOR -->
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>