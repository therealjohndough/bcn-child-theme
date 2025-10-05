<?php
/**
 * BCN Child Theme Functions
 * 
 * Buffalo Cannabis Network child theme for Astra
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function bcn_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style( 'astra-theme-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->parent()->get('Version') );
    
    // Enqueue child theme style
    wp_enqueue_style( 'bcn-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), wp_get_theme()->get('Version') );
    
    // Enqueue project styles
    wp_enqueue_style( 'bcn-project', get_stylesheet_directory_uri() . '/project.css', array( 'bcn-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'bcn_enqueue_styles', 15 );

/**
 * Register ACF Blocks
 */
function bcn_register_acf_blocks() {
    // Check if ACF function exists
    if ( ! function_exists( 'acf_register_block_type' ) ) {
        return;
    }

    // Hero Section Block
    acf_register_block_type( array(
        'name'              => 'bcn-hero',
        'title'             => __( 'BCN Hero Section' ),
        'description'       => __( 'A hero section with title, subtitle, and CTA buttons' ),
        'render_template'   => 'blocks/hero.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'cover-image',
        'keywords'          => array( 'hero', 'banner', 'cta' ),
        'supports'          => array(
            'align' => array( 'full' ),
            'mode' => true,
            'jsx' => true
        )
    ));

    // Values/Features Grid Block
    acf_register_block_type( array(
        'name'              => 'bcn-values-grid',
        'title'             => __( 'BCN Values Grid' ),
        'description'       => __( 'A grid of value/feature cards' ),
        'render_template'   => 'blocks/values-grid.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'grid-view',
        'keywords'          => array( 'values', 'features', 'grid' ),
        'supports'          => array(
            'align' => true,
            'mode' => true,
            'jsx' => true
        )
    ));

    // Testimonials Block
    acf_register_block_type( array(
        'name'              => 'bcn-testimonials',
        'title'             => __( 'BCN Testimonials' ),
        'description'       => __( 'A grid of testimonial cards' ),
        'render_template'   => 'blocks/testimonials.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'format-quote',
        'keywords'          => array( 'testimonials', 'reviews', 'quotes' ),
        'supports'          => array(
            'align' => true,
            'mode' => true,
            'jsx' => true
        )
    ));

    // Membership Tiers Block
    acf_register_block_type( array(
        'name'              => 'bcn-membership-tiers',
        'title'             => __( 'BCN Membership Tiers' ),
        'description'       => __( 'Display membership tier cards with pricing' ),
        'render_template'   => 'blocks/membership-tiers.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'groups',
        'keywords'          => array( 'membership', 'pricing', 'tiers' ),
        'supports'          => array(
            'align' => true,
            'mode' => true,
            'jsx' => true
        )
    ));

    // Team Members Block
    acf_register_block_type( array(
        'name'              => 'bcn-team',
        'title'             => __( 'BCN Team Members' ),
        'description'       => __( 'Display team member cards' ),
        'render_template'   => 'blocks/team.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'admin-users',
        'keywords'          => array( 'team', 'staff', 'members' ),
        'supports'          => array(
            'align' => true,
            'mode' => true,
            'jsx' => true
        )
    ));

    // Stats Block
    acf_register_block_type( array(
        'name'              => 'bcn-stats',
        'title'             => __( 'BCN Stats' ),
        'description'       => __( 'Display statistics in a grid' ),
        'render_template'   => 'blocks/stats.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'chart-bar',
        'keywords'          => array( 'stats', 'numbers', 'metrics' ),
        'supports'          => array(
            'align' => true,
            'mode' => true,
            'jsx' => true
        )
    ));

    // CTA Section Block
    acf_register_block_type( array(
        'name'              => 'bcn-cta-section',
        'title'             => __( 'BCN CTA Section' ),
        'description'       => __( 'A call-to-action section with heading and buttons' ),
        'render_template'   => 'blocks/cta-section.php',
        'category'          => 'bcn-blocks',
        'icon'              => 'megaphone',
        'keywords'          => array( 'cta', 'call to action', 'button' ),
        'supports'          => array(
            'align' => array( 'full' ),
            'mode' => true,
            'jsx' => true
        )
    ));
}
add_action( 'acf/init', 'bcn_register_acf_blocks' );

/**
 * Register custom block category
 */
function bcn_block_categories( $categories ) {
    return array_merge(
        array(
            array(
                'slug'  => 'bcn-blocks',
                'title' => __( 'BCN Blocks', 'bcn' ),
                'icon'  => 'networking'
            ),
        ),
        $categories
    );
}
add_filter( 'block_categories_all', 'bcn_block_categories', 10, 2 );
