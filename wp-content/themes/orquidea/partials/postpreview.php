<header class="blogpreviewbox">
    <?php if (has_post_format('gallery') == false and has_post_format('video') == false) : ?>
        <div class="blogitemimage">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail($post->ID,'post-blog'); ?>
            </a>
        </div>
    <?php endif; ?>
    <?php if (has_post_format('gallery')) : ?>
    <div class="postslider ta">
        <ul class="slides">
            <?php foreach(ale_get_attached_images() as $image):?>
                <li class="slimage"><a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image->ID, 'post-blog')?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php elseif (has_post_format('video')): ?>
        <div class="siglepostvide">
            <?php echo wp_oembed_get(ale_get_meta('videopostlink'), array('width'=>1000)); ?>
        </div>
    <?php endif; ?>

    <div class="blogitemtitle headerfont">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="blogitemdate bodyfont">
        <?php echo get_the_date(); ?>
    </div>
    <div class="blogitemtext">
        <?php the_excerpt(); ?>
    </div>
    <div class="blogitemmore bodyfont">
        <a href="<?php the_permalink(); ?>"><?php _e('Read More','aletheme'); ?></a>
    </div>
</header>