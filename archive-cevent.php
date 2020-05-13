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
                <div class="col-md-4" style="margin-top: 4rem;">
                    <hr class="hr-activity">
                    <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                        <h4 class="news-title-h2 p-1">COMMUNITY EVENTS</h4>
                    <?php } else { ?>
                        <h5 class="news-title-h2 p-1 t-center">ÉVÉNEMENTS LOCALS</h5>
                    <?php } ?>
                    <img src="<?php echo get_theme_file_uri("calen.png");?>" alt="activities">
                </div>

                    <div class="col-md-8" style="margin-top:-30px;">
                      <?php while (have_posts()) : ?>
                      <div class="generic-content">
                        <?php the_post();
                          ?>
                          <h2 class="headline headline--medium headline--post-title event-summary__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                          <p class="metabox metabox--activity"><?php _e('Posted by ','wpml_theme');?> <span style="color:black;"><?php the_author_posts_link();?></span><?php _e(' on ','wpml_theme'); the_time('d/m/Y');?>.</p>
                            <div class="event-summary">
                              <a class="event-summary__date t-center" href="<?php the_permalink();?>">
                                <span class="event-summary__month"><?php
                                $event_date = new DateTime(get_field('event_date'));
                                echo $event_date->format('M');
                                ?></span>
                                <span class="event-summary__day"><?php echo $event_date->format('d');?></span>
                              </a>
                              <p class="event-summary__content"><?php echo wp_trim_words(get_the_content(), 30); ?><a href="<?php the_permalink();?>" class="ac gray"><br><?php _e('Read more','wpml_theme');?></a></p>
                            </div>
                          <?php  //the_content();

                          //  the_post_navigation();

                            // // If comments are open or we have at least one comment, load up the comment template.
                            // if (comments_open() || get_comments_number()) :
                            //     comments_template();
                            // endif;
                            ?>

                      </div>
                    <?php endwhile; // End of the loop.
                      echo paginate_links();
                    ?>
                    </div>

            </div>
        </div>
    <!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
