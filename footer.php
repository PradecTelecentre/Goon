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

<footer id="colophon" class="site-footer hide-footer" style="margin-top: 100px;bottom: 0;">


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


    <hr style="margin-bottom:-10px;">
    <footer class="font-small special-color-dark pt-4" style="background-color: #ffffff">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1" href="https://www.giz.de/en/html/index.html" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/coop.jpg'?>" alt=""
                            style="height:120px;width:150px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1" href="http://www.univ-ndere.cm/?lang=en" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/ndere.638285ff.jpg'?>" alt=""
                            style="height:90px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1" href="https://www.ubuea.cm/" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/buea.9be6528e.jpg'  ?>" alt=""
                            style="height:90px;width:150px;margin:0px -5px 0px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1" href="https://www.minddevel.gov.cm/index.php/en/home/"
                        target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/minddevel.1ab0ecff.jpg'  ?>"
                            alt="" style="height:90px;width:100px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1" href="https://www.minpostel.gov.cm/index.php/fr/"
                        target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/minpostel.3df38d3f.jpg'  ?>"
                            alt="" style="height:90px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1" href="https://www.activspaces.com/" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/activspaces.png'  ?>" alt=""
                            style="height:90px;width:100px;margin:0px 10px 0px;">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1" href="https://www.giz.de/en/worldwide/72781.html"
                        target="_blank">
                        <img src="<?= get_template_directory_uri() . '/src/img/partner/giz-logo-en.jpg'?>" alt=""
                            style="height:80px;width:180px;">
                    </a>
                </li>
            </ul>
        </div>



        <div class="footer-copyright text-center py-3">© 2020 Copyright</div>


    </footer>

    <?php wp_footer(); ?>

    </body>

    </html>