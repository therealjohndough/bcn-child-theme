<?php
/**
 * BCN Team Members Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'bcn-team-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'team';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

// Load values.
$section_heading = get_field('section_heading') ?: 'Meet the Team';
$section_description = get_field('section_description') ?: '';
$team_members = get_field('team_members'); // Repeater field

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
    
    <?php if ( $team_members ) : ?>
    <div class="team-grid">
        <?php foreach ( $team_members as $member ) : ?>
        <div class="team-card">
            <?php if ( ! empty( $member['avatar'] ) ) : ?>
            <div class="team-avatar"><?php echo esc_html($member['avatar']); ?></div>
            <?php endif; ?>
            <h3><?php echo esc_html($member['name']); ?></h3>
            <?php if ( ! empty( $member['role'] ) ) : ?>
            <div class="team-role"><?php echo esc_html($member['role']); ?></div>
            <?php endif; ?>
            <?php if ( ! empty( $member['bio'] ) ) : ?>
            <p class="team-bio"><?php echo esc_html($member['bio']); ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php elseif ( $is_preview ) : ?>
        <p style="text-align: center; padding: 2rem;">Add team members in the block settings</p>
    <?php endif; ?>
</section>
