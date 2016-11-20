<section class="story cf">
    <div class="boxcontent cf">
	    <?php the_content(); ?>
        <?php if(get_the_tags()){ ?>
            <p class="cusstyle20"><?php the_tags(); ?></p>
        <?php } ?>
    </div>
    <?php wp_link_pages(array(
        'before' => '<section class="story-pages"><p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p></section>',
    )) ?>
</section>
