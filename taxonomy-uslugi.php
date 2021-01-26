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

		<!-- WHY US -->
		<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_show_whyus')): ?>
		<div class="mb-20">
			<div>
				<span class="block text-4xl second-color text-center mb-10"><?php _e('Чем мы отличаемся', 'topot'); ?>?</span>
			</div>
			<div class="flex flex-wrap lg:-mx-2">
				<?php 
					$whyus_data = carbon_get_term_meta(get_queried_object_id(),'crb_uslugi_whyus'); 
					foreach( $whyus_data as $whyus_item ):
				?>
				<div class="w-full lg:w-1/3 flex flex-col items-center px-2 mb-12 lg:mb-0">
					<img src="<?php echo $whyus_item['crb_uslugi_whyus_icon']; ?>" alt="" class="mb-4" width="55">
					<div class="text-xl font-bold text-center mb-4">
						<?php echo $whyus_item['crb_uslugi_whyus_title']; ?>
					</div>
					<div class="text-center">
						<?php echo $whyus_item['crb_uslugi_whyus_description']; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
		<!-- END WHY US -->

		<!-- DESCRIPTION -->
		<h2 class="text-4xl md:text-5xl third-color mb-4"><?php _e('Несколько слов про услугу', 'topot'); ?></h2>
		<div class="content mb-20">
			<?php echo category_description(get_queried_object()->term_id); ?>
		</div>
		<!-- END DESCRIPTION -->

		<!-- PRICE -->
		<?php if (carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_show_price')): ?>
		<?php
			$custom_price_template = carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_price_template');
	    switch ($custom_price_template) {
	      case 'seo':
	        get_template_part('blocks/templates/price/templates-price-seo');
	        break;
	      default: 
	        get_template_part('blocks/templates/price/templates-price-seo');
	    }
		?>
		<?php endif; ?>
		<!-- END PRICE -->

		<!-- OTHER -->
		<div>
			<h2 class="text-4xl md:text-5xl second-color mb-4"><?php _e('Наши услуги', 'topot'); ?></h2>
			<div class="flex flex-wrap lg:-mx-2">
				<?php 
					$current_term = get_queried_object_id();
					$custom_query = new WP_Query( array( 
					'post_type' => 'services', 
					'orderby' => 'date',
					'order' => 'DESC',
					'tax_query' => array(
				    array(
			        'taxonomy' => 'uslugi',
					    'terms' => $current_term,
			        'field' => 'term_id',
			        'include_children' => true,
			        'operator' => 'IN'
				    )
					),
				) );
				if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				  <a href="<?php the_permalink(); ?>" class="w-full lg:w-1/3 block lg:px-2 mb-4">
						<div class="bg-light rounded-lg flex flex-col justify-center items-center p-12">
			      	<div class="title text-white text-2xl text-center">
			      		<?php the_title(); ?>
			      	</div>
			      </div>
					</a>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
		<!-- END OTHER -->
	</div>
</div>

<?php get_footer(); ?>