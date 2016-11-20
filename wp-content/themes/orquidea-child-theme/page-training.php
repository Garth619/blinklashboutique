<?php
/**
 * Template Name: _Training
 */
get_header(); ?>
<section class="singleblog wrapper cf">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="sectionboxtitle wrapper">
    	<div class="multi-banner">
	    	<?php 
 
					$banner_image1 = get_field('training_banner_1');
					$banner_image2 = get_field('training_banner_2');
					$banner_image3 = get_field('training_banner_3');
					$banner_image4 = get_field('training_banner_4');
					$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 
					if( $banner_image1 ) {
					 
						echo wp_get_attachment_image( $banner_image1, $size );
					 
					}
					
					if( $banner_image2 ) {
					 
						echo wp_get_attachment_image( $banner_image2, $size );
					 
					}
					
					if( $banner_image3 ) {
					 
						echo wp_get_attachment_image( $banner_image3, $size );
					 
					}
					
					if( $banner_image4 ) {
					 
						echo wp_get_attachment_image( $banner_image4, $size );
					 
					}
					 
				?>
    	</div>
    	
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