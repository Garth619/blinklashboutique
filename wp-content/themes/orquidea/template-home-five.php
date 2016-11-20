<?php
/*
 * Template name: Home 5
 */

get_header(); ?>


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


<?php wp_reset_query(); ?>


    <section class="servicesbox wrapper cf">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php _e('Our Services','aletheme'); ?></div>
            <div class="subtitle bodyfont"><?php echo ale_get_option('servicessubtitle'); ?></div>
        </div>
        <div class="servicehomebox cf">
            <ul class="serviceslist grid cs-style-4">
                <li data-fadetime="1">
                    <div class="titleservice hidetitle headerfont">
                        <?php echo ale_get_option('servicesbox1'); ?>
                    </div>

                    <figure class="imageservice imageservicerot">
                        <div><a href="<?php echo ale_get_option('servicesboxlink1'); ?>"><img src="<?php echo ale_get_option('servicesboximage1'); ?>" alt="image" /></a></div>
                        <figcaption>
                            <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_option('servicesboxtitle1'),20); ?></div>
                            <div class="descrtext cusstyle5">
                                <?php echo ale_get_option('servicesboxtext1'); ?>
                            </div>
                            <a href="<?php echo ale_get_option('servicesboxlink1'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                        </figcaption>
                    </figure>

                    <div class="descrtitle bodyfont">
                        <a href="<?php echo ale_get_option('servicesboxlink1'); ?>"><?php echo ale_get_option('servicesboxtitle1'); ?></a>
                    </div>
                    <div class="descrtext">
                        <?php echo ale_get_option('servicesboxtext1'); ?>
                    </div>
                </li>

                <li  data-fadetime="2">
                    <div class="titleservice showtitle headerfont">
                        <?php echo ale_get_option('servicesbox2'); ?>
                    </div>
                    <figure class="imageservice">
                        <div><a href="<?php echo ale_get_option('servicesboxlink2'); ?>"><img src="<?php echo ale_get_option('servicesboximage2'); ?>" alt="image" /></a></div>
                        <figcaption>
                            <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_option('servicesboxtitle2'),20); ?></div>
                            <div class="descrtext cusstyle5">
                                <?php echo ale_get_option('servicesboxtext2'); ?>
                            </div>
                            <a href="<?php echo ale_get_option('servicesboxlink2'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                        </figcaption>
                    </figure>
                    <div class="descrtitle bodyfont">
                        <a href="<?php echo ale_get_option('servicesboxlink2'); ?>"><?php echo ale_get_option('servicesboxtitle2'); ?></a>
                    </div>
                    <div class="descrtext">
                        <?php echo ale_get_option('servicesboxtext2'); ?>
                    </div>
                </li>

                <li  data-fadetime="3">
                    <div class="titleservice showtitle headerfont">
                        <?php echo ale_get_option('servicesbox3'); ?>
                    </div>
                    <figure class="imageservice">
                        <div><a href="<?php echo ale_get_option('servicesboxlink3'); ?>"><img src="<?php echo ale_get_option('servicesboximage3'); ?>" alt="image" /></a></div>
                        <figcaption>
                            <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_option('servicesboxtitle3'),20); ?></div>
                            <div class="descrtext cusstyle5">
                                <?php echo ale_get_option('servicesboxtext3'); ?>
                            </div>
                            <a href="<?php echo ale_get_option('servicesboxlink3'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                        </figcaption>
                    </figure>
                    <div class="descrtitle bodyfont">
                        <a href="<?php echo ale_get_option('servicesboxlink3'); ?>"><?php echo ale_get_option('servicesboxtitle3'); ?></a>
                    </div>
                    <div class="descrtext">
                        <?php echo ale_get_option('servicesboxtext3'); ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>

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

<?php get_footer(); ?>