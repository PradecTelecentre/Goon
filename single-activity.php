<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package goon
 */

get_header();
?>

<div id="primary" class="content-area">
    <!--<main id="main" class="site-main">-->
        <div class="container-fluid" style="margin-top: 100px; ">
            <div class="row" style="margin-left: 1rem;margin-right:2rem;">
                <div class="col-md-4" style="margin-top:4rem;">
                    <hr class="hr-activity">
                    <?php

                      if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                        <h4 class="news-title-h2 p-1">COMMUNITY EVENTS</h4>
                    <?php } else { ?>
                        <h5 class="news-title-h2 p-1">ÉVÉNEMENTS LOCALS</h5>
                    <?php }
                    while (have_posts()):
                      the_post();
                      if (has_post_thumbnail()) { ?>
                        <div class="t-center"><?php echo get_the_post_thumbnail();?></div>
                      <?php } else { ?>
                        <img src="<?php echo get_theme_file_uri("calen.png");?>" alt="activities">
                    <?php  };
                    ?>

                </div>

                <?php
                //while (have_posts()) : ?>
                    <div class="col-md-8" style="margin-top: 2rem;">
                      <div class="generic-content">
                        <?php //the_post();

                            //get_template_part('template-parts/content', get_post_type());
                          ?>  <h2 class="headline headline--medium headline--post-title event-summary__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                            <div class="metabox metabox--activity">
                              <p><a class="metabox__blog-home-link meta--activity" href="<?php echo site_url('/news');?>"><?php _e(' Activities Page ','wpml_theme');?></a><span class="metabox__main"></span><?php _e('Posted by ','wpml_theme');
                               the_author_posts_link();
                               _e(' on ','wpml_theme');
                               the_time('d/m/Y');?>.</p>
                            </div>
                            <div class="event-summary">
                              <a class="event-summary__date t-center" href="<?php the_permalink();?>">
                                <span class="event-summary__month"><?php
                                $activity_date = new DateTime(get_field('activity_date'));
                                echo $activity_date->format('M');
                                ?></span>
                                <span class="event-summary__day"><?php echo $activity_date->format('d'); ?></span>
                              </a>
                              <p class="event-summary__content"><?php the_content();?></p>
                            </div>
                          <?php

                            //the_post_navigation();

                            // // If comments are open or we have at least one comment, load up the comment template.
                            // if (comments_open() || get_comments_number()) :
                            //     comments_template();
                            // endif;
                            ?>

                      </div>
                    </div>
                <?php endwhile; // End of the loop.
                ?>
            </div>
        </div>
    <!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
