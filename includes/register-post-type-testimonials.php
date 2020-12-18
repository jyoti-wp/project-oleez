<?php

// Register Custom Post Type Testimonials
function create_testimonials_cpt() {

	$labels = array(
		'name' => _x( 'Testimonial', 'Post Type General Name', 'oleez' ),
		'singular_name' => _x( 'Testimonials', 'Post Type Singular Name', 'oleez' ),
		'menu_name' => _x( 'Testimonial', 'Admin Menu text', 'oleez' ),
		'name_admin_bar' => _x( 'Testimonials', 'Add New on Toolbar', 'oleez' ),
		'archives' => __( 'Testimonials Archives', 'oleez' ),
		'attributes' => __( 'Testimonials Attributes', 'oleez' ),
		'parent_item_colon' => __( 'Parent Testimonials:', 'oleez' ),
		'all_items' => __( 'All Testimonial', 'oleez' ),
		'add_new_item' => __( 'Add New Testimonials', 'oleez' ),
		'add_new' => __( 'Add New', 'oleez' ),
		'new_item' => __( 'New Testimonials', 'oleez' ),
		'edit_item' => __( 'Edit Testimonials', 'oleez' ),
		'update_item' => __( 'Update Testimonials', 'oleez' ),
		'view_item' => __( 'View Testimonials', 'oleez' ),
		'view_items' => __( 'View Testimonial', 'oleez' ),
		'search_items' => __( 'Search Testimonials', 'oleez' ),
		'not_found' => __( 'Not found', 'oleez' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'oleez' ),
		'featured_image' => __( 'Featured Image', 'oleez' ),
		'set_featured_image' => __( 'Set featured image', 'oleez' ),
		'remove_featured_image' => __( 'Remove featured image', 'oleez' ),
		'use_featured_image' => __( 'Use as featured image', 'oleez' ),
		'insert_into_item' => __( 'Insert into Testimonials', 'oleez' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonials', 'oleez' ),
		'items_list' => __( 'Testimonial list', 'oleez' ),
		'items_list_navigation' => __( 'Testimonial list navigation', 'oleez' ),
		'filter_items_list' => __( 'Filter Testimonial list', 'oleez' ),
	);
	$args = array(
		'label' => __( 'Testimonials', 'oleez' ),
		'description' => __( 'Post type testimonials', 'oleez' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'create_testimonials_cpt', 0 );