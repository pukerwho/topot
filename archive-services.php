<?php get_header(); ?>

<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">
		<h1 class="text-5xl first-color text-center mb-12"><?php _e('Наши услуги', 'topot'); ?></h1>
		<div class="flex flex-wrap lg:-mx-2">
			<?php $services = get_terms(array(
				'taxonomy' => 'uslugi', 
				'parent' => 0, 
				'hide_empty' => false,
			)); 
			foreach ($services as $service): ?>
				<a href="<?php echo get_term_link($service); ?>" class="services_item w-full lg:w-1/3 block lg:px-2 mb-4">
					<div class="bg-light rounded-lg flex flex-col justify-center items-center p-6">
		      	<div class="title text-white text-4xl font-black text-center uppercase px-6 mb-6">
		      		<?php echo $service->name ?>
		      	</div>
		      </div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>