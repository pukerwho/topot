<?php get_header(); ?>

<!-- Шаблон для SEO -->
<?php
	$uslugi_template = carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_template');
  if ($uslugi_template === 'seo'): 
?>
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
					<h2 class="block text-4xl md:text-5xl second-color text-center mb-10"><?php _e('Чем мы отличаемся', 'topot'); ?>?</h2>
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

			<!-- FAQ -->
			
			<div class="w-full lg:w-3/4 mx-auto mb-20">
				<h2 class="text-4xl md:text-5xl third-color text-center mb-4"><?php _e('Ответы на вопросы', 'topot'); ?></h2>
				<?php 
					$faq = carbon_get_term_meta(get_queried_object_id(),'crb_uslugi_faq');
					foreach($faq as $f):
				?>
					<details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-light rounded-lg mb-3">
						<summary itemprop="name" class="cursor-pointer">
							<div>
								<?php echo $f['crb_uslugi_faq_q'] ?>	
							</div>
							<div class="icon">
								<span></span>
								<span></span>
							</div>
						</summary> 
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content">
							<div itemprop="text" class="px-6 py-3">
								<p><?php echo $f['crb_uslugi_faq_a'] ?></p>
							</div>
						</div>
					</details>
				<?php endforeach; ?>
			</div>
			<!-- END FAQ -->

			<!-- Продвижение в городах -->
			<div class="mb-10">
				<h2 class="text-2xl md:text-3xl second-color text-center mb-4"><?php _e('Занимаемся SEO-продвижением по всей Украине', 'topot'); ?></h2>
				<div class="flex flex-wrap lg:-mx-2 bg-light rounded-lg px-8 pt-8 pb-4">
					<?php 
						$current_term = get_queried_object_id();
						$custom_query = new WP_Query( array( 
						'post_type' => 'services', 
						'orderby' => 'date',
						'order' => 'DESC',
						'post__in' => $services_array,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'uslugi',
						    'terms' => $current_term,
				        'field' => 'term_id',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
						'meta_query' => array(
							array(
								'key'     => 'crb_services_city_show',
					      'value'   => 'yes',
					      'compare' => '=', 
							)
						),
					) );
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<div class="w-full lg:w-1/3 px-2 mb-4">
							<div class="title text-white">
								<a href="<?php the_permalink(); ?>">
			      			<?php the_title(); ?>
			      		</a>
			      	</div>	
						</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
			<!-- END Продвижение в городах -->

			<!-- Продвижение на CMS -->
			<div class="mb-10">
				<h2 class="text-2xl md:text-3xl first-color text-center mb-4"><?php _e('Раскрутка сайтов на различных CMS', 'topot'); ?></h2>
				<div class="flex flex-wrap lg:-mx-2 bg-light rounded-lg px-8 pt-8 pb-4">
					<?php 
						$current_term = get_queried_object_id();
						$custom_query = new WP_Query( array( 
						'post_type' => 'services', 
						'orderby' => 'date',
						'order' => 'DESC',
						'post__in' => $services_array,
						'tax_query' => array(
					    array(
				        'taxonomy' => 'uslugi',
						    'terms' => $current_term,
				        'field' => 'term_id',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
						'meta_query' => array(
							array(
								'key'     => 'crb_services_crm_show',
					      'value'   => 'yes',
					      'compare' => '=', 
							)
						),
					) );
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<div class="w-full lg:w-1/3 px-2 mb-4">
							<div class="title text-white">
								<a href="<?php the_permalink(); ?>">
			      			<?php the_title(); ?>
			      		</a>
			      	</div>	
						</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
			<!-- END Продвижение в городах -->	

			<!-- OTHER -->
			<div>
				<h2 class="text-2xl md:text-4xl second-color mb-4"><?php _e('Другие услуги', 'topot'); ?></h2>
				<div class="flex flex-wrap lg:-mx-2">
					<?php 
			  		$services_array = [];
			  		$u_services = carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_services'); 
			  		foreach($u_services as $u_service) {
				  		$u_service_id = $u_service['id'];

				  		array_push($services_array, $u_service_id);
				  	}
			  	?>
					<?php 
						$current_term = get_queried_object_id();
						$custom_query = new WP_Query( array( 
						'post_type' => 'services', 
						'orderby' => 'date',
						'order' => 'DESC',
						'post__in' => $services_array,
					) );
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					  <a href="<?php the_permalink(); ?>" class="w-full lg:w-1/3 block lg:px-2 mb-4">
							<div class="h-full bg-light rounded-lg flex flex-col justify-center items-center p-12">
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
<?php endif; ?>
<!-- END Шаблон для SEO -->

<!-- Шаблон для CREATE -->
<?php
	$uslugi_template = carbon_get_term_meta(get_queried_object_id(), 'crb_uslugi_template');
  if ($uslugi_template === 'create'): 
?>
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
							<div class="lg:w-3/5 service_description text-xl md:text-3xl text-center opacity-75 mx-auto mb-10">
								<?php _e('Мы создаем сайты, которые помогают вашему бизнесу развиваться дальше', 'treba'); ?> <img src="<?php bloginfo('template_url'); ?>/img/rocket.webp" alt="" class="relative create-rocket inline" width="45px">
							</div>
							<div class="service_call text-2xl text-center font-bold cursor-pointer mb-12 lg:mb-0">
								<?php _e('Бесплатная консультация', 'treba'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part('blocks/uslugi/services-stat'); ?>
			<?php get_template_part('blocks/uslugi/services-compare'); ?>
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
			<?php get_template_part('blocks/uslugi/services-steps'); ?>
			<?php get_template_part('blocks/uslugi/services-example'); ?>
		</div>
	</div>
<?php endif; ?>
<!-- END Шаблон для CREATE -->

<?php get_footer(); ?>