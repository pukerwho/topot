<div class="services relative mb-20 md:mb-32 mt-0 md:-mt-10 z-10">
	<div class="container mx-auto mb-12 px-4 lg:px-0">
		<h2 class="text-4xl md:text-5xl third-color mb-4"><?php _e('Что мы предлагаем', 'treba'); ?></h2>
		<div class="w-full lg:w-5/6 text-xl md:text-2xl">
			<?php _e('Мы начали свой путь в интернете в 2010 году, с создания своих проектов. За это время научились делать быстрые, адаптивные, кроссбраузерные сайты, которые легко можно продвинуть в поиске и которые будут конвертировать посетителя в покупателя. Теперь предлагаем воспользоваться нашей экспертизой.', 'treba'); ?>
		</div>
	</div>
	<div class="services_slider">
		<!-- Swiper -->
	  <div class="swiper-container swiper-services">
	    <div class="swiper-wrapper mb-10">
	    	<?php $all_uslugi = get_terms( array( 
					'taxonomy' => 'uslugi', 
					'parent' => 0, 
					'hide_empty' => false,
				));
				foreach ( $all_uslugi as $uslugi ): ?>
		      <div class="swiper-slide services_slider_slide relative flex flex-col justify-center">
		      	<a href="<?php echo get_term_link($uslugi); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
		      	<div class="title text-white text-4xl font-black  uppercase px-6 mb-6">
		      		<?php echo $uslugi->name ?>
		      	</div>
		      	<div class="line mx-6 mb-6"></div>
		      	<div class="text text-white text-xl px-6 mb-6">
		      		<?php echo carbon_get_term_meta($uslugi->term_id, 'crb_uslugi_description' ); ?>
		      	</div>
		      	<div class="more text-blue-400 text-xl font-bold px-6">
		      		<?php _e('Подробнее', 'treba'); ?>
		      	</div>
		      </div>
	      <?php endforeach; ?>
	    </div>
	  </div>
	  <!-- Add Arrows -->
	  <div class="flex justify-center">
	    <div class="slider-arrow slider-arrow-prev services_slider_prev">
	    	<svg class="icon" viewBox="0 0 24 24"><path fill="#6B7A8F" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path></svg>
	    </div>	
	    <div class="slider-arrow slider-arrow-next services_slider_next">
	    	<svg class="icon" viewBox="0 0 24 24"><path fill="#6B7A8F" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path></svg>
	    </div>
	  </div>
	</div>
</div>