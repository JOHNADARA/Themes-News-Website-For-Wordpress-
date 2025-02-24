<?php

// Enqueue styles and scripts
function news_theme_scripts() {
    wp_enqueue_style('news-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'news_theme_scripts');

// Theme setup
function news_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'news-theme'),
    ));

    // Register sidebar
    register_sidebar(array(
        'name' => __('Sidebar', 'news-theme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'news-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('after_setup_theme', 'news_theme_setup');