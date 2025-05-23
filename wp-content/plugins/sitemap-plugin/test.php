<?php
/*
Plugin Name: Sitemap Plugin
Plugin URI: https://example.com/sitemap-plugin
Descrtiption: Ejerccicio sitemap
Author: Fátima
Author URI: https://example.com
Version: 1.0
License: GPLV2
*/


// Borrar sitemap por defecto
add_filter('wp_sitemaps_enabled', '__return_false' );
if (has_action('init', 'wp_sitemaps_get_server')) {
    remove_action('init', 'wp_sitemaps_get_server');
}
?>

