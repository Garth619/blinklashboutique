<section class="full"><?php if (is_single()) : ?>
    <div class="wrapper">
        <div class="cusstyle19">
            <?php ale_part('postcontent');?>
        </div>
    </div>
    <div class="divider cf" style="margin-bottom: 40px; margin-top: 40px;"></div>
    <div class="wrapper cf">
        <div class="cusstyle19">
            <?php comments_template(); ?>
        </div>
    </div>
<?php endif; ?></section>