<?php
/**
 * Template Name: Template Services
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont"> <?php the_title(); ?></div>
            <div class="subtitle bodyfont">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
        </div>
        <div class="servicehomebox cf">
            <ul class="serviceslist grid cs-style-4 cusstyle3">
    <?php if(ale_get_meta('servicesbox1')){ ?>
            <li data-fadetime="1">
                <div class="titleservice hidetitle headerfont">
                    <?php echo ale_get_meta('servicesbox1'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink1'); ?>"><img src="<?php echo ale_get_meta('servicesboximage1'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle1'),20); ?></div>
                        <div class="descrtext cusstyle5" >
                            <?php echo ale_get_meta('servicesboxtext1'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink1'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink1'); ?>"><?php echo ale_get_meta('servicesboxtitle1'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext1'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox2')){ ?>
            <li data-fadetime="2">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox2'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink2'); ?>"><img src="<?php echo ale_get_meta('servicesboximage2'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle2'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext2'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink2'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink2'); ?>"><?php echo ale_get_meta('servicesboxtitle2'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext2'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox3')){ ?>
            <li data-fadetime="3">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox3'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink3'); ?>"><img src="<?php echo ale_get_meta('servicesboximage3'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle3'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext3'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink3'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink3'); ?>"><?php echo ale_get_meta('servicesboxtitle3'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext3'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox4')){ ?>
            <li data-fadetime="4">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox4'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink4'); ?>"><img src="<?php echo ale_get_meta('servicesboximage4'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle4'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext4'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink4'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink4'); ?>"><?php echo ale_get_meta('servicesboxtitle4'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext4'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox5')){ ?>
            <li data-fadetime="5">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox5'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink5'); ?>"><img src="<?php echo ale_get_meta('servicesboximage5'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle5'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext5'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink5'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink5'); ?>"><?php echo ale_get_meta('servicesboxtitle5'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext5'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox6')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox6'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink6'); ?>"><img src="<?php echo ale_get_meta('servicesboximage6'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle6'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext6'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink6'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink6'); ?>"><?php echo ale_get_meta('servicesboxtitle6'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext6'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox7')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox7'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink7'); ?>"><img src="<?php echo ale_get_meta('servicesboximage7'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle7'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext7'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink7'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink7'); ?>"><?php echo ale_get_meta('servicesboxtitle7'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext7'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox8')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox8'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink8'); ?>"><img src="<?php echo ale_get_meta('servicesboximage8'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle8'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext8'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink8'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink8'); ?>"><?php echo ale_get_meta('servicesboxtitle8'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext8'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox9')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox9'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink9'); ?>"><img src="<?php echo ale_get_meta('servicesboximage9'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle9'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext9'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink9'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink9'); ?>"><?php echo ale_get_meta('servicesboxtitle9'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext9'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox10')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox10'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink10'); ?>"><img src="<?php echo ale_get_meta('servicesboximage10'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle10'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext10'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink10'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink10'); ?>"><?php echo ale_get_meta('servicesboxtitle10'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext10'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox11')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox11'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink11'); ?>"><img src="<?php echo ale_get_meta('servicesboximage11'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle11'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext11'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink11'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink11'); ?>"><?php echo ale_get_meta('servicesboxtitle11'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext11'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox12')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox12'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink12'); ?>"><img src="<?php echo ale_get_meta('servicesboximage12'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle12'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext12'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink12'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink12'); ?>"><?php echo ale_get_meta('servicesboxtitle12'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext12'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox13')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox13'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink13'); ?>"><img src="<?php echo ale_get_meta('servicesboximage13'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle13'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext13'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink13'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink13'); ?>"><?php echo ale_get_meta('servicesboxtitle13'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext13'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox14')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox14'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink14'); ?>"><img src="<?php echo ale_get_meta('servicesboximage14'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle14'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext14'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink14'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink14'); ?>"><?php echo ale_get_meta('servicesboxtitle14'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext14'); ?>
                </div>
            </li>
    <?php } if(ale_get_meta('servicesbox15')){ ?>
            <li data-fadetime="6">
                <div class="titleservice showtitle headerfont">
                    <?php echo ale_get_meta('servicesbox15'); ?>
                </div>
                <figure class="imageservice">
                    <div><a href="<?php echo ale_get_meta('servicesboxlink15'); ?>"><img src="<?php echo ale_get_meta('servicesboximage15'); ?>" alt="image" /></a></div>
                    <figcaption>
                        <div class="descrtitle bodyfont cusstyle4"><?php echo ale_truncate(ale_get_meta('servicesboxtitle15'),20); ?></div>
                        <div class="descrtext cusstyle5">
                            <?php echo ale_get_meta('servicesboxtext15'); ?>
                        </div>
                        <a href="<?php echo ale_get_meta('servicesboxlink15'); ?>" class="bodyfont"><?php _e('Take a look','aletheme'); ?></a>
                    </figcaption>
                </figure>
                <div class="descrtitle bodyfont">
                    <a href="<?php echo ale_get_meta('servicesboxlink15'); ?>"><?php echo ale_get_meta('servicesboxtitle15'); ?></a>
                </div>
                <div class="descrtext">
                    <?php echo ale_get_meta('servicesboxtext15'); ?>
                </div>
            </li>
    <?php } ?>
        </ul>
        </div>
        <div class="teamtextcontent cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>