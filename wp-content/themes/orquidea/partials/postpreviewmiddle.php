<header class="middletumb cf">
    <?php if(is_single()) { ?>
    <div class="posttitle singleposttitle">
        <h2><?php the_title();?></h2>
    </div>
    <?php } ?>
    <?php if (has_post_format('gallery') == false and has_post_format('image') == false and has_post_format('video') == false) : ?>
        <?php if(has_post_thumbnail()){ ?>
            <figure class="tubmapost">
                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                <figcaption class="firstbg">
                    <a href="<?php the_permalink(); ?>" class="headerfont">
                        <span><?php _e('open post', 'aletheme'); ?></span>
                    </a>
                </figcaption>
            </figure>
        <?php } ?>
    <?php endif; ?>
    <?php if (has_post_format('gallery')) : ?>
    <div class="postslider ta">
        <ul class="slides">
            <?php foreach(ale_get_attached_images() as $image):?>
            <li class="slimage"><?php echo wp_get_attachment_image($image->ID, 'medium')?></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php elseif (has_post_format('image')): ?>
        <?php if(has_post_thumbnail()){ ?>
            <figure class="tubmapost">
                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                <figcaption class="firstbg">
                    <a href="<?php the_permalink(); ?>" class="headerfont">
                        <span><?php _e('open post', 'aletheme'); ?></span>
                    </a>
                </figcaption>
            </figure>
        <?php } ?>
    <?php elseif (has_post_format('video')): ?>
    <div class="siglepostvide mediumvideo">
        <?php echo wp_oembed_get(ale_get_meta('videopostlink'), array('width'=>1000)); ?>
    </div>
    <?php endif; ?>
    <?php if(!is_single()) { ?>
    <div class="titleandexcerpt <?php if(!has_post_thumbnail()){ echo 'cusstyle18';} ?>" >
        <div class="posttitle">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
        </div>
        <div class="excertpbox">
            <?php echo the_excerpt(); ?>
        </div>
    </div>
    <?php } ?>
</header>