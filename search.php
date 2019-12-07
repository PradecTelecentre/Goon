<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package goon
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 content-area" style="margin-top:140px">
			<main id="main" class="site-main">
				<div class="container-fluid">
					<div class="row">
						<?php if (have_posts()) : ?>
							<!-- annuler le titre une fois la page de rechercher est affichee -->


							<!-- <header class="page-header">
								<h1 class="page-title">
									<?php
										/* translators: %s: search query. */
										// printf(esc_html__('Search Results for: %s', 'telecenter'), '<span>' . get_search_query() . '</span>');
										?>
								</h1>
							</header>.page-header -->

							<?php
								/* Start the Loop */
								while (have_posts()) :

									?>
								<div class="col-md-8
								">
									<?php
											the_post();

											/**
											 * Run the loop for the search to output the results.
											 * If you want to overload this in a child theme then include a file
											 * called content-search.php and that will be used instead.
											 */
											get_template_part('template-parts/content', 'search');
											?>
								</div>
						<?php
							endwhile;

							//the_posts_navigation();

						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
					</div>
				</div>
			</main><!-- #main -->
			</section><!-- #primary -->


		</div>

		<!-- <div class="col-md-2">
			<?php //get_sidebar(); ?>
		</div> -->

	</div>
</div>

<?php

get_footer();
