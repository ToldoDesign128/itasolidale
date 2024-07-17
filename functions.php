
<?php

if (!function_exists('itas_setup')) :
  function itas_setup()
  {
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support('automatic-feed-links');
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support('post-thumbnails');
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus(array(
      'primary'   => __('Menu principale', 'ovum_bc'),
      'footer'   => __('Menu footer', 'ovum_bc'),
    ));
  }
endif; // itas_setup
add_action('after_setup_theme', 'itas_setup');

function add_theme_script()
{
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery'), 1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_script');
