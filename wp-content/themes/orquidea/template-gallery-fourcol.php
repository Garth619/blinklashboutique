<?php
/**
 * Template Name: Gallery 4 Columns & Filter
 */
get_header(); ?>
    <section class="gallerypage wrapper cf">
        <div class="sectionboxtitle cf">
            <div class="gallerylefttitles">
                <div class="boxtitle headerfont"><?php the_title(); ?></div>
                <div class="subtitle bodyfont"><?php echo ale_get_meta('custompagesub'); ?></div>
            </div>
            <div class="galleryfilterbox">
                <div class="filterbut bodyfont firstbg">
                    <span class="selectedcat">filter by category</span>
                    <span class="opendropcat"></span>
                </div>
                <div class="dropdonwcat">
                    <ul id="filters" class="bodyfont">
                        <li class="cf"><a href="#" class="fil" data-filter="*"><?php _e('show all', 'aletheme')?></a></li>
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
                            echo '<li class="cf"><a href="#" class="fil" data-filter=".'.$cat->slug.'">'.$cat->name.'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="post" class="galleryitems fourcolitems cf pbd-alp-placeholder-1">
            <?php query_posts('&post_type=gallery&posts_per_page=-1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post galitem element <?php $terms = get_the_terms($post->id, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
                    <div class="imagegally">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></a>
                        <div class="mask0"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></div>
                        <div class="mask1"></div>
                        <a class="mask1vs1" href="<?php the_permalink(); ?>"><span class="openbox headerfont cusstyle16">+</span></a>
                        <div class="mask2">
                            <div class="gallytitle headerfont"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>