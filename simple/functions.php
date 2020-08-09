<?php
function simple_theme_setup()
{
    // Característica: Permitir imágenes
    add_theme_support('post-thumbnails');

    // Menús
    register_nav_menus(array(
      'primary' => __('Menú principal')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt length
function set_excerpt_lenght()
{
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_lenght');

// Ubicación de los widgets
function init_widgets($id)
{
    register_sidebar(array(
      'name'          => 'Barra lateral',
      'id'            => 'barralateral',
      'before_widget' => '<div class="side-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'init_widgets');
