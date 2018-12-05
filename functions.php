<?php
// CSS and Scripts
function wp_load_scripts()
{
    // 	Carregando CSS header
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');

    // 	Carregando Scripts header
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wp_load_scripts');

?>
