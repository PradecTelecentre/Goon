<?php
?>


<div class="goon-container-fluid" style="margin-bottom: -30px">
    <div class="goon-row ">
        <div class="col paids-remove"></div>
        <div class="col paids" style="margin-top:52px;">
            <div class="goon-container-fluid">
                <div class="goon-row rows-free">
                    <div class="free col paid-content-remove-spac">
                        <a href="google.fr" rel="bookmark" style="background: #fff !important" data-toggle="modal"
                            data-target="#vaoucher">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #fff !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/net.png' ?>" alt=""
                                    style="background: #fff !important">
                                <div class="arrow"
                                    style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt=""
                                        style="margin-top: -33px; width: 100px">
                                </div>
                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h6 class="bottom-left" style="margin-top:-38px">INTERNET</h6>
                                <?php } else { ?>
                                <h6 class="bottom-left" style="margin-top:-38px">INTERNET</h6>
                                <?php } ?>

                                <div class="descript" style="height: 80%; max-width: auto;">
                                    <p>Internet c'est avoir toute la sagesse du monde au bout des doigts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="free col">
                        <a href="http://espace.goon.tcp/index.php/login" rel="bookmark"
                            target="_blank" style="background: #fff !important" data-toggle="modal"
                            data-target="#construction">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #fff !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/document.png' ?>" alt=""
                                    style="background: #fff !important">
                                <div class="arrow"
                                    style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt=""
                                        style="margin-top: -33px; width: 100px">
                                </div>

                                <?php if (strpos(home_url('/'), 'lang=en') !== false) { ?>
                                <h6 class="bottom-left" style="margin-top:-38px">DOCUMENTS</h6>
                                <?php } else { ?>
                                <h6 class="bottom-left" style="margin-top:-38px">DOCUMENTS</h6>
                                <?php } ?>
                                <div class="descript " style="height: 80%;">
                                    <p>Fini les pertes des vos documents, retrouvez les en un click et a tout moment.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="free col">
                        <a href="http://espace.goon.tcp/index.php/apps/files/?dir=/&fileid=3" rel="bookmark"
                            target="_blank" style="background: #fff !important" data-toggle="modal"
                            data-target="#construction">
                            <div class="p-2 style-div-md-4 bg-white" style="background: #fff !important">
                                <img src="<?= get_template_directory_uri() . '/src/img/v2/apps.png' ?>" alt=""
                                    style="background: #fff !important">
                                <div class="arrow"
                                    style="max-width: 201px; margin-right:auto; margin-left:auto;margin-top: -5px">
                                    <img src="<?= get_template_directory_uri() . '/src/img/cadre.svg'  ?>" alt=""
                                        style="margin-top: -33px; width: 100px">
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
        <!-- The Modal for all the page in construction -->
        <div class="modal" id="construction">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Page en Construction</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="<?= get_template_directory_uri() . '/src/img/construction/construction.png' ?>"
                            alt="">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal for the internet page in construction -->
        <div class="modal" id="vaoucher">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Page en Construction</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="<?= get_template_directory_uri() . '/src/img/construction/vaoucher.PNG' ?>" alt="">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col paids-remove"></div>
        <!-- la bare de recherche -->
    </div>
</div>