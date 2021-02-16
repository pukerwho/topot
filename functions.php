<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
  global $wp_version;
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  // let wordpress manage the title
  add_theme_support( 'title-tag' );
  //add_theme_support( 'custom-background', $args );
  //add_theme_support( 'custom-header', $args );
  // Automatic feed links compatibility
  if( version_compare( $wp_version, '3.0', '>=' ) ) {
      add_theme_support( 'automatic-feed-links' );
  } else {
      automatic_feed_links();
  }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
  // @TODO : edit the value for your own specifications
  $content_width = 960;
}

require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';
require_once get_template_directory() . '/inc/custom-fields/settings-meta.php';
require_once get_template_directory() . '/inc/custom-fields/post-meta.php';
require_once get_template_directory() . '/inc/custom-fields/pages-meta.php';
require_once get_template_directory() . '/inc/custom-fields/services-meta.php';
require_once get_template_directory() . '/inc/custom-fields/uslugi-meta.php';
require_once get_template_directory() . '/inc/TGM/example.php';


register_nav_menus( array(
  'head_menu' => 'Меню в шапке',
) );

// Register sidebars
function registerThemeSidebars() {
  if( !function_exists( 'register_sidebar' ) ) {
      return;
  }
  register_sidebar( array(
    'name' => 'Main sidebar',
    'id' => 'main-sidebar',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
  wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css', false, time() );
  wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js','','',true);
  wp_enqueue_script( 'ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js','','',true);
  wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/animation.gsap.min.js','','',true);
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js','','',true);
  wp_enqueue_script( 'chart', 'https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js','','',true);
  wp_enqueue_script( 'animate-puk', get_template_directory_uri() . '/js/animate-puk.js', '','',true);
  
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', '','',true);
};


function create_post_type() {
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => 'Услуги',
        'singular_name' => 'Услуга'
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => 'Портфолио',
        'singular_name' => 'Портфолио'
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'cases',
    array(
      'labels' => array(
        'name' => 'Кейсы',
        'singular_name' => 'Кейс'
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'reviews',
    array(
      'labels' => array(
        'name' => 'Отзывы',
        'singular_name' => 'Отзыв'
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
}

add_action( 'init', 'create_post_type' );

// Register Taxonomy for Services
function custom_taxonomy() {

  $labels = array(
    'name'                       => __( 'Категория', 'topot' ),
    'singular_name'              => __( 'Категория', 'topot' ),
    'menu_name'                  => __( 'Категория', 'topot' ),
    'all_items'                  => __( 'Все категории', 'topot' ),
    'parent_item'                => __( 'Родительская категория', 'topot' ),
    'parent_item_colon'          => __( 'Родительская категория:', 'topot' ),
    'new_item_name'              => __( 'Добавить категорию', 'topot' ),
    'add_new_item'               => __( 'Добавить', 'topot' ),
    'edit_item'                  => __( 'Редактировать', 'topot' ),
    'update_item'                => __( 'Обновить', 'topot' ),
    'view_item'                  => __( 'Посмотреть', 'topot' ),
    'separate_items_with_commas' => __( 'Разделить', 'topot' ),
    'add_or_remove_items'        => __( 'Добавить или удалить', 'topot' ),
    'popular_items'              => __( 'Популярные', 'topot' ),
    'search_items'               => __( 'Поиск', 'topot' ),
    'not_found'                  => __( 'Не найдено', 'topot' ),
    'no_terms'                   => __( 'No items', 'topot' ),
    'items_list'                 => __( 'Items list', 'topot' ),
    'items_list_navigation'      => __( 'Items list navigation', 'topot' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );
  register_taxonomy( 'uslugi', array( 'services' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: none;
      display: inline;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function wpb_login_logo_url_title() {
  return 'Treba Solutions';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );

function my_custom_upload_mimes($mimes = array()) {
    $mimes['svg'] = "image/svg+xml";
    $mimes['webp'] = 'image/webp';  
    return $mimes;
}

add_action('upload_mimes', 'my_custom_upload_mimes');

?>