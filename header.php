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
    <script>
        $(document).ready(function(){
            $("#video_presentation").modal('show');
        });
        function myClose(){
            let sound = document.getElementById("sound");
            sound.pause();
            sound.currentTime = 0;
        }
    </script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'telecenter'); ?></a>

		<header class="bg-basiques fixed-top">
			<nav id="navbar" class="bg-headers site-header-goon navbar navbar-expand-lg navbar-dark">
			<div class="site-branding navbar-brand header-goon">
			  <?php
			  the_custom_logo();
			  if (is_front_page() && is_home()) :
			    ?>
			    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php echo "Test and see"; ?></a></h1>
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
			<div id="site-navigations" class="main-navigation navbar">
			  <button class="navbar-toggler bg-dark btn-hambourger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <?php
					if (is_front_page()) {
				  		$args=array(
				        'theme_location'  =>  'primary',
				        'menu_id'         =>  'primary-menu',
				        'container_id'    =>  'navbarSupportedContent',
				        'container_class' =>  'navbar-collapse collapse nav_menu_container'
				  		);
				} elseif ($post->post_parent=='639') {
						$args=array(
							'theme_location'  =>  'primary',
							'menu_id'         =>  'primary-menu',
							'container_id'    =>  'navbarSupportedContent',
							'container_class' =>  'navbar-collapse collapse nav_menu_container'
					);
				} else {
					$args=array(
						'theme_location'  =>  'secondary',
						'menu_id'         =>  'primary-menu',
						'container_id'    =>  'navbarSupportedContent',
						'container_class' =>  'navbar-collapse collapse nav_menu_container'
					);
				}
				wp_nav_menu($args);
			  ?>


			</div><!-- #site-navigation -->
			<div class="bg-white d-none" style="height: 50px; width: 100%;"></div>
			</nav>
			</header>
