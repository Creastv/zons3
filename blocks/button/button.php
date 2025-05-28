<?php
$link = get_field('button');
if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$btnClass = 'btn-main';
$btnStyle = get_field('styl_buttona');
if ($btnStyle == 1) {
    $btnClass = 'btn-main';
} elseif ($btnStyle == 2) {
    $btnClass = 'btn-rev';
} elseif ($btnStyle == 3) {
    $btnClass = 'btn-main-two';
} elseif ($btnStyle == 4) {
    $btnClass = 'link';
}

$class_name = ' bc-button';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($class_name); ?>">
    <?php if ($link) : ?>
    <a class="<?php echo esc_attr($btnClass); ?>" href="<?php echo esc_url($link_url); ?>"
        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php endif; ?>
</div>