<?php
/**
 * Index file
 */
?>

<?php get_header(); ?>
<?php //wp_die(); ?>
<div class="content">
<?php get_template_part( 'template-parts/home/hero-carousel' ); ?>
<?php get_template_part( 'template-parts/home/section-carousel' ); ?>
<?php get_template_part( 'template-parts/home/section-project' ); ?>
<?php get_template_part( 'template-parts/home/section-team' ); ?>
<?php get_template_part( 'template-parts/home/valuable-section'); ?>
<?php get_template_part( 'template-parts/home/partners-clients'); ?>
<?php get_template_part( 'template-parts/home/section-news'); ?>
<?php get_template_part( 'template-parts/home/section-testimonials' ); ?>

</div>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title();
    endwhile;
endif;
?>

<?php get_footer(); ?>




