<?php

/**
 * Template Name: Services layout
 * This template is for the home page to aid with translations.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goon
 */

get_header();
?>
<div id="video_presentation" class="modal fade mr-auto ml-auto p-0">

    <div class="modal-dialog">

        <div class="modal-content bg-dark only__desktop">

            <div class="modal-header text-center">
                <button type="button" class="text-white bg-danger" data-dismiss="modal" aria-hidden="true"
                    onclick="myClose()">&times;</button>
                <span class="modal-title text-white"
                    style="font-size: 1.2rem; text-transform: uppercase;"><?php _e('Video Presentation of GOON','wpml_theme'); ?></span>
            </div>

            <div class="modal-body mr-auto ml-auto">
                <video controls autoplay="true" height="100%" width="100%" id="sound">
                    <source src="<?php echo get_template_directory_uri() ?>/src/video/presentations.mp4"
                        type="video/mp4">
                </video>
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

get_footer();