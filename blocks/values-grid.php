<?php
/**
 * BCN Values Grid Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-values-grid-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'values';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$section_heading = get_field('section_heading') ?: 'Our Core Values';
$section_description = get_field('section_description') ?: 'The principles that guide everything we do';
$values = get_field('values'); // Repeater field

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
    
    <?php if ( $values ) : ?>
    <div class="values-grid">
        <?php foreach ( $values as $value ) : ?>
        <div class="value-card">
            <?php if ( ! empty( $value['icon'] ) ) : ?>
            <div class="value-icon"><?php echo esc_html($value['icon']); ?></div>
            <?php endif; ?>
            <h3><?php echo esc_html($value['title']); ?></h3>
            <p><?php echo esc_html($value['description']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <?php elseif ( $is_preview ) : ?>
        <p style="text-align: center; padding: 2rem;">Add value cards in the block settings</p>
    <?php endif; ?>
</section>
