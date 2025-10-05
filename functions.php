<?php
/**
 * BCN Child Theme Functions
 * 
 * Enqueues parent and child theme styles
 */

// Enqueue parent and child theme styles
function bcn_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue child theme stylesheet
    wp_enqueue_style( 'bcn-child-style', get_stylesheet_uri(), array('astra-parent-style'), '1.0.0' );
    
    // Enqueue custom project styles
    wp_enqueue_style( 'bcn-project-style', get_stylesheet_directory_uri() . '/project.css', array('bcn-child-style'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'bcn_enqueue_styles', 15 );
