<?php
/*
    Theme Functions
*/

// all default theme functions
include_once('inc/default.php');

// theme css and jquery file calling
include_once('inc/enqueue.php');

//theme function call 
include_once('inc/theme_function.php');

// menu register
include_once('inc/menu_register.php');



/**
 * Elementor settings
 */
require get_template_directory() . '/lib/elementor-settings.php';
