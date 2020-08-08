<?php
// function simple_theme_setup(){
//   // Característica: Permitir imágenes
//   add_theme_support('post-thumbnails');
// }
//
// add_action('after_setup_theme','simple_theme_setup');

// Excerpt length
function set_excerpt_lenght()
{
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_lenght');
