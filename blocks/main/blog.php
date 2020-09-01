<div class="blog mb-20">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="flex flex-col lg:flex-row justify-between">
			<div class="w-full lg:w-2/5 pr-0 md:pr-10 mb-6 lg:mb-0">
				<div class="sticky">
					<h2 class="text-4xl md:text-5xl second-color mb-6"><?php _e('Наш блог', 'topot'); ?></h2>
					<div class="text-xl md:text-2xl">
						<p class="mb-6">Делимся различной полезной информацией для наших клиентов.</p>
						<p>👉 <a href="/blog" class="underline">Перейти в раздел</a></p>
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
					<div class="blog_item bg-orange-200 rounded-lg py-4 px-6 mb-6">
						<div class="blog_item_title title-color text-xl md:text-2xl font-bold mb-2">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="blog_item_description title-color text-xl mb-4">
							<?php the_excerpt(); ?>
						</div>
						<div class="blog_item_tags">
							<span>Wordpress</span>
							<span>Верстка</span>
							<span>Интернет-магазин</span>
							<span>API</span>
							<span>JS</span>
							<span>SCSS</span>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>