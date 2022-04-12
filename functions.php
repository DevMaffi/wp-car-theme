<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Load styles and scripts

add_action('wp_enqueue_scripts', 'car_styles');
add_action('wp_enqueue_scripts', 'car_scripts');

function car_styles()
{
  wp_enqueue_style('watches-style', get_stylesheet_uri());
}

function car_scripts()
{
  $root_dir = 'assets/js';

  wp_enqueue_script('car-vendors', get_template_directory_uri() . "/$root_dir/334.js", array(), null, true);
  wp_enqueue_script('car-index', get_template_directory_uri() . "/$root_dir/index.js", array(), null, true);
}

// Config posts

add_theme_support('post-thumbnails');

// Handle menus

add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_menu_links', 10, 3);

function filter_menu_links($atts, $item, $args)
{
  if ($args->menu === 'Company menu' || $args->menu === 'Information menu') {
    $atts['class'] = 'footer__link';
  }

  return $atts;
}
