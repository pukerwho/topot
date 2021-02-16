<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_services_theme_options' );
function crb_services_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'services' )
    ->add_tab('Контент', array(
      Field::make( 'image', 'crb_services_thumb', 'Иконка для услуги' )->set_value_type( 'url'),
    	Field::make( 'image', 'crb_services_person_photo', 'Вы в надежных руках - Фото' ),
      Field::make( 'rich_text', 'crb_services_person_text', 'Вы в надежных руках - текст' ),
      
      Field::make( 'complex', 'crb_services_whyus', 'Чем мы лучше других?' )
	    	->add_fields( array(
	    		Field::make( 'image', 'crb_services_whyus_icon', 'Иконка' )->set_value_type( 'url'),
	    		Field::make( 'text', 'crb_services_whyus_title', 'Заголовок' ),
	    		Field::make( 'textarea', 'crb_services_whyus_description', 'Описание' ),
	    ) ),
    ))
    ->add_tab('Кейс', array(
      Field::make( 'text', 'crb_services_case_id', 'Реальный кейс - id' ),
      Field::make( 'textarea', 'crb_services_case_js', 'Реальный кейс - график' ),
      Field::make( 'rich_text', 'crb_services_case_text', 'Реальный кейс - текст' ),
    ))
    ->add_tab('ЧаВо', array(
      Field::make( 'complex', 'crb_services_faq', 'FAQ' )
        ->add_fields( array(
          Field::make( 'text', 'crb_services_faq_q', 'Вопрос' ),
          Field::make( 'textarea', 'crb_services_faq_a', 'Ответ' ),
      ) ),
    ))
    ->add_tab('Шаблон', array(
      Field::make( 'checkbox', 'crb_services_show_price', 'Выводить Тарифы?' ),
      Field::make( 'select', 'crb_services_price_template', 'Шаблон тарифов' )->add_options(
        array(
          'seo' => 'Для SEO-продвижения',
        ))->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_price',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'checkbox', 'crb_services_city_show', 'Выводить в разделе Города?' ),
      Field::make( 'checkbox', 'crb_services_crm_show', 'Выводить в разделе CRM?' ),
    ));
}

?>