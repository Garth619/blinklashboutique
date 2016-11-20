<?php
/*
 * Template name: BLINK Home
 */


get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<div class="home-nav-wrap">
			
				<div style="display:none;" id="nav-item1" class="navbox">
					<a href="#nav-item1" class="toggle">Little Italy</a>
					<div class="nav-content" style="display:none">
						<p><a class="mobile-button" href="tel:619.269.8435">619.269.8435</a></p>
						<p><a class="mobile-button" href="https://app.secure-booker.com/mobile/blinklash/FindAppointment/Start" target="_blank">Book an Appointment</a></p>
						<p>
							1202 Kettner Blvd,<br>
							Suite 0202, San Diego, CA 92101<br>
							<a class="mapit" href="http://maps.google.com/maps?ll=32.718044,-117.169353&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=1202%20Kettner%20Blvd%20San%20Diego,%20CA%2092101" target="_blank">Map It!</a><br>

						</p>
						<p>
							Tuesday - Friday<br>
							9am-7pm<br>
							Saturday <br>
							9am-3pm<br>
							Sunday<br>
							Closed<br>
							Monday<br>
							11am-5pm
							<a class="email" href="mailto:info@blinklashboutique.com">info@blinklashboutique.com</a>
						</p>
						
					</div> <!-- .nav-content -->
				</div> <!-- #nav-item1 -->
				
				<div id="nav-item2" class="navbox">
					<a href="#nav-item2" class="toggle">Solana Beach</a>
					<div class="nav-content" style="display:none">
						<p><a class="mobile-button" href="tel:858.436.4456">858.436.4456</a></p>
						<p><a class="mobile-button" href="https://app.secure-booker.com/mobile/blinksolana/FindAppointment/Start" target="_blank">Book an Appointment</a></p>
						<p>
							
							665 San Rodolfo Dr. Ste. 108<br/>
							Solana Beach, CA 92075<br/>
							<a class="mapit" href="https://www.google.com/maps/place/665+San+Rodolfo+Dr+%23108,+Solana+Beach,+CA+92075/data=!4m2!3m1!1s0x80dc092fc8a1fa19:0x93079684e34ae767?sa=X&ved=0CB4Q8gEwAGoVChMI5uXetYzUxwIVB9WACh3tAg_n" target="_blank">Map It!</a><br>

						</p>
						<p>
							Monday<br>
							11am-5pm<br>
							Tuesday - Friday<br>
							9am-7pm<br>
							Saturday <br>
							9am-3pm<br>
							Sunday<br>
							Closed<br>
							
							<a class="email" href="mailto:info@blinklashboutique.com">info@blinklashboutique.com</a>
						</p>
						
					</div> <!-- .nav-content -->
				</div> <!-- #nav-item1 -->
				
				<div id="nav-item3" class="navbox">
					<a href="#nav-item3" class="toggle">MISSION VALLEY</a>
					<div  class="nav-content" style="display:none">
						<p><a class="mobile-button" href="tel:619.964.6082">619.964.6082</a></p>
						<p><a class="mobile-button" href="https://app.secure-booker.com/mobile/blinksandiego/FindAppointment/Start" target="_blank">Book an Appointment</a></p>
						<p>
							7801 Mission Center Ct., Suite 104,<br> 
							San Diego, CA 92108<br>
							<a class="mapit" href="http://maps.google.com/maps?ll=32.773533,-117.155469&z=14&t=m&hl=en-US&gl=US&mapclient=embed&q=7801%20Mission%20Center%20Ct%20#104%20San%20Diego,%20CA%2092108" target="_blank">Map It!</a><br>

						</p>
						<p>
							Monday<br>
							11am-5pm<br>
							Tuesday - Friday<br>
							9am-7pm<br>
							Saturday <br>
							9am-3pm<br>
							Sunday<br>
							Closed<br>
							
							<a class="email" href="mailto:info@blinklashboutique.com">info@blinklashboutique.com</a>
						</p>
						
					</div> <!-- .nav-content -->
				</div> <!-- #nav-item1 -->
				
				<div id="nav-item4" class="navbox">
					<a href="<?php bloginfo('siteurl') ?>/pricing/" class="toggle">Pricing</a>
				</div> <!-- #nav-item1 -->
				
				<div id="nav-item5" class="navbox">
					<a href="<?php bloginfo('siteurl') ?>/book/" class="toggle">Book</a>
				</div> <!-- #nav-item1 -->
				
				<div id="nav-item6" class="navbox">
					<a href="<?php bloginfo('siteurl') ?>/before-and-after/" class="toggle">Before and After</a>
				</div> <!-- #nav-item1 -->
				
				
			
			</div> <!-- #home-nav-wrap -->

			</div><!-- #content -->
		</div><!-- #container -->
<!--
<script>
jQuery( "#nav-item1 .toggle" ).click(function() {
	jQuery( "#nav-item1 .nav-content" ).slideToggle( "fast", function() {});
	jQuery( "#nav-item1.navbox" ).toggleClass('navbox-active');
});

jQuery( "#nav-item2 .toggle" ).click(function() {
	jQuery( "#nav-item2 .nav-content" ).slideToggle( "fast", function() {});
	jQuery( "#nav-item2.navbox" ).toggleClass('navbox-active');
});

jQuery( "#nav-item3 .toggle" ).click(function() {
	jQuery( "#nav-item3 .nav-content" ).slideToggle( "fast", function() {});
	jQuery( "#nav-item3.navbox" ).toggleClass('navbox-active');
});
</script>
-->

<script>



var open = jQuery('.toggle'),
    a = jQuery('div').find('a');

console.log(a.hasClass('active'));

open.click(function(e){

    var $this = jQuery(this),
        speed = 500;
    if($this.hasClass('active') === true) {
        $this.removeClass('active').next('.nav-content').slideUp(speed);
    } else if(a.hasClass('active') === false) {
        $this.addClass('active').next('.nav-content').slideDown(speed);
    } else {
        a.removeClass('active').next('.nav-content').slideUp(speed);
        $this.addClass('active').next('.nav-content').delay(speed).slideDown(speed);
    }
});

</script>		
		

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
