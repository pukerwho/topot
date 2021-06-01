<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'portfolio' )
    ->add_fields( array(
      Field::make( 'text', 'crb_portfolio_title', 'Заголовок' ),
      Field::make( 'textarea', 'crb_portfolio_description', 'Описание' ),
      Field::make( 'image', 'crb_portfolio_thumb', 'Заглавная картинка' )->set_value_type( 'url'),
      Field::make( 'text', 'crb_portfolio_url', 'Ссылка' ),
      Field::make( 'complex', 'crb_portfolio_tags', 'Теги' )->set_layout( 'tabbed-vertical' )
        ->add_fields( array(
          Field::make( 'text', 'crb_portfolio_tag', 'Тег' ),
      ) ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'reviews' )
    ->add_fields( array(
      Field::make( 'text', 'crb_reviews_name', 'Заголовок' ),
      Field::make( 'textarea', 'crb_reviews_description', 'Описание' ),
      Field::make( 'text', 'crb_reviews_youtube', 'YouTube ID' ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'cases' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_cases_description', 'Описание' ),
      Field::make( 'text', 'crb_case_title', 'Заголовок' ),
      Field::make( 'image', 'crb_case_thumb', 'Картинка' ),
      Field::make( 'text', 'crb_case_subtitle', 'Что это? (СТО в Киеве, Интернет-магазин парфюмов)' ),
      Field::make( 'textarea', 'crb_case_bg', 'Бекграунд' ),
      Field::make( 'complex', 'crb_case_params', 'Показатели' )->set_layout( 'tabbed-vertical' )
        ->add_fields( array(
          Field::make( 'text', 'crb_case_param_number', 'Значение' ),
          Field::make( 'text', 'crb_case_params_text', 'Текст' ),
      ) ),
      // Field::make( 'text', 'crb_cases_name', 'Заголовок' ),
      // Field::make( 'image', 'crb_cases_thumb', 'Заглавная картинка' )->set_value_type( 'url')
  ) );
}

?>