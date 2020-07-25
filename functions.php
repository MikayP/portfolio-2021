<?php

function main_css(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/library/css/bootstrap.min.css' );
}

function my_scripts() {
    // Register the script like this for a plugin:
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri()  . '/library/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'main_js', get_template_directory_uri()  . '/library/js/main.js', array('jquery'), '1.0', true);
}
add_theme_support( 'menus' );
add_action('wp_enqueue_scripts', 'main_css');
add_action('wp_enqueue_scripts', 'my_scripts');
/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
    add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
    
    function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
    
    /* This function allows you use odd and even classes */
    
    function oddeven_post_class ( $classes ) {
    global $current_class;
    $classes[] = $current_class;
    $current_class = ($current_class == 'odd') ? 'even' : 'odd';
    return $classes;
    }
    add_filter ( 'post_class' , 'oddeven_post_class' );
    global $current_class;
    $current_class = 'odd';

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );



