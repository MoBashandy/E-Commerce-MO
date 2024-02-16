<?php
    // Routes
    include 'connect.php';

    //CSS
    $tbl = 'includes/templates/';
    $backend_css = 'layout/css/backend.css';
    $bootstrap_css = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" ;
    $bootstrap_css2 = '../includes/libs/bootstrap-main/dist/css/bootstrap.min.css';
    $fonts ='../layout/fonts/css/all.min.css';



    //JS
    $backend_js = 'layout/js/backend.js';
    $jquery = 'layout/js/jquery.min.js';
    $bootstrap_js= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js";
    $bootstrap_js1= '../includes/libs/bootstrap-main/dist/js/bootstrap.min.js';


    //Content
    $header ='includes/templates/header.php';
    $footer ='includes/templates/footer.php';
    $lang_en ='includes/langs/english.php';
    $login ='includes/templates/login.php';
    $login_css ='layout/css/login.css';
    $nav ='includes/templates/nav.php';
    $nav_css = 'layout/css/nav.css';


    // images
    $a = 'layout/images/logo.png';
    $b = 'layout/images/chevron.png';

    // Start header
    // include $header;
    // End header
    ###########################################################################################################
    // Start nav
        
    // End nav
    ###########################################################################################################

    ###########################################################################################################
    // Start footer
    include $footer;
    // End footer
?>