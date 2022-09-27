<?php
// sidebar register function

function jk_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'fayekalvijaki'),
        'id'   => 'sidebar-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'fayekalvijaki'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Widget Area:1', 'fayekalvijaki'),
        'id'   => 'footer-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'fayekalvijaki'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Widget Area:2', 'fayekalvijaki'),
        'id'   => 'footer-2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'fayekalvijaki'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer Widget Area:3', 'fayekalvijaki'),
        'id'   => 'footer-3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'fayekalvijaki'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'jk_widgets_register');
