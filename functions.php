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
	wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . '/assets/library/slick/slick-theme.css', ['slick-css'], false, 'all' );
	wp_enqueue_script( 'slick-js', untrailingslashit( get_template_directory_uri() ) . '/assets/library/slick/slick.min.js', ['jquery'], filemtime( untrailingslashit( get_template_directory() ) . '/assets/library/slick/slick.min.js' ), true );

}

add_action( 'wp_enqueue_scripts', 'vella_add_theme_scripts' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu'  => __( 'Extra Menu' )
		)
	);
}

add_action( 'init', 'register_my_menus' );

function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'vela' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'vela' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo&display=swap', false );
	}



add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


						// meta box code

// function add_meta_box( $id, $title, $callback, $screen = null, $context = 'advanced', $priority = 'default', $callback_args = null ) {
//     global $wp_meta_boxes;

//     if ( empty( $screen ) ) {
//         $screen = get_current_screen();
//     } elseif ( is_string( $screen ) ) {
//         $screen = convert_to_screen( $screen );
//     } elseif ( is_array( $screen ) ) {
//         foreach ( $screen as $single_screen ) {
//             add_meta_box( $id, $title, $callback, $single_screen, $context, $priority, $callback_args );
//         }
//     }

//     if ( ! isset( $screen->id ) ) {
//         return;
//     }

//     $page = $screen->id;

//     if ( ! isset( $wp_meta_boxes ) ) {
//         $wp_meta_boxes = array();
//     }
//     if ( ! isset( $wp_meta_boxes[ $page ] ) ) {
//         $wp_meta_boxes[ $page ] = array();
//     }
//     if ( ! isset( $wp_meta_boxes[ $page ][ $context ] ) ) {
//         $wp_meta_boxes[ $page ][ $context ] = array();
//     }

//     foreach ( array_keys( $wp_meta_boxes[ $page ] ) as $a_context ) {
//         foreach ( array( 'high', 'core', 'default', 'low' ) as $a_priority ) {
//             if ( ! isset( $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ] ) ) {
//                 continue;
//             }

//             // If a core box was previously removed, don't add.
//             if ( ( 'core' === $priority || 'sorted' === $priority )
//                 && false === $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ]
//             ) {
//                 return;
//             }

//             // If a core box was previously added by a plugin, don't add.
//             if ( 'core' === $priority ) {
//                 /*
//                  * If the box was added with default priority, give it core priority
//                  * to maintain sort order.
//                  */
//                 if ( 'default' === $a_priority ) {
//                     $wp_meta_boxes[ $page ][ $a_context ]['core'][ $id ] = $wp_meta_boxes[ $page ][ $a_context ]['default'][ $id ];
//                     unset( $wp_meta_boxes[ $page ][ $a_context ]['default'][ $id ] );
//                 }
//                 return;
//             }

//             // If no priority given and ID already present, use existing priority.
//             if ( empty( $priority ) ) {
//                 $priority = $a_priority;
//                 /*
//                  * Else, if we're adding to the sorted priority, we don't know the title
//                  * or callback. Grab them from the previously added context/priority.
//                  */
//             } elseif ( 'sorted' === $priority ) {
//                 $title         = $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ]['title'];
//                 $callback      = $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ]['callback'];
//                 $callback_args = $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ]['args'];
//             }

//             // An ID can be in only one priority and one context.
//             if ( $priority !== $a_priority || $context !== $a_context ) {
//                 unset( $wp_meta_boxes[ $page ][ $a_context ][ $a_priority ][ $id ] );
//             }
//         }
//     }

//     if ( empty( $priority ) ) {
//         $priority = 'low';
//     }

//     if ( ! isset( $wp_meta_boxes[ $page ][ $context ][ $priority ] ) ) {
//         $wp_meta_boxes[ $page ][ $context ][ $priority ] = array();
//     }

//     $wp_meta_boxes[ $page ][ $context ][ $priority ][ $id ] = array(
//         'id'       => $id,
//         'title'    => $title,
//         'callback' => $callback,
//         'args'     => $callback_args,
//     );
// }

include_once 'includes/register-post-type-news.php';
include_once 'includes/register-post-type-portfolio.php';
include_once 'includes/register-post-type-testimonials.php';





