<?php
/*
 * Template name: Home 1
 */

get_header(); ?>
<section class="opentime wrapper cf">
    <div class="sectionboxtitle">
        <div class="boxtitle headerfont"><?php _e('Opening Time','aletheme'); ?></div>
        <div class="subtitle bodyfont"><?php echo ale_get_option('openingsubtitle'); ?></div>
    </div>
    <div class="timelinebox cf">
        <ul class="timelineopening">
        <li>
            <div class="roundbox" data-fadetime="1">
                <span class="dayname headerfont"><?php echo ale_get_option('day1'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon1'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime1'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox" data-fadetime="2">
                <span class="dayname headerfont"><?php echo ale_get_option('day2'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon2'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime2'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox" data-fadetime="3">
                <span class="dayname headerfont"><?php echo ale_get_option('day3'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon3'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime3'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox" data-fadetime="4">
                <span class="dayname headerfont"><?php echo ale_get_option('day4'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon4'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime4'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox" data-fadetime="5">
                <span class="dayname headerfont"><?php echo ale_get_option('day5'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon5'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime5'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox greybox" data-fadetime="6">
                <span class="dayname headerfont"><?php echo ale_get_option('day6'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon6'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime6'); ?>
            </div>
        </li>
        <li>
            <div class="roundbox greybox" data-fadetime="7">
                <span class="dayname headerfont"><?php echo ale_get_option('day7'); ?></span>
                <span class="icon1" style="background-image: url(<?php echo ale_get_option('icon7'); ?>);"></span>
            </div>
            <div class="timetext bodyfont">
                <?php echo ale_get_option('daytime7'); ?>
            </div>
        </li>
    </ul>
    </div>
</section>
<div class="divider"></div>
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
<section class="ourteambox wrapper cf">
    <div class="sectionboxtitle">
        <div class="boxtitle headerfont"><?php _e('Our team','aletheme'); ?></div>
        <div class="subtitle bodyfont"><?php echo ale_get_option('teamsubtitle'); ?></div>
    </div>
    <ul class="teamlist cf">
        <li style="margin-bottom: 0;">
            <div class="imagebox" data-fadetime="1">
                <img src="<?php echo ale_get_option('worker1photo'); ?>" alt="image" />
                <div class="namemask">
                    <div class="namecenter">
                        <span class="nameitem headerfont"><?php echo ale_get_option('worker1'); ?></span>
                        <span class="workitem bodyfont"><?php echo ale_get_option('worker1profes'); ?></span>
                    </div>
                </div>
            </div>
            <div class="workertitle bodyfont">
                <?php echo ale_get_option('worker1title'); ?>
            </div>
            <div class="workerdescr">
                <?php echo ale_get_option('worker1desc'); ?>
            </div>
        </li>

        <li style="margin-bottom: 0;">
            <div class="imagebox" data-fadetime="2">
                <img src="<?php echo ale_get_option('worker2photo'); ?>" alt="image" />
                <div class="namemask">
                    <div class="namecenter">
                        <span class="nameitem headerfont"><?php echo ale_get_option('worker2'); ?></span>
                        <span class="workitem bodyfont"><?php echo ale_get_option('worker2profes'); ?></span>
                    </div>
                </div>
            </div>
            <div class="workertitle bodyfont">
                <?php echo ale_get_option('worker2title'); ?>
            </div>
            <div class="workerdescr">
                <?php echo ale_get_option('worker2desc'); ?>
            </div>
        </li>

        <li style="margin-bottom: 0;">
            <div class="imagebox" data-fadetime="3">
                <img src="<?php echo ale_get_option('worker3photo'); ?>" alt="image" />
                <div class="namemask">
                    <div class="namecenter">
                        <span class="nameitem headerfont"><?php echo ale_get_option('worker3'); ?></span>
                        <span class="workitem bodyfont"><?php echo ale_get_option('worker3profes'); ?></span>
                    </div>
                </div>
            </div>
            <div class="workertitle bodyfont">
                <?php echo ale_get_option('worker3title'); ?>
            </div>
            <div class="workerdescr">
                <?php echo ale_get_option('worker3desc'); ?>
            </div>
        </li>
    </ul>
</section>
<?php get_footer(); ?>