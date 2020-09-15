<?php 
add_theme_support( 'post-thumbnails' );
function theme_styles()  
{ 


	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );



}
add_action('wp_enqueue_scripts', 'theme_styles');

function excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'excerpt_length', 999 );

function register_my_menus() {
	register_nav_menus(
	  array(
		'side-menu' => __( 'Side Menu' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );

?>