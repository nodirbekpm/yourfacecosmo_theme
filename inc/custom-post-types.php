<?php
/**
 * Custom Post Types
 */

// Xizmatlar
function yourface_register_services_cpt() {
    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'add_new'            => 'Add New Service',
        'all_items'          => 'All Services',
        'add_new_item'       => 'Add New Service',
        'edit_item'          => 'Edit Service',
        'new_item'           => 'New Service',
        'view_item'          => 'View Service',
        'search_items'       => 'Search Services',
        'not_found'          => 'No Services Found',
        'not_found_in_trash' => 'No Services Found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'            => array( 'slug' => 'services' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'yourface_register_services_cpt' );


// Yana boshqa CPT larni shu faylga qo‘shish mumkin
// Masalan: Team, Testimonials va h.k.
