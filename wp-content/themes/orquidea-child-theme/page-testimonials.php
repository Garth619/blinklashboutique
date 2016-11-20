<?php
/**
 * Template Name: _Testimonials
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
					  <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>

            <div class="custompage cf">
            	
							<div id="testimonial-wrap">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$loopb = new WP_Query( array( 'post_type' => 'testimonials','order' => 'ASC', 'posts_per_page' => 8, 'paged' => $paged ) ); ?>
							<?php while ( $loopb->have_posts() ) : $loopb->the_post(); 
							//display posts
							?>
							
							<div class="testimonial-box item">
							
							<div class="testimonial-meta">
							
							
								<b><?php the_title() ?></b><br>
								<?php the_date(); ?><br>
								<?php the_field('testimonial_reason') ?><br>
							</div>
							
							<p><?php the_field('testimonial_quote') ?></p>
							
							 <?php edit_post_link( ); ?> 
							 
							</div> <!-- #testimonial-box -->
							<?php endwhile; ?>
							
							<!-- Begin pagination -->
							<?php
								if($loopb->max_num_pages>1){?>
							    <p class="cpt-pagination">
							    Page: 
							    <?php
							    for($i=1;$i<=$loopb->max_num_pages;$i++){?>
							        <a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a>
							        <?php
							    }
							    if($paged!=$loopb->max_num_pages){?>
							      
							    <?php } ?>
							    </p>
							<?php } ?>
							<!-- End pageination -->
							  </div>              
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
<script type='text/javascript' src='http://processpeak.com/staging/blink/wp-content/themes/orquidea-child-theme/js/isotope.js'></script>
<script>
	var $container = jQuery('#testimonial-wrap');
// init
$container.isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'masonry'
});
</script>


    </section>
<?php get_footer(); ?>