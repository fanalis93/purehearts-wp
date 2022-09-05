<?php
function register_my_menus()
{
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
            'footer_menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_my_menus');
