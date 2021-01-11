<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_uslugi_theme_options' );
function crb_uslugi_theme_options() {
  Container::make( 'term_meta', __( 'Настройки', 'topot' ) )
    ->where( 'term_taxonomy', '=', 'uslugi' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_uslugi_description', 'Короткое описание' ),
  ) );
}

?>