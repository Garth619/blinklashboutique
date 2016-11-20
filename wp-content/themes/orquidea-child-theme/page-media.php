<?php
/**
 * Template Name: _Media
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
    
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
        	<div class="boxtitle headerfont marginlef1"><?php the_title(); ?></div>
        	<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); // reset the query ?>
				
				
				<?php $media_post_query = new WP_Query( array( 'post_type' => 'media', 'order' => 'DSC','posts_per_page' => 150  ) ); while($media_post_query->have_posts()) : $media_post_query->the_post(); ?>

					
					
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
				
				<?php

					$blogtime = date('Y');
					$prev_limit_year = $blogtime - 1;
					$prev_month = '';
					$prev_year = '';
					
					$args = array(
									 'post_type' => 'media', 
									 'order' => 'DSC',
					         'posts_per_page' => 20,
					         'ignore_sticky_posts' => 1
					);
					
					$postsbymonth = new WP_Query($args);
					
					while($postsbymonth->have_posts()) {
							
							
					    
					    $postsbymonth->the_post();
							echo "<div class='box_media_item'>";
					    if(get_the_time('F') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {
									
					                   echo "<h2>".get_the_time('F, Y')."</h2>\n\n";
					
					        }
					
					    ?>
									<?php the_post_thumbnail( 'thumbnail' ); ?> 
					        <h3><a href="<?php the_field('link') ?>"><?php the_title(); ?></a></h3>
					        <p> by, <?php the_field('Outlet') ?></p>
					         <div class="clearboth"></div>       
					    <?php
							
					    $prev_month = get_the_time('F');
					    $prev_year = get_the_time('Y');
							echo"</div>";
					}
					
				?>
				</div> <!-- #box_media_item -->
        </div> <!-- #wrapper -->



    </section>
<?php get_footer(); ?>