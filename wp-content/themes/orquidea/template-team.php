<?php
/**
 * Template Name: Template Team
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont"> <?php the_title(); ?></div>
            <div class="subtitle bodyfont">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
        </div>

        <ul class="teamlist cf">
    <?php if(ale_get_meta('worker1photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="1">
                    <img src="<?php echo ale_get_meta('worker1photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker1'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker1prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker1title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker1text'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('worker2photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="2">
                    <img src="<?php echo ale_get_meta('worker2photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker2'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker2prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker2title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker2text'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('worker3photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="3">
                    <img src="<?php echo ale_get_meta('worker3photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker3'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker3prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker3title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker3text'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('worker4photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="4">
                    <img src="<?php echo ale_get_meta('worker4photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker4'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker4prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker4title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker4text'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('worker5photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="5">
                    <img src="<?php echo ale_get_meta('worker5photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker5'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker5prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker5title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker5text'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('worker6photo')) { ?>
            <li>
                <div class="imagebox" data-fadetime="6">
                    <img src="<?php echo ale_get_meta('worker6photo'); ?>" alt="image" />
                    <div class="namemask">
                        <div class="namecenter">
                            <span class="nameitem headerfont"><?php echo ale_get_meta('worker6'); ?></span>
                            <span class="workitem bodyfont"><?php echo ale_get_meta('worker6prof'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="workertitle bodyfont">
                    <?php echo ale_get_meta('worker6title'); ?>
                </div>
                <div class="workerdescr">
                    <?php echo ale_get_meta('worker6text'); ?>
                </div>
            </li>
    <?php } ?>
        </ul>

    <div class="teamtextcontent cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
    </section>
<?php get_footer(); ?>