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
                <?php
                $query_result = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 3 ) );  
                    while ( $query_result->have_posts() ) : $query_result->the_post();
                        ?> 
                        <div class="column">
                            <div class="news-card" style="">
                                <div class="card-body">
                                    <div class="author-info media">
                                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'author-iamge', 'title' => 'Feature image']);?>
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by <?php echo get_the_author();?> </h6>
                                            <p class="news-post-date"><?php echo get_the_date(); ?></p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="post-category">Digital Strategy</span>
                                    </div>
                                    <h5 class="post-title"><?php echo get_the_title(); ?></h5>
                                    <a href="#!" class="post-permalink">Read more </a>
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




