<div class="like">
	<div class="container mx-auto px-4 lg:px-0 mb-20">
		<div class="bg-light p-8">
			<h2 class="text-4xl md:text-5xl font-black mb-4"><?php _e('Нравится какой-то сайт?', 'treba'); ?></h2>
			<div class="text-xl text-white mb-6">
				<?php _e('Просто пришлите нам ссылку на сайт и мы скажем, сколько будет стоить разработка такого сайта', 'treba'); ?>.
			</div>
			<div class="like_content flex flex-col md:flex-row  items-center">
				<span class="text-2xl hand-font text-white pt-2 mr-4 mb-4 md:mb-0">Шаг <span class="red-color">№<span class="like_number">1</span></span></span>
				<input type="text" name="Сколько стоит такой сайт" placeholder="<?php _e('Адрес сайта, например google.com', 'treba'); ?>" class="like_site text-black py-3 px-4 mr-4 mb-4 md:mb-0 rounded" style="min-width: 300px;">
				<input type="email" name="Email для связи" placeholder="<?php _e('Введите ваш Email', 'treba'); ?>" class="like_email hidden text-black py-3 px-4 mr-4 mb-4 md:mb-0 rounded" style="min-width: 300px;">
				<span class="like_btn second-btn"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="" width="25px"></span>
			</div>
			<div class="like_success text-2xl text-center hidden"><?php _e('Супер! Дайте нам немного времени, чтобы все подсчитать. Мы отправим информацию на ваш email.', 'treba'); ?></div>
		</div>
</div>