    </section>
    <footer id="footer">
      <?php get_template_part('blocks/elements/clients'); ?>
    	<?php get_template_part('blocks/main/hey'); ?>
    </footer>
    <div class="order_modal w-full h-full fixed left-0 top-0 flex justify-center items-center">
  		<div class="order_modal_block w-full md:w-2/5 flex flex-col relative bg-white rounded-lg p-4 mx-2 md:mx-0">
  			<div class="flex items-start justify-between mb-8">
	  			<div class="order_modal_title text-2xl text-black font-bold">
	  				<?php _e('Оставить заявку', 'treba'); ?> 
	  			</div>	
	  			<div class="order_close text-xl text-black cursor-pointer">
	  				✖️
	  			</div>
  			</div>
  			
  			<div class="text-lg text-black mb-4">
  				<?php _e('Заполните пару полей ниже и мы примем вашу заявку', 'treba'); ?> 👇
  			</div>
  			<div>
  				<!-- ФОРМА -->
					<form name="form_order" class="">
	          <input type="text" name="Контакт" placeholder="<?php _e('Ваш телефон или email для связи', 'treba'); ?>" class="w-full text-black px-2 py-4 mb-4 border-2" required>
	          <textarea name="Сообщение" rows="5" class="w-full text-black px-2 py-4 mb-4 border-2" placeholder="<?php _e('Ваше сообщение', 'treba'); ?>"></textarea>
	          <input type="hidden" name="Cтраница" value="<?php echo get_the_permalink(); ?>">
	          <input type="hidden" name="Услуга" value="" id="input_hidden_service">
		        <button type="submit" class="welcome_btn first-btn flex">
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

    <!-- Выбрать мессенджер -->
    <div class="chat_modal w-full h-full fixed left-0 top-0 flex justify-center items-center">
      <div class="chat_modal_block w-full md:w-2/5 flex flex-col relative bg-white rounded-lg p-4 mx-2 md:mx-0">
        <div class="flex items-start justify-between mb-8">
          <div class="chat_modal_title text-2xl text-black font-bold">
            <?php _e('Где Вам удобно общаться?', 'treba'); ?> 
          </div>  
          <div class="chat_close text-xl text-black cursor-pointer">
            ✖️
          </div>
        </div>
        <div class="border-b-2 pb-6 mb-6">
          <div class="welcome_contact_icon mb-4">
            <a href="tg://resolve?domain=time2top" class="flex items-center justify-center rounded-lg btn telegram px-2 lg:px-4 py-2" target="_blank">
              <span class="text-sm lg:text-2xl">Telegram</span>
            </a>
          </div>
          <div class="welcome_contact_icon">
            <a href="viber://chat?number=+380997713997" class="flex items-center justify-center rounded-lg btn viber px-2 lg:px-4 py-2" target="_blank">
              <span class="text-sm lg:text-2xl">Viber</span>
            </a>
          </div>
        </div>
        <div class="text-2xl text-black">
          <div class="mb-2">☎️ <?php _e('Возможно по телефону?', 'treba'); ?></div>
          ➡️ <a href="tel:+380-99-771-3997" class="second-color">+380-99-771-3997</a>
        </div>
      </div>
    </div>
    <!-- END Выбрать мессенджер -->

    <div class="success_notice callback-form w-full h-full fixed left-0 top-0 flex justify-center items-center">
    	<div class="success_notice_block w-full md:w-2/5 flex flex-col md:flex-row items-center relative bg-white rounded-lg p-4 mx-2 md:mx-0">
    		<div class="text-5xl">
    			👍
    		</div>
    		<div class="text-black text-xl md:ml-8">
    			<?php _e('Спасибо, мы получили ваше сообщение. В течении 20 минут мы выйдем с вами на связь.', 'treba'); ?>
    		</div>
    	</div>
    </div>
    <div class="modal_bg"></div>
    <?php wp_footer(); ?>
</body>
</html>