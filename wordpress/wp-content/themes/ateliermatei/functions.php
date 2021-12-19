<?php

add_action('after_setup_theme', 'atelier_features');
function atelier_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


add_action('wp_enqueue_scripts', 'atelier_files');
function atelier_files() {
    wp_enqueue_script('main-atelier-js', get_theme_file_uri('/build/index.js'), '1.0', true);
    wp_enqueue_style('main-atelier-styles', get_theme_file_uri('/build/index.css'));
}

