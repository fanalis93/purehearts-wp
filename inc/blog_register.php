<?php

function blog_post_type_init()
{
    $labels = array(
        'name'                  => _x('Blogs', 'Post type general name', 'blogs'),
        'singular_name'         => _x('Blog', 'Post type singular name', 'blogs'),
        'menu_name'             => _x('Blogs', 'Admin Menu text', 'blogs'),
        'name_admin_bar'        => _x('Blog', 'Add New on Toolbar', 'blogs'),
        'add_new'               => __('Add New', 'blogs'),
        'add_new_item'          => __('Add New Blog', 'blogs'),
        'new_item'              => __('New Blog', 'blogs'),
        'edit_item'             => __('Edit Blog', 'blogs'),
        'view_item'             => __('View Blog', 'blogs'),
        'all_items'             => __('All Blog', 'blogs'),
        'search_items'          => __('Search Blog', 'blogs'),
        'parent_item_colon'     => __('Parent Blog:', 'blogs'),
        'not_found'             => __('No Blog found.', 'blogs'),
        'not_found_in_trash'    => __('No Blog found in Trash.', 'blogs'),
        'featured_image'        => _x('Blog Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blogs'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blogs'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blogs'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blogs'),
        'archives'              => _x('blog archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blogs'),
        'insert_into_item'      => _x('Insert into blog', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blogs'),
        'uploaded_to_this_item' => _x('Uploaded to this blog', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blogs'),
        'filter_items_list'     => _x('Filter blog list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blogs'),
        'items_list_navigation' => _x('Blog list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blogs'),
        'items_list'            => _x('Blog list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blogs'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Blog custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'blogs'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'           => 'dashicons-sos',
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array(),
        'show_in_rest'       => true
    );

    register_post_type('Blog', $args);
}
add_action('init', 'blog_post_type_init');



function create_my_blog_taxonomy()
{

    register_taxonomy(
        'blog-category',
        'blogs',
        array(
            'label' => __('Blog Categories'),
            'rewrite' => array('slug' => 'blog-category'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_my_blog_taxonomy');
