<?php
/*
 * Template name: BLINK Home
 */

get_header(); ?>


<?php global $query_string; query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="opentime wrapper cf">
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


<?php wp_reset_query(); ?>

<?php query_posts('post_type=gallery&posts_per_page=9'); ?>
    <section class="gallerypage wrapper cf">
        <div class="sectionboxtitle cf">
            <div class="gallerylefttitles">
                <div class="boxtitle headerfont"> <?php _e('Recent Galleries', 'aletheme'); ?></div>
                <div class="subtitle bodyfont"> <?php _e('Open a gallery to view all photos', 'aletheme'); ?></div>
            </div>
            <div class="galleryfilterbox">
                <div class="filterbut bodyfont firstbg">
                    <span class="selectedcat">filter by category</span>
                    <span class="opendropcat"></span>
                </div>
                <div class="dropdonwcat">
                    <ul id="filters" class="bodyfont">
                        <li class="cf"><a href="#" class="fil" data-filter="*"><?php _e('show all', 'aletheme')?></a> <a href="<?php echo home_url(); ?>/gallery" class="catlink" target="_blank" title="<?php _e('Open the category in new Tab','aletheme'); ?>"></a></li>
                        <?php $args = array(
                            'type'                     => 'gallery',
                            'child_of'                 => 0,
                            'parent'                   => '',
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => 1,
                            'hierarchical'             => 1,
                            'exclude'                  => '',
                            'include'                  => '',
                            'number'                   => '',
                            'taxonomy'                 => 'gallery-category',
                            'pad_counts'               => false );

                        $categories = get_categories( $args );

                        foreach($categories as $cat){
                            echo '<li class="cf"><a href="#" class="fil" data-filter=".'.$cat->slug.'">'.$cat->name.'</a> <a href="'.home_url().'/gallery-category/'.$cat->slug.'" class="catlink" target="_blank" title="'. __('Open the category in new Tab','aletheme').'"></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="post" class="galleryitems cf pbd-alp-placeholder-1">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post galitem element <?php $terms = get_the_terms($post->id, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
                    <div class="imagegally">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></a>
                        <div class="mask0"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></div>
                        <div class="mask1"></div>
                        <a class="mask1vs1" href="<?php the_permalink(); ?>"><span class="openbox headerfont cusstyle16">+</span></a>
                        <div class="mask2">
                            <div class="gallytitle headerfont"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                            <div class="gallycat bodyfont">
                                <?php
                                $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
                                if($current_category){
                                    foreach($current_category as $curcat){
                                        echo $curcat->name.' ';
                                    }
                                }
                                ?>
                            </div>
                            <div class="gallydate bodyfont">
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </section>

    <div class="divider"></div>
    <section class="ourteambox wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php _e('Locations','aletheme'); ?></div>
            <div class="subtitle bodyfont"><?php echo ale_get_option('teamsubtitle'); ?></div>
        </div>
        <ul class="teamlist cf">
            <li style="margin-bottom: 0;">
                <div class="imagebox" data-fadetime="1">
                    <!-- <img src="<?php echo ale_get_option('worker1photo'); ?>" alt="image" /> -->
                    <img src="<?php bloginfo( 'template_directory' ); ?>/mission-valley-new.jpg" alt="image" />
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
                   <!--  <img src="<?php echo ale_get_option('worker2photo'); ?>" alt="image" /> -->
                    <img src="<?php bloginfo( 'template_directory' ); ?>/sb-new.png" alt="image" />
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
                    665 San Rodolfo Dr. Ste. 108 Solana Beach, CA 92075<?php // echo ale_get_option('worker2desc'); ?>
                </div>
            </li>

            <!--
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
-->
        </ul>
    </section>


<?php get_footer(); ?>