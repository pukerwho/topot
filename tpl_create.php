<?php
/*
Template Name: СОЗДАНИЕ САЙТА
Template Post Type: services
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="pb-20">
	<div class="service">
		<div class="service_welcome flex items-center">
			<div class="container mx-auto px-4 md:px-0">
				<div class="row">
					<div class="w-full flex flex-col justify-center items-center">
						<h1 class="text-4xl md:text-6xl text-center mb-6">
							<div class="service_title overflow-hidden">
								<span class="block service_title_animate"><?php _e('Адаптивные', 'treba'); ?></span>	
								<span class="block service_title_animate"><?php _e('Кроссбраузерные', 'treba'); ?></span>
								<span class="block service_title_animate"><?php _e('Быстрые', 'treba'); ?></span>	
							</div>
							<span><?php _e('Сайты', 'treba'); ?></span>
						</h1>
						<div class="w-3/5 service_description text-xl md:text-3xl text-center opacity-75 mx-auto mb-10">
							<?php _e('Мы создаем сайты, которые помогают вашему бизнесу развиваться дальше', 'treba'); ?> <img src="<?php bloginfo('template_url'); ?>/img/rocket.webp" alt="" class="inline" width="45px">
						</div>
						<div class="service_call text-2xl font-bold">
							<?php _e('Бесплатная консультация', 'treba'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('blocks/services/create/services-stat'); ?>
		<?php get_template_part('blocks/services/create/services-compare'); ?>
		<div class="service_why py-20">
			<div class="container mx-auto">
				<div class="row">
					<div class="w-full">
						<h2 class="text-4xl md:text-5xl"><?php _e('Несколько слов про услугу', 'treba'); ?></h2>
						<div class="content text-2xl"><?php echo category_description(get_queried_object()->term_id); ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('blocks/services/create/services-steps'); ?>
		<?php get_template_part('blocks/services/create/services-example'); ?>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>