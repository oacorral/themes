<?php
  // Theme support
  function adv_theme_support()
  {
      // Nav menus
      register_nav_menus(array(
      'primary' => __('Menú principal'),
      'footer'  => __('Menú footer')
    ));
  }

  add_action('after_setup_theme', 'adv_theme_support');
