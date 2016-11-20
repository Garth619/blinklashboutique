<?php
/**
 * Template Name: Template About
 */
get_header(); ?>
<section class="singleblog cf">
    <div class="sectionboxtitle wrapper">
        <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
        <div class="subtitle bodyfont marginlef1">
            <?php echo ale_get_meta('custompagesub'); ?>
        </div>
    </div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="slidergallery cusstyle9">
        <div class="divider"></div>
        <div class="sliderbox cf cusstyle10">
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
        </div>
        <div class="divider"></div>
    </div>

    <div class="wrapper">
        <div class="leftpart">
            <div class="boxtitle headerfont"><?php echo _e('INFO','aletheme'); ?></div>
            <div class="subtitle bodyfont">
                <?php _e('Short about us','aletheme'); ?>
            </div>
            <div class="cusstyle12">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="rightpart">
            <div class="boxtitle headerfont"><?php echo ale_get_meta('abouttwoskills'); ?></div>
            <div class="subtitle bodyfont">
                <?php _e('We are professionals','aletheme'); ?>
            </div>
            <ul class="skillul bodyfont">
                <?php if(ale_get_meta('firstskill')){ echo '<li><span class="skititle">'.ale_get_meta('firstskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('firstskillper').'%">'.ale_get_meta('firstskillper').'%</div></div></li>'; } ?>
                <?php if(ale_get_meta('secondskill')){ echo '<li><span class="skititle">'.ale_get_meta('secondskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('secondskillper').'%">'.ale_get_meta('secondskillper').'%</div></div></li>'; } ?>
                <?php if(ale_get_meta('thirdskill')){ echo '<li><span class="skititle">'.ale_get_meta('thirdskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('thirdskillper').'%"> '.ale_get_meta('thirdskillper').'%</div></div></li>'; } ?>
                <?php if(ale_get_meta('fourthskill')){ echo '<li><span class="skititle">'.ale_get_meta('fourthskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('fourthskillper').'%">'.ale_get_meta('fourthskillper').'%</div></div></li>'; } ?>
            </ul>
        </div>
    </div>
    <?php endwhile; endif; ?>

        <div class="contactbotom cf">
            <div class="title">
                <h2><?php echo ale_get_meta('meetteamtitle'); ?></h2>
            </div>
            <div class="teamphotos cf">
                <?php if(ale_get_meta('firstphotoperson')){ ?>
                    <div class="teamitem">
                        <figure class="tubmapost">
                            <img src="<?php echo ale_get_meta('firstphotoperson'); ?>" />
                            <figcaption class="firstbg cf">
                                <div class="name headerfont"><?php echo ale_get_meta('firstnameperson'); ?></div>
                                <div class="profession"><?php echo ale_get_meta('firstprofperson'); ?></div>
                            </figcaption>
                        </figure>
                    </div>
                <?php } ?>
                <?php if(ale_get_meta('secondphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('secondphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name headerfont"><?php echo ale_get_meta('secondnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('secondprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
                <?php if(ale_get_meta('thirdphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('thirdphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name headerfont"><?php echo ale_get_meta('thirdnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('thirdprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
                <?php if(ale_get_meta('fourthphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('fourthphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name headerfont"><?php echo ale_get_meta('fourthnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('fourthprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
            </div>
        </div>

</section>
<?php get_footer(); ?>