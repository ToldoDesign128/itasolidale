<?php
if (!function_exists('itasolidale_setup')) :
	function itasolidale_setup()
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
			'primary'   => __('Menu Principale', 'itasolidale'),
			'footer'   => __('Menu Footer', 'itasolidale')
		));
	}
endif; // itasolidale_setup
add_action('after_setup_theme', 'itasolidale_setup');


/*  Enqueue css
/* ------------------------------------ */
if ( ! function_exists( 'itasolidale_styles' ) ) {
  function nakedpress_styles() {

    wp_enqueue_style( 'itasolidale-style', get_template_directory_uri().'/style.css');

   }
}
add_action( 'wp_enqueue_scripts', 'itasolidale_styles' );
?>