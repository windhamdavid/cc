<?php

if ( ! function_exists( 'cc_setup' ) ) :

function cc_setup() {
	require get_template_directory() . '/inc/template.php';
	require( get_template_directory() . '/inc/tweaks.php' );
	require( get_template_directory() . '/inc/wp_bootstrap_navwalker.php' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'cc' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}
endif;
add_action( 'after_setup_theme', 'cc_setup' );

function cc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cc_content_width', 640 );
}
add_action( 'after_setup_theme', 'cc_content_width', 0 );

function cc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cc_widgets_init' );

function cc_scripts() {
	wp_enqueue_style( 'cc', get_stylesheet_uri() );
	//wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css');
	
	wp_deregister_script('jquery');
	
	wp_enqueue_style('boot', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), false, true);
	wp_enqueue_script('boostrap', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', '', true );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', 'jquery', '', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cc_scripts' );




