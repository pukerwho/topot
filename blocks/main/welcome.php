<!-- WELCOME -->
<div class="welcome relative pt-40 pb-20 lg:pb-32">
	<div class="container mx-auto px-4 lg:px-0">
		<h1 class="text-5xl lg:text-6xl font-bold text-center mb-12 lg:mb-20"><?php _e('Создаем и продвигаем сайты', 'treba'); ?></h1>
		<div class="flex flex-col lg:flex-row lg:justify-between lg:-mx-12">
			<div class="w-full lg:w-7/12 lg:px-12 mb-8 lg:mb-0">
				<div class="content text-xl mb-12">
					<?php the_content(); ?>
				</div>
				<?php get_template_part('blocks/elements/recommend'); ?>
			</div>
			<div class="w-full lg:w-5/12 lg:px-12">
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