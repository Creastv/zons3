<?php
$title = get_field('title');
$desc = get_field('description');
$label = get_field('label');
$titleTag = get_field('tag');

$classLink = ' ';
$class_name = 'b-title';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

$id = 'b-title-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?> <?php echo $classLink; ?>">
    <div class="b-title__wrap">
        <?php if ($label): ?>
            <span class="b-title__label"> <?php echo $label; ?></span>
        <?php endif; ?>
        <?php if ($title): ?>
            <<?php echo $titleTag; ?> class="b-title__title"> <?php echo $title; ?></<?php echo $titleTag; ?>>
        <?php endif; ?>
    </div>
    <?php if ($desc): ?>
        <div class="b-title__desc">
            <?php echo $desc; ?>
        </div>
    <?php endif; ?>


</div>