<?php
global $query_string;
query_posts($query_string.'&post_type=gallery');
get_header(); ?>
    <section class="gallerypage wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"> <?php _e('Our Gallery', 'aletheme'); ?></div>
            <div class="subtitle bodyfont"> <?php _e('Open a gallery to view all photos', 'aletheme'); ?></div>
        </div>

        <div id="post" class="galleryitems cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post galitem">
                    <div class="imagegally">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></a>
                        <div class="mask0"><?php echo get_the_post_thumbnail($post->ID,'gallery-patrat'); ?></div>
                        <div class="mask1"></div>
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