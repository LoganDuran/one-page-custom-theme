<?php

function my_theme_enqueue_styles()
{
    wp_enqueue_style('main-styles', get_stylesheet_uri('style.css'));
    wp_enqueue_script('my-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


if (is_user_logged_in()) {
    add_filter('show_admin_bar', '__return_true');
}



//  Load translations
function belikenow_load_theme_textdomain()
{
    load_theme_textdomain('belikenow-custom-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'belikenow_load_theme_textdomain');
