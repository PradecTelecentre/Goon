<?php
/*
Template Name: marche 1.1 aziz
*/
acf_form_head();
get_header();
?>
    <div class="" style="margin-top: 53px; position:relative; background-color: darkorange; height: 375px; border-radius: 1px 1px 250px 250px;">
        <div class="image text-center">
            <img src="<?= get_template_directory_uri() . '/src/img/market1.jpg' ?>" alt="" >
        </div>
        <h1 class="text-center"> new market pages </h1>
    </div>

    <div class="mainpage" style="    background-color: blue; position: absolute; width: 100%; margin-top: -65px;"> 
        <div class="row">
            <div class="col-12">
                principale
            </div>
        </div>


        <div class="row">
            <div class="col-3"> 
                <!-- Card -->
                <div class="card">
                <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                    <div class="card-body">
                        <h5 class="text-center"> Artice x </h5>
                        <p class="small text-muted text-uppercase text-center"> 01 disponible</p>
                        <hr>
                        <h6 class="mb-3">
                            <span class="text-danger"> 100000 FCFA</span>
                        </h6>
                        <a href="#" class="btn btn-light btn-sm mr-1 mb-2"> DETAILS</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-3"> h1 </div>
            <div class="col-3"> h1 </div>
            <div class="col-3"> h1 </div>
        </div>
            
    
    </div>
    
<?php 
get_footer();