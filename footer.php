<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goon
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer hide-footer" style="margin-top: 100px;
	bottom: 0;">


	<div class="site-info bg-dark">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'telecenter')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			// printf(esc_html__('Proudly powered by %s', 'telecenter'), '');
			?>
		</a>
		<!-- <span class="sep"> | </span> -->
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		// printf(esc_html__('Theme: %1$s by %2$s.', 'telecenter'), 'telecenter', '<a href="http://telecenter.local">telecenter</a>');
		?>
	</div><!-- .site-info -->



	<!-- <footer class="page-footer font-small  special-color-dark pt-4" style="background-color: #f07000">


		<div class="container">


			<ul class="list-unstyled list-inline text-center">

				<li class="list-inline-item">
					<a class="btn-floating btn-tw mx-1">
						<a href="#" class=""><img src="<?= get_template_directory_uri() . '/src/img/partner/GIZ-logo.04e04efc.png'  ?>" alt="" style="border-radius: 30px;height: 50px;"></a>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-gplus mx-1">
						<img src="<?= get_template_directory_uri() . '/src/img/partner/ndere.638285ff.jpg'  ?>" alt="" style="border-radius: 30px;height: 50px;">
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-fb mx-1">
						<img src="<?= get_template_directory_uri() . '/src/img/partner/buea.9be6528e.jpg'  ?>" alt="" style="border-radius: 30px;height: 50px;">
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-li mx-1">
						<img src="<?= get_template_directory_uri() . '/src/img/partner/minddevel.1ab0ecff.jpg'  ?>" alt="" style="border-radius: 30px;height: 50px;">
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-dribbble mx-1">
						<img src="<?= get_template_directory_uri() . '/src/img/partner/minpostel.3df38d3f.jpg'  ?>" alt="" style="border-radius: 30px;height: 50px;">
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-fb mx-1">
						<img src="<?= get_template_directory_uri() . '/src/img/partner/activspaces.png'  ?>" alt="" style="border-radius: 30px;height: 50px;">
					</a>
				</li>
			</ul>


		</div>



		<div class="footer-copyright text-center py-3">© 2019 Copyright:
			<a href="https://mdbootstrap.com/education/bootstrap/"> goon.ovh</a>
		</div>


	</footer> -->


</footer>


<?php wp_footer(); ?>

</body>

</html>
