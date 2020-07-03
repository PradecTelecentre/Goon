<?php
/*
Template Name: marche 1.1 aziz
*/
acf_form_head();
get_header();
?>
    <div class="" style="margin-top: 53px; position:relative; background-color: darkorange; height: 375px; border-radius: 1px 1px 100px 100px; padding-top: 30px">
        <marquee> Les articles publiés dans GOON sont supprimés après un délais de 7 jours.
            Notez Bien tout contenu inapproprié est immédiatement supprimé de la plateforme  
        </marquee>
        <div class="image text-center" style="opacity:0.4; position: relative; text-align:center; color:white;">
            <img class="" src="<?= get_template_directory_uri() . '/src/img/marche3.jpg' ?>" alt="" style="height:260px; ">
            <div class="" style="position: absolute; top:30%; left: 50%;  transform: translate(-50%, -50%); font-size: 44px; color: #FFFFFF; font-weight: 600; font-family: 'Roboto Slab', Sans-serif !important; text-transform: uppercase;" >MARCHÉ</div>
        </div>
      
    </div>

    <div class="container mainpage" style="background-color: transparent;  margin-top: -65px;"> 
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a class="btn btn-sm"  href="http://goon.mandama.cm/addarticle"  style="background-color:#865a21">Nouvel article</a>
        </div>
        <div class="text-center container row">
            <?php
                // Querry start here.  print 6 articles per pages
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $marche = array(
                        'post_type' => 'marche', 
                        'posts_per_page' => 4,
                        'paged' => $paged,
                    );
                // run Our custom query
                $data = new WP_Query($marche);
                // Start the Loop
                if($data->have_posts() ) :
                    while ($data->have_posts() ) : ?>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"> 
                            <!-- Card -->
                            <?php 
                            // rander a view  
                            $data->the_post(); ?>  
                            <div class="card">
                                <?php 
                                $image = get_field('article_photo');
                                if(!empty($image)): ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="height: 210px;";alt="">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="text-center"><?php   the_title();  the_field('article_nom') ; ?> </h5>
                                    <p class="small text-muted text-uppercase text-center"> <?php the_field('article_quantity') ?>  disponible</p>
                                    <hr>
                                    <h6 class="mb-3 text-center">
                                        <span class="text-danger "> <?php the_field('article_prix') ?> FCFA</span>
                                    </h6>
                                    <a href="<?php the_permalink() ?>" class="btn btn-light btn-sm mr-1 mb-2"> Details</a>
                                </div>
                            </div>
                        <!-- Card -->
                        </div>
                        <?php
                    endwhile;  // End the loop.
                    ?>
        </div>                 
        <div class="container row m-3" style=""> 
            <div class="col-12">
                <div class="text-center" style="font-size:25px; font-weight:600"> 
                     <?php 
                    $total_pages = $data->max_num_pages;

                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
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
    
<?php
get_footer();
