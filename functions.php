<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css',['hello-elementor-theme-style',],'1.0.0');

	wp_enqueue_script('hello-elementor-child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), false, true);
	
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );



function register_new_widgets( $widgets_manager ) {
	

	require_once( get_stylesheet_directory() . '/widgets/heading/widget.php' );

	$widgets_manager->register( new \Mukto_Heading_widget() );

}
add_action( 'elementor/widgets/register', 'register_new_widgets' );
