<div class="row mt-5">
    <?php
    $image = get_sub_field('image');
    $content = get_sub_field('text');
    $image_side = get_sub_field('image_side');
    ?>
    <?php if ($image_side == 'left'): ?>
        <div class="col">
            <img src="<?php echo $image['sizes']['medium_large'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col">
            <?php echo $content ?>
        </div>
    <?php else: ?>
        <div class="col">
            <?php echo $content ?>
        </div>
        <div class="col">
            <img src="<?php echo $image['sizes']['medium_large'] ?>" class="img-fluid" alt="<?php echo $image['alt'] ?>">
        </div>

    <?php endif; ?>
</div>