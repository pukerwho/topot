<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_services_theme_options' );
function crb_services_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'services' )
    ->add_tab('Контент', array(
      Field::make( 'image', 'crb_services_thumb', 'Иконка для услуги' )->set_value_type( 'url'),
      Field::make( 'checkbox', 'crb_services_person_show', 'Выводить Вы В Надежны Руках?' ),
    	Field::make( 'image', 'crb_services_person_photo', 'Вы в надежных руках - Фото' )->set_conditional_logic( array(
          array(
            'field' => 'crb_services_person_show',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'rich_text', 'crb_services_person_text', 'Вы в надежных руках - текст' )->set_conditional_logic( array(
          array(
            'field' => 'crb_services_person_show',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'complex', 'crb_services_whyus', 'Чем мы лучше других?' )
	    	->add_fields( array(
	    		Field::make( 'image', 'crb_services_whyus_icon', 'Иконка' )->set_value_type( 'url'),
	    		Field::make( 'text', 'crb_services_whyus_title', 'Заголовок' ),
	    		Field::make( 'textarea', 'crb_services_whyus_description', 'Описание' ),
	    ) ),
    ))
    ->add_tab('Кейс', array(
      Field::make( 'checkbox', 'crb_services_show_case', 'Выводить Кейс?' ),
      Field::make( 'image', 'crb_services_case_img', 'Реальный кейс - картинка' )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_case',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'text', 'crb_services_case_title', 'Реальный кейс - заголовок над графиком' )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_case',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'rich_text', 'crb_services_case_text', 'Реальный кейс - текст' )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_case',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
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
          'create' => 'Для Создания сайта',
          'maps' => 'Для Google Maps',
        ))->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_price',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'text', 'crb_services_price_create_title', 'Заголовок для блока Цена' )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_price_template',
            'value' => 'create', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'text', 'crb_services_price_create_total', 'Стоимость разработки' )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_price_template',
            'value' => 'create', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'complex', 'crb_services_price_create_whatdo', 'Что входит в стоимость' )
        ->add_fields( array(
          Field::make( 'text', 'crb_services_price_create_do', 'Одной строкой' ),
      ) )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_price_template',
            'value' => 'create', 
            'compare' => '=',
          )
        )
      ),
      Field::make( 'checkbox', 'crb_services_show_example', 'Выводить примеры из Портфолио?' ),
      Field::make( 'association', 'crb_services_portfolio', 'Какие работы выводить' )
      ->set_duplicates_allowed( true )
      ->set_types( array(
          array(
            'type'      => 'post',
            'post_type' => 'portfolio',
          )
      ) )->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_services_show_example',
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