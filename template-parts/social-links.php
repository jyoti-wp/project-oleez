<?php

$social_links      = [];
$social_links_name_map = [
	'facebook'  => 'Fb',
	'twitter'   => 'Tw',
	'instagram' => 'Is',
	'youtube'   => 'Yt',
];

foreach ( $social_links_name_map as $social_link_name => $social_link_name_value ) {
	$setting_id = sprintf( 'oleez_%s_link', $social_link_name ); // oleez_facebook_link, oleez_twitter_link
	$social_link = get_theme_mod( $setting_id );

	// If social link exists.
	if ( $social_link ) {
		array_push(
			$social_links,
			[
				'socialLinkName' => esc_attr( $social_link_name_value ),
				'socialLinkUrl'  => esc_url( $social_link ),
			]
		);
	}
}


if ( ! empty( $social_links ) && is_array( $social_links ) ) {
?>
	<nav class="footer-social-links">
		<?php
			foreach ( $social_links as $social_link  ) {
				printf( '<a href="%1$s">%2$s</a>', $social_link['socialLinkUrl'], $social_link['socialLinkName'] );
			}
		?>
	</nav>
<?php
}
