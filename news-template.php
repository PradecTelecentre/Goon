<?php

/**
 * Template name: News layout
 * This template is to aid with translations synced with wpml
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goon
 */

get_header();
?>
<div id="primary" class="content-area">
  <div class="container" style="margin-top: 10rem;">
    <div class="row">
      <div class="col-sm-5">
          <h5 class="news-title-h2 p-1 t-center activity"><a href="<?php echo get_post_type_archive_link('event');?>"><?php _e('Community Events','wpml_theme'); ?></a></h5>
          <?php
            $today=date('Ymd');
            $events = new WP_Query(array(
              'posts_per_page' => 20,
              'post_type' => 'event',
              'meta_key'=>'event_date',
              'orderby' => 'meta_value_num',
              'order'=>'ASC',
              'meta_query' => array(
                array(
                  'key'=> 'event_date',
                  'compare'=> '>=',
                  'value'=> $today,
                  'type'=>'numeric'
                )
              )
            ));
            while ($events->have_posts()) {
              $events->the_post();?>
              <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink();?>">
                  <span class="event-summary__month"><?php
                    $event_date = new DateTime(get_field('event_date'));
                    echo $event_date->format('M');
                  ?></span>
                  <span class="event-summary__day"><?php echo $event_date->format('d');?></span>
                </a>
                  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <p class="metabox metabox--activity"><?php _e('Posted by ','wpml_theme'); ?> <span style="color:black;"><?php the_author_posts_link();?> </span> <?php _e('on ','wpml_theme');?> <?php the_time('d/m/Y');?>.</p>
                  <p class="event-summary__content"><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  }else {
                    echo wp_trim_words(get_the_content(), 30);
                  } ?><a href="<?php the_permalink();?>" class="ac gray"><br><?php _e('Read more','wpml_theme'); ?></a></p>
              </div>
          <?php  }
          ?>
          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event');?>" class="btn btn--brown"><?php _e('View All Community Events!','wpml_theme'); ?></a></p>

        </div>
    <div class="col-sm-7" style="background-color:#ffffff; border-radius:20px;">
          <h5 class="news-title-h2 p-1 t-center com"><a href="<?php echo site_url('/information');?>"><?php _e('Community News','wpml_theme'); ?></a></h5>
          <?php
            $news_page_posts= new WP_Query(array(
              'posts_per_page' => 20,
            ));
            while ($news_page_posts->have_posts()) {
              $news_page_posts->the_post(); ?>
                  <h5 class="event-summary__title--com headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                  <p class="metabox metabox--com"><?php _e('Posted by ','wpml_theme'); ?> <span style="color:black;"><?php the_author_posts_link();?></span> <?php _e('on ','wpml_theme');?> <?php the_time('d/m/Y');?> <?php _e('in','wpml_theme');?> <?php echo get_the_category_list('and')?></p>
                  <p class="event-summary__content"><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  }else {
                    echo wp_trim_words(get_the_content(), 30);
                  } ?><a href="<?php the_permalink();?>" class="nu gray"><br><?php _e('Read more','wpml_theme'); ?></a></p>
          <?php  }
            wp_reset_postdata();
          ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('/information'); ?>" class="btn btn--orange"><?php _e('View All Community News!','wpml_theme'); ?></a></p>
        </div>
      </div>
  </div>
</div>
<?php

get_footer();
