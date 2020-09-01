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
      // Field::make( 'text', 'crb_cases_name', 'Заголовок' ),
      // Field::make( 'image', 'crb_cases_thumb', 'Заглавная картинка' )->set_value_type( 'url')
  ) );
}

?>