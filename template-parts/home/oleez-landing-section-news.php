<section class="oleez-landing-section-news">
    <div class="wrapper">
        <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals">
                <span class="number">05</span>
                <img src="assets/src/images/ezgif.com-gif-maker (1).png" alt="oleez" height="12px">
            </div>
            <h2 class="section-title" style="">Recent News &amp; Stories.</h2>
            <p class="news-section-subtitle" style="">Share your stories and news with everyone.</p>
            <div class="row">
<!-- <?php 
    $i = 0;
    while ($i <= 2) :
        ?> <div class="column">
        <div class="news-card" style="">
            <div class="card-body">
                <div class="author-info media">
                    <img src="assets/images/Team_1_Copy_2@2x.jpg" alt="author" class="author-avatar">
                    <div class="media-body">
                        <h6 class="author-name">Posted by Colabrio</h6>
                        <p class="news-post-date">July 5, 2019</p>
                    </div>
                </div>
                <div class="post-meta">
                    <span class="post-category">Digital Strategy</span>
                </div>
                <h5 class="post-title">The Ultimate Guide to Make Your WordPress Journal.</h5>
                <a href="#!" class="post-permalink">Read more </a>
            </div>
        </div>
    </div>
    <?php 
    $i++; 
endwhile;
?> -->
            </div>
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
</section>


