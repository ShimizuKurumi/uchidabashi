<?php
//cssを追加
function my_style_output()
{
    wp_enqueue_style('reset', 'https://unpkg.com/modern-css-reset/dist/reset.min.css');
    wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'));
    if (!is_front_page()) {
        wp_enqueue_style('sub-style', get_theme_file_uri('/css/firstview_sub.css'));
    }
    if (is_page('event')) {
        wp_enqueue_style('event-style', get_theme_file_uri('/css/event.css'));
    } else if (is_page('store')) {
        wp_enqueue_style('store-style', get_theme_file_uri('/css/store.css'));
    } else if (is_page('about')) {
        wp_enqueue_style('about-style', get_theme_file_uri('/css/about.css'));
    } else if (is_page('openstore')) {
        wp_enqueue_style('openstore-style', get_theme_file_uri('/css/openstore.css'));
    } else if (is_page('access')) {
        wp_enqueue_style('access-style', get_theme_file_uri('/css/access.css'));
    } else if (is_page('faq')) {
        wp_enqueue_style('faq-style', get_theme_file_uri('/css/faq.css'));
    } else if (is_singular('storeinfo')) {
        wp_enqueue_style('storeinfo-style', get_theme_file_uri('/css/storeDetail.css'));
    }
}
add_action('wp_enqueue_scripts', 'my_style_output');


//jsを追加
function my_script_output()
{
    wp_enqueue_script('my-script', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0.0', false);
    if (is_page('openstore')) {
        wp_enqueue_script('openstore-script', get_theme_file_uri('/js/openstore.js'), array('jquery'), '1.0.0', false);
    }
    if (is_front_page()) {
        wp_enqueue_script('home-script', get_theme_file_uri('/js/home.js'), array('jquery'), '1.0.0', false);
    }
}
add_action('wp_enqueue_scripts', 'my_script_output');
