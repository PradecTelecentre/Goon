<?php
?>


<div class="goon-container-fluid" style="margin-bottom: -30px">
    <div class="goon-row ">
        <div class="col paids-remove"></div>
        <div class="col paids" style="margin-top:52px; z-index: 99999;">
            <div class="goon-container-fluid">
                <div class="goon-row rows-free no-gutters">
                    <div class="free col paid-content-remove-spac" style="background: #f5f5f5 !important">
                        <a href="#" rel="bookmark" style="background: #f5f5f5 !important">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #f5f5f5 !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/internet.png' ?>" alt="" style="background: #f5f5f5 !important">
                                <div class="arrow" style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt="" style="margin-top: -33px; width: 100px">
                                </div>
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">INTERNET</h6>
                                <?php } else { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">INTERNET</h6>
                                <?php } ?>

                                <div class="descript" style="height: 80%; max-width: auto;">
                                    <p>Internet c'est avoir toute la sagesse et toute la bassesse du monde au bout des doigts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="free col">
                        <a href="http://owncloud.telecentrecameroon.ovh/" rel="bookmark" style="background: #f5f5f5 !important">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #f5f5f5 !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/stockage.png' ?>" alt="" style="background: #f5f5f5 !important">
                                <div class="arrow" style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt="" style="margin-top: -33px; width: 100px">
                                </div>

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">DOCUMENTS</h6>
                                <?php } else { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">DOCUMENTS</h6>
                                <?php } ?>
                                <div class="descript " style="height: 80%;">
                                    <p>Fini les pertes des vos documents, retrouvez les en un click et a tout moment.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="free col">
                        <a href="http://owncloud.telecentrecameroon.ovh/" rel="bookmark" style="background: #f5f5f5 !important">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #f5f5f5 !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/applications.png' ?>" alt="" style="background: #f5f5f5 !important">
                                <div class="arrow" style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt="" style="margin-top: -33px; width: 100px">
                                </div>
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">APPLICATIONS</h6>
                                <?php } else { ?>
                                    <h6 class="bottom-left" style="margin-top:-38px">APPLICATIONS</h6>
                                <?php } ?>
                                <div class="descript" style="height: 80%;">
                                    <p>Besoin des applications, faites votre choix par ici. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col paids-remove" ></div>
        <!-- la bare de recherche -->
    </div>
</div>