<?php
/**
 * WordPress Online Fixer Script
 * Upload this to your website root and visit https://mvh-heritage.fwh.is/fixer.php
 */

require_once('wp-load.php');

echo "<h1>WordPress Fixer</h1>";

// 1. Force Permalink Structure
global $wp_rewrite;
$structure = '/%postname%/';
$wp_rewrite->set_permalink_structure($structure);
update_option('permalink_structure', $structure);
$wp_rewrite->flush_rules(true);

echo "<p>✅ Permalink structure updated to <code>$structure</code> and rules flushed.</p>";

// 2. Check if pages exist and have correct templates
$pages = array('about', 'menu', 'services', 'contact');
foreach ($pages as $slug) {
    $page = get_page_by_path($slug);
    if ($page) {
        echo "<p>✅ Found page: <strong>$slug</strong> (ID: {$page->ID})</p>";
        
        // Ensure template is set if it exists in theme
        $template = "template-$slug.php";
        if (file_exists(get_template_directory() . '/' . $template)) {
            update_post_meta($page->ID, '_wp_page_template', $template);
            echo "--- ✅ Template <code>$template</code> assigned to $slug.</p>";
        }
    } else {
        echo "<p>❌ Page <strong>$slug</strong> NOT found in database. You might need to create it in the dashboard with the slug '$slug'.</p>";
    }
}

// 3. Site URL check
echo "<p>ℹ️ Current Home URL: " . home_url() . "</p>";
echo "<p>ℹ️ Current Site URL: " . site_url() . "</p>";

echo "<h2>Next Steps:</h2>";
echo "<ul>
    <li>Try visiting <a href='/about/'>/about/</a> now.</li>
    <li>If it still shows the homepage, make sure the <code>.htaccess</code> file is uploaded to the root.</li>
    <li>Delete this file (<code>fixer.php</code>) after use for security!</li>
</ul>";
