<?php 
add_theme_support( 'post-thumbnails' );
$rand = rand(1, 999999999);
function burger_menu_script() {
     
    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ), $rand,null );
  
}
add_action('wp_enqueue_scripts', "burger_menu_script");
function theme_styles()  
{ 


	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), $rand, 'all' );



}
add_action('wp_enqueue_scripts', 'theme_styles');

function excerpt_length( $length ) {
  return (is_front_page()) ? 35 : 60;
}
add_filter( 'excerpt_length', 'excerpt_length', 999 );

function new_excerpt_more($more) {
	global $post;
 return '<a class="moretag" href="'. get_permalink($post->ID) . '">...read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function register_my_menus() {
	register_nav_menus(
	  array(
		'side-menu' => __( 'Side Menu' )
	   )
	 );
   }
add_action( 'init', 'register_my_menus' );


function pagination_script() {
    wp_enqueue_script( 'pagination', get_template_directory_uri() . '/js/pagination.js', array( 'jquery' ), null );
}
add_action( 'wp_enqueue_scripts', 'pagination_script' );

add_action('get_header', 'my_filter_head');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 
?>