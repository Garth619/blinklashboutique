
jQuery(document).ready(function($) {
    /*global pbd_alp */
    "use strict";
    // The number of the next page to load (/page/x/).
	var pageNum = parseInt(pbd_alp.startPage, 10)+1;

	
	// The maximum number of pages the current query can return.
	var max = parseInt(pbd_alp.maxPages, 10);
	
	// The link of the next page of posts.
	var nextLink = pbd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('<div style="clear:both;" class="gallpbd cf pbd-alp-placeholder-'+ pageNum +'"></div>').insertAfter('.pbd-alp-placeholder-'+ parseInt(pbd_alp.startPage, 10) +'');
		$('<div class="viewmoreposts" id="pbd-alp-load-posts"><h3><a href="#">Load More</a></h3></div>').insertAfter('.pbd-alp-placeholder-'+ pageNum +'');


		// Remove the traditional navigation.
		$('.navigation').remove();
	}

	/**
	 * Load new posts when the link is clicked.
	 */
	$('#pbd-alp-load-posts a').live('click',function() {
	
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading posts...');

            $('.pbd-alp-placeholder-'+ pageNum).load(nextLink + ' .post',
                    function() {

                        // Update page number and nextLink.
                        pageNum++;
                        nextLink = nextLink.replace(/\/page\/[0-9]*/, '/page/'+ pageNum);

                        // Add a new placeholder, for when user clicks again.
                        $('#pbd-alp-load-posts')
                            .before('<div style="clear:both;" class="gallpbd cf pbd-alp-placeholder-'+ pageNum +'"></div>');

                        // Update the button message.
                        if(pageNum <= max) {
                            $('#pbd-alp-load-posts a').text('Load More');
                        } else {
                            $('#pbd-alp-load-posts a').text('No more to load.');
                        }


                        $('.postslider').flexslider({
                            animation:"slide",
                            controlNav: false,
                            prevText: "",
                            smoothHeight: true,
                            nextText: ""});
                        $("html").getNiceScroll().resize();

                    }

			);
		}
		return false;
	});
});