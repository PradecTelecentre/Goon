<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goon
 */

get_header();
?>

<div class="container-fluid" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-4" style="padding: 99px">
            <hr class="hr-news">
            <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                <h4 class="news-title-h2 p-1">NEWS IN THE COMMUNITY</h4>
            <?php } else { ?>
                <h4 class="news-title-h2 p-1">NOUVELLES DANS LA COMMUNAUTE</h4>
            <?php } ?>
        </div>
        <div class="col-md-8 content-area" style="padding: 40px">
            <main id="main" class="site-main">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        if (have_posts()) :
                            if (is_home() && !is_front_page()) :
                                ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php
                            endif;
                                /* Start the Loop */
                                while (have_posts()) : ?>
                                <div class="col-md-4 col-lg-3 news">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 167.39 94.67">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #e99c1e;
                                                }

                                                .cls-2 {
                                                    fill: #58595b;
                                                }
                                            </style>
                                        </defs>
                                        <title>Asset 1</title>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="Calque_1" data-name="Calque 1">
                                                <rect class="cls-1" width="45.16" height="34" />
                                                <path class="cls-2" d="M30.95,17H151.67a15.72,15.72,0,0,1,15.72,15.72V78.95a15.72,15.72,0,0,1-15.72,15.72h-105A15.72,15.72,0,0,1,30.95,78.95V17A0,0,0,0,1,30.95,17Z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="description p-2">
                                        <?php
                                                the_post();
                                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                        <small class="lead"><a href="<?= esc_url(get_permalink()) ?>" rel="bookmark">Lire la suite</a></small>
                                        <?php //the_excerpt();
                                                ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        ///wpbeginner_numeric_posts_nav();
                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>
<?php

get_footer();
