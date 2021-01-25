<div class="portfolio mb-20">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="flex flex-col lg:flex-row justify-between">
			<div class="w-full lg:w-2/5 pr-0 md:pr-10 mb-6 lg:mb-0">
				<div class="sticky">
					<h2 class="text-4xl md:text-5xl second-color mb-6"><?php _e('Портфолио', 'topot'); ?></h2>
					<div class="text-xl md:text-2xl">
						<p class="mb-2"><?php _e('Если вам нравятся наши работы - обязательно напишите нам. Мы отправим вам свое коммерческое предложение', 'topot'); ?>.</p>
						<p class="mb-6"><a href="mailto:info@timeto.top" class="underline">info@timeto.top</a></p>
						<p><?php _e('Выполненые проекты', 'topot'); ?> <span class="hidden md:inline">👉</span><span class="inline md:hidden">👇</span></p>
					</div>	
				</div>
			</div>
			<div class="w-full lg:w-1/2 pl-0 lg:pl-10">
				<?php $custom_query = new WP_Query( array( 
					'post_type' => 'portfolio', 
					'posts_per_page' => 5,
					'orderby' => 'date',
					'order' => 'DESC',
				));
				if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="portfolio_item mb-12">
						<div class="portfolio_item_header mb-12 px-4 md:px-10 pt-10">
							<div class="portfolio_item_title bold-font text-4xl mb-3">
								<a href="<?php echo carbon_get_the_post_meta('crb_portfolio_url'); ?>"><?php echo carbon_get_the_post_meta('crb_portfolio_title'); ?></a>
							</div>
							<div class="portfolio_item_description text-xl md:text-2xl mb-8">
								<?php echo carbon_get_the_post_meta('crb_portfolio_description'); ?>
							</div>
							<div class="portfolio_item_tags">
								<?php 
									$portfolio_tags = carbon_get_the_post_meta('crb_portfolio_tags'); 
									foreach ($portfolio_tags as $tag):
								?>
									<span><?php echo $tag['crb_portfolio_tag']; ?></span>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="portfolio_item_images">
							<div class="portfolio_item_img ">
								<img src="<?php echo carbon_get_the_post_meta('crb_portfolio_thumb'); ?>" alt="">
							</div>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>