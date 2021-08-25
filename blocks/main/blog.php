<div class="blog mb-20">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="flex flex-col lg:flex-row justify-between">
			<div class="w-full lg:w-2/5 pr-0 md:pr-10 mb-6 lg:mb-0">
				<div class="sticky">
					<div class="hand-font third-color-dark text-2xl mb-4"><?php _e('Мы сами пишем статьи!', 'treba'); ?></div>
					<div class="relative flex">
						<h2 class="inline text-4xl md:text-5xl font-black mb-6"><?php _e('Наш блог', 'treba'); ?></h2>
						<!-- <div class="text-show"></div>	 -->
					</div>
					<div class="text-xl">
						<p class="mb-6"><?php _e('Делимся различной полезной информацией для наших клиентов', 'treba'); ?>.</p>
						<p>👉 <a href="/blog" class="underline"><?php _e('Перейти в раздел', 'treba'); ?></a></p>
					</div>	
				</div>
			</div>
			<div class="w-full lg:w-1/2 pl-0 lg:pl-10">
				<?php $custom_query = new WP_Query( array( 
					'post_type' => 'post', 
					'posts_per_page' => 10,
					'orderby' => 'date',
					'order' => 'DESC',
				));
				if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="blog_item bg-yellow-50 rounded-lg py-4 px-6 mb-6">
						<div class="blog_item_title text-gray-800 text-xl md:text-2xl font-bold mb-2">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="blog_item_description text-gray-700 text-xl mb-4">
							<?php the_excerpt(); ?>
						</div>
						<div class="blog_item_tags text-gray-700">
							<?php 
								$blog_tags = carbon_get_the_post_meta('crb_portfolio_tags'); 
								foreach ($blog_tags as $blog_tag):
							?>
								<span><?php echo $blog_tag['crb_portfolio_tag']; ?></span>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>