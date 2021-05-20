<div class="welcome_form">
	<!-- ФОРМА -->
	<form name="form_welcome">
    <input type="text" name="Контакт" placeholder="<?php _e('Ваш телефон или email для связи', 'treba'); ?>" class="w-full rounded-lg px-3 py-4 mb-4" required>
    <input type="text" name="URL" placeholder="<?php _e('Адрес вашего сайта', 'treba'); ?>" class="w-full rounded-lg px-3 py-4 mb-4">
    <textarea name="Сообщение" col="5" class="w-full rounded-lg px-3 py-4 mb-4" placeholder="<?php _e('Например: Меня интересует стоимость продвижения моего сайта', 'treba'); ?>"></textarea>
    <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
    <input type="hidden" name="Услуга" value="Welcome Block">
    <button type="submit" class="welcome_btn second-btn text-black w-full flex justify-center">
      <?php _e('Отправить', 'treba'); ?>
    </button>
  </form>
  <div class="welcome_form_success bg-green-700 px-3 py-4 mt-4">
  	👌 <?php _e('Отлично, мы получили вашу заявку. В ближайшие 20 минут мы вам ответим', 'treba'); ?>. 
  </div>
	<!-- END ФОРМА -->
</div>