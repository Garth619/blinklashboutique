<?php
$ale_background = ale_get_option('background');
$ale_headerfont = ale_get_option('headerfont');
$ale_bodyfont = ale_get_option('bodyfont');
$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php   if(ale_get_option('bodyfont') or ale_get_option('headerfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('bodyfont').":300,300italic|".ale_get_option('headerfont')."' rel='stylesheet' type='text/css'>"; } else { echo "<link href=\"http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic|Anton\" rel=\"stylesheet\" type=\"text/css\">"; }  ?>
<style type='text/css'>
    body {
    <?php
    if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; } else { echo "background-color:#f5f5f5;"; }
    if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; };
    if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; };
    if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; };
    if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; };
    if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
    if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
    if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
    if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };
    ?>
    }
    .slideimage {
    <?php if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; } else { echo "background-color:#f5f5f5;"; } ?>
    }
    header#topheader {
    <?php if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; } else { echo "background-color:#f5f5f5;"; } ?>
    }
    h1 {
    <?php
    if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
    if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
    if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
    if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
    ?>
    }
    h2 {
    <?php
    if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
    if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
    if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
    if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
    ?>
    }
    h3 {
    <?php
    if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
    if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
    if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
    if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
    ?>
    }
    h4 {
    <?php
    if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
    if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
    if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
    if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
    ?>
    }
    h5 {
    <?php
    if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
    if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
    if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
    if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
    ?>
    }
    h6 {
    <?php
    if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
    if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
    if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
    if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
    ?>
    }
    .headerfont,nav#topmenu ul li,.viewmoreposts h3,.widget .widtitle h4,.ale-tabs .ale-nav li,.ale-toggle .ale-toggle-title,.flexslider .descr h3,
    .ale-team .testititle {
        font-family: <?php if($ale_headerfont) { echo str_replace ('+',' ',$ale_headerfont);} ?>;
    }
    .bodyfont,.tagcloud a,nav#topmenu ul li span.desc_item_menu,nav#topmenu ul li ul li,.commentform section.comments .comment-author,.aletheme-blog-widget .entry-title,.aletheme-mostcommented-widget .entry-title,.aletheme-blog-widget .detail .entry-meta,.aletheme-mostcommented-widget .detail .entry-meta,.widget_archive ul,.widget_categories ul,.widget_nav_menu ul,.widget_meta ul,.widget_pages ul,.widget_recent_comments ul,.widget_recent_entries ul {
        font-family: <?php if($ale_bodyfont) { echo str_replace ('+',' ',$ale_bodyfont);} ?>;
    }
    .firstcolor{
    <?php if(ale_get_option('site_color')){ echo "color:".ale_get_option('site_color').";";} else { echo "color:#f597b1;"; } ?>
    }
    .teamlist li .imagebox,nav#topmenu ul li:hover > ul {
    <?php if(ale_get_option('site_color')){ echo "border-color:".ale_get_option('site_color').";";} else { echo "border-color:#f597b1;"; } ?>
    }
    a,nav#topmenu ul li.current-menu-item a,nav#topmenu ul li a:hover,footer#footer-main div.socialprof a:hover,.teamlist li .imagebox .namemask .namecenter,.gallerypage .galleryitems .galitem .imagegally .mask2 .gallydate,.commentform section.respond label span.red  {
    <?php if(ale_get_option('site_color')){ echo "color:".ale_get_option('site_color').";";} else { echo "color:#f597b1;"; } ?>
    }

    .firstbg,.bokeh li:nth-child(1),.bokeh li:nth-child(2),.bokeh li:nth-child(3),.bokeh li:nth-child(4),.cs-style-4 figcaption a,.tp-bannertimer,.opentime .timelineopening li .roundbox,.gallerypage .galleryitems .galitem .imagegally .mask1,.gallerypage .gallpbd .galitem .imagegally .mask1,
    .ale-service .iconbox {
    <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";} else { echo "background-color:#f597b1;"; } ?>
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=url]:focus,
    input[type=search]:focus,
    input[type=password]:focus,
    textarea:focus {
        <?php if(ale_get_option('site_color')){ echo "border-color:".ale_get_option('site_color').";";} else { echo "border-color:#f597b1;"; } ?>
    }

    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";} else { echo "background-color:#f597b1;"; } ?>
        font-family: <?php if($ale_headerfont) { echo str_replace ('+',' ',$ale_headerfont);} ?>;
    }
    .tagcloud a {
    <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";} else { echo "background-color:#f597b1;"; } ?>
    }
    .jspDrag {
        <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";} else { echo "background-color:#f597b1;"; } ?>
    }

</style>