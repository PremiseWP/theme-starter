<?php
/**
 * Functions Library
 *
 * Theme Prefix: 'themeprefix_'
 */



// Require Premise WP if it does not exist.
if ( ! class_exists( 'Premise_WP' ) ) {
	require 'includes/require-premise-wp.php';
}


// setup theme
if ( ! function_exists( 'themeprefix_theme_setup' ) ) {
	/**
	 * Setup the theme once it is activated.
	 *
	 * This function runs only once when you activate the theme. It performs tasks that should NOT be ran on every page load such as flushing rewrite rules.
	 *
	 * @return void
	 */
	function themeprefix_theme_setup() {
		// flush rewrite rules
		flush_rewrite_rules();

		# perform other tasks here
	}
}



// Add theme supprt
if ( function_exists( 'add_theme_support' ) ) {
	// Add Menu Support.
	add_theme_support( 'menus' );

	// Add Thumbnail Theme Support.
	add_theme_support( 'post-thumbnails' );


	// custom logo in customizer
	add_theme_support( 'custom-logo', array(
		'size' => 'custom-logo-size',
	) );

	// Thumbnail sizes
	// add_image_size( 'post-featured', 1180, 474, true );
	// custom logo size
	add_image_size( 'custom-logo-size', 300, 150 );
}



// Enqueue styles and scripts
if ( ! function_exists( 'themeprefix_enqueue_scripts' ) ) {
	/**
	 * Enqueue theme scripts in the front end
	 *
	 * @return void
	 */
	function themeprefix_enqueue_scripts() {
		wp_register_style( 'themeprefix_css', get_template_directory_uri() . '/css/style.min.css' );

		wp_register_script( 'themeprefix_js', get_template_directory_uri() . '/js/script.min.js', array( 'jquery' ) );

		if ( ! is_admin() ) {
			wp_enqueue_style( 'themeprefix_css' );
			wp_enqueue_script( 'themeprefix_js' );
		}
	}
}



// output the main nav
if ( ! function_exists( 'themeprefix_main_nav' ) ) {
	/**
	 * Main navigation
	 *
	 * @return void
	 */
	function themeprefix_main_nav() {

		wp_nav_menu(
			array(
				'theme_location'  => 'header-menu', // DO NOT MODIFY.
				'menu'            => '',
				'container'       => 'div',
				'container_class' => 'header-menu-container',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 0,
			)
		);
	}
}



// Register menu locations
if ( ! function_exists( 'themeprefix_register_menu' ) ) {
	/**
	 * Register theme menu location
	 *
	 * @return void
	 */
	function themeprefix_register_menu() {

		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu', '' ), // Main Navigation.
			)
		);
	}
}





/*
	Includes
 */
// include '';



/*
	Hooks
 */
if ( function_exists( 'add_action' ) ) {
	// On theme activation.
	add_action( 'after_theme_setup', 'themeprefix_theme_setup' );

	// Register menus
	add_action( 'init', 'themeprefix_register_menu' );

	// Enqueue scripts.
	add_action( 'wp_enqueue_scripts', 'themeprefix_enqueue_scripts' );

	# add more hooks here
}