<?php
// Configuration file for Harris Constructions website
// Base URL configuration for Hostinger deployment

// Define the base URL for the website
define('BASE_URL', 'https://harris-constructions.com');

// Define the root path (empty since we're at domain root)
define('ROOT_PATH', '');

// Helper function to get the correct URL
function getUrl($path = '') {
    // Remove leading slash if present
    $path = ltrim($path, '/');
    
    if (empty($path)) {
        return BASE_URL . '/';
    }
    
    return BASE_URL . '/' . $path;
}

// Helper function to get asset URLs (images, CSS, JS)
function getAssetUrl($path) {
    // Remove leading slash if present
    $path = ltrim($path, '/');
    return BASE_URL . '/' . $path;
}

// Helper function to get page URLs
function getPageUrl($page) {
    // Remove leading slash if present
    $page = ltrim($page, '/');
    return BASE_URL . '/' . $page;
}
?>