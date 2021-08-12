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
      Field::make( 'rich_text', 'crb_case_start', 'Начальные условия' ),
      Field::make( 'rich_text', 'crb_case_what_do_description', 'Что было сделано ОПИСАНИЕ' ),
      Field::make( 'complex', 'crb_case_steps', 'Что было сделано' )->set_layout( 'tabbed-vertical' )
        ->add_fields( array(
          Field::make( 'text', 'crb_case_step_date', 'Дата/Время' ),
          Field::make( 'text', 'crb_case_step_subtitle', 'Подзаголовок' ),
          Field::make( 'text', 'crb_case_step_title', 'Заголовок' ),
          Field::make( 'rich_text', 'crb_case_step_description', 'Описание' ),
      ) ),
      Field::make( 'rich_text', 'crb_case_result_content', 'Результаты (контент)' ),
      Field::make( 'complex', 'crb_case_results_stats', 'Результаты (статистика)' )->set_layout( 'tabbed-vertical' )
        ->add_fields( array(
          Field::make( 'text', 'crb_case_results_stats_title', 'Заголовок' ),
          Field::make( 'text', 'crb_case_results_stats_new', 'Новое значение' ),
          Field::make( 'text', 'crb_case_results_stats_old', 'Старое значение' ),
          Field::make( 'text', 'crb_case_results_stats_percent', 'Изменение' ),  
          Field::make( 'select', 'crb_case_results_stats_move', 'Up/Down?' )->add_options(
            array(
              'up' => 'Вверх (green)',
              'down' => ' Вниз (red)',
            )
          )
      ) ),
      // Field::make( 'text', 'crb_cases_name', 'Заголовок' ),
      // Field::make( 'image', 'crb_cases_thumb', 'Заглавная картинка' )->set_value_type( 'url')
  ) );
}

?>