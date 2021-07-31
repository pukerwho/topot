<?php get_header(); ?>

<div class="reviews pt-40 pb-20">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="text-center mb-12">
			<h1 class="text-3xl lg:text-5xl font-black mb-8">💬 <?php _e('Что говорят наши клиенты', 'treba'); ?></h1>
			<div class="text-2xl"><?php _e('Мы собрали все отзывы о нашей работе', 'treba'); ?></div>	
		</div>
		<h1 class="text-5xl first-color text-center mb-12"></h1>
		<div class="reviews_grid flex flex-wrap mb-12 mx-0 md:-mx-6">
			<div class="w-full lg:w-1/4 h-80 lg:h-auto lg:min-h-full md:px-6 mb-6 md:mb-0 py-8 md:py-0">
				<div class="reviews_facebook flex flex-col justify-center rounded-lg lg:min-h-full h-full lg:h-auto ">
					<div class="reviews_facebook_svg mb-6">
						<figure class="chart" data-percent="75">
							<figcaption class="text_dark">5/5</figcaption>
							<svg width="120" height="120" style="margin: auto;">
								<circle class="outer totop-animate" cx="60" cy="60" r="55"></circle>
							</svg>
						</figure>
					</div>
					<div class="text-white text-center text-xl title_font font-black mb-4">
						facebook
					</div>
					<div class="flex justify-center">
						<?php get_template_part('blocks/elements/stars'); ?>	
					</div>
				</div>
			</div>
			<?php $custom_query = new WP_Query( array( 
				'post_type' => 'reviews', 
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',
			));
			if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="reviews_item w-full lg:w-1/4 px-0 md:px-6">
				<div class="reviews_item_photo modal_click_js relative cursor-pointer mb-2" data-modal-id="modal_order_<?php echo get_the_ID(); ?>">
					<img src="https://i.ytimg.com/vi/<?php echo carbon_get_the_post_meta('crb_reviews_youtube'); ?>/hqdefault.jpg" alt="" class="w-full h-full object-cover">
					<div class="reviews_item_play">
						<img src="<?php bloginfo('template_url'); ?>/img/play.svg" alt="" width="15px">
					</div>
				</div>
				<div class="flex flex-col mb-4">
					<div class="reviews_item_title text-xl mb-4">
						<?php echo carbon_get_the_post_meta('crb_reviews_name'); ?>
					</div>	
					<?php get_template_part('blocks/elements/stars'); ?>
				</div>
				<div class="reviews_item_description">
					<?php echo carbon_get_the_post_meta('crb_reviews_description'); ?>
				</div>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>