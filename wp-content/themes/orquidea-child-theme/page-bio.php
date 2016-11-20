<?php
/**
 * Template Name: _Bio
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
        	<div class="custompage cf">
        		<div class="bio-tagline">       		       		
        			<?php $tagline_image = wp_get_attachment_image_src(get_field('tagline_image'), 'large'); ?>
							<img src="<?php echo $tagline_image[0]; ?>" alt="<?php echo get_the_title(get_field('tagline_image')) ?>" />									
        		</div> <!-- #bio-tagline -->
        		
        		<div class="bio_image">
	        		<?php $bio_image = wp_get_attachment_image_src(get_field('bio_image'), 'large'); ?>
							<img src="<?php echo $bio_image[0]; ?>" alt="<?php echo get_the_title(get_field('bio_image')) ?>" />
        		</div> <!-- #bio_image -->
        		
        		<div class="bio_quote">
	        		<i><?php the_field('bio_quote') ?></i>
        		</div> <!-- #bio_quote -->
        		
        		<div class="clearboth"></div>
					  <div class="boxtitle headerfont marginlef1"><?php the_title(); ?></div>
            
            <div class="clearboth"></div>
                
            	<div class="bio_content_left_column">
	        			<?php the_field('bio_content_left_column') ?>
							</div> <!-- #bio_quote -->
							
							<div class="bio_content_right_column">
	        			<?php the_field('bio_content_right_column') ?>
							</div> <!-- #bio_quote -->
               
                
            </div> <!-- #custompage -->
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>