<?php
/**
 * Router script for PHP built-in server
 * 
 * This script allows WordPress to work with the PHP built-in server
 * by routing all non-file requests to index.php
 */

$root = $_SERVER['DOCUMENT_ROOT'];
$path = '/'.ltrim( parse_url( $_SERVER['REQUEST_URI'] )['path'], '/' );

if ( file_exists( $root.$path ) && is_file( $root.$path ) ) {
    return false; // Serve the file directly
}

// Redirect clean URLs to query parameter
if (!isset($_GET['pagename']) && !isset($_GET['p'])) {
    if (preg_match('/^\/([a-zA-Z0-9-]+)\/?$/', $path, $matches)) {
        if ($matches[1] !== 'wp-admin') {
           $_SERVER['QUERY_STRING'] = 'pagename=' . $matches[1];
           $_GET['pagename'] = $matches[1];
        }
    }
}

include_once 'index.php';
