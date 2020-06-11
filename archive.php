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

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 content-area">
			<main id="main" class="site-main">
				<div class="container-fluid">
					<div class="row">

						<?php if (have_posts()) : ?>

							<header class="page-header">
								<?php
									the_archive_title('<h1 class="page-title">', '</h1>');
									the_archive_description('<div class="archive-description">', '</div>');
									?>
							</header><!-- .page-header -->

							<?php
								/* Start the Loop */
								while (have_posts()) :
									?>
								<div class="col-md-10">
									<?php
											the_post();

											/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
											get_template_part('template-parts/content', get_post_type());
											?>
								</div>
						<?php
							endwhile;

							the_posts_navigation();

						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
					</div>
				</div>
			</main><!-- #main -->
		</div>
	</div>
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
