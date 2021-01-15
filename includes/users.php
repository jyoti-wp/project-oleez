<?php

/**
 * Create User Meta field form.
 *
 * This will be visible in WordPress dashboard > Users > Profile
 * @param $user
 */
function oleez_user_profile_edit_action($user) {
	$facebook_link = (isset($user->facebook_link) && $user->facebook_link) ? $user->facebook_link : '';
	$twitter_link = (isset($user->twitter_link) && $user->twitter_link) ? $user->twitter_link : '';
	?>
	<h3>Social Links</h3>
	<!--Facebook-->
	<label for="facebook_link">
		Facebook Link
		<input name="facebook_link" type="text" id="facebook_link" value="<?php echo $facebook_link; ?>">
	</label>
	<br>
	<br>
	<!--Twitter-->
	<label for="twitter_link">
		Twitter Link
		<input name="twitter_link" type="text" id="twitter_link" value="<?php echo $twitter_link; ?>">
	</label>
	<?php
}
add_action('show_user_profile', 'oleez_user_profile_edit_action');
add_action('edit_user_profile', 'oleez_user_profile_edit_action');

/**
 * Add/update the user meta key and value in the database.
 *
 * @param $user_id
 */
function oleez_user_profile_update_action($user_id) {
	update_user_meta($user_id, 'facebook_link', $_POST['facebook_link']);
	update_user_meta($user_id, 'twitter_link', $_POST['twitter_link']);
}
add_action('personal_options_update', 'oleez_user_profile_update_action');
add_action('edit_user_profile_update', 'oleez_user_profile_update_action');

