<?php
/**
 * Template Name: _Services
 */
get_header(); ?>

    <section class="singleblog wrapper cf">
        <div class="sectionboxtitle wrapper">
					<div class="services intro">
						
						<?php the_field('top_header');?>
						
        </div>
        <div class="clearfix" style="margin-top: 50px;">
        	<div class="one-third">
	        	
	        	<?php the_field('box_1');?>
	      	  
        	</div>
        	<div class="one-third">
	      	  
	      	  <?php the_field('box_2');?>
	      	  
        	</div>
        	<div class="one-third">
	        	
	        	<?php the_field('box_3');?>
	      	  
        	</div>
        </div> <!-- .clearfix -->
        <hr>
				<div class="services-wrap">
					<div class="services-single">
						
						<?php the_field('service_list');?>
						
					</div><!-- .services-single -->
					<div class="services-single">
						<h3>BOTTOM LASHES</h3>
						<p>
							15 lashes per eye  TOUCH UP  10 lashes per eye. <a class="pink" href="<?php bloginfo('url') ?>/pricing/">Pricing</a> 
						</p>
					</div><!-- .services-single -->
				</div><!-- .services-wrap -->
				<hr>
				<div class="clearfix" style="text-align: center;">
					<h3>Additional Services</h3>
					<div class="additional-service">
						<h3>FACIAL WAXING  </h3>
					</div>
					<div class="additional-service bullet">&#8226;</div>
					<div class="additional-service">
						<h3>BROW TINTING</h3>
					</div>
					<div class="additional-service bullet">&#8226;</div>
					<div class="additional-service">
						<h3>LASH TINTING</h3>
					</div>
					<div class="additional-service bullet">&#8226;</div>
					<div class="additional-service">
						<h3>STRIP LASHES</h3>
					</div>
				</div>
				<div style="text-align:center;margin-top: 50px;" class="satisfaction">
					<h3><a href="<?php bloginfo('url') ?>/satisfaction-guarantee/" style="border: 3px solid #f387a7; padding: 10px 20px;">Learn about our satisfaction guarantee!</a></h3>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				

    </section>
<?php get_footer(); ?> 