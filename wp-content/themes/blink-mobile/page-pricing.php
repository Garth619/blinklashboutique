<?php
/*
 * Template name: _Pricing
 */


get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<p>
				At Blink Lash Boutique we believe that everyone deserves the most customized look for their own beautiful eyes! 
			</p>
			<p>
				<a class="bookit" href="<?php bloginfo('siteurl') ?>/book">Book an Appointment</a>
			</p>
			
			<div id="pricing-wrap">
				
				
				<?php if(get_field('classic_lashes_vs_volume_lashes')):?>
				
				<div id="classic_lash" class="price-box">
					<a class="toggle" href="#classic_lash">Classic Lashes vs Volume lashes <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('classic_lashes_vs_volume_lashes');?></div>
						
						<div style="clear:both"></div>
						
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<?php endif;?>
				
			
				<div id="fullset" class="price-box">
					<a class="toggle" href="#fullset">Full Set <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('full_set') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<div id="touchups" class="price-box">
					<a class="toggle" href="#touchups">Touch ups <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('touch_ups') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<?php if(get_field('lash_lift')):?>
				
				<div id="lash_lift" class="price-box">
					<a class="toggle" href="#lash_lift">Lash Lift <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset">
							
							
							<?php the_field('lash_lift') ?>
							
							<?php if(get_field('lash_lift_prices')): ?>
										
											<table>
												<tbody>
										 
												<?php while(has_sub_field('lash_lift_prices')): ?>
										 
												
													
													<tr>
														<td width="400px" height="65px">
															<h3><strong><?php the_sub_field('title');?></strong></h3>
														</td>
														<td width="20%"><?php the_sub_field('prices');?></td>
													</tr>
	
										    
												<?php endwhile; ?>
											
											</tbody>
										</table>
										 
										<?php endif; ?>
						
						
						</div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<?php endif; ?>
				
				
				<div id="waxing" class="price-box">
					<a class="toggle" href="#waxing">Waxing <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('waxing') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<div id="membership" class="price-box">
					<a class="toggle" href="#membership">Membership<br> Touch Ups <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('membership_touch_ups') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<div id="lazer" class="price-box">
					<a class="toggle" href="#lazer">Lash Removal<br> and Correction <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('lazer_removal_and_correction') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
				<div id="apprentice" class="price-box">
					<a class="toggle" href="#apprentice">Book with a Blink<br> Apprentice Stylist <img src="<?php bloginfo('template_url') ?>/images/pricing-plus.jpg"/></a>
					<div class="pricing-content">
						<div class="fullset"><?php the_field('book_with_apprentice') ?></div>
					</div> <!-- .pricing-content -->
				</div> <!-- .price-box -->
				
			</div> <!-- .pricing-wrap -->

			</div><!-- #content -->
		</div><!-- #container -->


<script>

jQuery( ".pricing-content" ).hide();


var open = jQuery('.toggle'),
    a = jQuery('div').find('a');

console.log(a.hasClass('active'));

open.click(function(e){
    e.preventDefault();
    var $this = jQuery(this),
        speed = 500;
    if($this.hasClass('active') === true) {
        $this.removeClass('active').next('.pricing-content').slideUp(speed);
    } else if(a.hasClass('active') === false) {
        $this.addClass('active').next('.pricing-content').slideDown(speed);
    } else {
        a.removeClass('active').next('.pricing-content').slideUp(speed);
        $this.addClass('active').next('.pricing-content').delay(speed).slideDown(speed);
    }
});

</script>	

<script>

jQuery( document ).ready(function() {
	jQuery('<a href="<?php bloginfo('siteurl') ?>/book/"><span class="book-it no-cufon">Book it!</span></a>').appendTo('.pricing-left div h3, .pricing-left div.touchups h3, .pricing-left div.waxing a, .pricing-bottom div.book-with-apprentice a, .pricing-right div.membership_touch_ups a ');

});

</script>
	


<?php get_footer(); ?>
