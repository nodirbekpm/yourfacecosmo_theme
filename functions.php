<?php
/**
 * Theme Functions
 * YourFaceCosmo Custom Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function yourface_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ) );

    add_image_size( 'service_thumb', 400, 300, true );
    add_image_size( 'team_member', 300, 300, true );
}
add_action( 'after_setup_theme', 'yourface_theme_setup' );

/**
 * Skript va stillarni ulash
 */
//function yourface_enqueue_scripts() {
//    wp_enqueue_style( 'yourface-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
//    wp_enqueue_style( 'yourface-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
//    wp_enqueue_script( 'yourface-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
//}
//add_action( 'wp_enqueue_scripts', 'yourface_enqueue_scripts' );

/**
 * Site Settings
*/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'  => 'Site Settings',
        'menu_title'  => 'Site Settings',
        'menu_slug'   => 'site-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}




/**
 * CPT faylini ulash
 */

require get_template_directory() . '/inc/custom-post-types.php';


/**
 * ACF faylini ulash
 */
//require get_template_directory() . '/inc/acf-fields.php';