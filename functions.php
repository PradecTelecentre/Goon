<?php
/**
 * goon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goon
 */

if ( ! function_exists( 'telecenter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function telecenter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on goon, use a find and replace
		 * to change 'telecenter' to the name of your theme in all the template files.
		 */
		 //function for language translations, wpml
		load_theme_textdomain( 'wpml_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'telecenter' ),
			'home' => esc_html__( 'Home','telecenter'),
			'secondary' => esc_html__('Secondary','telecenter')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'telecenter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'telecenter_setup' );


function telecenter_add_editor_style(){

	add_editor_style('dis/css/editor-style.css');
}

add_action('admin_init', 'telecenter_add_editor_style');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function telecenter_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'telecenter_content_width', 1140 );
}
add_action( 'after_setup_theme', 'telecenter_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function telecenter_scripts() {


	wp_enqueue_style('telecenter-bs-css', get_template_directory_uri().  '/dist/css/bootstrap.css');

	// wp_enqueue_style('telecenter-goon-css', get_template_directory_uri() .  '/dist/css/goon.css');
	wp_enqueue_style('telecenter-goon-css', get_template_directory_uri() .  '/dist/css/goon-01.css',NULL, microtime());
	//wp_enqueue_style('telecenter-header-css', get_template_directory_uri() .  '/dist/css/header-01.css');

	wp_enqueue_style('telecenter-fontawesome', get_template_directory_uri(). '/fonts/font-awesome/css/fontawesome.min.css');

	wp_enqueue_style( 'telecenter-style', get_stylesheet_uri() );



	wp_enqueue_script('telecenter-tether', get_template_directory_uri(). '/src/js/tether.js', array(), '', true);
	wp_enqueue_script('telecenter-jquery', get_template_directory_uri(). '/dist/js/jquery.min.js', array('jquery'), '', false);
	wp_register_script('popper', get_template_directory_uri() . '/dist/js/popper.min.js', array('jquery'), '', false);
	wp_enqueue_script('popper');
	wp_enqueue_script('telecenter-bootstrapp', get_template_directory_uri(). '/dist/js/bootstrap.min.js', array('jquery'), '', false);


	// wp_enqueue_script( 'telecenter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'telecenter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('popper', '/src/js/popper.min.js', false, '', true);




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'telecenter_scripts' );

/*functions for news and events pages*/

function events_adjust_queries($query){
		//Before wordpress sends the query to the database, it gives you the final say to edit it.
		if (!is_admin() AND is_post_type_archive('cevent') AND $query->is_main_query()) {
			$today=date('Ymd');
			$query->set('meta_key','event_date');
			$query->set('orderby','meta_value_num');
			$query->set('order','ASC');
			$query->set('meta_query', array(
				array(
					'key'=> 'event_date',
					'compare'=> '>=',
					'value'=> $today,
					'type'=>'numeric'
				)
			));
		}
}
add_action('pre_get_posts','events_adjust_queries');
//end functions for custom posts

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer widget.
 */
require get_template_directory() . '/inc/widget.php';
/**
 * Bootstrapp nav walker file.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function shapeSpace_display_search_form(){
	return get_search_form(false);
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Autres informations' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Autres informations &rarr;' ); ?></div>
        </nav>
    <?php }
}

function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}

//function to check if we are on the homepage and its child pages
function is_child_of_front($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(($post->post_parent==$pid)||is_page($pid))
               return true;   // we're at the page or at a sub page
	else
               return false;  // we're elsewhere
};

//function to ensure that accordion is closed y default.
function theme_wp_footer() {

    ?>

    <script>
			jQuery(document).ready(function($) {
					var delay = 100;
					setTimeout(function() {
						$('.elementor-tab-title').removeClass('elementor-active');
						$('.elementor-tab-content').css('display', 'none');
					}, delay);
			});
    </script>

    <?php

}

add_action('wp_footer', 'theme_wp_footer', PHP_INT_MAX);
