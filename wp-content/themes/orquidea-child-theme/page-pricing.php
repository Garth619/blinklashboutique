<?php
/**
 * Template Name: _Pricing
 */
get_header(); ?>
<!--
<script>
Cufon.replace('.pricing-left div h3 a', {
	fontFamily: 'Honey Script',
	ignoreClass: 'book-it'
	});
Cufon.replace('pricing-left div h3 a',{ignore:{span:true}});
</script>
-->
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">

            <div class="subtitle bodyfont marginlef1">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
            <div class="custompage cf">
            	<div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
	            <div><?php the_field('pricing_main_content') ?></div>
	            
	            
	            
	            
	            <?php if(get_field('classic_lashes_vs_volume_lashes')):?>
	            
	            	<div class="classic_lash">
		            
		            	<div class="boxtitle headerfont marginlef1">Classic Lashes vs Volume lashes</div>
		            
										<?php the_field('classic_lashes_vs_volume_lashes');?>
		            
	            		</div><!-- classic_lash -->
	            
								<?php endif;?>
							
							 <?php if(get_field('lash_lift')):?>
	            
							 	<div class="lash_lift">
		            
		            	<div class="boxtitle headerfont marginlef1">Lash Lift</div>
		            
										<?php the_field('lash_lift');?>
		            
									</div><!-- lash_lift -->
	            
								<?php endif;?>
                
                <div class="pricing-left">

	                <div class="boxtitle headerfont marginlef1">Full Set</div>
	                <div class="fullset"><?php the_field('full_set') ?></div>
	                
	                <div class="boxtitle headerfont marginlef1">Touch ups</div>
	                <div class="touchups"><?php the_field('touch_ups') ?></div>
	                
	                <div class="boxtitle headerfont marginlef1">Bottom Lashes</div>
	                <div class="fullset"><?php the_field('bottom_lashes') ?></div>
	                
	                <!--
<div class="boxtitle headerfont marginlef1">Touch ups</div>
	                <div class="touchups"><?php the_field('bottom_lashes_touch_up') ?></div>
-->
	                
	                <div class="boxtitle headerfont marginlef1">Waxing</div>
	                <div class="waxing"><?php the_field('waxing') ?></div>
	                
                </div> <!-- #pricing-left -->
                
                <div class="pricing-right">
                
                 	<div class="boxtitle headerfont marginlef1">Membership Touch Ups</div>
	                <div class="membership_touch_ups"><?php the_field('membership_touch_ups') ?></div>
	                
	                <div class="boxtitle headerfont marginlef1">Lash Removal and Correction</div>
	                <div class="laser_removal"><?php the_field('lazer_removal_and_correction') ?></div>
	                
                </div> <!-- #pricing-right -->
                
                <div class="pricing-bottom">
                
                  <div class="boxtitle headerfont marginlef1">Book with a Blink Apprentice Stylist</div>
	                <div class="book-with-apprentice"><?php the_field('book_with_apprentice') ?></div>
	                
                </div>
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
        
<script>

jQuery( document ).ready(function() {
	jQuery('<a href="<?php bloginfo('siteurl') ?>/book/"><span class="book-it no-cufon">Book it!</span></a>').appendTo('.pricing-left div h3, .pricing-left div.touchups h3, .pricing-left div.waxing a, .pricing-bottom div.book-with-apprentice a, .pricing-right div.membership_touch_ups a ');

});

</script>


    </section>
<?php get_footer(); ?> 