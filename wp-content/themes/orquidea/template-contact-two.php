<?php
/**
 * Template Name: Template Contact 2
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header();
?>
<section class="singleblog cf">
    <div class="sectionboxtitle wrapper">
        <div class="boxtitle headerfont"> <?php the_title(); ?></div>
        <div class="subtitle bodyfont">
            <?php echo ale_get_meta('custompagesub'); ?>
        </div>
    </div>

    <div class="wrapper">
        <div class="contactpagetwo">
            <div class="contacttop cf">
                <div class="leftpart mapgoga">
                    <?php echo ale_get_meta('gomap'); ?>
                </div>
                <div class="rightpart">
                    <div class="title">
                        <h2><?php _e('Get In Touch With Us','aletheme'); ?></h2>
                    </div>
                    <div class="formbox conttwoform cf">
                        <form method="post" action="<?php the_permalink();?>">
                            <?php if (isset($_GET['success'])) : ?>
                                <p class="success"><?php _e('Your email was sent successfully. Thank you for your message!', 'aletheme')?></p>
                            <?php endif; ?>
                            <?php if (isset($error) && isset($error['msg'])) : ?>
                                <p class="error"><?php echo $error['msg']?></p>
                            <?php endif; ?>
                            <div class="responditemform">
                                <label for="contact-form-name" class="bodyfont"><?php _e('Name', 'aletheme')?><span>*</span></label>
                                <input type="text" name="contact[name]" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            </div>
                            <div class="responditemform">
                                <label for="contact-form-email" class="bodyfont"><?php _e('Email', 'aletheme')?><span>*</span></label>
                                <input type="email" name="contact[email]" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            </div>
                            <div class="responditemform">
                                <label for="contact-form-phone" class="bodyfont"><?php _e('Phone', 'aletheme')?><span>*</span></label>
                                <input type="text" name="contact[phone]" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                            </div>
                            <div class="responditemform">
                                <label for="contact-form-message" class="bodyfont"><?php _e('Message', 'aletheme')?><span>*</span></label>
                                <textarea name="contact[message]" id="contact-form-message" cols="40" rows="5" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            </div>
                            <div class="responditemform">
                                <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>" />
                            </div>
                            <?php wp_nonce_field() ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contactbotom cf">

                <div class="texty">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; else: ?>
                        <?php ale_part('notfound')?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>