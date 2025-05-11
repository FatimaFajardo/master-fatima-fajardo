<?php 
$plantillas = __DIR__ . '/plantillitas/';
 

function tresposts(){
    $plantillas = __DIR__ . '/plantillitas/';
    include $plantillas . 'tres-posts.php';
    
}
add_shortcode('lastposts', 'tresposts'); /*nombre + funcion*/

// Borrar sitemap por defecto
add_filter('wp_sitemaps_enabled', '__return_false' );
if (has_action('init', 'wp_sitemaps_get_server')) {
    remove_action('init', 'wp_sitemaps_get_server');
}
?>
