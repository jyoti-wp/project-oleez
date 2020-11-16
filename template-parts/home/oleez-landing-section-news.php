<section class="oleez-landing-section-news">
    <div class="wrapper">
        <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals">
                <span class="number">05</span>
                <img src="assets/src/images/ezgif.com-gif-maker (1).png" alt="oleez" height="12px">
            </div>
        </div>
        <h2 class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Recent News &amp; Stories.</h2>
        <p class="news-section-subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Share your stories and news with everyone.</p>
        
        <div class="row">
            
        </div>
        
        
<?php 
    $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 3 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post();

    the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>


    <div class="entry-meta">
        <?php if ( is_single() ) { ?>
            <span class="author"><?php the_author_posts_link(); ?></span>
        <?php }; ?>
    </div>  
<!-- .entry-meta -->




</div>
