<div class="commerce relative bg-light py-20 -mt-2 mb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<h2 class="text-4xl text-center font-bold mb-6"><span class="red-color"><?php _e('Индивидуальное', 'treba'); ?></span> <?php _e('коммерческое предложение', 'treba'); ?></h2>
		<div class="text-2xl text-center opacity-75">
			<?php _e('Мы вышлем Вам пошаговый план действий, а также посчитаем точную стоимость всех работ', 'treba'); ?>.
		</div>
	</div>
	<div class="w-24 absolute -bottom-12 left-0 right-0 mx-auto" style="transform: rotate(172deg);">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-hand.svg">
	</div>
</div>
<div class="flex justify-center px-2 mb-20">
	<div class="first-btn text-center cursor-pointer commerce-js" data-commerce="<?php echo get_the_title(); ?>">
		<?php _e('Получить коммерческое предложение', 'treba'); ?>
	</div>
</div>