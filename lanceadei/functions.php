<?php
/**
* Crear nuestros menús gestionables desde el administrador de Wordpress.
*/
function mis_menus()
{
    register_nav_menus(array('navegation'=>__('Menú de navegación'),));
}
add_action('init', 'mis_menus');

/**
* Crear una zona de Widgets que podremos gestionar desde el administrador de
* Wordpress  fdsdfas
*/
