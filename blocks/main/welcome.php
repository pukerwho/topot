<div class="welcome flex items-center mb-20 md:mb-0 pt-32 lg:pt-0">
	<div class="container mx-auto px-4 lg:px-0">
		<div class="flex flex-col lg:flex-row items-center bg-light relative rounded-lg shadow-xl px-6 py-8">
			<div class="w-full lg:w-2/3 mb-6 lg:mb-0">
				<div class="welcome_title text-white relative z-10 mb-6">
					<h1><?php _e('Создаем сайты', 'treba'); ?>
					<br><?php _e('и привлекаем клиентов', 'treba'); ?></h1>
				</div>
				<div class="welcome_desc text-white text-xl md:text-2xl relative opacity-75 z-10 mb-6">
					<p><?php _e('Бесплатная консультация специалиста по вашему вопросу', 'treba'); ?></p>
				</div>	
				<!-- ФОРМА -->
				<form name="form_welcome" class="welcome_form lg:w-7/12 flex justify-between flex-col lg:inline-flex lg:flex-row lg:justify-start lg:bg-white lg:rounded relative z-10 lg:p-2">
          <input type="text" name="Контакт" placeholder="<?php _e('Оставьте Ваш телефон или email', 'treba'); ?>" class="w-full lg:w-8/12" required>
          <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
	        <button type="submit" class="welcome_btn first-btn flex">
	          <?php _e('Отправить', 'treba'); ?>
	        </button>
	      </form>
				<!-- END ФОРМА -->
			</div>
			<div class="w-full lg:w-1/3 text-center lg:text-left">
				<div class="welcome_lead">
					<div class="welcome_lead_title animate-puk bg-second-gradient inline-block rounded-2xl shadow-xl text-2xl lg:text-4xl title-font text-black pt-4 pb-8 px-8">
						<?php _e('Чат с экспертом', 'treba'); ?>
					</div>
					<div class="welcome_lead_text animate-puk flex items-center relative justify-center bg-white rounded-2xl shadow-xl text-xl lg:text-2xl text-black py-4 px-8 -mt-8 lg:ml-8">
						<span class="font-bold pr-4"><?php _e('Задать вопрос', 'treba'); ?></span>
						<img src="<?php bloginfo('template_url'); ?>/img/arrow-right.svg" width="20">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>