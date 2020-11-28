<?php

// Register Custom Post Type News
function create_news_cpt() {

	$labels = array(
		'name' => _x( 'News', 'Post Type General Name', 'oleez' ),
		'singular_name' => _x( 'News', 'Post Type Singular Name', 'oleez' ),
		'menu_name' => _x( 'News', 'Admin Menu text', 'oleez' ),
		'name_admin_bar' => _x( 'News', 'Add New on Toolbar', 'oleez' ),
		'archives' => __( 'News Archives', 'oleez' ),
		'attributes' => __( 'News Attributes', 'oleez' ),
		'parent_item_colon' => __( 'Parent News:', 'oleez' ),
		'all_items' => __( 'All News', 'oleez' ),
		'add_new_item' => __( 'Add New News', 'oleez' ),
		'add_new' => __( 'Add New', 'oleez' ),
		'new_item' => __( 'New News', 'oleez' ),
		'edit_item' => __( 'Edit News', 'oleez' ),
		'update_item' => __( 'Update News', 'oleez' ),
		'view_item' => __( 'View News', 'oleez' ),
		'view_items' => __( 'View News', 'oleez' ),
		'search_items' => __( 'Search News', 'oleez' ),
		'not_found' => __( 'Not found', 'oleez' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'oleez' ),
		'featured_image' => __( 'Featured Image', 'oleez' ),
		'set_featured_image' => __( 'Set featured image', 'oleez' ),
		'remove_featured_image' => __( 'Remove featured image', 'oleez' ),
		'use_featured_image' => __( 'Use as featured image', 'oleez' ),
		'insert_into_item' => __( 'Insert into News', 'oleez' ),
		'uploaded_to_this_item' => __( 'Uploaded to this News', 'oleez' ),
		'items_list' => __( 'News list', 'oleez' ),
		'items_list_navigation' => __( 'News list navigation', 'oleez' ),
		'filter_items_list' => __( 'Filter News list', 'oleez' ),
	);
	$args = array(
		'label' => __( 'News', 'oleez' ),
		'description' => __( 'News post type', 'oleez' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats', 'custom-fields'),
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
	register_post_type( 'news', $args );

}
add_action( 'init', 'create_news_cpt', 0 );




