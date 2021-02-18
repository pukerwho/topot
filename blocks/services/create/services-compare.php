<div class="container mx-auto mb-20">
	<div class="row">
		<h2 class="text-4xl md:text-5xl third-color mb-4"><?php _e('6 лет в этом бизнесе', 'treba'); ?></h2>
	</div>

	<!-- Первый заказ -->
	<div class="w-full flex items-center mb-20">
		<div class="w-2/3 pr-10">
			<img src="<?php bloginfo('template_url'); ?>/img/secretroom.jpg" alt="Наш первый сайт" class="w-full">
		</div>
		<div class="w-1/3 flex flex-col items-center pl-10">
			<div class="hand-font text-4xl text-center mb-6"><?php _e('Наш первый заказ. Сайт сделан в 2014 году', 'treba'); ?></div>
			<img src="<?php bloginfo('template_url'); ?>/img/ascend.svg" alt="" width="80px" class="arrow_first_site">
		</div>
	</div>

	<!-- Свежий заказ -->
	<div class="w-full flex items-center mb-20">
		<div class="w-2/3 pr-10">
			<img src="<?php bloginfo('template_url'); ?>/img/secretroom.jpg" alt="Наш первый сайт" class="w-full">
		</div>
		<div class="w-1/3 flex flex-col items-center pl-10">
			<div class="hand-font text-4xl text-center mb-6"><?php _e('А это свежий заказ. Сайт сделан в 2020 году', 'treba'); ?></div>
			<img src="<?php bloginfo('template_url'); ?>/img/curve.svg" alt="" width="100px" class="arrow_last_site">
		</div>
	</div>
	<div class="more_btn flex justify-center">
		<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">
			<div class="first-btn text-black font-black">
				<?php _e('Наше портфолио', 'topot'); ?>
			</div>
		</a>
	</div>
</div>