<div class="commerce_modal-create w-full h-full fixed left-0 top-0 flex justify-center items-center">
  <div class="commerce_modal_block w-full md:w-2/5 flex flex-col relative bg-white rounded-lg p-4 mx-2 md:mx-0">
    <div class="flex items-start justify-between mb-8">
      <div class="commerce_modal_title text-2xl text-black font-bold">
        <?php _e('Расчет стоимости работ', 'treba'); ?> 
      </div>  
      <div class="commerce_close-create text-xl text-black cursor-pointer">
        ✖️
      </div>
    </div>
    <div class="text-lg text-black mb-4">
      <?php _e('Заполните форму ниже, чтобы мы смогли понять вашу задачу и связаться с вами', 'treba'); ?> 👇
    </div>
    <div>
      <!-- ФОРМА -->
      <form name="form_commerce">
        <input type="email" name="Контакт" placeholder="<?php _e('Телефон или e-mail для связи', 'treba'); ?>" class="w-full text-black px-2 py-4 mb-4 border-2" required>
        <input type="text" name="URL" placeholder="<?php _e('Адрес вашего сайта (если есть)', 'treba'); ?>" class="w-full text-black px-2 py-4 mb-4 border-2">
        <textarea name="Сообщение" rows="5" class="w-full text-black px-2 py-4 mb-4 border-2" placeholder="<?php _e('Постарайтесь подробно описать вашу задачу', 'treba'); ?>"></textarea>
        <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
        <input type="hidden" name="Услуга" value="Коммерческое (Создание)">
        <button type="submit" class="welcome_btn first-btn flex">
          <?php _e('Отправить', 'treba'); ?>
        </button>
      </form>
      <div class="commerce_success-create bg-green-700 px-2 py-4 mt-4">
        👌 <?php _e('Отлично, мы получили вашу заявку. Нам нужно немного времени, чтобы подготовить полноценный ответ на Ваш запрос', 'treba'); ?>. 
      </div>
      <!-- END ФОРМА -->
    </div>
  </div>
</div>