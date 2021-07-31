<div class="border-separate mb-20 pb-20">
	<!-- Title -->
	<div class="text-center mb-12">
		<div class="hand-font text-2xl third-color-dark mb-4">
			<?php _e('Стоимость услуги', 'treba'); ?>
		</div>
		<h2 class="text-3xl md:text-4xl font-black mb-6"><?php echo carbon_get_the_post_meta('crb_services_price_create_title');  ?></h2>
		<div class="text-2xl">
			<?php _e('Цена считается индивидуально. Стоимость разработки зависит от вашей задачи.', 'treba'); ?>
		</div>
	</div>
	<!-- END Title -->

	<div class="bg-light px-8 py-10">
		<div class="flex flex-wrap flex-col lg:items-center lg:flex-row lg:-mx-2">
			<div class="w-full lg:w-1/2 px-2 mb-6 lg:mb-0">
				<div class="mb-6 text-center">
					<div>
					<span class="text-2xl opacity-75 mr-2"><?php _e('От','treba'); ?></span>
					<span class="text-5xl text-white font-black"><?php echo carbon_get_the_post_meta('crb_services_price_create_total');  ?> грн.</span>
					</div>
				</div>
				<div class="cursor-pointer">
					<div class="more_btn flex justify-center">
						<div class="order_btn first-btn text-black order-js" data-order="Заказать сайт">
							<?php _e('Оставить заявку', 'treba'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="w-full lg:w-1/2 px-2">
				<div class="text-2xl red-color mb-4"><?php _e('Что входит в эту сумму?', 'treba'); ?></div>
				<ul class="price_item_list">
					<?php 
						$what_do_create = carbon_get_the_post_meta('crb_services_price_create_whatdo'); 
						foreach( $what_do_create as $what_do ):
					?>
						<li><?php echo $what_do['crb_services_price_create_do']; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>