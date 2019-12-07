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
		<main id="main" class="site-main">
            <div class="container" style="margin-top: 170px">
                <div class="row">
                    <div class="col-md-4" style="padding: 40px">
                        <h3 class="news-title-h3">Recents news</h3>
                        <hr class="hr-news">
                        <h2 class="news-title-h2 p-1">WHAT'S NEW IN THE COMMUNITY ?</h2>
                        <div class="pagination">
                            <h3>Information</h3>
                        </div>
                        <?php
                        //pagination_nav();
                        ?>
                        <div class="card-img-bottom mb-5" style="margin-top: 100px;;">
                            <img src="<?= get_template_directory_uri() . '/src/assets/calendrier.svg'  ?>" alt="">
                        </div>
                    </div>

                    <?php
                    while ( have_posts() ) : ?>
                        <div class="col-md-8">

                        <?php the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                    <?php endwhile; // End of the loop.?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
