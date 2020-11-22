<?php

//*** Support Title Tag
add_theme_support( 'title-tag' );

//*** Enqueue FRSkynet Scripts
function frskynet_enqueue_style() {
    // Bootstrap Core CSS
    wp_enqueue_style ('bootstrap_min',get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');

    // Customizable CSS
    wp_enqueue_style ('main',get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    wp_enqueue_style ('blue',get_template_directory_uri() . '/assets/css/blue.css', array(), '1.0');
    wp_enqueue_style ('owl_carousel',get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.3.3');
    wp_enqueue_style ('owl_transitions',get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.3.2');
    wp_enqueue_style ('animate_min',get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0');
    wp_enqueue_style ('rateit',get_template_directory_uri() . '/assets/css/rateit.css', array(), '1.0');
    wp_enqueue_style ('bootstrap_select_min',get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.6.2');

    // Icons/Glyphs
    wp_enqueue_style ('font_awesome',get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0');

    // Theme stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'frskynet_enqueue_style');

function frskynet_enqueue_script() {
    // wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-hover-dropdown.min', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), 1, true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('echo.min', get_template_directory_uri() . '/assets/js/echo.min.js', array(), 1, true);
    wp_enqueue_script('jquery.easing-1.3.min', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), 1, true);
    wp_enqueue_script('jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), 1, true);
    wp_enqueue_script('lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), 1, true);
    wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), 1, true);
}
add_action('wp_enqueue_scripts', 'frskynet_enqueue_script');

//*** Woocommerce Theme Support
add_action  ('after_setup_theme', 'woocommerce_support');
function woocommerce_support() {
    add_theme_support('woocommerce');
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
