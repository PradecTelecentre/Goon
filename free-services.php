<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12  content-area">
            <div class="container-fluid">
                <div class="row free-list" style="background-color:#f5f5f5">
                    <div class="col-11 mobile-cover offset-1"> <?php get_search_form(); ?> </div>
                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="education" rel="bookmark">
                            <div class="p-2 bg-goon style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/educ.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">EDUCATION</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">ÉDUCATION</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6:8080/fr-fr/learn/#/topics" rel="bookmark" target="_blank">
                            <div class="bg-goon p-2 style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/education11.png' ?>" alt="">

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">I LEARN I GROW</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">J'apprend J'advance</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6/goon/?page_id=50" rel="bookmark">
                            <div class="p-2 bg-goon style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/info.png' ?>" alt="">

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">THE NEWS</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">LES NOUVELLES</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6:/goon" rel="bookmark">
                            <div class="p-2 bg-goon style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/message.png' ?>" alt="">

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">LET'S TALK</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">PARLONS ENSEMBLE</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6:5000/" rel="bookmark">
                            <div class="p-2 bg-goon style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/assets/free-services/commerce.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">MARKET</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">LE MARCHÉ</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="/events" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-goon">
                                <img src="<?= get_template_directory_uri() . '/src/img/Calendrier.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2"> ACTIVITIE OF TELECENTER</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2"> ACTIVITÉ DU TÉlÉCENTRE</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6/goon" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-goon">
                                <img src="<?= get_template_directory_uri() . '/src/img/Espace-citoyens.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">Citizen areas</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">Espace citoyen</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://10.10.10.6/goon/" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-goon">
                                <img src="<?= get_template_directory_uri() . '/src/img/Game.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2"> GAMES</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2"> JEUX</h1>
                                <?php } ?>
                                <!-- <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> -->
                            </div>
                        </a>
                    </div>

                    <!-- <div class="col-md-3 mb-4 col-sm-2 col-lg-3 mobile-cover">
                        <a href="http://owncloud.telecentrecameroon.ovh/index.php/s/VSuNWQaEARsy069" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-goon">
                                <img src="<?= get_template_directory_uri() . '/src/img/Game.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2"> Geocommunal</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2"> Geocommunal</h1>
                                <?php } ?>
                               <div class="">
                                    <p>Ce n’est pas mon premier site réalisé sur WordPress et je n’avais jamais eu à configurer les permaliens, </p>
                                </div> 
                             </div>
                        </a>
                </div> -->
                </div>
            </div>
        </div>

    </div>
</div>