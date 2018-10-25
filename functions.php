<?php
/**
 * Poli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Poli
 */

if ( ! function_exists( 'poli_setup' ) ) :

	function poli_setup() {

		load_theme_textdomain( 'poli', get_template_directory() . '/languages' );
    add_image_size( 'post', 800, 500, true ); 
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'poli' ),
			'top' => esc_html__( 'Top Menu', 'poli' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'poli_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'poli_setup' );


function poli_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Poli Sidebar', 'poli' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-title">',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Poli Page Sidebar', 'poli' ),
		'id'            => 'page',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-title">',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Poli shop Sidebar', 'poli' ),
		'id'            => 'shop',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-title">',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Poli Footer One', 'poli' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
		'name'          => esc_html__( 'Poli Footer Two', 'poli' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
  ) );
  
  register_sidebar( array(
		'name'          => esc_html__( 'Poli Footer Three', 'poli' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Poli Footer Four', 'poli' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'poli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
  
}
add_action( 'widgets_init', 'poli_widgets_init' );

function poli_scripts() {

  wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ));
  wp_enqueue_style( 'poli-animate', get_theme_file_uri( '/assets/css/animate.css' ));
  wp_enqueue_style( 'poli-fontawesome', get_theme_file_uri( '/assets/css/fontawesome-all.min.css' ));
  wp_enqueue_style( 'poli-owl', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ));
  wp_enqueue_style( 'woocommerce', get_theme_file_uri( '/assets/css/custom.css' ));
  wp_enqueue_style( 'poli-style', get_stylesheet_uri() );
  
  wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '', true );
  wp_enqueue_script( 'popper', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), '', true );
  wp_enqueue_script( 'owl', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), '', true );
  wp_enqueue_script( 'custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '', true );
  
	wp_enqueue_script( 'poli-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'poli-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'poli_scripts' );
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/shortcode.php';
require get_template_directory() . '/inc/vc-function.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
if ( class_exists( 'WooCommerce' ) ) {
require get_template_directory() . '/inc/woocommerce.php';
}
