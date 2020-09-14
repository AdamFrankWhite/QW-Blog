<?php 
add_theme_support( 'post-thumbnails' );
function theme_styles()  
{ 


	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );



}
add_action('wp_enqueue_scripts', 'theme_styles');

?>