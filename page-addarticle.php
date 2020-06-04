<?php
acf_form_head();
get_header();
?>
<div class="container" style="margin-top: 175px;"> 
    <div class="defilant" style="color:red" >  <marquee> Les articles publiés dans GOON sont supprimés après un délais de 7 jours.
        Notez Bien tout contenu inapproprié est immédiatement supprimé de la plateforme  </marquee>
    </div>
    <div class="defilant" style="" >  
            <div class="row d-flex justify-content-center"> 
                <div class="col-md-6"> 
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
                                        'post_status'	=> 'pending',  // draft, pending, publish
                                        'article_title'    =>  wp_strip_all_tags($_POST['acf']['field_5ec19d5230e83']), // Post Title ACF field key
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
</div>  
<?php
get_footer();