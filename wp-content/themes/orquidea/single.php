<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
        ale_part('blog-left-sidebar');
    } elseif(ale_get_option('blogpages')=='2c-r-fixed') {
        ale_part('blog-right-sidebar');
    } ?>
    <div id="post" class="content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php ale_part('posthead');?>
                <div class="sectionboxtitle wrapper">
                    <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
                    <div class="subtitle bodyfont marginlef1">
                        <?php _e('Posted on','aletheme'); echo " ".get_the_date(); ?> <?php _e('in','aletheme'); ?> <?php the_category(', '); ?>
                    </div>
                </div>
                <div class="topsingle">
                    <div class="divider cusstyle6"></div>
                    <?php if (has_post_format('gallery') == false and has_post_format('video') == false) : ?>
                        <div class="blogitemimage">
                            <?php echo get_the_post_thumbnail($post->ID,'large'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (has_post_format('gallery')) : ?>
                        <div class="postslider ta">
                            <ul class="slides">
                                <?php foreach(ale_get_attached_images() as $image):?>
                                    <li class="slimage"><?php echo wp_get_attachment_image($image->ID, 'large')?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    <?php elseif (has_post_format('video')): ?>
                        <div class="siglepostvide">
                            <?php echo wp_oembed_get(ale_get_meta('videopostlink'), array('width'=>1000)); ?>
                        </div>
                    <?php endif; ?>
                    <div class="divider cusstyle7"></div>
                </div>

                <?php ale_part('postfull');?>

                <div class="cf"></div>
            <?php ale_part('postfooter');?>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>