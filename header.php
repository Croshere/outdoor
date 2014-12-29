<!DOCTYPE HTML>
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <?php global $smof_data; ?>
    <!-- ==SEO== -->
    <?php if (is_front_page()) { if ($smof_data['site_keywords']) { ?>
            <meta name="description" content="<?php echo $smof_data['site_keywords']; ?>">
        <?php } ?>
        <?php if ($smof_data['site_desc']) { ?>
            <meta name="description" content="<?php echo $smof_data['site_desc']; ?>">
        <?php } ?>
        <?php if ($smof_data['site_title']) { ?>
            <title><?php echo $smof_data['site_title']; ?></title>
        <?php } else { ?>
            <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <?php
        }
    } else { ?>
        <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php } ?>
    <!-- ==Favicon== -->
    <?php if ($smof_data['custom_favicon_ie']) { ?>
        <link rel="shortcut icon" href="<?php echo $smof_data['custom_favicon_ie']; ?>" type="image/x-icon">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_mod']) { ?>
        <link rel="icon" href="<?php echo $smof_data['custom_favicon_mod']; ?>" type="image/png">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_iphone']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $smof_data['custom_favicon_iphone']; ?>">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_ipad']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $smof_data['custom_favicon_ipad']; ?>">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_retina']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $smof_data['custom_favicon_retina']; ?>">
    <?php } ?>
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css" type="text/css" media="screen">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<div data-spy="affix" data-offset-top="500" class="back2top" ><a href="#top"><i class="icon-angle-up"></i></a></div>
<?php
if($smof_data['parallax_nav'] == 1){
if(is_front_page()) { ?>
<div id="parallax-nav">
    <div class="trig">
        <i class="icon-align-justify"></i>
    </div>
    <div class="p-nav">
        <ul class="unstyled">
            <li><a href="#home"><?php echo $smof_data["home_menu_name"];?></a></li>
            <?php $smof_data['homepage_blocks'];

            foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
                switch ($block) {
                    case 'Service':
                        echo '<li><a href="#services">' . $smof_data["serv_menu_name"] . '</a></li>';
                        break;
                    case 'Portfolio':
                        echo '<li><a href="#portfolio">' . $smof_data["port_menu_name"] . '</a></li>';
                        break;
                    case 'Pricing Table':
                        echo '<li><a href="#pricing_table">' . $smof_data["price_menu_name"] . '</a></li>';
                        break;
                    case 'About Us':
                        echo '<li><a href="#about_us">' . $smof_data["about_menu_name"] . '</a></li>';
                        break;
                    case 'Contact Us':
                        echo '<li><a href="#contact_us">' . $smof_data["contact_menu_name"] . '</a></li>';
                        break;
                    case 'WooSection':
                        echo '<li><a href="#woo">' . $smof_data["woo_menu_name"] . '</a></li>';
                        break;
                    case 'Blank1':
                        echo '<li><a href="#blank1">' . $smof_data["blank1_menu_name"] . '</a></li>';
                        break;
                    case 'Blank2':
                        echo '<li><a href="#blank2">' . $smof_data["blank2_menu_name"] . '</a></li>';
                        break;
                    case 'Blank3':
                        echo '<li><a href="#blank3">' . $smof_data["blank3_menu_name"] . '</a></li>';
                        break;
                    default:
                        break;
                }
            }?>
        </ul>
    </div>
</div>
<?php } } ?>
<!-- ==========================HEADER=========================== -->
<header id="site-header" data-spy="affix" data-offset-top="1">
    <div class="container">
        <?php if (has_nav_menu('top_navigation', 'GoGetThemes')) { ?>
                <?php wp_nav_menu(array(
                        'container' => 'div',
                        'container_id' => 'main_menu',
                        'menu_id'         => 'menu',
                        'fallback_cb' => false,
                        'menu_class' => 'top_navigation unstyled sf-menu',
                        'theme_location' => 'top_navigation')
                );
                ?>
        <?php } ?>

        <div id="logo">
            <a href="<?php echo home_url(); ?>"><img class="headerimg" src="<?php echo $smof_data['logo']; ?>" alt="<?php bloginfo('name');?>"/></a>
        </div>
    </div>
    <div class="header-border-bot"></div>
</header>