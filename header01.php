<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'telecenter'); ?></a>

        <header id="masthead" class="site-header-goons bg-basiques fixed-top">
            <nav id="navbar-example2" class="bg-headers site-header-goon navbar navbar-expand-sm navbar-dark">
                <div class="site-branding navbar-brand header-goon">
                    <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;
                    $telecenter_description = get_bloginfo('description', 'display');
                    if ($telecenter_description || is_customize_preview()) :
                        ?>
                        <p class="site-description"><?php $telecenter_description; /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif;
                    ?>
                </div><!-- .site-branding -->

                <div id="site-navigations" class="main-navigation navbar navbar-light">
                    <button class="menu-toggle navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'telecenter'); ?>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                    ));
                    ?>
                </div><!-- #site-navigation -->
                <div class="bg-white" style="height: 50px; width: 100%;"></div>
            </nav>
        </header><!-- #masthead -->

        <div id="content" class="site-content">