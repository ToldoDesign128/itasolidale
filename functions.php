
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


if (!class_exists('Footer_Custom_Nav_Walker')) {
  class Footer_Custom_Nav_Walker extends Walker_Nav_Menu
  {
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
      $output .= "<li class='" .  implode(" ", is_array($item->classes) ? $item->classes : []) . "'>";
      if ($item->url && $item->url != '#') {
        $output .= '<a target="_blank" href="' . $item->url . '">';
      } else {
        $output .= '<span>';
      }

      if ($item->title === "Instagram") {
        $output .= '<img src="' . get_template_directory_uri() . '/images/Instagram.svg" alt="' . $item->title . '" />';
      } else if ($item->title === "Linkedin") {
        $output .= '<img src="' . get_template_directory_uri() . '/images/Linkedin.svg" alt="' . $item->title . '" />';
      } else if ($item->title === "Youtube") {
        $output .= '<img src="' . get_template_directory_uri() . '/images/Youtube.svg" alt="' . $item->title . '" />';
      }

      if ($item->url && $item->url != '#') {
        $output .= '</a>';
      } else {
        $output .= '</span>';
      }
    }
  }
}

function add_theme_script(){
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


function create_post_type()
{
  register_post_type(
    'projects',
    // CPT Options
    array(
      'labels' => array(
        'name' => __('Progetti'),
        'singular_name' => __('Progetto')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'show_in_rest' => true,
    )
  );

  $supports = array('thumbnail', 'custom-fields', 'excerpt');
  add_post_type_support('projects', $supports);
}

// Hooking up our function to theme setup
add_action('init', 'create_post_type');


function registering_custom_query_var($query_vars)
{
  $query_vars[] = 'pcat';
  $query_vars[] = 'pyear';
  return $query_vars;
}
add_filter('query_vars', 'registering_custom_query_var');