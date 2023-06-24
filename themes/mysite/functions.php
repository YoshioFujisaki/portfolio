<?php
// Css
function my_enqueue_styles() 
{
  if (is_front_page()) {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
  }
}

// Javascript
function my_enqueue_scripts() 
{
  if (is_front_page()) {
    // Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script('portfolio',get_template_directory_uri() . '/assets/js/portfolio.js',);
  }
} 

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
