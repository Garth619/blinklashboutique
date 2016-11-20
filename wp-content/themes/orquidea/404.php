<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <div class="sectionboxtitle wrapper">
            <div class="boxtitle headerfont marginlef1"> <?php _e('Error 404','aletheme'); ?></div>
            <div class="subtitle bodyfont marginlef1">
                <?php _e('error, Page not found','aletheme'); ?>
            </div>
            <div class="custompage cf">
                <p><?php _e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh<br /> button on your browser.','aletheme'); ?></p>
                <a href="<?php echo home_url();?>" class="gohomebut bodyfont cusstyle17"><?php _e('return to the homepage','aletheme'); ?></a>
                <div class="cf"></div>
            </div>

        </div>

    </section>
<?php get_footer(); ?>