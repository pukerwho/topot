<?php get_header(); ?>

<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">

		<!-- WELCOME -->
		<div class="flex items-center bg-light relative rounded-lg shadow-xl px-6 py-8 mb-20">
			<div class="w-full lg:w-2/3">
				<div class="welcome_title text-white relative z-10 mb-6">
					<h1><?php single_term_title(); ?></h1>
				</div>
				<div class="welcome_desc text-white text-xl md:text-2xl relative opacity-75 z-10 mb-6">
					<p><?php _e('Бесплатная консультация специалиста по вашему вопросу', 'topot'); ?></p>
				</div>	
			</div>
			<div class="w-full lg:w-1/3">
				<div class="welcome_lead">
					<div class="welcome_lead_title w-full text-center">
						<div class="bg-second-gradient inline-block rounded-2xl shadow-xl text-4xl title-font text-black pt-4 pb-8 px-8">
							<?php _e('Обсудить проект', 'top'); ?>	
						</div>
					</div>
					<div class="flex items-center justify-center -mx-2 -mt-4 relative z-20">
						<div class="welcome_contact_icon px-2">
							<a href="tg://resolve?domain=time2top" class="flex items-center rounded-lg btn telegram px-4 py-2" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/telegram.svg" alt="Telegram" width="21" class="mr-2">
								<span class="text-xl">Telegram</span>
							</a>
						</div>
						<div class="welcome_contact_icon px-2">
							<a href="viber://chat?number=+380997713997" class="flex items-center rounded-lg btn viber px-4 py-2" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/viber.svg" alt="Viber" width="21" class="mr-2">
								<span class="text-xl">Viber</span>
							</a>
						</div>
						<div class="welcome_contact_icon px-2">
							<a href="mailto:hello@treba-solutions.com" class="flex items-center rounded-lg btn email px-4 py-2">
								<img src="<?php bloginfo('template_url'); ?>/img/email.svg" alt="Email" width="21" class="mr-2">
								<span class="text-xl">Email</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END WELCOME -->
		<!-- DESCRIPTION -->
		<h2 class="text-4xl md:text-5xl third-color mb-4"><?php _e('Несколько слов про услугу', 'topot'); ?></h2>
		<div class="content">
			<?php echo category_description(get_queried_object()->term_id); ?>
		</div>
		<!-- END DESCRIPTION -->
	</div>
</div>

<?php get_footer(); ?>