<form role="search" method="get" id="searchform" class="searchform" action="/">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" name="s" placeholder="Search here" id="search" value="<?php the_search_query(); ?>" />
		<input class="screen-reader-text" type="submit" id="searchsubmit" value="Search">
	</div>
</form>
