<?php
function jk_css_js_file_calling()
{
    wp_enqueue_style('jk-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), '5.0.2', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '5.0.2', 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css', array(), '5.0.2', 'all');
    wp_enqueue_style('swiper.min', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.4.1', 'all');
    wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '5.0.2', 'all');
    wp_enqueue_style('jquery.bootstrap-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css', array(), '5.0.2', 'all');
    wp_enqueue_style('color', get_template_directory_uri() . '/assets/css/color.css', array(), '5.0.2', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '5.0.2', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '5.0.2', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '5.0.2', 'all');

    // wp_enqueue_style('jk-style', 'font-awesome-all', 'flaticon', 'owl', 'bootstrap', 'jquery.fancybox.min', 'animate', 'jquery.bootstrap-touchspin', 'color', 'style', 'responsive');

    // jquery
    // wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '5.0.2', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '5.0.2', true);
    wp_enqueue_script('popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js.js', array(), '5.0.2', true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', array(), '5.0.2', true);
    wp_enqueue_script('swiper.min', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '5.0.2', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '5.0.2', true);
    wp_enqueue_script('validation', get_template_directory_uri() . '/assets/js/validation.js', array(), '5.0.2', true);
    wp_enqueue_script('jquery.fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array(), '5.0.2', true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.js', array(), '5.0.2', true);
    wp_enqueue_script('scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', array(), '5.0.2', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array(), '5.0.2', true);
    wp_enqueue_script('nav-tool', get_template_directory_uri() . '/assets/js/nav-tool.js', array(), '5.0.2', true);
    wp_enqueue_script('jquery.bootstrap-touchspin', get_template_directory_uri() . '/assets/js/jquery.bootstrap-touchspin.js', array(), '5.0.2', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), '5.0.2', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), '5.0.2', true);
    wp_enqueue_script('text_animation', get_template_directory_uri() . '/assets/js/text_animation.js', array(), '5.0.2', true);
    wp_enqueue_script('jquery.nice-select.min', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '5.0.2', true);
}
add_action('wp_enqueue_scripts', 'jk_css_js_file_calling');

// google fonts enqueue scripts

function jk_add_google_fonts()
{
    wp_enqueue_style('jk_google_fonts', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=PT+Sans:wght@700&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'jk_add_google_fonts');
