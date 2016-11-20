<?php
/**
 * Template Name: Template About 2
 */
get_header(); ?>
<section class="singleblog cf">
    <div class="sectionboxtitle wrapper">
        <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
        <div class="subtitle bodyfont marginlef1">
            <?php echo ale_get_meta('custompagesub'); ?>
        </div>
    </div>
    <div class="aboutpagetwo wrapper">
        <div class="abouttwotop cf">
            <div class="sliderabout cf">
                <div class="postslider">
                    <ul class="slides">
                        <?php $slider = ale_sliders_get_slider(ale_get_meta('aboutsliderslug'));  ?>
                        <?php if($slider):?>
                            <?php foreach ($slider['slides'] as $slide) : ?>
                                <li>
                                    <figure>
                                        <?php if ($slide['image']) : ?>
                                            <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                                        <?php endif; ?>
                                        <?php if($slide['title']){ ?>
                                            <figcaption>
                                            <?php if($slide['title']){ echo '<div class="mainslidertitle bodyfont">'.$slide['title'].'</div>'; } ?>
                                            </figcaption><?php } ?>
                                    </figure>
                                </li>
                            <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="cf"></div>
            </div>
            <div class="leftpart">
                <div class="marginright20">
                    <div class="boxtitle headerfont"><?php echo _e('INFO','aletheme'); ?></div>
                    <div class="subtitle bodyfont">
                        <?php _e('Short about us','aletheme'); ?>
                    </div>
                    <div class="shortabouttext">
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile; endif;
                        ?>
                    </div>
                    <div class="subtitle bodyfont">
                        <?php echo _e('Get Social','aletheme'); ?>
                    </div>
                    <div class="socialprof bodyfont">
                        <?php if(ale_get_option('twi')){ echo '<a href="http://twitter.com/#!/'.ale_get_option('twi').'" rel="external" class="socic twiicon" >Twitter</a>'; } ?>
                        <?php if(ale_get_option('fb')){ echo ' / <a href="'.ale_get_option('fb').'" rel="external" class="socic fbicon" >Facebook</a>'; } ?>
                        <?php if(ale_get_option('gog')){ echo ' / <a href="'.ale_get_option('gog').'" rel="external" class="socic gogicon" >Google+</a>'; } ?>
                        <?php if(ale_get_option('inta')){ echo ' / <a href="'.ale_get_option('inta').'" rel="external" class="socic intaicon" >Instagram</a>'; } ?>
                        <?php if(ale_get_option('flickr')){ echo ' / <a href="'.ale_get_option('flickr').'" rel="external" class="socic flickricon" >Flickr</a>'; } ?>
                        <?php if(ale_get_option('dri')){ echo ' / <a href="'.ale_get_option('dri').'" rel="external" class="socic driicon" >Dribble</a>'; } ?>
                        <?php if(ale_get_option('ever')){ echo ' / <a href="'.ale_get_option('ever').'" rel="external" class="socic evericon" >Evernote</a>'; } ?>
                        <?php if(ale_get_option('pint')){ echo ' / <a href="'.ale_get_option('pint').'" rel="external" class="socic pinticon" >Pinterest</a>'; } ?>
                        <?php if(ale_get_option('delic')){ echo ' / <a href="'.ale_get_option('delic').'" rel="external" class="socic delicicon" >Delicious</a>'; } ?>
                        <?php if(ale_get_option('vim')){ echo ' / <a href="'.ale_get_option('vim').'" rel="external" class="socic vimicon" >Vimeo</a>'; } ?>
                        <?php if(ale_get_option('liin')){ echo ' / <a href="'.ale_get_option('liin').'" rel="external" class="socic liinicon" >Linked in</a>'; } ?>
                        <?php if(ale_get_option('skype')){ echo ' / <a href="'.ale_get_option('skype').'" rel="external" class="socic skypeicon" >Skype</a>'; } ?>
                        <?php if(ale_get_option('tumblr')){ echo ' / <a href="'.ale_get_option('tumblr').'" rel="external" class="socic tumblricon" >Tumblr</a>'; } ?>
                        <?php if(ale_get_option('pica')){ echo ' / <a href="'.ale_get_option('pica').'" rel="external" class="socic picaicon" >Picassa</a>'; } ?>
                    </div>
                </div>
            </div>
            <div class="rightpart">
                <div class="boxtitle headerfont">
                    <?php echo ale_get_meta('abouttwoskills'); ?>
                </div>
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

        <div class="abouttwobottom cf">
            <div class="boxtitle headerfont">
                <?php echo ale_get_meta('meetteamtitle'); ?>
            </div>
            <div class="subtitle bodyfont">
                <?php _e('VIEW OUR FRIENDLY TEAM','aletheme'); ?>
            </div>
            <ul class="teamlist cf">
                <?php if(ale_get_meta('firstphotoperson')){ ?>
                    <li>
                        <div class="imagebox" data-fadetime="1">
                            <img src="<?php echo ale_get_meta('firstphotoperson'); ?>" />
                            <div class="namemask">
                                <div class="namecenter">
                                    <span class="nameitem headerfont"><?php echo ale_get_meta('firstnameperson'); ?></span>
                                    <span class="workitem bodyfont"><?php echo ale_get_meta('firstprofperson'); ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                <?php if(ale_get_meta('secondphotoperson')){ ?>
                    <li>
                        <div class="imagebox" data-fadetime="1">
                            <img src="<?php echo ale_get_meta('secondphotoperson'); ?>" />
                            <div class="namemask">
                                <div class="namecenter">
                                    <span class="nameitem headerfont"><?php echo ale_get_meta('secondnameperson'); ?></span>
                                    <span class="workitem bodyfont"><?php echo ale_get_meta('secondprofperson'); ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                <?php if(ale_get_meta('thirdphotoperson')){ ?>
                    <li>
                        <div class="imagebox" data-fadetime="1">
                            <img src="<?php echo ale_get_meta('thirdphotoperson'); ?>" />
                            <div class="namemask">
                                <div class="namecenter">
                                    <span class="nameitem headerfont"><?php echo ale_get_meta('thirdnameperson'); ?></span>
                                    <span class="workitem bodyfont"><?php echo ale_get_meta('thirdprofperson'); ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>