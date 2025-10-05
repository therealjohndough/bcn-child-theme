<?php
/**
 * Template Name: BCN Contact Page
 * Description: Buffalo Cannabis Network branded contact template for Astra child theme.
 * 
 * This template uses Gutenberg blocks for content management.
 * Add BCN blocks from the editor to build your page.
 */
get_header(); ?>

<main id="main" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
