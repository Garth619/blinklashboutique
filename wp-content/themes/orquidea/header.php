<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php if(ale_get_option('sitecustomscrollbar') == 1) { echo 'style="overflow:hidden;" data-scroll="scroll" '; } else { echo 'data-scroll="hidescroll"';} ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="google-site-verification" content="Ec4FhPEALqish2ZscpfO_RGQsH5fnMWgYHEASTO3cpU" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
    <?php if(ale_get_option('preloader')=='1'){ ?>
        <div class="hidde">
            <ul class="bokeh">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    <?php } ?>
    <?php if(ale_get_option('revslideslug') and is_front_page()){
        echo "<div id='headerslider' class='cf'>";
        putRevSlider( ale_get_option('revslideslug'),"homepage" );
        echo "</div>";
    } elseif(ale_get_option('revslideslug') and (is_page_template('page-home.php') or is_page_template('template-home-two.php') or is_page_template('template-home-three.php') or is_page_template('template-home-four.php') or is_page_template('template-home-five.php'))) {
        echo "<div id='headerslider' class='cf'>";
        putRevSlider( ale_get_option('revslideslug'));
        echo "</div>";
    } else { ?>
    <header id="headerslider" class="cusstyle15" style="<?php if(ale_get_option('headerimg')) { echo "background-image:url(".ale_get_option('headerimg').");"; } ?> ">
    </header>
    <?php } ?>
    <nav id="topmenu" class="topmenu cf" role="navigation">
        <div class="wrapper cf">
            <div class="logo">
                <h1>
                    <?php if(ale_get_option('sitelogo')){ ?>
                        <a href="<?php echo home_url(); ?>/" class="customlogo logolinkurl"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo home_url(); ?>/" class="alelogo logolinkurl"><?php echo bloginfo('name'); ?></a>
                    <?php } ?>
                </h1>
            </div>
            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_menu',
                    'menu'			=> 'Header Menu',
                    'menu_class'	=> 'headermenu cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>
        </div>
    </nav>
    <nav id="mobilenav" class="topmenu cf" role="navigation">
        <div class="logo">
            <h1>
                <?php if(ale_get_option('sitelogo')){ ?>
                    <a href="<?php echo home_url(); ?>/" class="customlogo logolinkurl"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php } else { ?>
                    <a href="<?php echo home_url(); ?>/" class="alelogo logolinkurl"><?php echo bloginfo('name'); ?></a>
                <?php } ?>
            </h1>
        </div>
        <?php
        if ( has_nav_menu( 'header_menu' ) ) {
            wp_nav_menu(array(
                'theme_location'=> 'header_menu',
                'menu'   => 'Header Menu',
                'menu_class' => 'mobilemenu',
                'container'  => '',
                'items_wrap' => '<select id="%1$s" class="%2$s drop headerfont">%3$s</select>',
                'indent_string' => '&ndash;&nbsp;',
                'indent_after' => '',
                'walker' => new Aletheme_Dropdown_Nav_Walker(),
            ));
        } ?>
    </nav>
    <div id="content-main" role="main" class="cf">