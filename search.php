<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Oleez
 */

get_header(); ?>

	<section id="primary" class="content-area wrapper">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
				<?php get_search_form(); ?>

				<?php get_template_part( 'template-parts/search/search-results' ); ?>


			<?php else : ?>

				<div>No result found. Please try another search</div>
				<?php get_search_form(); ?>
			<?php endif; ?>

		</div><!-- #content .site-content -->
	</section><!-- #primary .content-area -->
<?php get_footer(); ?>
