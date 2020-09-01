<?php
/*
Template Name: СОЗДАНИЕ САЙТА
Template Post Type: services
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="service">
	<div class="service_welcome flex items-center">
		<div class="container mx-auto px-4 md:px-0">
			<div class="row">
				<div class="w-full flex flex-col justify-center items-center">
					<h1 class="text-4xl md:text-6xl text-center mb-6">
						<div class="service_title overflow-hidden">
							<span class="block service_title_animate">Адаптивные</span>	
							<span class="block service_title_animate">Кроссбраузерные</span>	
							<span class="block service_title_animate">Быстрые</span>	
						</div>
						<span>Сайты</span>
					</h1>
					<div class="w-3/5 service_description text-xl md:text-3xl text-center opacity-75 mx-auto mb-10">
						Мы тонко понимаем вашу проблему и поэтому создаем сайты, которые помогают вашему бизнесу развиваться дальше <img src="<?php bloginfo('template_url'); ?>/img/rocket.webp" alt="" class="inline" width="45px">
					</div>
					<div class="service_call text-2xl font-bold">
						Бесплатная консультация
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mx-auto mb-20">
		<div class="row">
			<div class="w-3/4 mx-auto">
				<div class="service_stat flex">
					<div class="mr-16">
						<div class="second-color text-5xl font-bold">
							50+
						</div>
						<div class="text-3xl">
							Выполненных проектов
						</div>
					</div>
					<div>
						<div class="second-color text-5xl font-bold">
							7
						</div>
						<div class="text-3xl">
							Специалистов в команде
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mx-auto mb-20">
		<div class="row">
			<h2 class="text-4xl md:text-5xl third-color mb-4">6 лет в этом бизнесе</h2>
		</div>

		<!-- Первый заказ -->
		<div class="w-full flex items-center mb-20">
			<div class="w-2/3 pr-10">
				<img src="<?php bloginfo('template_url'); ?>/img/secretroom.jpg" alt="Наш первый сайт" class="w-full">
			</div>
			<div class="w-1/3 flex flex-col items-center pl-10">
				<div class="hand-font text-4xl text-center mb-6">Наш первый заказ. Сайт сделан в 2014 году</div>
				<img src="<?php bloginfo('template_url'); ?>/img/ascend.svg" alt="" width="80px" class="arrow_first_site">
			</div>
		</div>

		<!-- Свежий заказ -->
		<div class="w-full flex items-center mb-20">
			<div class="w-2/3 pr-10">
				<img src="<?php bloginfo('template_url'); ?>/img/secretroom.jpg" alt="Наш первый сайт" class="w-full">
			</div>
			<div class="w-1/3 flex flex-col items-center pl-10">
				<div class="hand-font text-4xl text-center mb-6">А это свежий заказ. Сайт сделан в 2020 году</div>
				<img src="<?php bloginfo('template_url'); ?>/img/curve.svg" alt="" width="100px" class="arrow_last_site">
			</div>
		</div>
		<div class="more_btn flex justify-center">
			<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">
				<div class="first-btn text-black font-black">
					<?php _e('Наше портфолио', 'topot'); ?>
				</div>
			</a>
		</div>
	</div>
	<div class="service_why py-20">
		<div class="container mx-auto">
			<div class="row">
				<div class="w-full">
					<h2 class="text-4xl md:text-5xl">Какая польза от сайта?</h2>
					<div class="text-2xl">Зачем нужен сайт? Как он помогает решить задачи бизнеса?</div>
				</div>
			</div>
		</div>
	</div>
	<div class="service_type py-20">
		<div class="container mx-auto">
			<div class="row">
				<div class="w-full mb-10">
					<h2 class="text-4xl md:text-5xl">Типы сайтов</h2>
				</div>
				<div class="flex flex-wrap -mx-4">
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">4-7 дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Сайт-визитка
							</div>
							<div class="text-xl mb-6">
								Вы хотите, чтобы о вас узнали в интернете. Познакомились с вашей компанией и детально прочитали, какие услуги вы предлагаете.
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-1/4 bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">7-10 дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Лендинг
							</div>
							<div class="text-xl mb-6">
								Вы запустили рекламу и хотите, чтобы посетитель, зайдя на ваш сайт, сразу захотел что-то у вас купить или заказать.
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-1/3 bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">14-20 дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Корпоративный сайт
							</div>
							<div class="text-xl mb-6">
								Вы средний или крупный бизнес и у вас большой объем информации, которой вы хотите поделиться с покупателями и партнерами. 
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-1/2 bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">14-20 дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Каталог
							</div>
							<div class="text-xl mb-6">
								У вас большой список товара, который вы хотите показать на сайте. Помимо этого есть и другая информация для посетителей.
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-1/2 bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">21-30 дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Интернет-магазин
							</div>
							<div class="text-xl mb-6">
								Вы хотите продавать товар через интернет. Вы загрузили ваш товар, пользователь его посмотрел, выбрал и оплатил.  
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-3/4 bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="w-1/3 mb-8">
						<div class="bg-white rounded shadow-lg p-8 mx-4">
							<div class="service_type_time flex items-center mb-6">
								<img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="" width="35px" class="mr-4">
								<span class="text-xl">30+ дней на работу</span>
							</div>
							<div class="service_type_title text-4xl font-black mb-6">
								Что-то особенное
							</div>
							<div class="text-xl mb-6">
								Есть отличная идея, но нужны специалисты, которые ее реализуют? Вы попали по адресу, мы поможем создать нечто особенное.
							</div>
							<div class="relative w-4/5 border-solid border-teal-400 border-4 rounded-lg py-1 px-4 mb-10">
								<div class="service_type_cost w-full bg-teal-400"></div>
								<div class="relative text-xl font-black z-10">Стоимость</div>
							</div>
							<div>
								<a href="#">
									<div class="service_type_more text-xl font-black inline">
										<?php _e('Подробнее', 'topot'); ?>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="service_step pb-20">
		<div class="container mx-auto">
			<div class="row">
				<h2 class="text-4xl md:text-5xl text-center mb-6">Этапы работы</h2>
				<div class="w-4/5 mx-auto">
					<div class="bg-white text-xl p-10 mb-10">
						<li>
							Вы оставляете заявку на сайте.
						</li>
						<div class="service_step_line_down bg-gray-400"></div>
						<li>
							Мы с вами связываемся, чтобы узнать все детали.
						</li>
						<div class="service_step_line_down bg-gray-400"></div>
						<div class="flex items-center border-b-2 border-solid border-gray-400 pb-4 mb-4">
							<span class="service_step_number mr-4">0</span>
							<span class="text-2xl font-bold">Подготовительный этап</span>
						</div>
						<div>
							На первом этапе мы знакомимся с вашим заданием, пытаемся сформировать задачу в текстовом документе. В итоге, мы совместно составляем Техническое задание на разработку сайта.
						</div>
					</div>
					<div class="bg-white text-xl p-10 mb-10">
						<div class="flex items-center border-b-2 border-solid border-gray-400 pb-4 mb-4">
							<span class="service_step_number mr-4">1</span>
							<span class="text-2xl font-bold">Начало работы</span>
						</div>
						<div>
							После того, как сформировано Техническое задание, мы сможем оценить стоимость всей работы. Если вам подходит цена, то дальше мы можем заключить договор. Это стандартный договор о предоставлении услуг. После этого вы проводите предоплату 50% и мы приступаем к работе.  
						</div>
					</div>
					<div class="bg-white text-xl p-10 mb-10">
						<div class="flex items-center border-b-2 border-solid border-gray-400 pb-4 mb-4">
							<span class="service_step_number mr-4">2</span>
							<span class="text-2xl font-bold">Ваш сайт готов</span>
						</div>
						<div>
							В оговоренный ранее срок мы показываем вам готовый сайт. Он уже протестирован на различных девайсах, а также в разных браузерах. Обычно на этом этапе вы замечаете, что где-то лучше поменять заголовок, а где-то добавить текст. Мы вносим эти правки. После этого вы переводите оставшиеся 50% оплаты.
						</div>
					</div>
					<div class="bg-white text-xl p-10 mb-10">
						<div class="flex items-center border-b-2 border-solid border-gray-400 pb-4 mb-4">
							<span class="service_step_number mr-4">3</span>
							<span class="text-2xl font-bold">Заключительный этап</span>
						</div>
						<div>
							На заключительном этапе мы переносим сайт на хостинг, проверяем его работоспособность в боевых условиях. Мы рассказываем вам, как пользоваться админкой и записываем подробную видеоинструкцию. Сдав сайт мы не теряемся, а регулярно остаемся на связи, чтобы в любой момент ответить на ваши вопросы.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="service_example py-20">
		<div class="container mx-auto">
			<div class="row">
				<h2 class="text-4xl md:text-5xl second-color mb-10">Вот примеры сайтов, которые мы уже сделали</h2>
				<div>
					<?php $custom_query = new WP_Query( array( 
						'post_type' => 'portfolio', 
						'posts_per_page' => 5,
						'orderby' => 'date',
						'order' => 'DESC',
					));
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<div class="w-1/2">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo carbon_get_the_post_meta('crb_portfolio_thumb'); ?>" alt="" class="w-full">
							</a>	
						</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('blocks/main/hey'); ?>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>