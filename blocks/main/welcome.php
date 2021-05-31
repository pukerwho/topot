<!-- WELCOME -->
<div class="welcome relative pt-32 pb-20 md:pb-32">
	<div class="container mx-auto px-4 md:px-0">
		<h1 class="text-5xl md:text-6xl font-bold text-center mb-12 md:mb-20"><?php _e('Создаем и продвигаем сайты', 'treba'); ?></h1>
		<div class="flex flex-col md:flex-row md:justify-between md:-mx-12">
			<div class="w-full md:w-7/12 md:px-12 mb-8 md:mb-0">
				<div class="content text-xl mb-12">
					<?php the_content(); ?>
				</div>
				<?php get_template_part('blocks/elements/recommend'); ?>
			</div>
			<div class="w-full md:w-5/12 md:px-12">
				<div class="bg-light rounded-2xl px-6 py-8">
					<div class="text-lg uppercase text-center mb-4">
						<?php _e('Обсуждение проекта', 'treba'); ?>
					</div>
					<?php get_template_part('blocks/forms/welcome-form'); ?>
				</div>
			</div>
		</div>
	</div>
</div>