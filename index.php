<?php
/**
 * Index file
 */
?>

<?php get_header(); ?>

<div class="content">
<?php get_template_part( 'template-parts/home/oleez-landing-section-carousel' ); ?>
<?php get_template_part( 'template-parts/home/oleez-landing-section-project' ); ?>
<?php get_template_part( 'template-parts/home/valuable-section'); ?>
<?php get_template_part( 'template-parts/home/oleez-landing-partners-clients'); ?>
<?php get_template_part( 'template-parts/home/oleez-landing-section-news'); ?>
<?php get_template_part( 'template-parts/home/oleez-landing-section-testimonials' ); ?>

</div>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title();
    endwhile; 
endif; 
?>

<?php get_footer(); ?>




