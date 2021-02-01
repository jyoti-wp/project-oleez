<?php

$logo_names = [
	'Logo One' => 'logo_one',
	'Logo Two' => 'logo_two',
	'Logo Three' => 'logo_three',
	'Logo Four' => 'logo_four',
	'Logo Five' => 'logo_five',
	'Logo Six' => 'logo_six'
];
?>

<section class="oleez-landing-section-client">
	<div class="wrapper">
		<div class="oleez-landing-section-content">
			<div class="oleez-landing-section-verticals" style="">
				<span class="number">04</span>
				<img src="https://via.placeholder.com/40x12" class="about-feature-icon" alt="document" width="40" height="12">
			</div>
			<h2 class="section-title" style="">Partners &amp; clients</h2>
			<p class="client-section-subtitle">We’re constantly refining our product. Adding new features. Working to help your business grow.</p>
			<div class="row">
				<?php
					foreach ( $logo_names as $logo_label => $logo_name ) {
						$setting_id = sprintf( 'oleez_%s', $logo_name ); // oleez_logo_one,  oleez_logo_two,..
						$logo_url = get_theme_mod( $setting_id );
						if ( ! empty( $logo_url )  ) {
							?>
							<div class="column">
								<div class="client-logo">
									<img src="<?php echo esc_url( $logo_url );?>" class="client-logo-img" alt="<?php echo esc_html( $logo_label ); ?>" width="297" height="144">
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</section>
