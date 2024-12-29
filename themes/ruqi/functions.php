<?php
function themosque_theme_setup()
{
    // Add default WordPress supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('automatic-feed-links');
    add_theme_support('editor-styles');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'themosque'),
        'footer' => __('Footer Menu', 'themosque')
    ));
}
add_action('after_setup_theme', 'themosque_theme_setup');

function enqueue_custom_styles_and_scripts()
{
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css', array(), '5.0.0');

    // Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4');

    // Eigene CSS-Datei (falls vorhanden)
    wp_enqueue_style('theme-style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');



function themosque_register_widget_areas()
{
    // Register widget areas
    register_sidebar(array(
        'name' => __('Sidebar', 'themosque'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'themosque'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer', 'themosque'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in your footer.', 'themosque'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'themosque_register_widget_areas');

function themosque_cleanup_wp_head()
{
    // Remove unnecessary links from wp_head
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
}
add_action('init', 'themosque_cleanup_wp_head');

function themosque_custom_logo_setup()
{
    // Custom logo setup
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themosque_custom_logo_setup');

function enqueue_dashicons_for_frontend()
{
    if (!is_admin()) { // Load Dashicons only on the frontend
        wp_enqueue_style('dashicons');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_dashicons_for_frontend');


function hide_admin_bar_for_non_admins()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_non_admins');






?>