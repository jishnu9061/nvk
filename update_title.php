<?php
require(dirname(__FILE__) . '/wp-load.php');

$new_title = "MVK Heritage Foods";
$new_tagline = "Experience the Legacy of Indian Cuisine";

update_option('blogname', $new_title);
update_option('blogdescription', $new_tagline);

echo "Site Title updated to: $new_title\n";
echo "Tagline updated to: $new_tagline\n";
