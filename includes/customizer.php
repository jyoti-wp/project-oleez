<?php

function oleez_customize_register( \WP_Customize_Manager $wp_customize ) {
	// Social Icons.
	$social_icons = [ 'facebook', 'twitter', 'instagram', 'youtube' ];

	$wp_customize->add_section(
		'oleez_social_links',
		[
			'title'       => esc_html__( 'Social Links', 'oleez' ),
			'description' => esc_html__( 'Social links', 'oleez' ),
		]
	);

	foreach ( $social_icons as $social_icon ) {

		$setting_id = sprintf( 'oleez_%s_link', $social_icon );

		$wp_customize->add_setting(
			$setting_id,
			[
				'default'           => '',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url',
			]
		);

		$wp_customize->add_control(
			$setting_id,
			[
				'label'    => esc_html( $social_icon ),
				'section'  => 'oleez_social_links',
				'settings' => $setting_id,
				'type'     => 'text',
			]
		);
	}
}

add_action( 'customize_register', 'oleez_customize_register' );
