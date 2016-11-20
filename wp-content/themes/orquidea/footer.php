    <div class="divider"></div>
    </div>
    <footer id="footer-main" role="contentinfo">
        <div class="wrapper bodyfont cf">
            <?php if (ale_get_option('copyrights')) : ?>
                <p class="copy"><?php echo ale_option('copyrights'); ?></p>
            <?php else: ?>
                <p class="copy">Copyright 2015, BlinkLashBoutique.com</p>
            <?php endif; ?>
            <div class="socialprof">
                <?php if(ale_get_option('twi')){ echo '<a href="http://twitter.com/#!/'.ale_get_option('twi').'" rel="external" class="socic twiicon" >Twitter</a> /'; } ?>
                <?php if(ale_get_option('fb')){ echo '<a href="'.ale_get_option('fb').'" rel="external" class="socic fbicon" >Facebook</a> /'; } ?>
                <?php if(ale_get_option('gog')){ echo '<a href="'.ale_get_option('gog').'" rel="external" class="socic gogicon" >Google+</a> /'; } ?>
                <?php if(ale_get_option('inta')){ echo '<a href="'.ale_get_option('inta').'" rel="external" class="socic intaicon" >Instagram</a> /'; } ?>
                <?php if(ale_get_option('flickr')){ echo '<a href="'.ale_get_option('flickr').'" rel="external" class="socic flickricon" >Flickr</a> /'; } ?>
                <?php if(ale_get_option('dri')){ echo '<a href="'.ale_get_option('dri').'" rel="external" class="socic driicon" >Dribble</a> /'; } ?>
                <?php if(ale_get_option('ever')){ echo '<a href="'.ale_get_option('ever').'" rel="external" class="socic evericon" >Evernote</a> /'; } ?>
                <?php if(ale_get_option('pint')){ echo '<a href="'.ale_get_option('pint').'" rel="external" class="socic pinticon" >Pinterest</a> /'; } ?>
                <?php if(ale_get_option('delic')){ echo '<a href="'.ale_get_option('delic').'" rel="external" class="socic delicicon" >Delicious</a> /'; } ?>
                <?php if(ale_get_option('vim')){ echo '<a href="'.ale_get_option('vim').'" rel="external" class="socic vimicon" >Vimeo</a> /'; } ?>
                <?php if(ale_get_option('liin')){ echo '<a href="'.ale_get_option('liin').'" rel="external" class="socic liinicon" >Linked in</a> /'; } ?>
                <?php if(ale_get_option('skype')){ echo '<a href="'.ale_get_option('skype').'" rel="external" class="socic skypeicon" >Skype</a> /'; } ?>
                <?php if(ale_get_option('tumblr')){ echo '<a href="'.ale_get_option('tumblr').'" rel="external" class="socic tumblricon" >Tumblr</a> /'; } ?>
                <?php if(ale_get_option('pica')){ echo '<a href="'.ale_get_option('pica').'" rel="external" class="socic picaicon" >Picassa</a> /'; } ?>
                <?php if(ale_get_option('rssicon')){?><a href="<?php echo home_url(); ?>/feed" rel="external" class="socic rssicon">RSS</a><?php } ?>
            </div>
        </div>
        
	</footer>
<?php wp_footer(); ?>

</body>
</html>