<?php
/*
 Template Name: marche 1.0
 */
acf_form_head();
get_header();
?>

    <div class="container-fluid header__separator orange" style="background-color:red">
            <div class="row">
                    <div class="elementor-shape elementor-shape-bottom orange" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path fill="whitesmoke" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                        </svg>
                    </div>
            </div>
    </div>
    <div class="container" style=""> 
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
                        <a class="btn btn-dark btn-sm"  href="http://telecentrecameroon.ovh/addarticle"  style="background-color: darkorange">Nouvel article</a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:8px">   
                        <div class="row d-flex">
                                <?php
                                // Querry start here.  print 6 articles per pages
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $marche = array(
                                        'post_type' => 'marche', 
                                        'posts_per_page' => 6,
                                        'paged' => $paged,
                                    );
                                // run Our custom query
                                $data = new WP_Query($marche);
                                // Start the Loop.
                            if($data->have_posts() ) :
                                while ($data->have_posts() ) : ?>
                                    
                                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12" style="margin-bottom:50px"> 
                                            <?php 
                                            // rander a view  
                                                $data->the_post(); ?>
                                                <div class="row d-flex flex-row"> 
                                                        <div class="col">
                                                            <div class="champ-commun" style="">   <?php the_title(); ?></div>
                                                            <div class="text-muted" style="font-size: 20px;"><?php the_field('article_quantity') ?> disponible </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="champ-commun" style=""> Tel: <?php the_field('article_numero') ?></div>
                                                            <div class="text-muted" style="font-size: 20px;"> <?php the_field('article_proprietaire') ?></div>
                                                        </div>
                                                </div> 
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
                                    
                                
                                    
                                    <?php
                                endwhile;  // End the loop.
                                //pagination
                                $total_pages = $data->max_num_pages;
                            
                                if ($total_pages > 1){
                                    $current_page = max(1, get_query_var('paged'));
                            
                                    echo paginate_links(array(
                                        'base' => get_pagenum_link(1) . '%_%',
                                        'format' => '/page/%#%',
                                        'current' => $current_page,
                                        'total' => $total_pages,
                                        'prev_text'    => __('« prev'),
                                        'next_text'    => __('next »'),
                                    ));
                                } 
                            endif;   
                            wp_reset_postdata();
                                ?>
                        </div>   
                    </div>
                </div>          
            </div>
            <!-- The Modal -->
            <div class="modal" id="nouvelArticle">
                <div class="modal-dialog">
                    <form class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Nouvel article</h4>
                            <button type="button btn-sm" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="market">
                                <!-- <form class="market_form" name="market_form" id="market_form" method="post"> -->
                                    <div class="form-group">
                                        <label for="article_title">Title:</label>
                                        <input type="text" name="article_title" class="form-control" placehoder="Titre"/> 
                                    </div> 
                                    <div class="form-group">
                                        <label for="article_quantity">Quantite:</label>
                                        <input type="number" name="article_quatity" class="form-control" placehoder="Titre"/> 
                                    </div> 
                                    <div class="form-group">
                                        <label for="description">Description:</label>
                                        <textarea name="article_description" class="form-control" rows="5" id="name="article_description""></textarea>
                                    </div> 
                                    <div class="form-group">
                                        <label for="article_prix">Prix:</label>
                                        <input type="number" name="article_prix" class="form-control" placehoder="Titre"/> 
                                    </div> 
                                    <div class="form-group">
                                        <label for="article_proprietaire">Nom:</label>
                                        <input type="text" name="article_proprietaire" class="form-control" placehoder="Titre"/> 
                                    </div> 

                                    <div class="form-group">
                                        <label for="article_numero">Numero de telephone:</label>
                                        <input type="number" name="article_numero" class="form-control" placehoder="Titre"/> 
                                    </div> 
                                    
                                    
                                <!-- </form> -->
                            </div>	
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            
                            <button type="submit" value="Submit" name="market_submit" class="btn btn-success">Submit</button>
                            
                            <button type="button btn-sm" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
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

            .banniere {
                position: relative;
                text-align: center;
                color: white;
            }

            .bottom-left{
                position: absolute;
                bottom: 0px;
                left: 0px;
                background-color: red;
                color: white;
                padding: 0px 8px 0px 0px;
                font-family: 'Arial Black', Gadget, sans-serif;
                font-style: normal;
                font-size: 16px;
                border-top-right-radius:10px;
            }

            .article-image{
                position: relative;
               
            }

            .page-numbers{
                padding: 5px;
            }

            .champ-commun{
                color:#000000 !important;
                font-family: "Playfair Display", Georgia, "Times New Roman", serif;
                font-size:15px;
            }



            @media only screen and (max-width: 1199px) {
                .top-left {
                    position: absolute;
                    top: 0;
                    left: 15px;
                    background-color: darkorange;
                    padding: 5px;
                }

                .elementor-shape{
                    overflow: hidden;
                    position: absolute;
                    left: 0;
                    right: 0;
                    width: 100%;
                    line-height: 0;
                    direction: ltr;
                    height: 180px;
                    top: 53px;
                    z-index: 0;
                }
                .elementor *, .elementor ::after, .elementor ::before {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }
    
                .elementor-14 .elementor-element.elementor-element-8fae871 > .elementor-shape-bottom svg {
                    width: calc(200% + 1.3px);
                    height: 470px;
                }
                .elementor-shape svg {
                    display: block;
                    width: calc(100% + 1.3px);
                    position: relative;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    transform: translateX(-50%);
                    top: 80px;
                }
            }

            @media only screen and (min-width: 1200px) {
                .top-left {
                    position: absolute;
                    top: 0;
                    left: 35px;
                    background-color: darkorange;
                    padding: 5px;
                }
                .elementor-shape{
                    overflow: hidden;
                    position: absolute;
                    left: 0;
                    right: 0;
                    width: 100%;
                    line-height: 0;
                    direction: ltr;
                    height: 192px;
                    top: 53px;
                    z-index: 0;
                }
                .elementor *, .elementor ::after, .elementor ::before {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }
    
                .elementor-14 .elementor-element.elementor-element-8fae871 > .elementor-shape-bottom svg {
                    width: calc(200% + 1.3px);
                    height: 470px;
                }
                .elementor-shape svg {
                    display: block;
                    width: calc(100% + 1.3px);
                    position: relative;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    transform: translateX(-50%);
                    top: 71px;
                }
            }

            @media only screen and (min-width: 1916px) {
                .top-left {
                    position: absolute;
                    top: 0;
                    left: 35px;
                    background-color: darkorange;
                    padding: 5px;
                }
                .elementor-shape{
                    overflow: hidden;
                    position: absolute;
                    left: 0;
                    right: 0;
                    width: 100%;
                    line-height: 0;
                    direction: ltr;
                    height: 252px;
                    top: 50px;
                    z-index: 0;
                }
                .elementor *, .elementor ::after, .elementor ::before {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                }
    
                .elementor-14 .elementor-element.elementor-element-8fae871 > .elementor-shape-bottom svg {
                    width: calc(200% + 1.3px);
                    height: 470px;
                }
                .elementor-shape svg {
                    display: block;
                    width: calc(100% + 1.3px);
                    position: relative;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    transform: translateX(-50%);
                    top: 62px;
                }
            }

        </style>
    </div>
<?php
get_footer();


