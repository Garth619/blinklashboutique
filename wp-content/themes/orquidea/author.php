<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
            ale_part('blog-left-sidebar');
        } elseif(ale_get_option('blogpages')=='2c-r-fixed') {
            ale_part('blog-right-sidebar');
        } ?>
        <div class="content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
            <div class="sectionboxtitle">
                <div class="boxtitle headerfont"><?php _e('Author Archive','aletheme'); ?><</div>
                <div class="subtitle bodyfont"> <?php _e('Author Archive','aletheme'); ?><</div>
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