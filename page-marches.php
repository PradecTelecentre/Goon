<?php
/*
 Template Name: marche 1.0
 */
get_header();
?>
    <div class="container" style="margin-top: 175px;"> 
        <div class="row"> 
            <div class="col-lg-4 col-md-4 banniere" style="height: 650px" > 
                <img src="<?= get_template_directory_uri() . '/src/img/market1.jpg' ?>" style="width:100%; height: 100vh";alt="">
                <span class="top-left" style="">Marché</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 articleDiv" style="">
            <div class="row d-flex">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $marche = array(
                            'post_type' => 'marche', 
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );
                    // Start Our custom query
                    $data = new WP_Query($marche);
                    // Start the Loop.
                if($data->have_posts() ) :
                    while ($data->have_posts() ) : ?>
                        
                            <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12" style="margin-bottom:50px"> 
                                <?php   
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

            .page-numbers{
                padding: 5px;
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


