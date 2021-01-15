<?php
	$professional_users = get_users([
			'paged' => 3
	]);
?>

<section class="oleez-landing-section-team">
    <div class="wrapper">
        <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals " style="">
                <span class="number">03</span>
                <img src="https://via.placeholder.com/40x12" class="about-feature-icon" alt="document" width="40" height="12">
            </div>
            <div class="row landing-team-content" style="">
                <div class="column">
                    <h2 class="section-title">Meet The Team <br> Our Professionals</h2>
                </div>
                <div class="column">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis delectus dolorem possimus, dolor rerum.</p>
                </div>
            </div>
            <div class="row">
                <?php
                    if ( ! empty( $professional_users ) && is_array( $professional_users ) ) {
                    	foreach ( $professional_users as $professional_user ) {
                    		$user_bio = get_user_meta( $professional_user->data->ID, 'description', true );
		                    $facebook_link = get_user_meta( $professional_user->data->ID, 'facebook_link', true );
		                    $twitter_link = get_user_meta( $professional_user->data->ID, 'twitter_link', true );
		                    $user_image_url = get_avatar_url( $professional_user->data->ID, [
		                    		'size' => 295
		                    ] );
                    		?>
		                    <div class="landing-team-card" style="">
			                    <img src="<?php echo esc_url( $user_image_url ); ?>" class="Landing-team-img" alt="" width="295" height="362">
			                    <h5 class="team-card-name"><?php echo esc_html( $professional_user->data->display_name ); ?></h5>
			                    <p class="team-card-job"><?php echo esc_html( $user_bio ); ?></p>
			                    <nav class="team-card-social-links">
				                    <a href="<?php echo esc_url( $facebook_link ); ?>">Fb</a>
				                    <a href="<?php echo esc_url( $twitter_link ); ?>">Tw</a>
				                    <a href="#!">In</a>
			                    </nav>
		                    </div>
	                        <?php
	                    }
                    }
                ?>
            </div>
        </div>
    </div>
</section>
