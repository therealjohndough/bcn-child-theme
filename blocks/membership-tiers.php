<?php
/**
 * BCN Membership Tiers Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-membership-tiers-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'membership-tiers';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$section_heading = get_field('section_heading') ?: 'Membership Tiers';
$section_description = get_field('section_description') ?: 'Choose the membership that fits your professional goals';
$tiers = get_field('tiers'); // Repeater field

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
    
    <?php if ( $tiers ) : ?>
    <div class="tiers-grid">
        <?php foreach ( $tiers as $tier ) : ?>
        <div class="tier-card <?php echo ! empty($tier['is_popular']) ? 'popular' : ''; ?>">
            <?php if ( ! empty($tier['is_popular']) ) : ?>
            <div class="popular-badge">Most Popular</div>
            <?php endif; ?>
            <?php if ( ! empty( $tier['icon'] ) ) : ?>
            <div class="tier-icon"><?php echo esc_html($tier['icon']); ?></div>
            <?php endif; ?>
            <div class="tier-name"><?php echo esc_html($tier['name']); ?></div>
            <div class="tier-price"><?php echo esc_html($tier['price']); ?></div>
            <div class="tier-period"><?php echo esc_html($tier['period']); ?></div>
            <?php if ( ! empty( $tier['description'] ) ) : ?>
            <p class="tier-description"><?php echo esc_html($tier['description']); ?></p>
            <?php endif; ?>
            <?php if ( ! empty( $tier['benefits'] ) ) : 
                $benefits = explode("\n", $tier['benefits']);
            ?>
            <ul class="benefits-list">
                <?php foreach ( $benefits as $benefit ) : 
                    $benefit = trim($benefit);
                    if ( empty($benefit) ) continue;
                ?>
                <li><span class="benefit-check">✓</span> <?php echo esc_html($benefit); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <?php if ( ! empty( $tier['button_text'] ) ) : ?>
            <a href="<?php echo esc_url($tier['button_link'] ?: '#'); ?>" class="btn btn-primary"><?php echo esc_html($tier['button_text']); ?></a>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php elseif ( $is_preview ) : ?>
        <p style="text-align: center; padding: 2rem;">Add membership tiers in the block settings</p>
    <?php endif; ?>
</section>
