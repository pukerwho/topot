<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_uslugi_theme_options' );
function crb_uslugi_theme_options() {
  Container::make( 'term_meta', __( 'Настройки', 'topot' ) )
    ->where( 'term_taxonomy', '=', 'uslugi' )
    ->add_fields( array(
      Field::make( 'image', 'crb_uslugi_thumb', 'Иконка для категории' )->set_value_type( 'url'),
      Field::make( 'textarea', 'crb_uslugi_description', 'Короткое описание' ),
      Field::make( 'checkbox', 'crb_uslugi_show_whyus', 'Показывать блог ЧЕМ МЫ ЛУЧШЕ?' ),
      Field::make( 'complex', 'crb_uslugi_whyus', 'Чем мы лучше других?' )
	    	->add_fields( array(
	    		Field::make( 'image', 'crb_uslugi_whyus_icon', 'Иконка' )->set_value_type( 'url'),
	    		Field::make( 'text', 'crb_uslugi_whyus_title', 'Заголовок' ),
	    		Field::make( 'textarea', 'crb_uslugi_whyus_description', 'Описание' ),
	    ))->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_uslugi_show_whyus',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),

	    Field::make( 'checkbox', 'crb_uslugi_show_price', 'Выводить Тарифы?' ),
      Field::make( 'select', 'crb_uslugi_price_template', 'Шаблон тарифов' )->add_options(
        array(
          'seo' => 'Для SEO-продвижения',
        ))->set_conditional_logic( 
        array(
          array(
            'field' => 'crb_uslugi_show_price',
            'value' => '1', 
            'compare' => '=',
          )
        )
      ),

      Field::make( 'complex', 'crb_uslugi_faq', 'FAQ' )
        ->add_fields( array(
          Field::make( 'text', 'crb_uslugi_faq_q', 'Вопрос' ),
          Field::make( 'textarea', 'crb_uslugi_faq_a', 'Ответ' ),
      ) ),
  ) );
}

?>