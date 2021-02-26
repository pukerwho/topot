<div class="reviews mb-20">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="relative">
			<h2 class="display-inline text-4xl md:text-5xl text-center third-color mb-12"><?php _e('Что говорят наши клиенты', 'treba'); ?></h2>
			<div class="text-show"></div>	
		</div>
		<div class="reviews_grid flex flex-wrap mb-12 mx-0 md:-mx-6">
			<div class="reviews_facebook flex flex-col justify-center rounded-lg w-full lg:w-1/4 px-6 mb-6 md:mb-0 py-8 md:py-0">
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
		<div class="more_btn flex justify-center">
			<a href="<?php echo get_post_type_archive_link( 'reviews' ); ?>">
				<div class="first-btn">
					<?php _e('Больше отзывов', 'treba'); ?>
				</div>
			</a>
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
	<div class="modal" data-modal-id="modal_order_<?php echo get_the_ID(); ?>">
		<div class="modal_body">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo carbon_get_the_post_meta('crb_reviews_youtube'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 75vh;"></iframe>
			<div class="modal_close pointer">
				<?php _e('Закрыть', 'treba'); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

<div class="modal_bg"></div>