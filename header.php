<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Heaven
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
       

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="wrapper">
            <div id="page" class="hfeed site">
                <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'heaven'); ?></a>

                <header id="masthead" class="site-header" role="banner">
                    <div class="container header">

                        <div class="row clearfix">
                            <div class="site-header-inner col-lg-3 col-md-5 col-sm-5 col-xs-12 clearfix">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?> /images/header.gif" />
                                </a>

                                <!--		<div class="site-branding">
                                                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                                        <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                                                </div>-->
                            </div>

                            <div class="header-extras col-lg-9 col-md-7 col-sm-7 col-xs-12 clearfix">
                                <p>hello@ideaboxcreations.com <br> Fashionable clothing for your WordPress websites</p>
                            </div>


                        </div>


                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <div class="row">
                                <div class="site-navigation-inner col-lg-12 clearfix">
                                    <button class="menu-toggle"><?php _e('Primary Menu', 'heaven'); ?></button>
                                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                                </div>
                            </div>
                        </nav><!-- #site-navigation -->

                    </div>
                </header><!-- #masthead -->

                <div id="content" class="site-content">
