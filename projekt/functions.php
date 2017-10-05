<?php


// Excerpt length on blog
function set_excerpt_length() {
  return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');

// post thumbnails photo
add_theme_support( 'post-thumbnails' );
add_theme_support('post-formats', array('aside', 'gallery'));

//widget locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_widget' => '<h4>',
    'after_widget' => '</h4>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

//customize theme
require get_template_directory(). '/inc/customizer.php';

// show only category blog posts
function my_home_category( $query ) {
   if ( $query->is_home() && $query->is_main_query() ) {
     $query->set( 'cat', '7');
   }
 }
add_action( 'pre_get_posts', 'my_home_category' );
?>
