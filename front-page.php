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
<div id="myModal" class="modal fade">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close text-left" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-right">Video de présentation de GOON</h4>
            </div>

            <div class="modal-body">
                <div class="video__container__size">
                    <video src="a.webm" width="320" height="300" controls>
                    </video>
                </div>
            </div>

        </div>

    </div>

</div><div id="myModal" class="modal fade">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">Subscribe our Newsletter</h4>

            </div>

            <div class="modal-body">

                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>

                <form>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Name">

                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" placeholder="Email Address">

                    </div>

                    <button type="submit" class="btn btn-primary">Subscribe</button>

                </form>

            </div>

        </div>

    </div>

</div>
<?php
//  include des services payants
include "paid-services.php";
?>

<?php
//  include des services gratuits
include "free-services.php";
?>

<?php

// get_footer();

