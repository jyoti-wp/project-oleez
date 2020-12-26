<?php

/**
 * Get the menu id by menu location.
 *
 * @param string $location
 *
 * @return integer
 */
function oleez_get_menu_id( $location ) {

	// Get all locations
	$locations = get_nav_menu_locations();

	// Get object id by location.
	$menu_id = $locations[$location];

	return ! empty( $menu_id ) ? $menu_id : '';

}

function oleez_register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'header-secondary-menu' => __( 'Header Secondary Menu' ),
			'extra-menu'  => __( 'Extra Menu' )
		)
	);
}

add_action( 'init', 'oleez_register_my_menus' );
