<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goon
 */

get_header();
?>
<div id="primary" class="content-area">
    <!--<main id="main" class="site-main">-->
        <div class="container-fluid" style="margin-top: 100px; ">
            <div class="row" style="margin-left: 1rem;margin-right: 2rem;">
                <div class="col-md-4" style="margin-top:4rem;">
                    <hr class="hr-news">
                    <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                        <h4 class="news-title-h2 p-1">NEWS IN THE COMMUNITY</h4>
                    <?php } else { ?>
                        <h5 class="news-title-h2 p-1"><?php __(the_archive_title(),'wpml_theme');?></h5>
                        <p style="font-size:16px;"><?php the_archive_description();?> </p>
                    <?php } ?>
                        <img src="<?php echo get_theme_file_uri("/src/img/v2/new.png");?>" alt="activities">
                </div>
                <div class="col-md-8" style="margin-top:-30px;">
                  <?php
                    while (have_posts()) {
                    the_post(); ?>
                    <div class="generic-content">
                      <h2 class="headline headline--medium headline--post-title event-summary__title--com"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                      <div class="metabox metabox--com metabox--position-up metabox--with-home-link">
                        <p><a class="metabox__blog-home-link meta--com" href="<?php echo site_url('/news');?>"><?php _e('News Page','wpml_theme');?> </a><span class="metabox__main"></span><?php _e('Posted by ','wpml_theme');?>
                           <?php the_author_posts_link();?>
                           <?php _e(' on ','wpml_theme');?>
                           <?php the_time('d/m/Y');?> <?php _e('in','wpml_theme');?> <?php echo get_the_category_list('and')?></p>
                      </div>
                      <p class="event-summary__content"><?php echo wp_trim_words(get_the_content(), 30); ?><a href="<?php the_permalink();?>" class="nu gray"><br><?php _e('Read more','wpml_theme');?></a></p>
                    </div>
                  <?php  }
                  echo paginate_links();
                  ?>
                </div>
              </div>
            </div>
</div>


<?php
//get_sidebar();
//get_footer();
