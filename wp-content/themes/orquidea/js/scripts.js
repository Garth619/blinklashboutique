// add your custom scripts here
// as the page loads, call these scripts
/*global Modernizr */
/*global ale */
/*global FB */
/*global gapi */
/*global twttr */
/*global pin_load */


jQuery(function($) {
    "use strict";

    var scrollstatus = $('html').data('scroll');

    //On view fadeIn element
    $.fn.is_on_screen = function(){
        var win = $(window);
        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    if( $('.timelinebox').length > 0 ) { // if target element exists in DOM
        if( $('.timelinebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            if( $('.timelinebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.roundbox').each(function(){
                    var fadetime = 'speed' + $(this).data('fadetime');
                    //alert(fadetime);
                    $(this).addClass('miniround').addClass(fadetime);
                    $(this).hover(function(){
                        $(this).removeClass(fadetime);
                    });
                });
            } else {
                $('.roundbox').each(function(){
                    var fadetime = 'speed' + $(this).data('fadetime');
                    //alert(fadetime);
                    $(this).removeClass('miniround').removeClass(fadetime);
                });
            }
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.timelinebox').length > 0 ) { // if target element exists in DOM
            if( $('.timelinebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.roundbox').each(function(){
                    var fadetime = 'speed' + $(this).data('fadetime');
                    //alert(fadetime);
                    $(this).addClass('miniround').addClass(fadetime);
                    $(this).hover(function(){
                        $(this).removeClass(fadetime);
                    });
                });
            } else {
                $('.roundbox').each(function(){
                    var fadetime = 'speed' + $(this).data('fadetime');
                    //alert(fadetime);
                    $(this).removeClass('miniround').removeClass(fadetime);
                });
            }
        }
    });


    if( $('.servicehomebox').length > 0 ) { // if target element exists in DOM
        if( $('.servicehomebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            if( $('.servicehomebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.serviceslist li').each(function(){
                    var fadetime = 'opa' + $(this).data('fadetime');
                    $(this).addClass('activevis').addClass(fadetime);
                });
            } else {
                $('.serviceslist li').each(function(){
                    var fadetime = 'opa' + $(this).data('fadetime');
                    $(this).removeClass('activevis');
                });
            }
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.servicehomebox').length > 0 ) { // if target element exists in DOM
            if( $('.servicehomebox').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.serviceslist li').each(function(){
                    var fadetime = 'opa' + $(this).data('fadetime');
                    $(this).addClass('activevis').addClass(fadetime);
                });
            } else {
                $('.serviceslist li').each(function(){
                    var fadetime = 'opa' + $(this).data('fadetime');
                    $(this).removeClass('activevis');
                });
            }
        }
    });

    if( $('.teamlist').length > 0 ) { // if target element exists in DOM
        if( $('.teamlist').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            if( $('.teamlist').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.imagebox').each(function(){
                    var fadetime = 'imopa' + $(this).data('fadetime');
                    $(this).addClass('imageboxscale').addClass(fadetime);
                });
            } else {
                $('.imagebox').each(function(){
                    var fadetime = 'imopa' + $(this).data('fadetime');
                    $(this).removeClass('imageboxscale').removeClass(fadetime);
                });
            }
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.teamlist').length > 0 ) { // if target element exists in DOM
            if( $('.teamlist').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                //alert('test');
                $('.imagebox').each(function(){
                    var fadetime = 'imopa' + $(this).data('fadetime');
                    $(this).addClass('imageboxscale').addClass(fadetime);
                });
            } else {
                $('.imagebox').each(function(){
                    var fadetime = 'imopa' + $(this).data('fadetime');
                    $(this).removeClass('imageboxscale').removeClass(fadetime);
                });
            }
        }
    });



    $(window).load(function(){
        $('.hidde').fadeOut(1000).trigger('resize');
    });

    $('.filterbut').live('click',function(){
       $('.dropdonwcat').toggle(0);
    });


    if (jQuery.isFunction(jQuery.fn.isotope)) {
        //Filtering on Gallery pages

        // cache container
        var $container = $('.galleryitems');
        // initialize isotope
        $container.isotope({
            itemSelector : '.element'
        },function(){
            if(scrollstatus === 'scroll') {
                $("html").getNiceScroll().resize();
            }
        });

        // filter items when filter link is clicked
        $('#filters a.fil').live('click',function(){
            var itemtitle = $(this).text();
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector },function(){
                if(scrollstatus === 'scroll') {
                    $("html").getNiceScroll().resize();
                }
            });
            $('#filters a').removeClass('activelink');

            $(this).addClass('activelink');
            $('.selectedcat').text(itemtitle);

            return false;
        });
        $(window).smartresize(function(){
            $container.isotope({},function(){
                if(scrollstatus === 'scroll') {
                    $("html").getNiceScroll().resize();
                }
            });
        });

    }

    $(window).bind('scroll', function() {
        var scroll_top = $(document).scrollTop();
        var sliderheight = $('#headerslider').height();
        if(scroll_top >= sliderheight ){
            $('.topmenu').css('position', 'fixed');
            $('.topmenu').css('top', '0px');
            $('#headerslider').css('margin-bottom', '90px');
        } else {
            $('.topmenu').css('position', '');
            $('.topmenu').css('top', '');
            $('#headerslider').css('margin-bottom', '');
        }
    });

    $('.showtitle').live('click',function(){
        $(this).parent().find('.imageservice,.descrtitle,.descrtext').fadeIn(500);
        $(this).addClass('hidetitle').removeClass('showtitle');
        if(scrollstatus === 'scroll') {
            $("html").getNiceScroll().resize();
        }
    });
    $('.hidetitle').live('click',function(){
        $(this).parent().find('.imageservice,.descrtitle,.descrtext').fadeOut(500);
        $(this).addClass('showtitle').removeClass('hidetitle');
        if(scrollstatus === 'scroll') {
            $("html").getNiceScroll().resize();
        }
    });

    if (jQuery.isFunction(jQuery.fn.scrollable)) {
        $('.sliderbox').scrollable({circular: true}).autoscroll({ autoplay: true });
    }

    //Scroll Comments
    if (jQuery.isFunction(jQuery.fn.jScrollPane)) {
        $('.scrollbox').jScrollPane();
    }

    $(window).load(function(){
        if (jQuery.isFunction(jQuery.fn.isotope)) {
            // initialize Isotope
            $('.boxarchive').isotope({
                itemSelector : '.post'
            });
            $(window).smartresize(function(){
                $('.boxarchive').isotope({
                    itemSelector : '.post'
                });
            });
        }
    });

    $('.postslider').flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "",
        smoothHeight: true,
        nextText: ""
    });



        //Select Navigation on Mobile Devices
        $('select.mobilemenu').change(function(){
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });


    $(window).resize(function(){

        //Scroll Comments
        if (jQuery.isFunction(jQuery.fn.jScrollPane)) {
            $('.scrollbox').jScrollPane();
        }
    });

    $(window).load(function(){
        if(scrollstatus === 'scroll') {
            // Main window scroll
            $("html").niceScroll(
                {
                    cursorcolor: "#000000",
                    cursorborder:"0px",
                    cursorborderradius:"0px"
                }
            );
        }
    });
});

Modernizr.addTest('ipad', function () {
  "use strict";
  return !!navigator.userAgent.match(/iPad/i);
});

Modernizr.addTest('iphone', function () {
  "use strict";
  return !!navigator.userAgent.match(/iPhone/i);
});

Modernizr.addTest('ipod', function () {
  "use strict";
  return !!navigator.userAgent.match(/iPod/i);
});

Modernizr.addTest('appleios', function () {
  "use strict";
  return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
});

Modernizr.addTest('positionfixed', function () {
    "use strict";
    var test    = document.createElement('div'),
        control = test.cloneNode(false),
        fake = false,
        root = document.body || (function () {
            fake = true;
            return document.documentElement.appendChild(document.createElement('body'));
        }());

    var oldCssText = root.style.cssText;
    root.style.cssText = 'padding:0;margin:0';
    test.style.cssText = 'position:fixed;top:42px'; 
    root.appendChild(test);
    root.appendChild(control);
    
    var ret = test.offsetTop !== control.offsetTop;

    root.removeChild(test);
    root.removeChild(control);
    root.style.cssText = oldCssText;
    
    if (fake) {
        document.documentElement.removeChild(root);
    }
    
    /* Uh-oh. iOS would return a false positive here.
     * If it's about to return true, we'll explicitly test for known iOS User Agent strings.
     * "UA Sniffing is bad practice" you say. Agreeable, but sadly this feature has made it to
     * Modernizr's list of undectables, so we're reduced to having to use this. */
    return ret && !Modernizr.appleios;
});


// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
	{
		// Let's see if we need to load selectivizr
		test : Modernizr.borderradius,
		// Modernizr.load loads selectivizr and Respond.js for IE6-8
		nope : [ale.template_dir + '/js/libs/selectivizr.min.js', ale.template_dir + '/js/libs/respond.min.js']
	},{
		test: Modernizr.touch,
		yep:ale.template_dir + '/css/touch.css'
	}
]);



jQuery(function($) {
    "use strict";

	var is_single = $('#post').length;
	var posts = $('article.post');
	var is_mobile = parseInt(ale.is_mobile, 10);
	
	var slider_settings = {
		animation: "slide",
		slideshow: false,
		controlNav: false
	};
	
    $(document).ajaxComplete(function(){
        try{
			if (!posts.length) {
				return;
			}
            FB.XFBML.parse(); 
            gapi.plusone.go();
            twttr.widgets.load();
			pin_load();
        }catch(ex){}
    });
	
    // open external links in new window
    $("a[rel$=external]").each(function(){
        $(this).attr('target', '_blank');
    });
	
	$.fn.init_posts = function() {
		var init_post = function(data) {
            // close other posts
            data.post.siblings('.open-post').find('a.toggle').trigger('click', {
                hide:true
            });
			
			var loading = data.post.find('span.loading');
			
			if (data.more.is(':empty')) {
				data.post.addClass('post-loading');
				loading.css('visibility', 'visible');
                data.more.load(ale.ajax_load_url, {
                    'action':'aletheme_load_post',
                    'id':data.post.data('post-id')
                }, function(){
                    loading.remove();
                    data.more.slideDown(400, function(){
                        data.post.addClass('open-post');
                        data.toggler.text('Close Post');
						$('.video', data.more).fitVids();
                        if (data.scroll) {
                            data.scroll.scrollTo('fast');
                        }
                    });
					init_comments(data.post);
                });
            } else {
                data.more.slideDown(400, function(){
                    data.post.addClass('open-post');
                    data.toggler.text('Close Post');
                    if (data.scroll) {
                        data.scroll.scrollTo('fast');
                    }
                });
            }
		};

		var load_post = function(e, _opts) {
			e.preventDefault();
            var data  = {
                toggler:$(this),
                scroll:false
            };
            var opts = $.extend({
                comments:false,
                hide:false,
                add_comment:false
            }, _opts);
            data.post = data.toggler.parents('article.post');
            data.more = data.post.find('.full');
			
            if (data.more.is(':visible')) {
                if (opts.hide === true) {
					// quick hide for multiple posts
                    data.more.hide();
                } else {
                    data.more.slideUp(400);
                }
                data.toggler.text('Open Post');
                data.post.removeClass('open-post');
            } else {
                if (typeof(e.originalEvent) !== 'undefined' ) {
                    data.scroll = data.post;
                }
                init_post(data);
            }
		};
		
		var init_comments = function(post) {
			var respond = $('section.respond', post);
			var respond_form = $('form', respond);
			var respond_form_error = $('p.error', respond_form);
			var respond_cancel = $('.cancel-comment-reply a', respond);
			var comments = $('section.comments', post);
			
			$('a.comment-reply-link', post).on('click', function(e){
				e.preventDefault();
				var comment = $(this).parents('li.comment');
				comment.find('>div').append(respond);
				respond_cancel.show();
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(comment.data('comment-id'));
				respond.find('input:first').focus();
			}).attr('onclick', '');

			respond_cancel.on('click', function(e){
				e.preventDefault();
				comments.after(respond);
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(0);
				$(this).hide();
			});

			respond_form.ajaxForm({
				'beforeSubmit':function(){
					respond_form_error.text('').hide();
				},
				'success':function(_data){
					var data = $.parseJSON(_data);
					if (data.error) {
						respond_form_error.html(data.msg).slideDown('fast');
						return;
					}
					var comment_parent_id = respond.find('input[name=comment_parent]').val();
					var _comment = $(data.html);
					var list;
					_comment.hide();

                    if (comment_parent_id == 0) {
                        list = comments.find('ol');
                        if (!list.length) {
                            list = $('<ol class="commentlist "></ol>');
                            comments.find('.scrollbox .jspContainer .jspPane').append(list);
                        }
                    } else {
                        list = $('#comment-' + comment_parent_id).parent().find('ul');
                        if (!list.length) {
                            list = $('<ul class="children"></ul>');
                            $('#comment-' + comment_parent_id).parent().append(list);
                        }
                        respond_cancel.trigger('click');
                    }
                    list.append(_comment);
					_comment.fadeIn('fast');
							//.scrollTo();

                    var pane2api = post.find('.scrollbox').data('jsp');
                    pane2api.reinitialise();
                    pane2api.scrollToElement(_comment.filter('li:last'));
                    $('.responditemform span.succes').html('Thank you for your comment!');

					respond.find('textarea').clearFields();
				},
				'error':function(response){
					var error = response.responseText.match(/\<p\>(.*)<\/p\>/)[1];
					if (typeof(error) === 'undefined') {
						error = 'Something went wrong. Please reload the page and try again.';
					}
					respond_form_error.html(error).slideDown('fast');
				}
			});
		};
		$(this).each(function(){
			var post = $(this);
			// init post galleries 
			$(window).load(function(){
				$('.preview .flexslider', post).flexslider(slider_settings);
			});
			// do not init ajax posts & comments for mobile
			if (!is_mobile) {
				// ajax posts enabled
                if (ale.ajax_posts) {
                    $('a.toggle', post).click(load_post);
					$('.video', post).fitVids();
					$('.preview figure a', post).click(function(e){
						e.preventDefault();
						$(this).parents('article.post').find('a.toggle').trigger('click');
					});
                }
			}
		});
		// init ajax comments on a single post if ajax comments are enabled
		if (is_single && parseInt(ale.ajax_comments, 10)) {
			init_comments(posts);	
		}
		// open single post on page
		if (parseInt(ale.ajax_open_single, 10) && !is_single && posts.length === 1) {
			posts.find('a.toggle').trigger('click');
		}
	};
	posts.init_posts();
	
	$.fn.init_gallery = function() {
		$(this).each(function(){
			var gallery = $(this);
			$(window).load(function(){
				$('.flexslider', gallery).flexslider(slider_settings);
			});
			
		});
	};
	$('#gallery').init_gallery();

    $.fn.init_archives = function()
    {
        $(this).each(function(){
            var archives = $(this);
            var year = $('#archives-active-year');
            var months = $('div.months div.year-months', archives);
            var arrows = $('a.up, a.down', archives);
            var activeMonth;
            var current, active;
            var animated = false;
			if (months.length === 1) {
				arrows.remove();
				activeMonth = months.filter(':first').addClass('year-active').show();
				year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
				return;
			}
            arrows.click(function(e){
                e.preventDefault();
                if (animated) {
                    return;
                }
                var fn = $(this);
                animated = true;
                arrows.css('visibility', 'visible');
                var current = months.filter('.year-active');
                if (fn.hasClass('up')) {
                    active = current.prev();
                    if (!active.length) {
                        active = months.filter(':last');
                    }
                } else {
                    active = current.next();
                    if (!active.length) {
                        active = months.filter(':first');
                    }
                }
                current.removeClass('year-active').fadeOut(150, function(){
                    active.addClass('year-active').fadeIn(150, function(){
                        animated = false;
                    });
                    year.text(active.attr('id').replace(/[^0-9]*/, ''));

                    if (fn.hasClass('up')) {
                        if (!active.prev().length) {
                            arrows.filter('.up').css('visibility', 'hidden');
                        }
                    } else {
                        if (!active.next().length) {
                            arrows.filter('.down').css('visibility', 'hidden');
                        }
                    }
                });
            });
            activeMonth = months.filter(':first').addClass('year-active').show();
            year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
            arrows.filter('.up').css('visibility', 'hidden');
        });
    };
    $('#archives .ale-archives').init_archives();
	
	
	
	

	
});

// HTML5 Fallbacks for older browsers
jQuery(function($) {
    "use strict";

    // check placeholder browser support
    if (!Modernizr.input.placeholder) {
        // set placeholder values
        $(this).find('[placeholder]').each(function() {
            $(this).val( $(this).attr('placeholder') );
        });
 
        // focus and blur of placeholders
        $('[placeholder]').focus(function() {
            if ($(this).val() === $(this).attr('placeholder')) {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function() {
            if ($(this).val() === '' || $(this).val() === $(this).attr('placeholder')) {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });
 
        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() === $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});

