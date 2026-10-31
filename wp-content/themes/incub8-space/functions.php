<?php
/** Incub8 Space theme bootstrap. */
function incub8_space_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => __('Primary navigation', 'incub8-space')));
}
add_action('after_setup_theme', 'incub8_space_setup');
function incub8_space_assets() {
    wp_enqueue_style('incub8-space', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('incub8-space-nav', get_template_directory_uri() . '/assets/navigation.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'incub8_space_assets');
function incub8_space_fallback_menu() {
    echo '<ul class="primary-nav" id="primary-nav">';
    foreach (array('Home' => home_url('/'), 'Workspaces' => home_url('/workspaces/'), 'Stories' => home_url('/stories/'), 'Contact' => home_url('/contact/')) as $label => $url) {
        printf('<li><a href="%s">%s</a></li>', esc_url($url), esc_html($label));
    }
    echo '</ul>';
}
