<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12  content-area">
            <div class="container-fluid">
                <div class="row free-list" style="background-color:#f5f5f5">
                    <div class="col-12 mobile-cover search__part"> <?php get_search_form(); ?> </div>
                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="education" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/educations.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">EDUCATION</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">EDUCATION</h1>
                                <?php } ?>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://www.goon.cm:8080/en/learn/#/topics" rel="bookmark" target="_blank">
                            <div class="bg-white p-2 style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/jj.png' ?>" alt="">

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">I LEARN I GROW</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">LEARNING NEVER ENDS</h1>
                                <?php } ?>

                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="information" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/new.png' ?>" alt="">

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">LOCAL NEWS</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">LOCAL NEWS</h1>
                                <?php } ?>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="#" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                              <img src="<?= get_template_directory_uri() . '/src/img/v2/activite.png' ?>" alt="">
                              <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                  <h1 class="bottom-left p-2 mt-2"> ACTIVITIE OF TELECENTER</h1>
                              <?php } else { ?>
                                  <h1 class="bottom-left p-2 mt-2"> TELECENTER ACTIVITIES</h1>
                              <?php } ?>

                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
