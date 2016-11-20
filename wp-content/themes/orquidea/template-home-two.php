<?php
/*
 * Template name: Home 2
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

    <section class="opentime wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php _e('Opening Time','aletheme'); ?></div>
            <div class="subtitle bodyfont"><?php echo ale_get_option('openingsubtitle'); ?></div>
        </div>
        <div class="timelinebox cf">
            <ul class="timelineopening">
                <li>
                    <div class="roundbox" data-fadetime="1">
                        <span class="dayname headerfont"><?php echo ale_get_option('day1'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon1'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime1'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox" data-fadetime="2">
                        <span class="dayname headerfont"><?php echo ale_get_option('day2'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon2'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime2'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox" data-fadetime="3">
                        <span class="dayname headerfont"><?php echo ale_get_option('day3'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon3'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime3'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox" data-fadetime="4">
                        <span class="dayname headerfont"><?php echo ale_get_option('day4'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon4'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime4'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox" data-fadetime="5">
                        <span class="dayname headerfont"><?php echo ale_get_option('day5'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon5'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime5'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox greybox" data-fadetime="6">
                        <span class="dayname headerfont"><?php echo ale_get_option('day6'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon6'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime6'); ?>
                    </div>
                </li>
                <li>
                    <div class="roundbox greybox" data-fadetime="7">
                        <span class="dayname headerfont"><?php echo ale_get_option('day7'); ?></span>
                        <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon7'); ?>);"></span>
                    </div>
                    <div class="timetext bodyfont">
                        <?php echo ale_get_option('daytime7'); ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>