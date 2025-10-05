<?php
/**
 * BCN CTA Section Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-cta-section-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta-section';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$heading = get_field('heading') ?: 'Ready to Join?';
$description = get_field('description') ?: '';
$primary_button_text = get_field('primary_button_text') ?: 'Get Started';
$primary_button_link = get_field('primary_button_link') ?: '#';
$secondary_button_text = get_field('secondary_button_text');
$secondary_button_link = get_field('secondary_button_link');
$background_color = get_field('background_color') ?: '#4A90E2';

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="cta-content">
        <h2><?php echo esc_html($heading); ?></h2>
        <?php if ( $description ) : ?>
        <p><?php echo esc_html($description); ?></p>
        <?php endif; ?>
        <div class="cta-buttons">
            <a href="<?php echo esc_url($primary_button_link); ?>" class="btn btn-primary"><?php echo esc_html($primary_button_text); ?></a>
            <?php if ( $secondary_button_text && $secondary_button_link ) : ?>
            <a href="<?php echo esc_url($secondary_button_link); ?>" class="btn btn-secondary"><?php echo esc_html($secondary_button_text); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
