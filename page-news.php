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
<h5 class="news-title-h2 p-1 banner">RECENT NEWS!</h5>
<div class="container" style="margin-top: 50px; ">

  <div class="row">
    <div class="col-sm-5">
        <h5 class="news-title-h2 p-1 t-center activity">Upcoming Activities</h5>
        <?php
          $today=date('Ymd');
          $activities = new WP_Query(array(
            'posts_per_page' => 5,
            'post_type' => 'activity',
            'meta_key'=>'activity_date',
            'orderby' => 'meta_value_num',
            'order'=>'ASC',
            'meta_query' => array(
              array(
                'key'=> 'activity_date',
                'compare'=> '>=',
                'value'=> $today,
                'type'=>'numeric'
              )
            )
          ));
          while ($activities->have_posts()) {
            $activities->the_post();?>
            <div class="event-summary">
              <a class="event-summary__date t-center" href="<?php the_permalink();?>">
                <span class="event-summary__month"><?php
                  $activity_date = new DateTime(get_field('activity_date'));
                  echo $activity_date->format('M');
                ?></span>
                <span class="event-summary__day"><?php echo $activity_date->format('d');?></span>
              </a>
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <p class="event-summary__content"><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                }else {
                  echo wp_trim_words(get_the_content(), 30);
                } ?><a href="<?php the_permalink();?>" class="nu gray"><br>Read more</a></p>
            </div>
        <?php  }
        ?>
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('activity');?>" class="btn btn--blue">View All Events</a></p>

      </div>
  <div class="col-sm-7" style="background-color:#ffffff;">
        <h5 class="news-title-h2 p-1 t-center com">Community News</h5>
        <?php
          $news_page_posts= new WP_Query(array(
            'posts_per_page' => 5,
          ));
          while ($news_page_posts->have_posts()) {
            $news_page_posts->the_post(); ?>
                <h5 class="event-summary__title--com headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <div class="metabox">
                  <p>Posted by <?php the_author_posts_link();?> on <?php the_time('dS F Y');?> in <?php echo get_the_category_list('and')?></p>
                </div>
                <p class="event-summary__content"><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                }else {
                  echo wp_trim_words(get_the_content(), 30);
                } ?><a href="<?php the_permalink();?>" class="nu gray"><br>Read more</a></p>
        <?php  } wp_reset_postdata();
        ?>

        <p class="t-center no-margin"><a href="<?php echo site_url('/information'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
</div>
<?php

get_footer();
