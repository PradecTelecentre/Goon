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

                <div class="view zoom overlay">
                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                    <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                    <a href="#!">
                    <div class="mask">
                        <img class="img-fluid w-100"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    </a>
                </div>

                <div class="card-body text-center">

                    <h5>Fantasy T-shirt</h5>
                    <p class="small text-muted text-uppercase mb-2">Shirts</p>
                    <ul class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary"></i>
                    </li>
                    </ul>
                    <hr>
                    <h6 class="mb-3">
                    <span class="text-danger mr-1">$12.99</span>
                    <span class="text-grey"><s>$36.99</s></span>
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm mr-1 mb-2">
                    <i class="fas fa-shopping-cart pr-2"></i>Add to cart
                    </button>
                    <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
                    <i class="fas fa-info-circle pr-2"></i>Details
                    </button>
                    <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                    <i class="far fa-heart"></i>
                    </button>

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