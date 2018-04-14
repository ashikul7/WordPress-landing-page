<?php
	function chershoee_links(){
		//Style links
		wp_enqueue_style("layout_css", get_template_directory_uri() . "/assets/styles/layout.css", array(), "1.0.0", "all");

		//Script links
		wp_enqueue_script("jquery_min", get_template_directory_uri() . "/assets/scripts/jquery.min.js", array("jquery"), "1.0.0", true);
		wp_enqueue_script("backtotop_js", get_template_directory_uri() . "/assets/scripts/jquery.backtotop.js", array("jquery"), "1.0.0", true);
		wp_enqueue_script("mobilemenu_js", get_template_directory_uri() . "/assets/scripts/jquery.mobilemenu.js", array("jquery"), "1.0.0", true);
	}

	add_action("wp_enqueue_scripts", "chershoee_links");
?>
