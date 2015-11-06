<?php 
// Register custom menu | Primary
	add_action( 'after_setup_theme', 'register_my_menu' );
	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'dgg' ) );
		register_nav_menu( 'secondary', __( 'Secondary Menu', 'dgg' ) );
	}
// Enqueue scripts or enqueue styles
	function themeslug_enqueue_style() {
		wp_enqueue_style( 'core', get_stylesheet_uri(), 0 );
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css', 1 );
		wp_enqueue_style( 'modernizer', get_template_directory_uri() . '/css/normalize.css', 2 );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/includes/font-awesome/css/font-awesome.min.css', 3 );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/includes/slick/slick.css', 4 );
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/includes/slick/slick-theme.css', 5 ); 
	}
	function themeslug_enqueue_script() {
		wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', 0 );
		wp_enqueue_script( 'slick',  get_template_directory_uri() . '/includes/slick/slick.min.js', 1 );
		// wp_enqueue_script( 'recaptcha',  get_template_directory_uri() . 'https://www.google.com/recaptcha/api.js', 2 );
	}

	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

	// Render title
	function theme_slug_setup() {
		add_theme_support( 'title-tag' );
	}

	add_action( 'after_setup_theme', 'theme_slug_setup' );
 ?>