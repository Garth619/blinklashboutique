<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont" style="margin-left: 15px;"> <?php the_title(); ?></div>
            <div class="subtitle bodyfont" style="margin-left: 15px;">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
            <div class="custompage cf">
                <?php ale_part('posthead');?>
                <p style="text-align: center;">
                    <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'full' ); ?></a>
                </p>
                <?php the_content(); ?>
                <footer>
                    <nav class="prev-next-links cf">
                        <span class="prev"><?php previous_image_link(false, __('Previous Image', 'aletheme')) ?></span> /
                        <span class="next"><?php next_image_link(false, __('Next Image', 'aletheme')) ?></span>
                    </nav>
                </footer>
                <?php ale_part('postfooter');?>
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

    </section>
<?php get_footer(); ?>