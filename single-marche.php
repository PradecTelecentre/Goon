<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    <div class="container" style="margin-top: 140px;" > 
        <div class="row"> 
            <div class="col-lg-4 col-md-4 banniere" style="height: 650px" > 
                <img src="<?= get_template_directory_uri() . '/src/img/market1.jpg' ?>" style="width:100%; height: 100vh";alt="">
                <span class="top-left" style="">Marché</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 articleDiv" style="">
            
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
                                                
                                        <div class="champ-commun col-lg-12 col-md-12  col-sm-12 col-xs-12" style="font-size: 20px;"> Article:  <?php the_title(); ?></div>
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
                padding: 1px;
                font-family: 'Arial Black', Gadget, sans-serif;
                font-style: normal;
                font-size: 18px;
                padding-right:8px;
                border-top-right-radius:10px;
                
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


