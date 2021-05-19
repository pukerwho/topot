<?php get_header(); ?>


<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<div class="text-center mb-12">
			<h1 class="text-3xl lg:text-5xl first-color"><?php echo post_type_archive_title(); ?></h1>
			<div class="text-2xl"><?php _e('Сайты, разработанные нашей студией', 'treba'); ?></div>	
		</div>
		<div class="portfolio_archive">
			<?php 
				$services_query = new WP_Query(array(
					'post_type' => 'portfolio',
					'posts_per_page' => 8,
				)); 
				if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); 
			?>
				<div class="portfolio_archive_item flex flex-col md:flex-row md:items-center bg-light rounded-xl mb-10 md:mb-6">
					<div class="w-full md:w-1/2 px-4 md:px-12 py-6 md:py-8 md:mr-6 mb-6 md:mb-0">
						<div class="portfolio_archive_item_service mb-8">
							<a href="#" class="text-sm uppercase bg-first-gradient rounded-lg px-3 py-2">Создание сайтов</a>
							<a href="#" class="hidden text-sm uppercase bg-green-500 rounded-lg px-3 py-2">SEO-продвижение</a>
						</div>
						<div class="text-3xl font-bold mb-6">
							<?php echo carbon_get_the_post_meta('crb_portfolio_title'); ?>
						</div>
						<div class="text-xl opacity-75 md:mb-12">
							<?php echo carbon_get_the_post_meta('crb_portfolio_description'); ?>
						</div>
						<div class="hidden md:block">
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center text-center rounded-full px-12 py-3" style="border: 1px solid rgba(255,255,255,0.55);">	
								<span class="mr-2"><?php _e('Подробнее', 'treba'); ?></span>
								<svg class="push-this tran-03s" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.7446 14.2159C12.1822 14.6664 11.3527 14.6342 10.8285 14.1194L10.7302 14.0126C10.2715 13.4602 10.3042 12.6455 10.8285 12.1306L14.1118 8.90625H2.29545C1.50468 8.90625 0.863636 8.27665 0.863636 7.5C0.863636 6.72335 1.50468 6.09375 2.29545 6.09375H14.1118L10.8285 2.86937L10.7302 2.76257C10.2715 2.21023 10.3042 1.39548 10.8285 0.88063C11.3876 0.331455 12.2942 0.331455 12.8534 0.88063L18.5806 6.50563L18.6789 6.61243C19.1376 7.16477 19.1048 7.97952 18.5806 8.49437L12.8534 14.1194L12.7446 14.2159Z" fill="#ffffff"></path>
								</svg>
							</a>
						</div>
					</div>
					<div class="w-full md:w-1/2 mb-6 md:mb-0 bg-main">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?php the_title(); ?>" class="portfolio_archive_item_thumb w-full mb-6 md:mb-0">
						<div class="block md:hidden px-4">
							<a href="<?php the_permalink(); ?>" class="flex md:inline-flex justify-center items-center text-center rounded-full px-8 py-3" style="border: 1px solid rgba(255,255,255,0.55);">	
								<span class="mr-2"><?php _e('Подробнее', 'treba'); ?></span>
								<svg class="push-this tran-03s" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.7446 14.2159C12.1822 14.6664 11.3527 14.6342 10.8285 14.1194L10.7302 14.0126C10.2715 13.4602 10.3042 12.6455 10.8285 12.1306L14.1118 8.90625H2.29545C1.50468 8.90625 0.863636 8.27665 0.863636 7.5C0.863636 6.72335 1.50468 6.09375 2.29545 6.09375H14.1118L10.8285 2.86937L10.7302 2.76257C10.2715 2.21023 10.3042 1.39548 10.8285 0.88063C11.3876 0.331455 12.2942 0.331455 12.8534 0.88063L18.5806 6.50563L18.6789 6.61243C19.1376 7.16477 19.1048 7.97952 18.5806 8.49437L12.8534 14.1194L12.7446 14.2159Z" fill="#ffffff"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>