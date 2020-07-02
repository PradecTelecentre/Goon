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
    
    <div class="container" style=" margin-top:-65px; " >
        <div class="container row text-center" style="position:absolute; background-color: whitesmoke;"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <?php 
                    $marche = array(
                    'post_type' => 'marche', 
                    'posts_per_page' => 4,
                    );
                    // Start Our custom query
                    $data = new WP_Query($marche);
                    // Start the Loop.
                
                ?>
                <div class="mainheader" style="margin-bottom:8px"> 
                   <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                            <a class="btn btn-sm"  href="https://telecentrecameroon.ovh/marches1/" style="background-color:#865a21"> Retour </a>
                        </div>
                   </div>
                </div>
                <div class="container " style=""> 
                    <div class="row">
                        <?php  while (have_posts() ) : ?>
                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                <?php 
                                    the_post();
                                    $image = get_field('article_photo');
                                    if(!empty($image)): ?> 
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="" alt="">
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                <h5 style="font-weight: 600; "> <?php the_title(); the_field('article_nom') ; ?> </h5>
                                <span class="mr-1">
                                    <strong class="shadow-sm" style="font-weight: 600; color: orange;"> <?php the_field('article_prix') ?> FCFA</strong> 
                                </span>
                                <p class="small text-muted  mb-2">Description</p>
                                <p class="pt-1"> <?php the_field('article_description') ?></p>
                                <hr>
                                <p class="small text-muted  mb-2">Personne à contacter</p>
                                <div class="row text-center " style="">
                                    <div type="" class=" btn-sm  mb-2 col-md-6 col-lg-6 col-xs-12 col-sm-12" style="font-size:25px; font-weight:600"><?php the_field('article_proprietaire') ?> </div>
                                    <div type="" class=" btn-sm px-3 mb-2 col-md-6 col-lg-6 col-xs-12 col-sm-12" style="font-size:30px; font-weight:600"> +237 <?php the_field('article_numero') ?></div>
                                </div>
                            </div>
                        <?php  endwhile; // End the loop. ?>
                    </div> 
                </div>
            </div>
        </div>
      
    </div>
<?php


get_footer();


