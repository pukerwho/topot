<!-- WELCOME -->
<div class="welcome relative pt-32 pb-20 md:pb-32">
	<div class="container mx-auto px-2 lg:px-0">
		<h1 class="text-6xl font-bold text-center mb-20"><?php _e('Создаем и продвигаем сайты', 'treba'); ?></h1>
		<div class="flex flex-col md:flex-row md:justify-between md:-mx-12">
			<div class="w-full md:w-7/12 md:px-12 mb-8 md:mb-0">
				<div class="content text-xl mb-12">
					<?php the_content(); ?>
				</div>
				<?php get_template_part('blocks/elements/recommend'); ?>
			</div>
			<div class="w-full md:w-5/12 md:px-12">
				<div class="bg-light rounded-2xl px-6 py-8">
					<div class="text-lg uppercase text-center mb-4">
						<?php _e('Обсуждение проекта', 'treba'); ?>
					</div>
					<div class="welcome_form">
						<!-- ФОРМА -->
						<form name="form_welcome">
		          <input type="text" name="Контакт" placeholder="<?php _e('Ваш телефон или email для связи', 'treba'); ?>" class="w-full rounded-lg px-3 py-4 mb-4" required>
		          <input type="text" name="URL" placeholder="<?php _e('Адрес вашего сайта', 'treba'); ?>" class="w-full rounded-lg px-3 py-4 mb-4">
		          <textarea name="Сообщение" col="5" class="w-full rounded-lg px-3 py-4 mb-4" placeholder="<?php _e('Например: Меня интересует стоимость продвижения моего сайта', 'treba'); ?>"></textarea>
		          <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
		          <input type="hidden" name="Услуга" value="<?php the_title(); ?>" id="input_hidden_service">
			        <button type="submit" class="welcome_btn second-btn text-black w-full flex justify-center">
			          <?php _e('Отправить', 'treba'); ?>
			        </button>
			      </form>
			      <div class="welcome_form_success bg-green-700 px-3 py-4 mt-4">
			      	👌 <?php _e('Отлично, мы получили вашу заявку. В ближайшие 20 минут мы вам ответим', 'treba'); ?>. 
			      </div>
						<!-- END ФОРМА -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>