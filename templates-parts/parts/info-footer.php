<?php

$hastags = get_field('pasek_nad_logotypami', 'options');
$logos = get_field('logotypy', 'options');
$desc = get_field('opis_pod_logotypami', 'options');

$logosPP = get_field('logotypy_pp', 'options');
$descPP = get_field('opis_pod_logotypami_pp', 'options');

$logosPM = get_field('logotypy_pm', 'options');
$descPM = get_field('opis_pod_logotypami_pm', 'options');
?>

<div class="info-partners">
    <?php if ($hastags) : ?>
        <div class="info-partners__hastags">
            <div class="container">
                <?php echo $hastags; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($logos) : ?>
        <div class="info-partners__logos">
            <?php foreach ($logos as $logo) : ?>
                <div class="item">
                    <?php if ($logo['link']): ?>
                        <a href="<?php echo $logo['link']; ?>" target="_blank">
                        <?php endif; ?>
                        <?php if ($logo['logo']): ?>
                            <?php echo $logo['logo']; ?>
                        <?php endif; ?>
                        <?php if ($logo['link']) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($desc) : ?>
        <div class="info-partners__desc"><?php echo $desc; ?></div>
    <?php endif; ?>


    <?php if ($logosPP) : ?>
        <div class="info-partners__logos">
            <?php foreach ($logosPP as $logo) : ?>
                <div class="item">
                    <?php if ($logo['link']): ?>
                        <a href="<?php echo $logo['link']; ?>" target="_blank">
                        <?php endif; ?>
                        <?php if ($logo['logo']): ?>
                            <?php echo $logo['logo']; ?>
                        <?php endif; ?>
                        <?php if ($logo['link']) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($descPP) : ?>
        <div class="info-partners__desc"><?php echo $descPP; ?></div>
    <?php endif; ?>



    <?php if ($logosPM) : ?>
        <div class="info-partners__logos">
            <?php foreach ($logosPM as $logo) : ?>
                <div class="item">
                    <?php if ($logo['link']): ?>
                        <a href="<?php echo $logo['link']; ?>" target="_blank">
                        <?php endif; ?>
                        <?php if ($logo['logo']): ?>
                            <?php echo $logo['logo']; ?>
                        <?php endif; ?>
                        <?php if ($logo['link']) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($descPM) : ?>
        <div class="info-partners__desc"><?php echo $descPM; ?></div>
    <?php endif; ?>
</div>