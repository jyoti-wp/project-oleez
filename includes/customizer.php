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




	//=============

	// Logo section.
	$main_section_id = 'oleez_logos_section';
	$wp_customize->add_section(
		$main_section_id,
		[
			'title'       => esc_html__( 'Logos Section', 'oleez' ),
			'description' => esc_html__( 'Upload Logos', 'oleez' ),
		]
	);

	$logo_names = [
		'Logo One' => 'logo_one',
		'Logo Two' => 'logo_two',
		'Logo Three' => 'logo_three',
		'Logo Four' => 'logo_four',
		'Logo Five' => 'logo_five',
		'Logo Six' => 'logo_six'
	];

	foreach ( $logo_names as $logo_label => $logo_name ) {
		$setting_id = sprintf( 'oleez_%s', $logo_name );

		$wp_customize->add_setting( $setting_id );
		$wp_customize->add_control(
			new \WP_Customize_Image_Control(
				$wp_customize,
				$setting_id,
				[
					'label'    => esc_html__( $logo_label, 'oleez' ),
					'section'  => $main_section_id,
					'settings' => $setting_id,
				]
			)
		);

	}

}

add_action( 'customize_register', 'oleez_customize_register' );
