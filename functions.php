<?php 
// Register custom menu | Primary
	add_action( 'after_setup_theme', 'register_my_menu' );
	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'dgg' ) );
		register_nav_menu( 'secondary', __( 'Secondary Menu', 'dgg' ) );
	}
// Enqueue scripts or enqueue styles
	function themeslug_enqueue_style() {
		wp_enqueue_style( 'core', get_stylesheet_uri(), false );
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . 'css/skeleton.css', 1 );
		wp_enqueue_style( 'modernizer', get_template_directory_uri() . 'css/modernizer.css', 2 ); 
	}
	/*function themeslug_enqueue_script() {
		wp_enqueue_script( 'my-js', 'filename.js', false );
	}*/

	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
	//add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
 ?>