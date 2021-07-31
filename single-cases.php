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