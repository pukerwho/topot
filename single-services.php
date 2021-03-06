<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="pt-32 pb-20">
	<div class="container mx-auto px-2 lg:px-0">

		<!-- WELCOME -->
		<div class="flex flex-col lg:flex-row items-center bg-light relative rounded-lg shadow-xl px-4 lg:px-6 py-6 lg:py-8 mb-20">
			<div class="w-full lg:w-2/3">
				<div class="welcome_title text-white relative z-10 mb-6">
					<h1 class="text-center lg:text-left"><?php the_title(); ?></h1>
				</div>
				<div class="welcome_desc text-white text-xl md:text-2xl relative opacity-75 z-10 mb-6">
					<p><?php _e('Бесплатная консультация специалиста по вашему вопросу', 'treba'); ?></p>
				</div>	
			</div>
			<div class="w-full lg:w-1/3">
				<div class="welcome_lead">
					<div class="welcome_lead_title w-full text-center">
						<div class="bg-second-gradient inline-block rounded-2xl shadow-xl text-2xl lg:text-4xl title-font text-black pt-4 pb-8 px-8">
							<?php _e('Обсудить проект', 'treba'); ?>	
						</div>
					</div>
					<div class="flex items-center justify-center -mx-2 -mt-4 relative z-20">
						<div class="welcome_contact_icon px-2">
							<a href="tg://resolve?domain=time2top" class="flex items-center rounded-lg btn telegram px-2 lg:px-4 py-2" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/telegram.svg" alt="Telegram" class="mr-2">
								<span class="text-sm lg:text-xl">Telegram</span>
							</a>
						</div>
						<div class="welcome_contact_icon px-2">
							<a href="viber://chat?number=+380997713997" class="flex items-center rounded-lg btn viber px-2 lg:px-4 py-2" target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/viber.svg" alt="Viber" class="mr-2">
								<span class="text-sm lg:text-xl">Viber</span>
							</a>
						</div>
						<div class="welcome_contact_icon px-2">
							<a href="mailto:hello@treba-solutions.com" class="flex items-center rounded-lg btn email px-2 lg:px-4 py-2">
								<img src="<?php bloginfo('template_url'); ?>/img/email.svg" alt="Email" class="mr-2">
								<span class="text-sm lg:text-xl">Email</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END WELCOME -->
		<!-- WHY US -->
		<div class="mb-20">
			<div>
				<span class="block text-4xl md:text-5xl second-color text-center mb-10"><?php _e('Чем мы отличаемся', 'treba'); ?>?</span>
			</div>
			<div class="flex flex-wrap lg:-mx-2">
				<?php 
					$whyus_data = carbon_get_the_post_meta('crb_services_whyus'); 
					foreach( $whyus_data as $whyus_item ):
				?>
				<div class="w-full lg:w-1/3 flex flex-col items-center px-2 mb-12 lg:mb-0">
					<img src="<?php echo $whyus_item['crb_services_whyus_icon']; ?>" alt="" class="mb-4" width="55">
					<div class="text-xl font-bold text-center mb-4">
						<?php echo $whyus_item['crb_services_whyus_title']; ?>
					</div>
					<div class="text-center">
						<?php echo $whyus_item['crb_services_whyus_description']; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- END WHY US -->

		<?php if(carbon_get_the_post_meta('crb_services_show_example')): ?>
		<!-- PORTFOLIO -->
		<h2 class="text-4xl md:text-5xl first-color mb-10"><?php _e('Примеры работ', 'treba'); ?></h2>
		<div class="portfolio-masonry lg:-mx-2 mb-16">
			<div class="portfolio-masonry-size"></div>
			<?php 
	  		$portfolio_array = [];
	  		$u_portfolio = carbon_get_post_meta(get_the_ID(), 'crb_services_portfolio'); 
	  		foreach($u_portfolio as $portfolio) {
		  		$portfolio_id = $portfolio['id'];
		  		array_push($portfolio_array, $portfolio_id);
		  	}
	  	?>
			<?php 
				$custom_query = new WP_Query( array( 
				'post_type' => 'portfolio', 
				'orderby' => 'date',
				'order' => 'DESC',
				'post__in' => $portfolio_array,
			) );
			if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			  <div class="portfolio-masonry-item overflow-hidden px-2 service_example_item animate-puk mb-4">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="" class="w-full">
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<!-- END PORTFOLIO -->
		<?php endif; ?>

		<?php if(carbon_get_the_post_meta('crb_services_show_case')): ?>
		<!-- OUR CASE -->
		<div class="flex flex-col lg:flex-row items-center mb-20 px-2">
			<div class="w-full lg:w-1/2 lg:pr-8 mb-6 lg:mb-0">
				<div class="flex items-center text-3xl second-color font-bold mb-4">
					<img src="<?php bloginfo('template_url'); ?>/img/sign-of-the-horns.webp" width="35" class="mr-2">
					<span><?php _e('Реальный кейс', 'treba'); ?></span>
				</div>
				<div class="text-md content">
					<?php echo apply_filters( 'the_content', carbon_get_the_post_meta('crb_services_case_text') ); ?>
				</div>
			</div>
			<div class="w-full lg:w-1/2 lg:pl-8">
				<div class="flex">
					<div class="w-full">
						<div class="text-2xl font-bold first-color text-center mb-4">
							<?php echo carbon_get_the_post_meta('crb_services_case_title'); ?>
						</div>
						<div class="w-full">
							<?php 
								$case_photo_medium = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_case_img'), 'medium'); 
								$case_photo_large = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_case_img'), 'large'); 
								$case_photo_full = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_case_img'), 'full'); 
							?>
							<img srcset="<?php echo $case_photo_medium[0] ?> 767w, 
							<?php echo $case_photo_large[0] ?> 1280w,
							<?php echo $case_photo_full[0] ?> 1440w"
							sizes="(max-width: 767px) 767px,
						  (max-width: 1280px) 1280px,
						  1440px"
							src="<?php echo $case_photo_full[0] ?>" alt="<?php echo carbon_get_the_post_meta('crb_services_case_title'); ?>" loading="lazy" class="w-full bg-light p-5 rounded-lg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END OUR CASE -->
		<?php endif; ?>

		<!-- PERSON -->
		<?php if(carbon_get_the_post_meta('crb_services_person_show')): ?>
			<div class="bg-light rounded-lg shadow-xl mb-20">
				<div class="flex flex-col-reverse lg:flex-row lg:items-center">
					<!-- PERSON PHOTO -->
					<div class="w-full lg:w-1/3 lg:pr-6">
						<?php 
							$person_photo_medium = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_person_photo'), 'medium'); 
							$person_photo_large = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_person_photo'), 'large'); 
							$person_photo_full = wp_get_attachment_image_src(carbon_get_the_post_meta('crb_services_person_photo'), 'full'); 
						?>
						<img srcset="<?php echo $person_photo_medium[0] ?> 767w, 
						<?php echo $person_photo_large[0] ?> 1280w,
						<?php echo $person_photo_full[0] ?> 1440w"
						sizes="(max-width: 767px) 767px,
					  (max-width: 1280px) 1280px,
					  1440px"
						src="<?php echo $person_photo_full[0] ?>" alt="" loading="lazy" class="w-full rounded lg:rounded-l-lg">
					</div>
					<!-- PERSON CONTENT -->
					<div class="w-full lg:w-2/3 py-4 px-2 lg:px-6">
						<div class="text-4xl font-bold mb-6">
							<?php _e('Вы в надежных руках', 'treba'); ?>
						</div>
						<div class="text-xl">
							<?php echo carbon_get_the_post_meta('crb_services_person_text'); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<!-- END PERSON -->
		<?php
			$custom_price_template = carbon_get_the_post_meta('crb_services_price_template');
	    switch ($custom_price_template) {
	      case 'seo':
	        get_template_part('blocks/templates/price/templates-price-seo');
	        break;
	      case 'create':
	        get_template_part('blocks/templates/price/templates-price-create');
	        break;
	      case 'maps':
	        get_template_part('blocks/templates/price/templates-price-maps');
	        break;
	      default: 
	        get_template_part('blocks/templates/price/templates-price-seo');
	    }
		?>
		<!-- DESCRIPTION -->
		<h2 class="text-4xl md:text-5xl third-color mb-4"><?php _e('Несколько слов про услугу', 'treba'); ?></h2>
		<div class="content mb-20">
			<?php the_content(); ?>
		</div>
		<!-- END DESCRIPTION -->
		<!-- FAQ -->
		<div>
			<div class="w-full lg:w-3/4 mx-auto">
				<h2 class="text-4xl md:text-5xl second-color text-center mb-4"><?php _e('Ответы на вопросы', 'treba'); ?></h2>
				<?php 
					$faq = carbon_get_the_post_meta('crb_services_faq');
					foreach($faq as $f):
				?>
					<details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-light rounded-lg mb-3">
						<summary itemprop="name" class="cursor-pointer">
							<div>
								<?php echo $f['crb_services_faq_q'] ?>	
							</div>
							<div class="icon">
								<span></span>
								<span></span>
							</div>
						</summary> 
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content">
							<div itemprop="text" class="px-6 py-3">
								<p><?php echo $f['crb_services_faq_a'] ?></p>
							</div>
						</div>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- END FAQ -->
	</div>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>