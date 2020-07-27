<?php
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


    <div class="container shadow " style=" margin-top:-65px; "> 
        <div class="container row " style="position:absolute; background-color: whitesmoke;"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 pb-5 submitbutton"> 
                    <?php
                    $new_post= array(
                                'post_id' => 'new_post', // Unique identifier for the form
                                // PUT IN YOUR OWN FIELD GROUP ID(s)
                                'field_groups' => array(1087), // Create post field group ID(s)
                                'form' => true,
                                'return' => '%post_url%' , // Redirect to new post url
                                'html_before_fields' => '',
                                'html_after_fields' => '',
                                'submit_value' => 'Submit Post',
                                'updated_messag' => 'Saved!',
                                // 'field_el'=>'div',
                                'uploader' => 'basic',
                                'new_post' => array(
                                        'post_type'	=> 'marche', // You can change to a custom post type
                                        'post_status'	=> 'publish',  // draft, pending, publish
                                        'article_nom'    =>  wp_strip_all_tags($_POST['acf']['field_5ec19d5230e83']), // Post Title ACF field key
                                        'article_quantity'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4ae24ec531']), // Post Title ACF field key
                                        'article_description'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4aeb0ec532']), // Post Title ACF field key
                                        'article_prix'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4af1dec533']), // Post Title ACF field key
                                        'article_photo'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4af72ec534']), // Post Title ACF field key
                                        'article_proprietaire'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4afcaec535']), // Post Title ACF field key
                                        'article_numero'    =>  wp_strip_all_tags($_POST['acf']['field_5ea4b067ec536']), // Post Title ACF field key
                                    ),
                    );
                    acf_form( $new_post); ?>
            </div>
        </div>
    </div> 
    <style>
        .acf-form-submit input{
            background-color: orange;
            font-size: 25px;
            font-weight:600;
        } 
        .acf-label label{
            font-size:22px;
        }
    </style>               
<?php
get_footer();