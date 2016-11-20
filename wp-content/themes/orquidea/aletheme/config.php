<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Aletheme Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '#ffffff',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );



	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 135-61px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Header image",
                        "desc" => "Upload or put the header image. size 2000px-120px",
                        "id" => "ale_headerimg",
                        "std" => get_template_directory_uri()."/css/images/header.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Site Color",
                        "desc" => "Change the color, the default is #f597b1",
                        "id" => "ale_site_color",
                        'std' => '#f597b1',
                        'type' => 'color');



    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #ffffff color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Home Header Slider slug",
                        "desc" => "Insert the revolution slider slug",
                        "id" => "ale_revslideslug",
                        'std' => '',
                        'type' => 'text');

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Copyrights",
						"desc" => "Your copyright message.",
						"id" => "ale_copyrights",
						"std" => "",
						"type" => "editor");


    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the First Font from Google Library",
                        "desc" => "The default Font is - Anton",
                        "id" => "ale_headerfont",
                        "std" => "Anton",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Second Font from Google Library",
                        "desc" => "The default Font is - Open Sans Condensed",
                        "id" => "ale_bodyfont",
                        "std" => "Open+Sans+Condensed",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '34px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '32px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '30px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '28px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '26px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '24px','face' => 'Open+Sans+Condensed','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Arial','style' => 'normal','color' => '#838383'),
                        'type' => 'typography');

    $options[] = array( "name" => "Home",
                        "type" => "heading");

    $options[] = array( "name" => "Opening time subtitle",
                        "desc" => "Your text",
                        "id" => "ale_openingsubtitle",
                        "std" => "Wellcome to Orquidea beaty salon",
                        "type" => "text");

    $options[] = array( "name" => "Week day 1",
                        "desc" => "Your text",
                        "id" => "ale_day1",
                        "std" => "Mon.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 2",
                        "desc" => "Your text",
                        "id" => "ale_day2",
                        "std" => "Tue.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 3",
                        "desc" => "Your text",
                        "id" => "ale_day3",
                        "std" => "Wed.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 4",
                        "desc" => "Your text",
                        "id" => "ale_day4",
                        "std" => "Thu.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 5",
                        "desc" => "Your text",
                        "id" => "ale_day5",
                        "std" => "Fri.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 6",
                        "desc" => "Your text",
                        "id" => "ale_day6",
                        "std" => "Sat.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 7",
                        "desc" => "Your text",
                        "id" => "ale_day7",
                        "std" => "Sun.",
                        "type" => "text");

    $options[] = array( "name" => "Week day 1 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon1",
                        "std" => get_template_directory_uri()."/css/images/icon1.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 2 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon2",
                        "std" => get_template_directory_uri()."/css/images/icon2.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 3 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon3",
                        "std" => get_template_directory_uri()."/css/images/icon3.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 4 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon4",
                        "std" => get_template_directory_uri()."/css/images/icon4.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 5 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon5",
                        "std" => get_template_directory_uri()."/css/images/icon5.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 6 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon6",
                        "std" => get_template_directory_uri()."/css/images/icon6.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 7 icon",
                        "desc" => "Your icon",
                        "id" => "ale_icon7",
                        "std" => get_template_directory_uri()."/css/images/icon7.png",
                        "type" => "upload");

    $options[] = array( "name" => "Week day 1 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime1",
                        "std" => "8:00 - 16:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 2 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime2",
                        "std" => "8:00 - 16:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 3 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime3",
                        "std" => "8:00 - 16:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 4 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime4",
                        "std" => "8:00 - 16:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 5 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime5",
                        "std" => "8:00 - 16:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 6 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime6",
                        "std" => "11:00 - 15:00",
                        "type" => "text");

    $options[] = array( "name" => "Week day 7 time",
                        "desc" => "Your text",
                        "id" => "ale_daytime7",
                        "std" => "Closed",
                        "type" => "text");

    $options[] = array( "name" => "Services subtitle",
                        "desc" => "Your text",
                        "id" => "ale_servicessubtitle",
                        "std" => "View our main services description",
                        "type" => "text");

    $options[] = array( "name" => "Services box 1",
                        "desc" => "Your text",
                        "id" => "ale_servicesbox1",
                        "std" => "CUTTING & STYLING",
                        "type" => "text");

    $options[] = array( "name" => "Services box 2",
                        "desc" => "Your text",
                        "id" => "ale_servicesbox2",
                        "std" => "NAIL TREATMENTS",
                        "type" => "text");

    $options[] = array( "name" => "Services box 3",
                        "desc" => "Your text",
                        "id" => "ale_servicesbox3",
                        "std" => "SPA & RELAXING",
                        "type" => "text");

    $options[] = array( "name" => "Services box 1 image",
                        "desc" => "Your image",
                        "id" => "ale_servicesboximage1",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Services box 2 image",
                        "desc" => "Your image",
                        "id" => "ale_servicesboximage2",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Services box 3 image",
                        "desc" => "Your image",
                        "id" => "ale_servicesboximage3",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Services box 1 title",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtitle1",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 2 title",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtitle2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 3 title",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtitle3",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 1 link",
                        "desc" => "Your link",
                        "id" => "ale_servicesboxlink1",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 2 link",
                        "desc" => "Your link",
                        "id" => "ale_servicesboxlink2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 3 link",
                        "desc" => "Your link",
                        "id" => "ale_servicesboxlink3",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Services box 1 text",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtext1",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Services box 2 text",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtext2",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Services box 3 text",
                        "desc" => "Your text",
                        "id" => "ale_servicesboxtext3",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Our Team subtitle",
                        "desc" => "Your text",
                        "id" => "ale_teamsubtitle",
                        "std" => "view our friendly team",
                        "type" => "text");

    $options[] = array( "name" => "Worker 1 name",
                        "desc" => "Your text",
                        "id" => "ale_worker1",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 2 name",
                        "desc" => "Your text",
                        "id" => "ale_worker2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 3 name",
                        "desc" => "Your text",
                        "id" => "ale_worker3",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 1 profession",
                        "desc" => "Your text",
                        "id" => "ale_worker1profes",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 2 profession",
                        "desc" => "Your text",
                        "id" => "ale_worker2profes",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 3 profession",
                        "desc" => "Your text",
                        "id" => "ale_worker3profes",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 1 photo",
                        "desc" => "Your text",
                        "id" => "ale_worker1photo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Worker 2 photo",
                        "desc" => "Your text",
                        "id" => "ale_worker2photo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Worker 3 photo",
                        "desc" => "Your text",
                        "id" => "ale_worker3photo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Worker 1 title",
                        "desc" => "Your text",
                        "id" => "ale_worker1title",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 2 title",
                        "desc" => "Your text",
                        "id" => "ale_worker2title",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 3 title",
                        "desc" => "Your text",
                        "id" => "ale_worker3title",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Worker 1 description",
                        "desc" => "Your text",
                        "id" => "ale_worker1desc",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Worker 2 description",
                        "desc" => "Your text",
                        "id" => "ale_worker2desc",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Worker 3 description",
                        "desc" => "Your text",
                        "id" => "ale_worker3desc",
                        "std" => "",
                        "type" => "textarea");


	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter username.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_inta",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Flickr",
                        "desc" => "Your flickr profile URL.",
                        "id" => "ale_flickr",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Dribble",
                        "desc" => "Your dribble profile URL.",
                        "id" => "ale_dri",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Evernote",
                        "desc" => "Your evernote profile URL.",
                        "id" => "ale_ever",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinterest profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Delicious",
                        "desc" => "Your delicious profile URL.",
                        "id" => "ale_delic",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Vimeo",
                        "desc" => "Your vimeo profile URL.",
                        "id" => "ale_vim",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Linked in",
                        "desc" => "Your linked in profile URL.",
                        "id" => "ale_liin",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Skype",
                        "desc" => "Your skype login",
                        "id" => "ale_skype",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Tumblr",
                        "desc" => "Your tumblr profile URL.",
                        "id" => "ale_tumblr",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Picassa",
                        "desc" => "Your picassa profile URL.",
                        "id" => "ale_pica",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Site PreLoader",
                        "desc" => "Check if you want to enable the site preloader. (We recommend to enable this option. All scripts will be loaded, and only after this, the site will appear and all options would working well.)",
                        "id" => "ale_preloader",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable custom scrollbarr",
                        "desc" => "Check if you want to show the custom scrollbar",
                        "id" => "ale_sitecustomscrollbar",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Sidebars",
                        "type" => "heading");



    $options[] = array( 'name' => "Sidebar style on Blog pages",
                        'desc' => "Select sidebar style",
                        'id' => 'ale_blogpages',
                        'std' => '1col-fixed',
                        'type' => 'images',
                        'options' => array(
                            '1col-fixed' => $imagepath . '1col.png',
                            '2c-l-fixed' => $imagepath . '2cl.png',
                            '2c-r-fixed' => $imagepath . '2cr.png')
                        );
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'post_page_metabox',
        'title'      => 'Post Data',
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Video Link',
                'desc' => 'You can put here the links from youtube.com, vimeo.com, blip.tv, dailymotion.com, flickr.com, smugmug.com, hulu.com, viddler.com, qik.com, revision3.com, photobucket.com, scribd.com, wordpress.tv, polldaddy.com, funnyordie.com, twitter.com, soundcloud.com, slideshare.net, instagram.com',
                'id'   => $prefix . 'videopostlink',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Slider Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Slider slug',
                'desc' => 'Insert your slider slug...',
                'id'   => $prefix . 'aboutsliderslug',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutone_page_metabox',
        'title'      => 'About Team Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(

            array(
                'name' => 'Team box title',
                'desc' => 'Insert your team box title',
                'id'   => $prefix . 'meetteamtitle',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Photo',
                'desc' => 'Upload first photo',
                'id'   => $prefix . 'firstphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'First Person Name',
                'desc' => 'Insert first person name',
                'id'   => $prefix . 'firstnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Desc',
                'desc' => 'Insert first person description',
                'id'   => $prefix . 'firstprofperson',
                'type'    => 'text',
            ),

            array(
                'name' => 'Second Person Photo',
                'desc' => 'Upload second photo',
                'id'   => $prefix . 'secondphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second Person Name',
                'desc' => 'Insert second person name',
                'id'   => $prefix . 'secondnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Desc',
                'desc' => 'Insert second person description',
                'id'   => $prefix . 'secondprofperson',
                'type'    => 'text',
            ),

            array(
                'name' => 'Third Person Photo',
                'desc' => 'Upload third photo',
                'id'   => $prefix . 'thirdphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third Person Name',
                'desc' => 'Insert third person name',
                'id'   => $prefix . 'thirdnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Desc',
                'desc' => 'Insert third person description',
                'id'   => $prefix . 'thirdprofperson',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_page_metabox',
        'title'      => 'About Skills Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php', 'template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Skills box Title',
                'desc' => 'Insert your box title...',
                'id'   => $prefix . 'abouttwoskills',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Title',
                'desc' => 'Insert your first skill title...',
                'id'   => $prefix . 'firstskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Percent',
                'desc' => 'Insert your first skill procent... ex. 80',
                'id'   => $prefix . 'firstskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Title',
                'desc' => 'Insert your second skill title...',
                'id'   => $prefix . 'secondskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Percent',
                'desc' => 'Insert your second skill procent... ex. 80',
                'id'   => $prefix . 'secondskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Title',
                'desc' => 'Insert your third skill title...',
                'id'   => $prefix . 'thirdskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Percent',
                'desc' => 'Insert your third skill procent... ex. 80',
                'id'   => $prefix . 'thirdskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Title',
                'desc' => 'Insert your fourth skill title...',
                'id'   => $prefix . 'fourthskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Percent',
                'desc' => 'Insert your fourth skill procent... ex. 80',
                'id'   => $prefix . 'fourthskillper',
                'type'    => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Map Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php','template-contact-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Google Map',
                'desc' => 'Insert the html code',
                'id'   => $prefix . 'gomap',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Map Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Google Map',
                'desc' => 'Insert the html code',
                'id'   => $prefix . 'gomap',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'page_metabox',
        'title'      => 'Pages Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Custom page subtitle',
                'desc' => 'Insert the subtitle',
                'id'   => $prefix . 'custompagesub',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'team_page_metabox',
        'title'      => 'Team Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-team.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Worker #1 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker1',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #1 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker1prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #1 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker1photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #1 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker1title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #1 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker1text',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Worker #2 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker2',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #2 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker2prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #2 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker2photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #2 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker2title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #2 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker2text',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Worker #3 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker3',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #3 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker3prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #3 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker3photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #3 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker3title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #3 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker3text',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Worker #4 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker4',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #4 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker4prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #4 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker4photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #4 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker4title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #4 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker4text',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Worker #5 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker5',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #5 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker5prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #5 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker5photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #5 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker5title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #5 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker5text',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Worker #6 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'worker6',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #6 profession',
                'desc' => 'Insert the profession',
                'id'   => $prefix . 'worker6prof',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #6 photo',
                'desc' => 'Insert the photo',
                'id'   => $prefix . 'worker6photo',
                'type' => 'file',
            ),
            array(
                'name' => 'Worker #6 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'worker6title',
                'type' => 'text',
            ),
            array(
                'name' => 'Worker #6 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'worker6text',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'services_page_metabox',
        'title'      => 'Services Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-services.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Service #1 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox1',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #1 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink1',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #1 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #1 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle1',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #1 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext1',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #2 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox2',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #2 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink2',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #2 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #2 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle2',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #2 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext2',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #3 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox3',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #3 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink3',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #3 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #3 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle3',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #3 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext3',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #4 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox4',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #4 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink4',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #4 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #4 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle4',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #4 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext4',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #5 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox5',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #5 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink5',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #5 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #5 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle5',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #5 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext5',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #6 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox6',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #6 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink6',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #6 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #6 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle6',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #6 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext6',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #7 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox7',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #7 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink7',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #7 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #7 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle7',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #7 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext7',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #8 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox8',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #8 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink8',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #8 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #8 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle8',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #8 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext8',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #9 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox9',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #9 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink9',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #9 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #9 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle9',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #9 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext9',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #10 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox10',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #10 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink10',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #10 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #10 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle10',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #10 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext10',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #11 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox11',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #11 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink11',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #11 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage11',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #11 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle11',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #11 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext11',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #12 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox12',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #12 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink12',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #12 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage12',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #12 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle12',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #12 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext12',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #13 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox13',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #13 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink13',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #13 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage13',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #13 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle13',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #13 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext13',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #14 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox14',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #14 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink14',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #14 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage14',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #14 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle14',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #14 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext14',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Service #15 name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'servicesbox15',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #15 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servicesboxlink15',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #15 image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'servicesboximage15',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #15 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servicesboxtitle15',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #15 text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'servicesboxtext15',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'singleser_page_metabox',
        'title'      => 'Single Service Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-singleservice.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Service Type #1 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename1',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #1 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #1 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost1',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #2 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename2',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #2 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc2',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #2 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost2',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #3 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename3',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #3 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc3',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #3 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost3',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #4 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename4',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #4 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc4',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #4 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost4',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #5 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename5',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #5 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc5',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #5 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost5',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #6 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename6',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #6 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc6',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #6 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost6',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #7 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename7',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #7 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc7',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #7 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost7',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #8 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename8',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #8 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc8',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #8 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost8',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #9 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename9',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #9 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc9',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #9 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost9',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #10 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename10',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #10 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc10',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #10 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost10',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #11 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename11',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #11 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc11',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #11 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost11',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #12 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename12',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #12 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc12',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #12 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost12',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #13 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename13',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #13 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc13',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #13 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost13',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #14 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename14',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #14 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc14',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #14 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost14',
                'type' => 'text',
            ),

            array(
                'name' => 'Service Type #15 Name',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'sertypename15',
                'type' => 'text',
            ),
            array(
                'name' => 'Service Type #15 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'sertypedesc15',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Service Type #15 Cost',
                'desc' => 'Insert the cost',
                'id'   => $prefix . 'sertypecost15',
                'type' => 'text',
            ),
        )
    );
	
	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-patrat',
                'width'     => 330,
                'height'    => 330,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-slider',
                'width'     => 9999,
                'height'    => 600,
                'crop'      => false,
            ),
        ),

        'post' => array(
            array(
                'name'      => 'post-blog',
                'width'     => 350,
                'height'    => 230,
                'crop'      => true,
            ),

        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array(
        'gallery','video'
    );
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('post','gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}