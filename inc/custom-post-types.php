<?php
/**
 * Custom Post Types
 */

// Xizmatlar
// Услуги
function yourface_register_services_cpt() {
    $labels = array(
        'name'               => 'Услуги',
        'singular_name'      => 'Услуга',
        'add_new'            => 'Добавить услугу',
        'all_items'          => 'Все услуги',
        'add_new_item'       => 'Добавить новую услугу',
        'edit_item'          => 'Редактировать услугу',
        'new_item'           => 'Новая услуга',
        'view_item'          => 'Просмотр услуги',
        'search_items'       => 'Искать услуги',
        'not_found'          => 'Услуги не найдены',
        'not_found_in_trash' => 'В корзине услуги не найдены',
        'menu_name'          => 'Услуги',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'rewrite'            => array('slug' => 'services'),
        'show_in_rest'       => true,
    );

    register_post_type('services', $args);
}
add_action('init', 'yourface_register_services_cpt');


// Скидки
function register_discounts_cpt() {
    $labels = array(
        'name'               => 'Скидки',
        'singular_name'      => 'Скидка',
        'menu_name'          => 'Скидки',
        'name_admin_bar'     => 'Скидка',
        'add_new'            => 'Добавить скидку',
        'add_new_item'       => 'Добавить новую скидку',
        'new_item'           => 'Новая скидка',
        'edit_item'          => 'Редактировать скидку',
        'view_item'          => 'Просмотр скидки',
        'all_items'          => 'Все скидки',
        'search_items'       => 'Искать скидки',
        'not_found'          => 'Скидки не найдены',
        'not_found_in_trash' => 'В корзине скидки не найдены',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'discounts'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-tag', // Иконка скидок
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('discounts', $args);
}
add_action('init', 'register_discounts_cpt');

