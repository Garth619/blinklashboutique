<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont" style="margin-left: 15px;"><?php _e('Archives','aletheme'); ?></div>
            <div class="subtitle bodyfont" style="margin-left: 15px;">
                <?php _e('Archives','aletheme'); ?>
            </div>
            <div class="custompage cf">
                <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

    </section>
<?php get_footer(); ?>