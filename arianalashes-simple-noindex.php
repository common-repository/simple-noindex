<?php
/*
Plugin Name: Simple Noindex
Description: Adds the noindex tag to all URLs
Author: ArianaLashes
Author URI: https://arianalashes.com/
Version: 1.1

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/

// Function to add noindex to head-section
function addNoindex_header() {
	echo "<meta name=\"robots\" content=\"noindex\">\n";
}
	
// Run the function
add_action('wp_head','addNoindex_header',1);
?>