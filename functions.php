<?php

/*Adding CSS and JS*/

function woocommerce_custom_theme() {
    wp_register_style('custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0');
    wp_register_style('stolzl_cdn', 'https://use.typekit.net/bjt7zcc.css', false, '1.0.0');
    wp_register_style('playfair_cdn', 'href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"', false, '1.0.0');

    wp_enqueue_style('custom_css');
    wp_enqueue_style('stolzl_cdn');
    wp_enqueue_style('playfair_cdn');

    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'woocommerce_custom_theme');

/*Custom Menu*/

function woocommerce_custom_menu() {
    register_nav_menu('top_menu',__('WooCommerce Custom Menu', 'woocommercecustommenu'));

}

add_action('init', 'woocommerce_custom_menu');

/*Woocommerce*/

if (class_exists('WooCommerce')) {

    function masktheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    add_action('after_setup_theme', 'masktheme_add_woocommerce_support');


    /*remove title*/

    add_filter('woocommerce_show_page_title', '__return_false');

    // add support

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

