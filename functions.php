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



//  Language Switcher
function belikenow_language_switcher()
{
    $languages = [
        'en_US' => __('English', 'belikenow-custom-theme'),
        'sr_RS' => __('Srpski', 'belikenow-custom-theme'),
    ];

    $current_locale = determine_locale(); // Gets the current locale.

    echo '<form method="GET">';
    echo '<select name="lang" onchange="this.form.submit();">';
    foreach ($languages as $locale => $label) {
        $selected = $locale === $current_locale ? 'selected' : '';
        echo '<option value="' . esc_attr($locale) . '" ' . esc_attr($selected) . '>';
        echo esc_html($label);
        echo '</option>';
    }
    echo '</select>';
    echo '</form>';
}

function belikenow_set_locale()
{
    if (isset($_GET['lang'])) {
        switch_to_locale(sanitize_text_field($_GET['lang']));
    }
}
add_action('init', 'belikenow_set_locale');
