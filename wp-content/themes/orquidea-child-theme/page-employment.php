<?php
/**
 * Template Name: _Employment
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
        
           
            <div class="custompage cf">
                <div class="boxtitle headerfont marginlef1"><?php the_title(); ?></div>
                <div class="subtitle bodyfont marginlef1"><?php echo ale_get_meta('custompagesub'); ?></div>  
                
                <div class="employment-wrap">
                	<div class="employment-left">
                	   <?php the_content(); ?>
                	</div>
                	
                	<div class="employment-right">
                	 <?php the_post_thumbnail( ); ?> 
                	</div>
                </div>
                
                <div class="clearboth">
	                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                </div>
                   

                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>