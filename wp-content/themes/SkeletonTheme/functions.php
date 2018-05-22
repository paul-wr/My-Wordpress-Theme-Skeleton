<?php
function skeleton_script_enqueue(){
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/skeleton.css', array(), '1.0', 'all');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/skeleton.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'skeleton_script_enqueue');

function skeleton_theme_support(){
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'menus' );
    register_nav_menu('primary', 'Prmary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'skeleton_theme_support');

?>