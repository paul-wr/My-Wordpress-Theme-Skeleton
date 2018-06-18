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
    
    add_theme_support('custom-background');
    
    add_theme_support('custom-header');

}
add_action('init', 'skeleton_theme_support');

/*
 ===================
 Sidebar function
 ===================
*/
function my_wp_widget_setup(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</aside>',
    	'before_title'  => '<h1 class="widget-title">',
    	'after_title'   => '</h1>',
        )
    );
}

add_action('widgets_init', 'my_wp_widget_setup');

?>