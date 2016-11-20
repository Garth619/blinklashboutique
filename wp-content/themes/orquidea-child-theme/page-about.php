<?php
/**
 * Template Name: _About us
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
        		<div class="banner">
	        		<img src="<?php the_field('about_banner') ?>"/>
        		</div>

            <div class="subtitle bodyfont marginlef1">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
            <div class="custompage cf">
                
                <div class="about-left">
                            <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
	                <?php the_field('about_section') ?>
                </div>
                
                <div class="about-right">
                 <div class="boxtitle headerfont marginlef1"> Our Mission</div>
	                <?php the_field('our_mission') ?>
                </div>
                
                
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>