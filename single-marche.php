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

    <div class="container-fluid header__separator orange" style="background-color:darkorange; height: 134px;margin-top: 51px;">
        <div class="row">
            <div class="elementor-shape elementor-shape-bottom orange" data-negative="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path fill="whitesmoke" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="container" style="" >
        <div class="defilant" style="color:red" >  <marquee> Les articles publiés dans GOON sont supprimés après un délais de 7 jours.
            Notez Bien tout contenu inapproprié est immédiatement supprimé de la plateforme  </marquee>
        </div>
        <div class="row"> 
            <div class="col-lg-4 col-md-4 banniere" style="height: 650px" > 
                <img src="<?= get_template_directory_uri() . '/src/img/market1.jpg' ?>" style="width:100%; height: 100vh";alt="">
                <span class="top-left" style="">Marché</span>
                <span class="preembule" style="">
                </span>
            </div>

            

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 articleDiv" style="">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="http://telecentrecameroon.ovh/marches"  class="btn btn-dark btn-sm"  style="background-color: darkorange">Retour</a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px">   
                        <div class="row d-flex">
                            <?php
                                $marche = array(
                                'post_type' => 'marche', 
                                'posts_per_page' => 6,
                                );
                            // Start Our custom query
                            $data = new WP_Query($marche);
                            // Start the Loop.
                                
                            while (have_posts() ) : ?>
                                <div class="row d-flex">
                                    <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12" style="margin-bottom:50px"> 
                                        <?php   
                                            the_post(); ?>
                                                        
                                                <?php 
                                                $image = get_field('article_photo');
                                                if(!empty($image)): ?> 
                                                        <div class="article-image" style="height: 200px"> 
                                                            <a href="<?php the_permalink() ?>">
                                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%; height: 100%";alt="">
                                                            </a>
                                                            <div class="bottom-left"> <?php the_field('article_prix') ?> CFA</div>
                                                        </div>
                                                <?php endif; ?> 
                                                    
                                    </div>
                                    <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12" style="margin-bottom:50px">             
                                                <div class="row d-flex flex-row"> 
                                                            
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;"> Article:  <?php the_title(); the_field('acf[field_5ec19d5230e83]') ; ?></div> 
                                                    <div class="champ-commun" style="">  <?php the_field('article_nom') ;  ?> </div>
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;"><?php the_field('article_quantity') ?> disponible(s) </div>
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;"> Tel: <?php the_field('article_numero') ?></div>
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;">Vendeur: <?php the_field('article_proprietaire') ?></div>
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px; background-color:grey">Prix Unitaire: <?php the_field('article_prix') ?> FCFA</div>
                                                    <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;">Description: <?php the_field('article_description') ?></div>
                
                                                </div>     
                                    </div>
                                </div>      
                                <?php
                            endwhile; // End the loop.
                            ?>
                        </div>
                    </div>
                </div>     
            </div>
        </div>

        <style>
            
            @media screen and (max-width: 768px){
                .banniere{
                    display: none;
                }

                .articleDiv{
                    display: flex;
                }
            }

            .top-left {
                position: absolute;
                top: 0;
                left: 15px;
                background-color: darkorange;
                padding: 1px;
                font-family: 'Arial Black', Gadget, sans-serif;
                font-style: normal;
                font-size: 2.1em;
                width:200px
            }

            .banniere {
                position: relative;
                text-align: center;
                color: white;
            }

            .bottom-left{
                position: absolute;
                bottom: 0;
                left: 0px;
                background-color: red;
                color:white;
                padding: 1px;
                font-family: 'Arial Black', Gadget, sans-serif;
                font-style: normal;
                font-size: 18px;
                padding-right:8px;
                border-top-right-radius:10px;
                
            }
            
            .preembule{
                position: absolute;
                top: 120px;
                left: 15px;
                color:white;
                /* background-color: darkorange; */
                padding: 10px;
                font-family: 'Arial Black', Gadget, sans-serif;
                font-style: normal;
                font-size: 0.7em;
                text-align: justify;
                text-justify: inter-word;
                width:90%; 
            }

            .article-image{
                position: relative;
               
            }

            .champ-commun{
                color:#000000 !important;
                font-family: "Playfair Display", Georgia, "Times New Roman", serif;
                font-size:15px;
            }

        </style>
    </div>
<?php


get_footer();


