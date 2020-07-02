<?php
add_action( 'wp_enqueue_scripts', 'sdf_enqueue_styles' );
function sdf_enqueue_styles() {
 
    $parent_style = 'charity-help-lite-basic-style-css'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function sdf_setup() {
    add_theme_support( 'align-wide' );
  }
  add_action( 'after_setup_theme', 'sdf_setup' );

add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');

function translate_text($translated) {
        
     $translated = str_ireplace('Read more',  'Lees verder',  $translated);
        
     return $translated;
}
  
