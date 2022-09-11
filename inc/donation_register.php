<?php

function donation_post_type_init()
{
    $labels = array(
        'name'                  => _x('Donations', 'Post type general name', 'recipe'),
        'singular_name'         => _x('Donation', 'Post type singular name', 'recipe'),
        'menu_name'             => _x('Dontions', 'Admin Menu text', 'recipe'),
        'name_admin_bar'        => _x('Donation', 'Add New on Toolbar', 'recipe'),
        'add_new'               => __('Add New', 'recipe'),
        'add_new_item'          => __('Add New Donation', 'recipe'),
        'new_item'              => __('New Donation', 'recipe'),
        'edit_item'             => __('Edit Donation', 'recipe'),
        'view_item'             => __('View Donation', 'recipe'),
        'all_items'             => __('All Donation', 'recipe'),
        'search_items'          => __('Search Donation', 'recipe'),
        'parent_item_colon'     => __('Parent Donation:', 'recipe'),
        'not_found'             => __('No Donation found.', 'recipe'),
        'not_found_in_trash'    => __('No Donation found in Trash.', 'recipe'),
        'featured_image'        => _x('Donation Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe'),
        'archives'              => _x('Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe'),
        'insert_into_item'      => _x('Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe'),
        'uploaded_to_this_item' => _x('Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe'),
        'filter_items_list'     => _x('Filter Donation list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe'),
        'items_list_navigation' => _x('Donation list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe'),
        'items_list'            => _x('Donation list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Donation custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'donation'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'           => 'dashicons-sos',
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array(),
        'show_in_rest'       => true
    );

    register_post_type('Donation', $args);
}
add_action('init', 'donation_post_type_init');



function tr_create_my_taxonomy()
{

    register_taxonomy(
        'donation-category',
        'donation',
        array(
            'label' => __('Donation Categories'),
            'rewrite' => array('slug' => 'donation-category'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'tr_create_my_taxonomy');
