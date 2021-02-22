<h2 class="text-4xl md:text-5xl second-color text-center mb-10"><?php echo carbon_get_the_post_meta('crb_services_price_create_title');  ?></h2>
<div class="bg-light rounded-lg px-8 py-10 mb-20">
	<div class="flex flex-wrap flex-col lg:items-center lg:flex-row lg:-mx-2">
		<div class="w-full lg:w-1/2 px-2 mb-6 lg:mb-0">
			<div class="mb-6 text-center">
				<div>
				<span class="text-2xl opacity-75 mr-2"><?php _e('От','treba'); ?></span>
				<span class="text-5xl"><?php echo carbon_get_the_post_meta('crb_services_price_create_total');  ?> грн.</span>
				</div>
			</div>
			<div class="price_item_btn">
				<div class="more_btn flex justify-center">
					<a href="#">
						<div class="second-btn text-black">
							<?php _e('Оставить заявку', 'treba'); ?>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="w-full lg:w-1/2 px-2">
			<div class="text-2xl first-color mb-4"><?php _e('Что входит в эту сумму?', 'treba'); ?></div>
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