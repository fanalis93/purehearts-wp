<?php
/*
    Theme Functions
*/

// add_post_type_support('product', 'thumbnail');

add_theme_support('post-thumbnails');

// all default theme functions
include_once('inc/default.php');

// theme css and jquery file calling
include_once('inc/enqueue.php');

//theme function call 
include_once('inc/theme_function.php');

// menu register
include_once('inc/menu_register.php');
include_once('inc/widgets_register.php');



/**
 * Elementor settings
 */
require get_template_directory() . '/lib/elementor-settings.php';



require_once('inc/donation_register.php');
require_once('inc/blog_register.php');
require_once('inc/event_register.php');
require_once('template_part/shortcode.php');

function jk_exclude_qrcode_post_types($post_types)
{
    // $post_types[] = 'page';
    array_push($post_types, 'page');
    array_push($post_types, 'home');
    return $post_types;
}

add_filter('pqrc_excluded_post_types', 'jk_exclude_qrcode_post_types');


function jk_qrcode_dimensions($dimensions)
{
    return '100x100';
}
// add_filter('pqrc_qrcode_dimension', 'jk_qrcode_dimensions');



function jk_settings_country_list($countries)
{
    array_push($countries, 'Spain');
    $countries = array_diff($countries, array('Pakistan', 'India'));
    return $countries;
}
add_filter('pqrc_countries', 'jk_settings_country_list');
