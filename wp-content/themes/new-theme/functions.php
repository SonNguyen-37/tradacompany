<?php 
function newtheme_init(){
    add_theme_support( 'post-thumbnails' );    
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary', 'twentynineteen' ),
            'footer' => __( 'Footer Menu', 'twentynineteen' ),
            'social' => __( 'Social Links Menu', 'twentynineteen' ),
        )
    );
}
add_action( 'after_setup_theme', 'newtheme_init' );

function load_css_script() {
    wp_enqueue_style( 'newtheme_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'load_css_script' );