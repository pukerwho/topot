<div class="cases">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="relative flex justify-center">
			<h2 class="inline text-4xl md:text-5xl text-center second-color mb-4">📈 <?php _e('Кейсы', 'treba'); ?></h2>
			<div class="text-show"></div>	
		</div>
		<div class="text-center text-xl md:text-2xl mb-12">
			<?php _e('Описываем процесс и полученный результат', 'treba'); ?>. <br><?php _e('Здесь вы сможете лучше узнать, как мы работаем', 'treba'); ?>. 
		</div>
		<?php $custom_query = new WP_Query( array( 
			'post_type' => 'cases', 
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC',
		));
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="cases_item w-full md:w-1/2 relative block mx-auto mb-20" style="background: url(<?php echo carbon_get_the_post_meta('crb_case_bg'); ?>);">
				<a href="<?php the_permalink(); ?>" class="absolute w-full h-full top-0 left-0 z-10"></a>
				<div class="cases_item_subtitle rounded-b-lg text-sm px-10 py-1">
					<?php echo carbon_get_the_post_meta('crb_case_subtitle'); ?>
				</div>
				<div class="cases_item_title w-10/12 text-3xl text-center pb-8 pt-20 mx-auto mb-4">
					<?php echo carbon_get_the_post_meta('crb_case_title'); ?>
				</div>
				<div class="w-10/12 mx-auto mb-12">
					<div class="flex justify-center -mx-4">
						<div class="second-btn text-black text-center"><?php _e('Подробнее', 'treba'); ?></div>
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
				<div class="second-btn text-black">
					<?php _e('Больше кейсов', 'treba'); ?>
				</div>
			</a>
		</div>
	</div>
</div>