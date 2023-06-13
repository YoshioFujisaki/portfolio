<?php

function my_enqueue_styles() 
{
  // Bootstrap CSS
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-css-2', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');

  wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css', array(), '0.1', true);
}

function my_enqueue_scripts() 
{
  wp_enqueue_script('script', get_template_directory_uri(). '/assets/js/script.js', array(), '0.1', true);
} 

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');