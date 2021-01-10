<?php

$query_result = new WP_Query( [ 'post_type' => 'portfolio', 'posts_per_page' => 3 ] );


if ( $query_result->have_posts() ) {
	?>
	<section class="oleez-landing-section-projects">
		<div class="wrapper">
			<div class="oleez-landing-section-content">
				<div class="oleez-landing-section-verticals " style="">
					<span class="number">02</span>
					<img src="https://via.placeholder.com/40x12" class="about-feature-icon" alt="document" width="40"
					     height="12">
				</div>
				<h2 class="section-title" style="">Latest Projects<a href="#!" class="all-projects-link">View All</a>
				</h2>
				<div class="project-carousel-container">
					<?php
					while ( $query_result->have_posts() ) : $query_result->the_post();
						?>
						<div class="project-item-wrap">
							<div class="project-item-card">
								<a href="<?php the_permalink(); ?>">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail( 'featured-thumbnail' );
									} else {
										?>
										<img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
										<?php
									}
									?>
								</a>
								<div class="project-item-info-wrap">
									<?php
									$post_terms     = get_the_terms( get_the_ID(), 'post_tag' );
									$post_tag_label = ! empty( $post_terms ) && is_array( $post_terms ) && ! empty( $post_terms[0] ) ? $post_terms[0]->name : '';
									?>
									<div>
										<p class="project-item-tag"><?php echo esc_html( $post_tag_label ); ?><p/>
										<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title( '<h4>', '</h6>' ); ?></a>
									</div>
								</div>
							</div>
						</div>
					<?php
					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
}
