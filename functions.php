<?php
/**
 * Functions.
 *
 * @package capella
 */

// Constants
if ( ! defined( 'OLEEZ_BUILD_URI' ) ) {
	define( 'OLEEZ_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

function vella_add_theme_scripts() {

	wp_enqueue_style( 'main-css', OLEEZ_BUILD_URI . '/css/main.css', false, '1.1', 'all' );
	wp_enqueue_script( 'main-js', OLEEZ_BUILD_URI . '/js/main.js', [ 'jquery', 'slick-js' ], '1.1', true );
	wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . '/assets/library/slick/slick.css', [], false, 'all' );
	wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . '/assets/library/slick/slick-theme.css', [ 'slick-css' ], false, 'all' );
	wp_enqueue_script( 'slick-js', untrailingslashit( get_template_directory_uri() ) . '/assets/library/slick/slick.min.js', [ 'jquery' ], filemtime( untrailingslashit( get_template_directory() ) . '/assets/library/slick/slick.min.js' ), true );

}

add_action( 'wp_enqueue_scripts', 'vella_add_theme_scripts' );

function themename_custom_logo_setup() {
	$defaults = [
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => [ 'site-title', 'site-description' ],
	];
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( [
		'name'          => __( 'Main Sidebar', 'vela' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'vela' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	] );
}

add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo&display=swap', false );
}


add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

include_once 'includes/add-theme-support.php';
include_once 'includes/menus.php';
include_once 'includes/register-post-type-news.php';
include_once 'includes/register-post-type-portfolio.php';
include_once 'includes/register-post-type-testimonials.php';
include_once 'includes/customizer.php';
include_once 'includes/users.php';





