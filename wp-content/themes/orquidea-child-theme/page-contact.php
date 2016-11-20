<?php
/**
 * Template Name: _Contact
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
					  <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>

            <div class="subtitle bodyfont marginlef1">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
            <div class="custompage cf">
                
               <div class="contact-left">
	               <h3>Our Locations:</h3>
	               <div class="contact-location">
		               <?php the_content() ?>
	               </div>
               </div> 
               
               <div class="contact-right">
               	 <h3>Send us a message:</h3>
	               <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
               </div>          
                
               <div class="clearboth"></div>
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>