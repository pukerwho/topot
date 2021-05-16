<div class="services mb-12">
	<div class="container mx-auto mb-12 px-4 lg:px-0">
		<h2 class="text-4xl md:text-5xl third-color mb-12"><?php _e('Наши услуги', 'treba'); ?></h2>
		<div class="flex flex-wrap md:-mx-2">
			<?php $all_uslugi = get_terms( array( 
				'taxonomy' => 'uslugi', 
				'parent' => 0, 
				'hide_empty' => false,
				'orderby' => 'term_order',
			));
			foreach ( $all_uslugi as $uslugi ): ?>
				<div class="services_item md:h-80 w-full md:w-1/3 relative md:px-2 mb-4">
					<div class="h-full flex flex-col bg-light rounded-2xl px-6 py-8">
						<a href="<?php echo get_term_link($uslugi); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
						<div class="title flex items-center text-white text-2xl font-black mb-6">
							<div class="mr-3">
								<img src="<?php echo carbon_get_term_meta($uslugi->term_id, 'crb_uslugi_thumb'); ?>"  width="36">
							</div>
		      		<?php echo $uslugi->name ?>
		      	</div>
		      	<div class="line mb-6"></div>
		      	<div class="text text-white text-xl opacity-75 mb-6">
		      		<?php echo carbon_get_term_meta($uslugi->term_id, 'crb_uslugi_description' ); ?>
		      	</div>
		      	<div class="flex items-center red-color text-xl">
		      		<svg class="push-this tran-03s" width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		      			<path d="M12.7446 14.2159C12.1822 14.6664 11.3527 14.6342 10.8285 14.1194L10.7302 14.0126C10.2715 13.4602 10.3042 12.6455 10.8285 12.1306L14.1118 8.90625H2.29545C1.50468 8.90625 0.863636 8.27665 0.863636 7.5C0.863636 6.72335 1.50468 6.09375 2.29545 6.09375H14.1118L10.8285 2.86937L10.7302 2.76257C10.2715 2.21023 10.3042 1.39548 10.8285 0.88063C11.3876 0.331455 12.2942 0.331455 12.8534 0.88063L18.5806 6.50563L18.6789 6.61243C19.1376 7.16477 19.1048 7.97952 18.5806 8.49437L12.8534 14.1194L12.7446 14.2159Z" fill="#ffffff"></path>
		      		</svg>
		      		<span class="ml-3 -mb-1"><?php _e('Подробнее', 'treba'); ?></span>
		      	</div>
		      </div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="more_btn flex justify-center mb-20">
			<a href="<?php echo get_post_type_archive_link( 'services' ); ?>">
				<div class="first-btn">
					<?php _e('Все услуги', 'treba'); ?>
				</div>
			</a>
		</div>
</div>