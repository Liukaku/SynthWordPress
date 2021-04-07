<?php

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('customStyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('customStyle');
}


wp_enqueue_script('script', get_template_directory_uri() .  '/assets/js/index.js', false, false, true);

add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menus');

register_nav_menus(

  array(

    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),

  )

);

add_theme_support('post-thumbnails');
add_theme_support('custom-fields');
