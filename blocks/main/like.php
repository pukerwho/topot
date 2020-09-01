<div class="like">
	<div class="container mx-auto px-4 lg:px-0">
		<h2 class="text-4xl md:text-5xl text-center first-color mb-4"><?php _e('Нравится какой-то сайт?', 'topot'); ?></h2>
		<div class="text-center text-xl md:text-2xl mb-6">
			Просто пришлите нам ссылку на сайт и мы скажем, сколько будет стоить разработка такого сайта.
		</div>
		<div class="like_content flex flex-col md:flex-row justify-center items-center mb-20">
			<span class="text-2xl pt-2 mr-4 mb-4 md:mb-0">Шаг <span class="green-color">№<span class="like_number">1</span></span></span>
			<input type="text" name="Сколько стоит такой сайт" placeholder="Адрес сайта, например google.com" class="like_site text-black py-3 px-4 mr-4 mb-4 md:mb-0 rounded" style="min-width: 300px;">
			<input type="email" name="Email для связи" placeholder="Введите ваш Email" class="like_email hidden text-black py-3 px-4 mr-4 mb-4 md:mb-0 rounded" style="min-width: 300px;">
			<span class="like_btn second-btn"><img src="<?php bloginfo('template_url'); ?>/img/right.svg" alt="" width="25px"></span>
		</div>
		<div class="like_success text-2xl text-center mb-20 hidden">Супер! Дайте нам немного времени, чтобы все подсчитать. Мы отправим информацию на ваш email.</div>
</div>