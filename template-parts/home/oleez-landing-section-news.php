<section class="oleez-landing-section-news">
    <div class="wrapper">
        <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals">
                <span class="number">05</span>
                <img src="assets/src/images/ezgif.com-gif-maker (1).png" alt="oleez" height="12px">
            </div>
            <h2 class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Recent News &amp; Stories.</h2>
            <p class="news-section-subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Share your stories and news with everyone.</p>
            <div class="row">
                <div class="column">
                    <div class="news-card news-card-1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-body">
                            <div class="author-info media">
                                <img src="assets/images/Team_1_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                <div class="media-body">
                                    <h6 class="author-name">Posted by Colabrio</h6>
                                    <p class="news-post-date">July 5, 2019</p>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="post-category">Digital Strategy</span> 4 min read
                            </div>
                            <h5 class="post-title">The Ultimate Guide to Make Your WordPress Journal.</h5>
                            <a href="#!" class="post-permalink">Read more </a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="news-card news-card-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-body">
                            <div class="author-info media">
                                <img src="assets/images/Team_2_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                <div class="media-body">
                                    <h6 class="author-name">Posted by Stormie</h6>
                                    <p class="news-post-date">July 5, 2019</p>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="post-category">Personal</span> 4 min read
                            </div>
                            <h5 class="post-title">The Highly Contemporary UI/UX Design from a london.</h5>
                            <a href="#!" class="post-permalink">Read more </a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="news-card news-card-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-body">
                            <div class="author-info media">
                                <img src="assets/images/Team_3_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                <div class="media-body">
                                    <h6 class="author-name">Posted by Angela</h6>
                                    <p class="news-post-date">July 5, 2019</p>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="post-category">Personal</span> 4 min read
                            </div>
                            <h5 class="post-title">A Color Exercise for our Brand’s Illustration </h5>
                            <a href="#!" class="post-permalink">Read more </a>
                        </div>
                    </div>
                </div>
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
