<?php
/*
 * Template name: _Book
 */


get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				
				<div id="book-wrap">
					<div class="location-select">
               	<p><h3>Please select a location to book an appointment:</h3></p>
               	 <ul>
	               		<li style="display:none;">
		               		<a href="https://app.secure-booker.com/mobile/blinklash/FindAppointment/Start" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Little Italy </h2></a> 
	               		</li>
	               		<li>
		               		<a href="https://app.secure-booker.com/mobile/blinksolana/FindAppointment/Start" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Solana Beach</h2></a>
	               		</li>
	               		<li>
		               		<a href="https://app.secure-booker.com/mobile/blinksandiego/FindAppointment/Start" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Mission Valley</h2></a>
	               		</li>
							 	 </ul>
	             </div> <!-- #location-select -->
				</div>
			
			</div><!-- #content -->
		</div><!-- #container -->




<?php get_footer(); ?>
