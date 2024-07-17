
<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
  function register_my_menu() {
    register_nav_menu('primary', __('Menu principale', 'itasolidale'));
    register_nav_menu('footer', __('Menu footer', 'itasolidale'));
  }
  add_action('after_setup_theme', 'register_my_menu');



  if ( !class_exists('Footer_Custom_Nav_Walker') ) {
    class Footer_Custom_Nav_Walker extends Walker_Nav_Menu {
        function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
            $output .= "<li class='" .  implode(" ", is_array($item->classes) ? $item->classes : []) . "'>";
            if ($item->url && $item->url != '#') {
                $output .= '<a target="_blank" href="' . $item->url . '">';
            } else {
                $output .= '<span>';
            }
            
            if($item->title === "Instagram") {
              $output .= '<img src="' . get_template_directory_uri() . '/images/Instagram.svg" alt="' . $item->title . '" />';
            }
            else if($item->title === "Linkedin") {
              $output .= '<img src="' . get_template_directory_uri() . '/images/Linkedin.svg" alt="' . $item->title . '" />';
            }
            else if($item->title === "Youtube") {
              $output .= '<img src="' . get_template_directory_uri() . '/images/Youtube.svg" alt="' . $item->title . '" />';
            }

            if ($item->url && $item->url != '#') {
                $output .= '</a>';
            } else {
                $output .= '</span>';
            }
        }

        //function end_el(&$output, $item, $depth=0, $args=[], $id=0) {
        //  $output .= "</li>";
        //}
        
    }
}

  
function create_posttype() {
  
  register_post_type( 'projects',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Progetti' ),
              'singular_name' => __( 'Progetto' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'projects'),
          'show_in_rest' => true,
      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_theme_support('post-thumbnails');
add_post_type_support('projects', 'thumbnail');
add_post_type_support('projects', 'custom-fields');
add_post_type_support('projects', 'excerpt');

add_filter('query_vars', 'registering_custom_query_var');

function registering_custom_query_var($query_vars)
{
    $query_vars[] = 'pcat'; 
    $query_vars[] = 'pyear'; 
    return $query_vars;
}
