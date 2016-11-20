<?php get_header(); ?>
<section class="singleblog cf">
    <div class="wrapper">
        <div class="sectionboxtitle">
            <div class="boxtitle headerfont"><?php the_title(); ?></div>
            <div class="subtitle bodyfont"><?php _e('Posted on','aletheme'); ?> <?php echo get_the_date(); ?> <?php _e('in','aletheme'); ?>
            <?php
            $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
            if($current_category){
                foreach($current_category as $curcat){
                    echo $curcat->name.' ';
                }
            }
            ?></div>
        </div>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="slidergallery cusstyle13">
        <div class="divider"></div>
        <div class="sliderbox cf">
            <div class="items">
            <?php
            $args = array(
                'post_type' => 'attachment',
                'numberposts' => -1,
                'post_status' => null,
                'order'				=> 'ASC',
                'orderby'			=> 'menu_order ID',
                'meta_query'		=> array(
                    array(
                        'key'		=> '_ale_hide_from_gallery',
                        'value'		=> 0,
                        'type'		=> 'DECIMAL',
                    ),
                ),
                'post_parent' => $post->ID
            );
            $attachments = get_posts( $args );
            if ( $attachments ) {
                foreach ( $attachments as $attachment ) {
                    echo "<div>".wp_get_attachment_image( $attachment->ID, 'gallery-slider' )."</div>";
                }
            }
            ?>
            </div>
        </div>
        <div class="sliderarrows bodyfont cf">
            <div class="ltar cusstyle11">
                <a class="prev browse left">Previous Photo</a> / <a class="next browse right">Next Photo</a>
            </div>
            <div class="rgshare cusstyle14">
                <?php _e('Share','aletheme'); ?>:
                <?php if (ale_get_option('social_sharing')) : ?>
                    <a href="<?php echo ale_get_share('fb'); ?>" class="socic fbicon" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false">Facebook</a> /
                    <a href="<?php echo ale_get_share('twi'); ?>" class="socic twiicon" onclick="window.open(this.href, 'Share on Twitter', 'width=600,height=300'); return false">Twitter</a> /
                    <a href="<?php echo ale_get_share('goglp'); ?>" class="socic gogicon" onclick="window.open(this.href, 'Share on Google+', 'width=600,height=300'); return false">Google+</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="divider"></div>
    </div>
    <div class="textblock">
        <?php the_content(); ?>
    </div>
    <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
    <?php endif; ?>
    <div class="wrapper">
        <div class="viewmoreposts">
            <h3>
                <a href="javascript:history.go(-1)" class="backbut headerfont"><?php _e('Go Back','aletheme'); ?></a>
            </h3>
        </div>
    </div>
</section>
<?php get_footer(); ?>