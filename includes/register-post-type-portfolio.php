<?php 

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'oleez' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'oleez' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'oleez' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'oleez' ),
		'archives' => __( 'Portfolio Archives', 'oleez' ),
		'attributes' => __( 'Portfolio Attributes', 'oleez' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'oleez' ),
		'all_items' => __( 'All Portfolios', 'oleez' ),
		'add_new_item' => __( 'Add New Portfolio', 'oleez' ),
		'add_new' => __( 'Add New', 'oleez' ),
		'new_item' => __( 'New Portfolio', 'oleez' ),
		'edit_item' => __( 'Edit Portfolio', 'oleez' ),
		'update_item' => __( 'Update Portfolio', 'oleez' ),
		'view_item' => __( 'View Portfolio', 'oleez' ),
		'view_items' => __( 'View Portfolios', 'oleez' ),
		'search_items' => __( 'Search Portfolio', 'oleez' ),
		'not_found' => __( 'Not found', 'oleez' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'oleez' ),
		'featured_image' => __( 'Featured Image', 'oleez' ),
		'set_featured_image' => __( 'Set featured image', 'oleez' ),
		'remove_featured_image' => __( 'Remove featured image', 'oleez' ),
		'use_featured_image' => __( 'Use as featured image', 'oleez' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'oleez' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'oleez' ),
		'items_list' => __( 'Portfolios list', 'oleez' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'oleez' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'oleez' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'oleez' ),
		'description' => __( 'custom post type portfolio', 'oleez' ),
		'labels' => $labels,
		'menu_icon' => '',
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );