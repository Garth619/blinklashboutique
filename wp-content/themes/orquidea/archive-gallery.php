<?php get_header(); ?>
<section class="gallerypage wrapper cf">
    <div class="sectionboxtitle cf">
        <div class="gallerylefttitles">
            <div class="boxtitle headerfont"> <?php _e('Our Gallery', 'aletheme'); ?></div>
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
<?php get_footer(); ?>