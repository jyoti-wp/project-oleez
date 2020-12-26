<?php

$header_menu_id = oleez_get_menu_id( 'header-secondary-menu' );
$header_secondary_menu = wp_get_nav_menu_items( $header_menu_id );
?>

<div class="header-secondary-menu-icon-wrap">
	<img width="48" height="48" class="header-secondary-menu-icon" src="https://www.bootstrapdash.com/demo/oleez-landing-page/assets/images/social%20icon@2x.svg" alt="header-secondary">
</div>

<div class="header-secondary-menu-items-wrap">
	<?php
		if ( ! empty( $header_secondary_menu ) && is_array( $header_secondary_menu ) ) {
			?>
			<ul>
				<?php
					foreach ( $header_secondary_menu as $menu_item ) {
						?>
						<li>
							<a href="<?php echo esc_url( $menu_item->url ); ?>">
								<?php echo esc_html( $menu_item->title ); ?>
							</a>
						</li>
						<?php
					}
				?>
			</ul>
			<?php
		}
	?>
</div>
