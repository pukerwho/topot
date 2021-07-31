<div class="border-separate pb-20 mb-20">
	<div class="audit relative bg-third-gradient rounded-2xl px-4 md:px-16 py-8 md:py-12">
		<!-- <div class="audit_emoji_wow absolute top-0 left-0 text-5xl">🔎</div> -->
		<div class="audit_emoji_wow absolute -inset-6 text-5xl md:text-6xl" style="width: 60px; height: 60px;  transform: rotate(-10deg);">💡</div>
		<div class="audit_emoji_wow absolute -bottom-6 right-0 md:-right-6 text-5xl md:text-6xl">💪</div>
		<div class="flex flex-col md:flex-row items-center md:-mx-4">
			<div class="w-full md:w-7/12 md:px-4 mb-8 md:mb-0">
				<div class="text-4xl md:text-5xl font-black text-white mb-4">
					<?php _e('Аудит Вашего сайта', 'treba'); ?>
				</div>
				<div class="inline-block text-2xl md:text-3xl font-bold text-white text-center bg-black bg-opacity-25 rounded-lg px-8 py-2 mb-8" style="transform:rotate(-2deg);">
					<?php _e('Это бесплатно!', 'treba'); ?>
				</div>
				<div>
					<ul>
						<li class="text-xl text-white mb-5">
							<?php _e('Не используем шаблоны в аудитах', 'treba'); ?>
						</li>
						<li class="text-xl text-white mb-5">
							<?php _e('Два seo-специалиста проверят Ваш сайт', 'treba'); ?>
						</li>
						<li class="text-xl text-white">
							<?php _e('Никакой воды, пишем только самое главное', 'treba'); ?>
						</li>
					</ul>
				</div>
			</div>
			<div class="w-full md:w-5/12 md:px-4">
				<div class="bg-black bg-opacity-25 rounded-xl p-3 md:p-6">
					<div class="text-xl md:text-2xl text-center text-white mb-6"><?php _e('Заполните несколько полей', 'treba'); ?></div>
					<div>
						<!-- ФОРМА -->
						<form name="form_audit">
		          <input type="text" name="URL" placeholder="<?php _e('Адрес вашего сайта', 'treba'); ?>" class="w-full text-black px-2 py-4 mb-4 border-2" required>
		          <input type="text" name="Контакт" placeholder="<?php _e('Ваш телефон или email для связи', 'treba'); ?>" class="w-full text-black px-2 py-4 mb-4 border-2" required>
		          <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
		          <input type="hidden" name="Аудит" value="" id="input_hidden_service">
			        <button type="submit" class="welcome_btn first-btn w-full flex justify-center">
			          <?php _e('Отправить', 'treba'); ?>
			        </button>
			      </form>
			      <div class="order_success bg-green-700 px-2 py-4 mt-4">
			      	👌 <?php _e('Отлично, мы получили вашу заявку. В ближайшие 20 минут мы вам ответим', 'treba'); ?>. 
			      </div>
						<!-- END ФОРМА -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>