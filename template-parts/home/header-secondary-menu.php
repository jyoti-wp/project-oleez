<?php

$header_menu_id = oleez_get_menu_id( 'header-secondary-menu' );
$header_secondary_menu = wp_get_nav_menu_items( $header_menu_id );
?>

<div class="header-secondary-menu-items-wrap">
	<div>
		<button class="close-secondary-menu">X</button>
	</div>
	<?php
		if ( ! empty( $header_secondary_menu ) && is_array( $header_secondary_menu ) ) {
			?>
			<ul class="header-secondary-menu-items">
				<?php
					foreach ( $header_secondary_menu as $menu_item ) {
						?>
						<li>
							<a class="header-secondary-menu-link" href="<?php echo esc_url( $menu_item->url ); ?>">
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
