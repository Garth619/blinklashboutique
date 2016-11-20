<?php
/**
 * Template Name: Template Single Service
 */
get_header(); ?>
    <section class="singleblog cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>
            <div class="subtitle bodyfont marginlef1">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
        </div>
        <div class="wrapper">
            <div class="plicetable">
            <table>
                <tr class="headtr">
                    <td class="headtit bodyfont"><?php _e('Name','aletheme'); ?></td>
                    <td class="headtit bodyfont"><?php _e('Description','aletheme'); ?></td>
                    <td class="headtit bodyfont"><?php _e('Cost','aletheme'); ?></td>
                </tr>
                <?php if(ale_get_meta('sertypename1')){ ?>
                <tr>
                    <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename1'); ?></td>
                    <td class="texttab"><?php echo ale_get_meta('sertypedesc1'); ?></td>
                    <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost1'); ?></td>
                </tr>
                <?php } if(ale_get_meta('sertypename2')){ ?>
                <tr>
                    <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename2'); ?></td>
                    <td class="texttab"><?php echo ale_get_meta('sertypedesc2'); ?></td>
                    <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost2'); ?></td>
                </tr>
                <?php } if(ale_get_meta('sertypename3')){ ?>
                <tr>
                    <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename3'); ?></td>
                    <td class="texttab"><?php echo ale_get_meta('sertypedesc3'); ?></td>
                    <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost3'); ?></td>
                </tr>
                <?php } if(ale_get_meta('sertypename4')){ ?>
                <tr>
                    <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename4'); ?></td>
                    <td class="texttab"><?php echo ale_get_meta('sertypedesc4'); ?></td>
                    <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost4'); ?></td>
                </tr>
                <?php } if(ale_get_meta('sertypename5')){ ?>
                <tr>
                    <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename5'); ?></td>
                    <td class="texttab"><?php echo ale_get_meta('sertypedesc5'); ?></td>
                    <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost5'); ?></td>
                </tr>
                <?php } if(ale_get_meta('sertypename6')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename6'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc6'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost6'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename7')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename7'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc7'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost7'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename8')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename8'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc8'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost8'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename9')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename9'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc9'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost9'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename10')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename10'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc10'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost10'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename11')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename11'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc11'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost11'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename12')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename12'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc12'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost12'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename13')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename13'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc13'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost13'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename14')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename14'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc14'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost14'); ?></td>
                    </tr>
                <?php } if(ale_get_meta('sertypename15')){ ?>
                    <tr>
                        <td class="titletab bodyfont"><?php echo ale_get_meta('sertypename15'); ?></td>
                        <td class="texttab"><?php echo ale_get_meta('sertypedesc15'); ?></td>
                        <td class="costtab bodyfont"><?php echo ale_get_meta('sertypecost15'); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        </div>
    <div class="divider"></div>
        <div class="wrapper">
            <div class="cusstyle1">
                <div class="contactleft">
                    <div class="boxtitle headerfont">Photos</div>
                    <div class="subtitle bodyfont cusstyle2">
                        <?php _e('From our work','aletheme'); ?>
                    </div>
                    <div class="postslider cf">
                        <ul class="slides">
                            <?php foreach(ale_get_attached_images() as $image):?>
                                <li class="slimage"><?php echo wp_get_attachment_image($image->ID, 'large')?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </div>
                <div class="contactright">
                    <div class="boxtitle headerfont">Info</div>
                    <div class="subtitle bodyfont cusstyle2">
                        <?php _e('Short description','aletheme'); ?>
                    </div>
                    <div class="contacttextbo">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>