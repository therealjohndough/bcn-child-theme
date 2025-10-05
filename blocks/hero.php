<?php
/**
 * BCN Hero Section Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-hero-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: 'Building Buffalo\'s Cannabis Future, Together';
$tagline = get_field('tagline') ?: 'Connect. Support. Elevate.';
$subtitle = get_field('subtitle') ?: 'Western New York\'s premier network fostering a thriving, collaborative, and responsible cannabis industry';
$primary_button_text = get_field('primary_button_text') ?: 'Join the Network';
$primary_button_link = get_field('primary_button_link') ?: '#membership';
$secondary_button_text = get_field('secondary_button_text') ?: 'Learn More';
$secondary_button_link = get_field('secondary_button_link') ?: '#about';
$background_color = get_field('background_color') ?: '#4A90E2';

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="hero-content">
        <h1><?php echo esc_html($heading); ?></h1>
        <p class="tagline"><?php echo esc_html($tagline); ?></p>
        <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url($primary_button_link); ?>" class="btn btn-primary"><?php echo esc_html($primary_button_text); ?></a>
            <a href="<?php echo esc_url($secondary_button_link); ?>" class="btn btn-secondary"><?php echo esc_html($secondary_button_text); ?></a>
        </div>
    </div>
</section>
