<?php
/**
 * BCN Testimonials Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-testimonials-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$section_heading = get_field('section_heading') ?: 'Trusted by Buffalo\'s Cannabis Community';
$section_description = get_field('section_description') ?: 'Real results from real members';
$testimonials = get_field('testimonials'); // Repeater field

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if ( $section_heading || $section_description ) : ?>
    <div class="section-header">
        <?php if ( $section_heading ) : ?>
            <h2><?php echo esc_html($section_heading); ?></h2>
        <?php endif; ?>
        <?php if ( $section_description ) : ?>
            <p><?php echo esc_html($section_description); ?></p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <?php if ( $testimonials ) : ?>
    <div class="testimonial-grid">
        <?php foreach ( $testimonials as $testimonial ) : ?>
        <div class="testimonial-card">
            <p><?php echo esc_html($testimonial['quote']); ?></p>
            <div class="testimonial-author"><?php echo esc_html($testimonial['author']); ?></div>
            <?php if ( ! empty( $testimonial['role'] ) ) : ?>
            <div class="testimonial-role"><?php echo esc_html($testimonial['role']); ?></div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php elseif ( $is_preview ) : ?>
        <p style="text-align: center; padding: 2rem;">Add testimonials in the block settings</p>
    <?php endif; ?>
</section>
