<?php
/**
 * Template Name: _Business Partners
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
                
								<div class="business-list">

  	<?php if(get_field('partners')): ?>

  		<?php while(the_repeater_field('partners')): ?>
  		<?php $business_image = wp_get_attachment_image_src(get_sub_field('business_image'), 'medium');?>
  			<div class="business-single">
  			
  				<h4><?php the_sub_field('business_name') ?></h4>
  				<p><img src="<?php echo $business_image[0]; ?>" /></p>
  				<p>
	  				<?php the_sub_field('business_description') ?>
  				</p>
  				<p style="color:#F387A7;margin-bottom: 50px;">
	  				<?php the_sub_field('business_offer') ?>
  				</p>
  				
  			</div>
  		<?php endwhile; ?>

  	<?php endif; ?>

</div> <!-- #home-slider -->
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>