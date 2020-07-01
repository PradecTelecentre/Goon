<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Goon
 * @since Goon 2.0
 */

get_header();
?>
    <div class="" style="margin-top: 53px; position:relative; background-color: darkorange; height: 375px; border-radius: 1px 1px 100px 100px; padding-top: 30px">
    <marquee> Les articles publiés dans GOON sont supprimés après un délais de 7 jours.
        Notez Bien tout contenu inapproprié est immédiatement supprimé de la plateforme  </marquee>
        <div class="image text-center" style="opacity:0.4; position: relative; text-align:center; color:white;">
            <img class="" src="<?= get_template_directory_uri() . '/src/img/marche3.jpg' ?>" alt="" style="height:260px; ">
            <div class="" style="position: absolute; top:30%; left: 50%;  transform: translate(-50%, -50%); font-size: 44px; color: #FFFFFF; font-weight: 600; font-family: 'Roboto Slab', Sans-serif !important; text-transform: uppercase;" >MARCHÉ</div>
        </div>
    </div>
    
    <div class="container" style="background-color:blue; margin-top:-65px" >
        
       <h1>Details sur l'article </h1>

        <div class="container row text-center" > 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                <?php 
                    $marche = array(
                    'post_type' => 'marche', 
                    'posts_per_page' => 6,
                    );
                    // Start Our custom query
                    $data = new WP_Query($marche);
                    // Start the Loop.
                
                ?>
                <div class="row"> 
                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                        alt="Sample">
                    </div>

                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                        <h1> nom</h1>
                    </div>
                </div>

            </div>
        </div>
      
    </div>
<?php


get_footer();


