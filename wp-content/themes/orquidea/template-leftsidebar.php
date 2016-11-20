<?php
/**
 * Template Name: Left Sidebar
 */
get_header(); ?>
<section class="singleblog wrapper cf">
    <?php ale_part('blog-left-sidebar'); ?>
    <div class="content leftsidebaron">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"> <?php the_title(); ?></div>
            <div class="subtitle bodyfont"> <?php echo ale_get_meta('custompagesub'); ?></div>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="custompage cf">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>