<aside id="mainSidebar">
	<h1>School Information</h1>
	<?php
	$schoolinfo_menu = get_post(16631);
	echo do_shortcode($schoolinfo_menu->post_content);
	?>
</aside>