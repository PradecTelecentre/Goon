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
                    <hr class="hr-news">
                    <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                        <h4 class="news-title-h2 p-1">NEWS IN THE COMMUNITY</h4>
                    <?php } else { ?>
                        <h5 class="news-title-h2 p-1">NOUVELLES DANS LA COMMUNAUTE</h5>
                    <?php }
                      while (have_posts()):
                      the_post();
                      if (has_post_thumbnail()) { ?>
                        <div class="t-center"><?php echo get_the_post_thumbnail();?></div>
                      <?php } else { ?>
                        <img src="<?php echo get_theme_file_uri("onews.png");?>" alt="activities">
                    <?php  };
                    ?>
                </div>
                    <div class="col-md-8" style="margin-top: 2rem;">
                      <div class="generic-content">
                        <h2 class="headline headline--medium headline--post-title event-summary__title--com"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <div class="metabox metabox--com">
                              <p><a class="metabox__blog-home-link meta--com" href="<?php echo site_url('/information');?>">News Page </a><span class="metabox__main"></span>Posted by <?php the_author_posts_link();?> on <?php the_time('dS F Y');?> in <?php echo get_the_category_list('and')?> </p>
                            </div>
                          <?php  the_content();

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
