<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
            ale_part('blog-left-sidebar');
        } elseif(ale_get_option('blogpages')=='2c-r-fixed') {
            ale_part('blog-right-sidebar');
        } ?>
        <div class="content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
            <div class="sectionboxtitle">
                <div class="boxtitle headerfont">
                    <?php if ( is_day() ) : ?>
                        <?php printf( __( 'Daily Archives: <span>%s</span>', 'aletheme' ), get_the_date() ); ?>
                    <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Monthly Archives: <span>%s</span>', 'aletheme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'aletheme' ) ) ); ?>
                    <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Yearly Archives: <span>%s</span>', 'aletheme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'aletheme' ) ) ); ?>
                    <?php else : ?>
                        <?php _e( 'Blog Archives', 'aletheme' ); ?>
                    <?php endif; ?>
                </div>
                <div class="subtitle bodyfont"> <?php _e('Our blog archive', 'aletheme'); ?></div>
            </div>
            <div id="post" class="blogarchive cf">
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
