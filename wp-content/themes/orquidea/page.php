<?php get_header(); ?>
<section class="singleblog wrapper cf">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="sectionboxtitle wrapper">
        <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
        <div class="subtitle bodyfont marginlef1">
            <?php echo ale_get_meta('custompagesub'); ?>
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