<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="pt-40">

	<!-- WELCOME -->
	<div class="welcome relative pb-20 md:pb-32">
		<div class="container mx-auto px-4 lg:px-0">
			<h1 class="text-4xl md:text-6xl text-center font-black mb-12 md:mb-20"><?php the_title(); ?></h1>
			<div class="flex flex-col md:flex-row md:justify-between md:-mx-12">
				<div class="w-full md:w-7/12 md:px-12 mb-8 md:mb-0">
					<div class="content text-xl mb-12">
						<?php echo apply_filters( 'the_content', carbon_get_the_post_meta('crb_services_welcome_text') ); ?>	
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
	<!-- END WELCOME -->

	<!-- ОТЗЫВ -->
	<?php if(carbon_get_the_post_meta('crb_services_show_review')): ?>
		<?php get_template_part('blocks/main/review'); ?>
	<?php endif; ?>
	<!-- END ОТЗЫВ -->

	<!-- КОММЕРЧЕСКОЕ -->
	<?php if(carbon_get_the_post_meta('crb_services_show_commerce')): ?>
		<?php
			$custom_price_template = carbon_get_the_post_meta('crb_services_price_template');
	    switch ($custom_price_template) {
	      case 'create':
	        get_template_part('blocks/elements/commerce-create');
	        break;
	      default: 
	        get_template_part('blocks/elements/commerce');
	    }
		?>
	<?php endif; ?>
	<!-- END КОММЕРЧЕСКОЕ -->

	<div class="container mx-auto px-4 lg:px-0">
		<!-- WHY US -->
		<div class="mb-20 py-20 border-separate">
			<h2 class="block text-4xl md:text-5xl font-black text-center mb-6"><?php _e('Чем мы отличаемся', 'treba'); ?>?
			</h2>
			<div class="text-2xl text-center mb-20">
				<?php _e('Почему вам стоит обратиться именно к нам', 'treba'); ?>
			</div>
			<div class="w-full lg:w-10/12 flex flex-wrap mx-auto">
				<?php 
					$whyus_data = carbon_get_the_post_meta('crb_services_whyus'); 
					foreach( $whyus_data as $whyus_item ):
				?>
				<div class="whyus_item w-full lg:w-1/3 relative flex flex-col items-center lg:px-4 mb-12 lg:mb-0">

					<!-- Пунктир -->
					<div class="whyus_dashed"></div>
					<!-- END Пунктир -->

					<!-- Иконка -->
					<div class="flex justify-center items-center bg-third rounded-full p-3 mb-4" style="width: 64px; height: 64px">
						<img src="<?php echo $whyus_item['crb_services_whyus_icon']; ?>">
					</div>
					<!-- END Иконка -->

					<!-- Title -->
					<div class="text-2xl text-white text-center mb-4">
						<?php echo $whyus_item['crb_services_whyus_title']; ?>
					</div>
					<!-- END Title -->

					<!-- Description -->
					<div class="text-center">
						<?php echo $whyus_item['crb_services_whyus_description']; ?>
					</div>
					<!-- END Description -->

				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- END WHY US -->

		<?php if(carbon_get_the_post_meta('crb_services_show_example')): ?>
		<!-- PORTFOLIO -->

		<!-- Title -->
		<div class="text-center mb-20">
			<div class="hand-font third-color-dark text-2xl mb-4"><?php _e('Портфолио', 'treba'); ?></div>
			<h2 class="text-4xl md:text-5xl font-black mb-6"><?php _e('Примеры работ', 'treba'); ?></h2>
			<div class="text-2xl">
				<?php _e('Новые проекты, которые выполнила наша команда', 'treba'); ?>
			</div>
		</div>
		<!-- END Title -->
		
		<div class="portfolio_archive border-separate pb-20 mb-20">
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
				'posts_per_page' => 3,
				'post__in' => $portfolio_array,
			) );
			if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			  <div class="portfolio_archive_item flex flex-col md:flex-row md:items-center bg-light rounded-xl mb-10 md:mb-6">
					<div class="w-full md:w-1/2 px-4 md:px-12 py-6 md:py-8 md:mr-6 mb-6 md:mb-0">
						<div class="portfolio_archive_item_service mb-6">
							<a href="#" class="text-2xl hand-font third-color-dark"><?php _e('Создание сайтов', 'treba'); ?></a>
							<a href="#" class="hidden text-2xl hand-font red-color"><?php _e('SEO-продвижение', 'treba'); ?></a>
						</div>
						<div class="text-3xl text-white font-black mb-6">
							<?php echo carbon_get_the_post_meta('crb_portfolio_title'); ?>
						</div>
						<div class="text-xl opacity-75 md:mb-12">
							<?php echo carbon_get_the_post_meta('crb_portfolio_description'); ?>
						</div>
						<div class="hidden md:block">
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center text-center light-btn">	
								<span class="mr-2 text-white"><?php _e('Подробнее', 'treba'); ?></span>
								<svg class="push-this tran-03s" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.7446 14.2159C12.1822 14.6664 11.3527 14.6342 10.8285 14.1194L10.7302 14.0126C10.2715 13.4602 10.3042 12.6455 10.8285 12.1306L14.1118 8.90625H2.29545C1.50468 8.90625 0.863636 8.27665 0.863636 7.5C0.863636 6.72335 1.50468 6.09375 2.29545 6.09375H14.1118L10.8285 2.86937L10.7302 2.76257C10.2715 2.21023 10.3042 1.39548 10.8285 0.88063C11.3876 0.331455 12.2942 0.331455 12.8534 0.88063L18.5806 6.50563L18.6789 6.61243C19.1376 7.16477 19.1048 7.97952 18.5806 8.49437L12.8534 14.1194L12.7446 14.2159Z" fill="#ffffff"></path>
								</svg>
							</a>
						</div>
					</div>
					<div class="portfolio_archive_item_right w-full md:w-1/2 mb-6 md:mb-0">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?php the_title(); ?>" class="portfolio_archive_item_thumb w-full mb-6 md:mb-0">
						<div class="block md:hidden px-4">
							<a href="<?php the_permalink(); ?>" class="flex md:inline-flex justify-center items-center text-center light-btn">	
								<span class="text-white mr-2"><?php _e('Подробнее', 'treba'); ?></span>
								<svg class="push-this tran-03s" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.7446 14.2159C12.1822 14.6664 11.3527 14.6342 10.8285 14.1194L10.7302 14.0126C10.2715 13.4602 10.3042 12.6455 10.8285 12.1306L14.1118 8.90625H2.29545C1.50468 8.90625 0.863636 8.27665 0.863636 7.5C0.863636 6.72335 1.50468 6.09375 2.29545 6.09375H14.1118L10.8285 2.86937L10.7302 2.76257C10.2715 2.21023 10.3042 1.39548 10.8285 0.88063C11.3876 0.331455 12.2942 0.331455 12.8534 0.88063L18.5806 6.50563L18.6789 6.61243C19.1376 7.16477 19.1048 7.97952 18.5806 8.49437L12.8534 14.1194L12.7446 14.2159Z" fill="#ffffff"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<!-- END PORTFOLIO -->
		<?php endif; ?>


		<?php if(carbon_get_the_post_meta('crb_services_show_case')): ?>
		<!-- OUR CASE -->
		<div class="flex flex-col lg:flex-row items-center mb-20 pb-20 border-separate px-2">

			<!-- Left -->
			<div class="w-full lg:w-1/2 lg:pr-8 mb-6 lg:mb-0">
				
				<!-- Title -->
				<div class="hand-font third-color-dark text-2xl mb-4"><?php _e('Cвежий пример', 'treba'); ?></div>
				<div class="relative flex">
					<h2 class="inline text-4xl md:text-5xl font-black mb-6">🤘 <?php _e('Реальный кейс', 'treba'); ?></h2>
				</div>
				<!-- END Title -->

				<div class="text-md content mb-0 lg:mb-8">
					<?php echo apply_filters( 'the_content', carbon_get_the_post_meta('crb_services_case_text') ); ?>
				</div>
				<!-- Кнопка на десктопе -->
				<div class="hidden lg:block text-xl">
					<a href="<?php echo get_post_type_archive_link('cases'); ?>" class="bg-third text-white rounded px-6 py-3">
						<?php _e('Больше кейсов', 'treba'); ?>
					</a>
				</div>
				<!-- END Кнопка на десктопе -->
			</div>
			<!-- END Left -->

			<!-- Right -->
			<div class="w-full lg:w-1/2 lg:pl-8">
				<div class="flex">
					<div class="w-full">
						<!-- Title -->
						<div class="text-2xl font-bold red-color text-center mb-4">
							<?php echo carbon_get_the_post_meta('crb_services_case_title'); ?>
						</div>
						<!-- END Title -->

						<!-- IMG -->
						<div class="w-full mb-12 lg:mb-0">
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
						<!-- END IMG -->

						<!-- Кнопка на мобиле -->
						<div class="block lg:hidden text-xl">
							<a href="<?php echo get_post_type_archive_link('cases'); ?>" class="bg-third text-white rounded px-6 py-3">
								<?php _e('Больше кейсов', 'treba'); ?>
							</a>
						</div>
						<!-- END Кнопка на мобиле -->
					</div>
				</div>
			</div>
			<!-- END Right -->
		</div>
		<!-- END OUR CASE -->
		<?php endif; ?>

		<!-- PERSON -->
		<?php if(carbon_get_the_post_meta('crb_services_person_show')): ?>
			<div class="border-separate mb-20 pb-20">
				<div class="bg-light">
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
							src="<?php echo $person_photo_full[0] ?>" alt="" loading="lazy" class="w-full">
						</div>
						<!-- PERSON CONTENT -->
						<div class="w-full lg:w-2/3 py-4 px-2 lg:px-6">

							<!-- Заголовок -->
							<div class="text-4xl font-bold text-white mb-6">
								<?php _e('Вы в надежных руках', 'treba'); ?>
							</div>
							<!-- END Заголовок -->

							<!-- Описание -->
							<div class="content text-xl mb-8">
								<?php echo apply_filters( 'the_content', carbon_get_the_post_meta('crb_services_person_text') ); ?>	
							</div>
							<!-- END Описание -->

							<!-- Кнопка -->
							
							<div class="flex">
								<div class="order_btn flex items-center first-btn text-center cursor-pointer order-js" data-order="Вы в надежных руках">
									<span class="mr-2"><?php _e('Оставить заявку', 'treba'); ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
									</svg>
								</div>	
							</div>
							
							<!-- END Кнопка -->
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<!-- END PERSON -->

		<!-- ТАРИФЫ -->
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
		<!-- END ТАРИФЫ -->

		<!-- DESCRIPTION -->
		<h2 class="text-4xl md:text-5xl font-black text-center mb-6"><?php _e('Несколько слов про услугу', 'treba'); ?></h2>
		<div class="content border-separate pb-20 mb-20">
			<?php the_content(); ?>
		</div>
		<!-- END DESCRIPTION -->

		<!-- FAQ -->
		<div class="border-separate mb-20 pb-20">
			<div class="w-full lg:w-3/4 mx-auto">
				<h2 class="text-4xl md:text-5xl font-black text-center mb-6"><?php _e('Ответы на вопросы', 'treba'); ?></h2>
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

		<!-- АУДИТ -->
		<?php if(carbon_get_the_post_meta('crb_services_show_audit')): ?>
			<div class="mt-20 mb-12">
				<?php get_template_part('blocks/elements/audit'); ?>
			</div>
		<?php endif; ?>
		<!-- END АУДИТ -->

	</div>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>