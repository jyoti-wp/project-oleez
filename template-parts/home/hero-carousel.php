<?php
/**
 * Hero carousel
 */


$args = [
	'posts_per_page'         => 5,
	'post_type'              => 'portfolio',
	'update_post_meta_cache' => false,
	'update_post_term_cache' => false,
];

$post_query = new \WP_Query( $args );

?>

<div class="hero-carousel">
	<!--Hero Slide container-->
    <div class="wrapper hero-section">
	<?php
		if ( $post_query->have_posts() ) {
			while( $post_query->have_posts() ) {
				$post_query->the_post();
				?>
				<!-- first slide  -->
				<div class="hero-slide">
					<div class="right-hero">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('featured-thumbnail' );
						} else {
							?>
							<img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
							<?php
						}
						?>
					</div>
					<div class="left-hero-wrapper">
						<div class="left-hero">
							<div class="left-hero-wrap">
								<?php the_title( '<h2 class="hero-caption">', '</h2>' ); ?>
								<h2 class="hero-caption"><?php the_excerpt(); ?></h2>
								<a href="<?php echo get_the_permalink(); ?>" class="hero-cta">
									<span>Explore Project</span>
									<span class="hero-cta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16pt" height="16pt" viewBox="0 0 16 16" version="1.1">
                                <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 15.816406 7.558594 L 12.550781 4.308594 C 12.304688 4.0625 11.910156 4.0625 11.667969 4.308594 C 11.421875 4.554688 11.425781 4.949219 11.667969 5.191406 L 13.859375 7.375 L 0.625 7.375 C 0.28125 7.375 0 7.65625 0 8 C 0 8.34375 0.28125 8.625 0.625 8.625 L 13.859375 8.625 L 11.667969 10.808594 C 11.425781 11.050781 11.421875 11.445312 11.667969 11.691406 C 11.910156 11.9375 12.304688 11.9375 12.550781 11.691406 L 15.816406 8.441406 C 16.0625 8.199219 16.0625 7.800781 15.816406 7.558594 Z M 15.816406 7.558594 "/>
                                </g>
                            </svg>
                        </span>
								</a>
							</div>
						</div>
					</div>
				</div>
	            <?php
			}
		}
	?>
    </div>
</div>
