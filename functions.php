<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    
    $parent_style = 'parent-style'; // This is 'personal-style' for the Personal theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'child-style', 
    get_stylesheet_directory_uri() . '/rtl.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
);
}
