<div class="oleez-landing-section-carousel">
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="landing-about-feature">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>">

					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'featured-thumbnail' );
					} else {
						?>
						<img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
						<?php
					}
					?>
					<?php the_title( '<h2 class="about-feature-title">', '</h2>' ); ?>
					<?php the_excerpt(); ?>
				</a>
			</div>
		<?php endwhile; ?>


	</div>
</div>
