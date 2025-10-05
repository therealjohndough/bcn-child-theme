<?php
/**
 * BCN Stats Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-stats-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'stats';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$stats = get_field('stats'); // Repeater field

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if ( $stats ) : ?>
    <div class="stats-grid">
        <?php foreach ( $stats as $stat ) : ?>
        <div class="stat-item">
            <h3><?php echo esc_html($stat['number']); ?></h3>
            <p><?php echo esc_html($stat['label']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <?php elseif ( $is_preview ) : ?>
        <p style="text-align: center; padding: 2rem;">Add stats in the block settings</p>
    <?php endif; ?>
</section>
