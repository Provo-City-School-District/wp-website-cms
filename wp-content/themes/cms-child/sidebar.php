<aside id="mainSidebar">
	<?php
	$page_id = 17971;
	$page_data = get_post($page_id);
	if ($page_data) {
		echo do_shortcode($page_data->post_content);
	}
	?>
</aside>