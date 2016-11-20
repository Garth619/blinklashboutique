<?php
/*
 * Template name: Home 4
 */

get_header(); ?>


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