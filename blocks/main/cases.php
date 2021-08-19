<div class="cases">
	<div class="container mx-auto px-4 lg:px-0">
		<!-- TITLE BLOCK -->
		<div class="w-full md:w-6/12 mx-auto mb-16">
			<div class="hand-font third-color-dark text-2xl text-center mb-4">
				<?php _e('Только практика!', 'treba'); ?>
			</div>
			<h2 class="text-4xl md:text-5xl text-center font-black mb-8">
				📈 <?php _e('Кейсы', 'treba'); ?>
			</h2>
			<div class="text-xl text-center">
				<?php _e('Описываем процесс и полученный результат', 'treba'); ?>. <br><?php _e('Здесь вы сможете лучше узнать, как мы работаем', 'treba'); ?>. 
			</div>
		</div>
		<!-- END TITLE BLOCK -->
		<?php $custom_query = new WP_Query( array( 
			'post_type' => 'cases', 
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC',
		));
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="cases_item w-full md:w-1/2 relative block bg-dark-light mx-auto mb-20">
				<a href="<?php the_permalink(); ?>" class="absolute w-full h-full top-0 left-0 z-10"></a>
				<div class="cases_item_subtitle hand-font text-lg lg:text-2xl third-color-dark">
					<?php echo carbon_get_the_post_meta('crb_case_subtitle'); ?>
				</div>
				<div class="cases_item_title w-10/12 text-2xl lg:text-3xl text-center red-color pb-8 pt-20 mx-auto mb-4">
					<?php echo carbon_get_the_post_meta('crb_case_title'); ?>
				</div>
				<div class="w-10/12 mx-auto mb-12">
					<div class="flex justify-center -mx-4">
						<div class="w-full light-btn text-black text-center"><?php _e('Подробнее', 'treba'); ?></div>
					</div>
				</div>
				<div class="w-10/12 mx-auto">
					<?php $cases_thumb = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'crb_case_thumb'), 'large'); ?>
					<img src="<?php echo $cases_thumb[0]; ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class="more_btn flex justify-center mb-20">
			<a href="<?php echo get_post_type_archive_link( 'cases' ); ?>">
				<div class="first-btn text-black">
					<?php _e('Больше кейсов', 'treba'); ?>
				</div>
			</a>
		</div>
	</div>
</div>