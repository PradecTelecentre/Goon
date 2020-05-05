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
              <h4 class="news-title-h2 p-1">NEWS IN THE COMMUNITY</h4>
          <?php } else { ?>
              <h5 class="news-title-h2 p-1">NOUVELLES DANS LA COMMUNAUTE</h5>
          <?php } echo get_permalink(); ?>
          <img src="<?php echo get_theme_file_uri("onews.png");?>" alt="activities">
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
                <p class="metabox metabox--com"><b>Posted by <?php the_author_posts_link();?> on <?php the_time('dS F Y');?> in <?php echo get_the_category_list('and')?></b></p>
                <p class="event-summary__content"><?php echo wp_trim_words(get_the_content(), 30);?><a href="<?php the_permalink();?>" class="nu gray"><br>Read more</a></p>
            </div>
        <?php  }
          echo paginate_links();
        ?>
      </div>
    </div>
  </div>
</div>
