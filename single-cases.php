<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="pt-40 pb-20">
		<div class="container mx-auto px-4 lg:px-0">
			<div class="w-full lg:w-9/12 mx-auto">
				<h1 class="text-3xl lg:text-5xl text-center font-black lg:leading-normal mb-8"><?php the_title(); ?></h1>
				<!-- Вступительный текст -->
				<div class="text-2xl text-center mb-8">
					<?php echo carbon_get_the_post_meta('crb_cases_description'); ?>
				</div>
				<!-- END Вступительный текст -->

				<!-- Заглавная картинка -->
				<div class="flex justify-center relative mb-20">
					<?php $cases_thumb = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'crb_case_thumb'), 'large'); ?>
					<img src="<?php echo $cases_thumb[0]; ?>" alt="<?php the_title(); ?>" class="w-full h-full relative z-10">	

					<!-- Стильные круги -->
					<div class="absolute left-0 bottom-0 -ml-64">
						<?php get_template_part('blocks/elements/cool-wave'); ?>
					</div>
					<!-- END Стильные круги -->

				</div>
				<!-- END Заглавная картинка -->

				<!-- Начальные условия -->
				<div class="border-separate mb-20 pb-16">
					<div class="hand-font text-2xl text-center third-color-dark mb-4">
						<?php _e('Перед началом работы', 'treba'); ?>
					</div>
					<h2 class="text-3xl lg:text-5xl text-center font-bold mb-8"><?php _e('Начальные условия', 'treba'); ?></h2>
					<div class="content text-2xl">
						<?php echo carbon_get_the_post_meta('crb_case_start'); ?>
					</div>
				</div>
				<!-- END Начальные условия -->

				<!-- Что было сделано -->
				<div class="border-separate pb-20 mb-20">
					<div class="hand-font text-2xl text-center third-color-dark mb-4">
						<?php _e('В чем заключалась наша работа', 'treba'); ?>
					</div>
					<h2 class="text-3xl lg:text-5xl text-center font-bold mb-8"><?php _e('Что было сделано', 'treba'); ?></h2>
					<div class="text-2xl mb-12">
						<?php echo carbon_get_the_post_meta('crb_case_what_do_description'); ?>
					</div>

					<!-- Шаги -->
					<div>
						<?php 
							$case_steps = carbon_get_the_post_meta('crb_case_steps'); 
							foreach ($case_steps as $case_step):
						?>
							<div class="case_step relative py-4">
								<div class="flex">
									<!-- Left -->
									<div class="mt-5 pr-16">
										<div class="transform translate-y-full text-sm font-bold rounded-full px-3 py-1 bg-light-green green-color">
											<?php echo $case_step['crb_case_step_date']; ?>
										</div>
									</div>
									<!-- END Left -->

									<!-- Right -->
									<div class="w-9/12">
										<div class="hand-font text-2xl third-color-dark mb-2"><?php echo $case_step['crb_case_step_subtitle']; ?></div>
										<div class="flex mb-3 items-center">

											<div class="case_step_line bg-light h-full self-start absolute left-0 transform -translate-x-1/2 translate-y-3 ml-32 p-px" aria-hidden="true"></div>
											
											<div class="h-2 w-2 absolute left-0 bg-third-dark rounded-full transform -translate-x-1/2 ml-32" aria-hidden="true"></div>
											
											<div class="text-3xl text-white"><?php echo $case_step['crb_case_step_title']; ?></div>
										</div>
										<div><?php echo $case_step['crb_case_step_description']; ?></div>	
									</div>
									<!-- END Right -->

								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<!-- END Шаги -->

				</div>
				<!-- END Что было сделано -->

				<!-- Результаты -->
				<div>
					<div class="hand-font text-2xl text-center third-color-dark mb-4">
						<?php _e('Какие результаты мы получили', 'treba'); ?>
					</div>
					<h2 class="text-3xl lg:text-5xl text-center font-bold mb-8"><?php _e('Итоги и выводы', 'treba'); ?></h2>
					<div class="text-2xl mb-12">
						<?php echo carbon_get_the_post_meta('crb_case_result_content'); ?>
					</div>
				</div>
				<!-- END Результаты -->
			</div>

			<div class="w-full mx-auto">
				<!-- Статистика -->
				<div class="flex flex-col lg:flex-row bg-white rounded-lg">
					<?php 
						$stat_items = carbon_get_the_post_meta('crb_case_results_stats'); 
						foreach ($stat_items as $stat_item):
					?>
						<!-- Item -->
						<div class="case_results_item w-full lg:w-1/3 border-b lg:border-r border-grey-700 p-6">
							<!-- Title -->
							<div class="text-gray-700 font-semibold mb-2">
								<?php echo $stat_item['crb_case_results_stats_title']; ?>	
							</div>
							<!-- END Title -->

							<div class="flex justify-between items-center">
								<!-- Numbers -->
								<div class="text-gray-600">
									<span class="text-2xl font-semibold third-color-dark pr-1"><?php echo $stat_item['crb_case_results_stats_new']; ?></span>
									<?php _e('было', 'treba'); ?>
									<?php echo $stat_item['crb_case_results_stats_old']; ?>
								</div>
								<!-- END Numbers -->

								<?php $case_results_stats_move = $stat_item['crb_case_results_stats_move']; ?>

								<?php if ($case_results_stats_move === 'up'): ?>
								<!-- UP -->
								<div class="flex justify-center items-center bg-green-200 text-green-700 px-2 py-1 rounded-lg">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									  <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
									</svg>
									<span><?php echo $stat_item['crb_case_results_stats_percent']; ?></span>
								</div>
								<!-- END UP -->
								<?php endif; ?>

								<?php if ($case_results_stats_move === 'down'): ?>
								<!-- DOWN -->
								<div class="flex justify-center items-center bg-red-200 text-red-700 px-2 py-1 rounded-lg">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									  <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
									</svg>
									<span><?php echo $stat_item['crb_case_results_stats_percent']; ?></span>
								</div>
								<!-- END DOWN -->
								<?php endif; ?>

							</div>
						</div>
						<!-- END Item -->
					<?php endforeach; ?>

				</div>
				<!-- END Статистика -->
			</div>
			
			<div class="w-full lg:w-4/5 page bg-light shadow-md rounded-lg my-0 mx-auto lg:my-8 px-4 lg:px-8 py-8">
				<article class="content text-lg">
					<?php the_content(); ?>
				</article>
			</div>

			<!-- Хлебные крошки -->
			<div class="breadcrumbs mb-4" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		    <ul class="flex justify-center uppercase">
					<li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
						<a itemprop="item" href="<?php echo home_url(); ?>" class="red-color hover:text-white">
							<span itemprop="name"><?php _e( 'Главная', 'treba' ); ?></span>
						</a>                        
						<meta itemprop="position" content="1">
					</li>
					<span class="mx-1">—</span>
		      <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
		        <a itemprop="item" href="<?php echo get_post_type_archive_link( 'cases' ); ?>" class="red-color hover:text-white">
		          <span itemprop="name"><?php _e( 'Кейсы', 'treba' ); ?></span>
		        </a>                        
		        <meta itemprop="position" content="2">
		      </li>
		      <span class="mx-1">—</span>
		      <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
		      	<span itemprop="name"><?php the_title(); ?></span>
		       	<meta itemprop="position" content="3">
		      </li>
		    </ul>
		  </div>
			<!-- END Хлебные крошки -->

		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>