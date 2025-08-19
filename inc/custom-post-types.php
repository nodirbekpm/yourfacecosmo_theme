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


// Специалисты
function create_specialists_cpt() {
    $labels = array(
        'name'                  => 'Специалисты',
        'singular_name'         => 'Специалист',
        'menu_name'             => 'Специалисты',
        'name_admin_bar'        => 'Специалист',
        'add_new'               => 'Добавить нового',
        'add_new_item'          => 'Добавить нового специалиста',
        'new_item'              => 'Новый специалист',
        'edit_item'             => 'Редактировать специалиста',
        'view_item'             => 'Просмотреть специалиста',
        'all_items'             => 'Все специалисты',
        'search_items'          => 'Искать специалистов',
        'not_found'             => 'Специалисты не найдены',
        'not_found_in_trash'    => 'В корзине специалистов не найдено',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'specialists'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true, // gutenberg va API uchun
    );

    register_post_type('specialists', $args);
}
add_action('init', 'create_specialists_cpt');


// Оборудование (equipments)
function register_equipments_cpt() {

    $labels = array(
        'name'               => 'Оборудование',
        'singular_name'      => 'Оборудование',
        'menu_name'          => 'Оборудование',
        'name_admin_bar'     => 'Оборудование',
        'add_new'            => 'Добавить оборудование',
        'add_new_item'       => 'Добавить новое оборудование',
        'edit_item'          => 'Редактировать оборудование',
        'new_item'           => 'Новое оборудование',
        'view_item'          => 'Просмотр оборудования',
        'search_items'       => 'Поиск оборудования',
        'not_found'          => 'Оборудование не найдено',
        'not_found_in_trash' => 'В корзине оборудования не найдено',
        'all_items'          => 'Все оборудование',
    );

    $args = array(
        'label'               => 'Оборудование',
        'labels'              => $labels,
        'public'              => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-hammer',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'equipments'),
        'show_in_rest'        => true, // Gutenberg va API uchun
    );

    register_post_type('equipments', $args);
}
add_action('init', 'register_equipments_cpt');


// Reviews (Отзывы)
function create_reviews_post_type() {
    $labels = array(
        'name'               => 'Отзывы',
        'singular_name'      => 'Отзыв',
        'menu_name'          => 'Отзывы',
        'name_admin_bar'     => 'Отзыв',
        'add_new'            => 'Добавить новый',
        'add_new_item'       => 'Добавить новый отзыв',
        'new_item'           => 'Новый отзыв',
        'edit_item'          => 'Редактировать отзыв',
        'view_item'          => 'Просмотреть отзыв',
        'all_items'          => 'Все отзывы',
        'search_items'       => 'Искать отзывы',
        'parent_item_colon'  => 'Родительские отзывы:',
        'not_found'          => 'Отзывы не найдены.',
        'not_found_in_trash' => 'В корзине отзывов не найдено.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'reviews'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-format-chat',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('reviews', $args);
}
add_action('init', 'create_reviews_post_type');

