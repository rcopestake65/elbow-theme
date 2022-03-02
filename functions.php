<?php
//load stylesheet
function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
    wp_enqueue_style('cssgg', 'https://unpkg.com/css.gg/icons/all.css');
    wp_enqueue_style('open-props', 'https://unpkg.com/open-props');
}

add_action('wp_enqueue_scripts', 'load_css');

//load js
function loadjs()
{


    wp_register_script('app', get_template_directory_uri() . '/js/app.js', '', 1, true);
    wp_enqueue_script('app');

    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, false );
    wp_enqueue_script('jQuery');
}
add_action('wp_enqueue_scripts', 'loadjs');


//Theme Options

add_theme_support('menus');

//Menus

register_nav_menus(
array(
'main-menu' => 'Main Menu Location',
'mobile-menu' => 'Mobile Menu Location',

)
);

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

 

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

//add featured image to posts admin

function elbow_theme_support(){
    add_theme_support('post-thumbnails');
  
  }
  add_action ('after_setup_theme', 'elbow_theme_support');
  

  //add class to next prev btns

  add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="pill-btn"';
}


function posts_link_next_class($format){
    $format = str_replace('href=', 'class="pill-btn" href=', $format);
    return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
    $format = str_replace('href=', 'class="pill-btn" href=', $format);
    return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

//custom post type

function investments()
{
$args = array(
    'label' => 'Investments',
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    //'supports' => array('title', 'editor','thumbnail', 'excerpt'),
    'menu_icon'   => 'dashicons-portfolio',
    'taxonomies' => array('category'),
);

register_post_type('investments', $args);
}
add_action('init', 'investments');


?>