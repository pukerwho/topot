<!-- КЛИЕНТЫ -->
<div class="clients mb-12">
	<h2 class="text-4xl md:text-5xl first-color text-center mb-12"><?php _e('Наши клиенты', 'treba'); ?></h2>
	<div class="w-full md:w-10/12 mx-auto">
		<div class="flex flex-col md:flex-row items-center justify-center md:-mx-4">
			<?php 
				$clients = carbon_get_theme_option('crb_clients');
				foreach ( $clients as $client ): ?>
				<div class="clients_logo md:px-4 mb-12 md:mb-6">
					<?php $photo_src = wp_get_attachment_image_src($client, 'large'); ?>
					<img src="<?php echo $photo_src[0]; ?>" loading="lazy" class="h-20 md:h-20 bg-white object-contain rounded-2xl px-6 py-3 mx-auto">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- END КЛИЕНТЫ -->