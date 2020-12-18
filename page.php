<?php
/**
 * Single page.
 */

	get_header();

	get_template_part( 'template-parts/home/hero' );
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				// Display post content
				?>
				<main class="about-page">
					<div class="container">
						<h1 class="oleez-page-title" style=" "><?php the_title(); ?></h1>
						<p class="oleez-page-header" style=" "><?php the_content();?></p>
						<img src= "<?php echo get_theme_file_uri('https://via.placeholder.com/1110x390');?>" alt="about" class="images" style="">
					</div>
				</main>
				<?php
			endwhile;
		endif;
 	get_footer();
?>
