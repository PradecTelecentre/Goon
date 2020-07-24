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
<div class="container-fluid" style="margin-top: 100px;">
  <div class="row" style="margin-left: 1rem;margin-right:2rem;">
      <div class="col-md-4" style="margin-top:4rem;">
        <div style="">
          <hr class="hr-news">
          <?php if (strpos(home_url('/'), 'lang=en') !== false) {  ?>
              <h4 class="news-title-h2 p-1">COMMUNITY NEWS</h4>
          <?php } else { ?>
              <h5 class="news-title-h2 p-1">LES NOUVELLES LOCALES</h5>
          <?php } ?>
          <img src="<?php echo get_theme_file_uri("/src/img/v2/new.png");?>" alt="activities">
      </div>
      </div>
      <div class="col-md-8" style="padding: -30px">
        <?php
          $news_page_posts= new WP_Query(array(
            'posts_per_page' => 5,
          ));
          while ($news_page_posts->have_posts()) {
            $news_page_posts->the_post(); ?>
            <div class="generic-content">
                <h2 class="headline headline--medium headline--post-title event-summary__title--com"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <p class="metabox metabox--com"><b><?php
                  _e('Posted by ','wpml_theme');
                  the_author_posts_link();
                  _e(' on ','wpml_theme'); the_time('d/m/Y');
                  _e(' in ','wpml_theme'); echo get_the_category_list('and');?></b></p>
                <p class="event-summary__content"><?php echo wp_trim_words(get_the_content(), 30);?><a href="<?php the_permalink();?>" class="nu gray"><br><?php _e('Read more','wpml_theme');?></a></p>
            </div>
        <?php  }
          echo paginate_links();
        ?>
      </div>
    </div>
  </div>
</div>
