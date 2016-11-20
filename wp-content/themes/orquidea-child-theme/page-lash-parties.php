<?php
/**
 * Template Name: _Lash Parties
 */
get_header(); ?>

		<?php 
 
		  $lashparty_sideimg_1 = get_field('lashparty_sideimg_1');
		  $lashparty_sideimg_2 = get_field('lashparty_sideimg_2');
		  $lashparty_sideimg_3 = get_field('lashparty_sideimg_3');
		  $size = 'medium'; // (thumbnail, medium, large, full or custom size)
		   
		?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
        
        <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
        <div class="subtitle bodyfont marginlef1">
            <?php echo ale_get_meta('custompagesub'); ?>
        </div>
            <div class="custompage cf">
                
                <div class="lash-party-left">
	                <?php the_content() ?>
                </div>
                
                <div class="lash-party-right">
                
                 <div class="sidebar-image-1">
	                 <?php
											if(get_field('lashparty_sideimg_1'))
										{
											echo wp_get_attachment_image( $lashparty_sideimg_1, $size );
										}
									 ?>

                 </div>
                 
                 <div class="sidebar-image-2">
	                 <?php
											if(get_field('lashparty_sideimg_2'))
										{
											echo wp_get_attachment_image( $lashparty_sideimg_2, $size );
										}
									 ?>
                 </div>
                 
                 <div class="sidebar-image-3">
	                 <?php
											if(get_field('lashparty_sideimg_3'))
										{
											echo wp_get_attachment_image( $lashparty_sideimg_3, $size );
										}
									 ?>
                 </div>
                 
                </div>
                
                
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>