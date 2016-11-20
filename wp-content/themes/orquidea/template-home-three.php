<?php
/*
 * Template name: Home 3
 */

get_header(); ?>
    <section class="ourteambox wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php _e('Locations','aletheme'); ?></div>
            <div class="subtitle bodyfont"><?php echo ale_get_option('teamsubtitle'); ?></div>
        </div>
        <ul class="teamlist cf">
            <li style="margin-bottom: 0;">
                <div class="imagebox" data-fadetime="1">
                    <img src="<?php echo ale_get_option('worker1photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_option('worker1'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_option('worker1profes'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_option('worker1title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_option('worker1desc'); ?>
                </div>
            </li>

            <li style="margin-bottom: 0;">
                <div class="imagebox" data-fadetime="2">
                    <img src="<?php echo ale_get_option('worker2photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_option('worker2'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_option('worker2profes'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_option('worker2title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_option('worker2desc'); ?>
                </div>
            </li>

            <li style="margin-bottom: 0;">
                <div class="imagebox" data-fadetime="3">
                    <img src="<?php echo ale_get_option('worker3photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_option('worker3'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_option('worker3profes'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_option('worker3title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_option('worker3desc'); ?>
                </div>
            </li>
        </ul>
    </section>



    <div class="divider"></div>


<?php global $query_string; query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="opentime wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php the_title(); ?></div>
            <div class="subtitle bodyfont"><?php echo ale_get_meta('custompagesub'); ?></div>
        </div>
        <div class="hometextsection">
            <div class="homepagefeatured">
                <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
            </div>
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; else: ?>
    <?php ale_part('notfound')?>
<?php endif; wp_reset_query(); ?>

    <div class="divider"></div>

<?php query_posts('post_type=post&posts_per_page=6'); ?>
    <section class="singleblog wrapper cf">
        <div class="content">
            <div class="sectionboxtitle">
                <div class="boxtitle headerfont"> <?php _e('Recent Posts', 'aletheme'); ?></div>
                <div class="subtitle bodyfont"> <?php _e('Articles about our activity', 'aletheme'); ?></div>
            </div>
            <div id="post" class="blogarchive cf pbd-alp-placeholder-1">
                <div class="boxarchive">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php ale_part('posthead');?>
                        <?php ale_part('postpreview' );?>
                        <?php ale_part('postfooter');?>
                    <?php endwhile; else: ?>
                        <?php ale_part('notfound')?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>