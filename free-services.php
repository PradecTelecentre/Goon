<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12  content-area">
            <div class="container-fluid">
                <div class="row free-list" style="background-color:#f5f5f5">
                    <div class="col-12 mobile-cover search__part"> <?php get_search_form(); ?> </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="education/" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/education.png' ?>" alt="">
                                <!-- <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">EDUCATION</h1> -->
                                <!-- <?php } else { ?> -->
                                <h1 class="bottom-left p-2 mt-2">ÉDUCATION</h1>
                                <!-- <?php } ?> -->
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://www.goon.local:8080/fr-fr/learn/#/topics" rel="bookmark" target="_blank">
                            <div class="bg-white p-2 style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/apprend.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h1 class="bottom-left p-2 mt-2">I LEARN I GROW</h1>
                                <?php } else { ?>
                                <h1 class="bottom-left p-2 mt-2">J'apprend J'avance</h1>
                                <?php } ?>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://goon.local:8000/wikipedia_fr_all_2017-05/A/Utilisateur:Popo_le_Chien_Kiwix.html" rel="bookmark" data-toggle="modal" data-target="#construction">
                            <div class="style-div-md-4 p-2 bg-white">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/games.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2"> WIKIPEDIA</h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2"> WIKIPEDIA</h1>
                                <?php } ?>

                            </div>
                        </a>
                    </div>



                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="nouvelle-locales/" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/new.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h1 class="bottom-left p-2 mt-2">THE NEWS</h1>
                                <?php } else { ?>
                                <h1 class="bottom-left p-2 mt-2">LES NOUVELLES</h1>
                                <?php } ?>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="#" rel="bookmark" data-toggle="modal" data-target="#construction">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/message.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h1 class="bottom-left p-2 mt-2">LET'S TALK</h1>
                                <?php } else { ?>
                                <h1 class="bottom-left p-2 mt-2">PARLONS ENSEMBLE</h1>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://www.goon.local/marches" rel="bookmark">
                            <div class="p-2 bg-white style-div-md-4">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/marche.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h1 class="bottom-left p-2 mt-2">MARKET</h1>
                                <?php } else { ?>
                                <h1 class="bottom-left p-2 mt-2">LE MARCHÉ</h1>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="/events" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-white">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/activite.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h1 class="bottom-left p-2 mt-2"> ACTIVITIE OF TELECENTER</h1>
                                <?php } else { ?>
                                <h1 class="bottom-left p-2 mt-2"> ACTIVITÉ DU TÉlÉCENTRE</h1>
                                <?php } ?>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mb-4 col-sm-6 col-lg-3 mobile-cover">
                        <a href="http://garoua1.geocameroun.cm/#/" rel="bookmark">
                            <div class="style-div-md-4 p-2 bg-white">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/icon.png' ?>" alt="">
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h1 class="bottom-left p-2 mt-2">Geocommunal </h1>
                                <?php } else { ?>
                                    <h1 class="bottom-left p-2 mt-2">Geocommunal </h1>
                                <?php } ?>

                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>