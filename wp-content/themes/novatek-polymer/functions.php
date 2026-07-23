<?php
/**
 * NOVATEK-POLYMER Theme Functions
 */

function novatek_polymer_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'novatek_polymer_setup');

function novatek_polymer_scripts() {
    wp_enqueue_style('novatek-polymer-style', get_stylesheet_uri());
    wp_enqueue_script('novatek-polymer-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'novatek_polymer_scripts');

// Register menus
function novatek_polymer_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'novatek-polymer'),
        'footer' => __('Footer Menu', 'novatek-polymer'),
    ));
}
add_action('init', 'novatek_polymer_menus');

// Custom Post Types
function novatek_polymer_post_types() {
    register_post_type('product', array(
        'labels' => array('name' => 'Products'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
    
    register_post_type('service', array(
        'labels' => array('name' => 'Services'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'novatek_polymer_post_types');
