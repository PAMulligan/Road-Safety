<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<input type="text" placeholder="What are you looking for today?" name="s" id="s">
	<input type="image" name="submit" src="<?php echo wp_upload_dir()['baseurl'] . '/2021/08/button.png'; ?>" id="searchsubmit" value="Search">
</form>