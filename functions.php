<?php

// Enqueue scripts
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Oxygen|Radley:300,700' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

if ( ! function_exists( 'theme_setup' ) ) {
	function theme_setup() {
		register_sidebar(array(
			'name' 	=> 'Sidebar Widgets',
			'id'	=> 'sidebar-widgets',
			'description'	=> 'Widgets for the sidebar.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Left Widgets',
			'id'	=> 'footer-left-widgets',
			'description'	=> 'Widgets for the left footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div><div class="spacer"></div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Center Widgets',
			'id'	=> 'footer-center-widgets',
			'description'	=> 'Widgets for the center footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div><div class="spacer"></div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Right Widgets',
			'id'	=> 'footer-right-widgets',
			'description'	=> 'Widgets for the right footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div><div class="spacer"></div>'
		));
	}
}

add_action( 'after_setup_theme', 'theme_setup' );

add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus(
			array(
			'primary' => __( 'Primary' ),
	));
}
