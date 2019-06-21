<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php echo APP_NAME;?> - by EpicaleSoft</title>

    <meta name="description" content="<?php echo APP_NAME .'-' . 'Management tool by '. APP_DEVELOPER;?>">
    <meta name="author" content="<?php echo APP_DEVELOPER;?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/select2/select2-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_css']?>bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="<?php echo $_layoutParams['path_css']?>oneui.css">
    <link rel="stylesheet" id="css-main" href="<?php echo $_layoutParams['path_css']?>themes/modern.min.css">
    <!--<link rel="stylesheet" id="css-main" href="<?php echo $_layoutParams['path_css']?>kendo/kendo.common.min.css">
    <link rel="stylesheet" id="css-main" href="<?php echo $_layoutParams['path_css']?>kendo/kendo.default.min.css">
    <link rel="stylesheet" id="css-main" href="<?php echo $_layoutParams['path_css']?>kendo/kendo.default.mobile.min.css">-->
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>widgets/styles/jqx.base.css" type="text/css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.13.0/pivot.min.css">


    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/slick/slick.min.css">
    <link rel="stylesheet" href="<?php echo $_layoutParams['path_js']?>plugins/slick/slick-theme.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <style>
    .login-logo{
        max-width:50%;
    }
    </style>

</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">
    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
                <div class="content-boxed">
                <ul class="nav-header pull-right">
                        
                        <li class="hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation below in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-navicon"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- Main Header Navigation -->
                    <ul class="js-nav-main-header nav-main-header pull-right">
                        <li class="text-right hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </li>
                        <li>
                            <a class="active" href="<?php echo BASE_URL;?>">Inicio</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL;?>">Nostros</a>
                        </li>
                        <li>
                            <a class="nav-submenu" href="javascript:void(0)">Garitas</a>
                            <ul>
                                <li>
                                    <a href="#">San Ysidro</a>
                                </li>
                                <li>
                                    <a href="#">Otay</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL;?>">Contacto</a>
                        </li>
                    </ul>
                    <!-- END Main Header Navigation -->

                    <!-- Header Navigation Left -->
                    <ul class="nav-header pull-left">
                        <li class="header-content">
                            <a class="h5" href="<?php echo BASE_URL;?>">
                                <img src="<?php echo $_layoutParams['path_img']?>logo_rowul.png" width="100" alt="">
                            </a>
                        </li>
                    </ul>
                    <!-- END Header Navigation Left -->
                </div>
            </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container" class="content-boxed">
    <div class="bg-image" style="background-image: url('<?php echo $_layoutParams['path_img']?>background_garitas.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
                            
                            <div class="push-100-t push-50 text-center">
                                <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">¿Busca Agencia de Marketing?</h1>
                                <!-- <h2 class="h5 text-white-op push-50 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Powerful, flexible and reliable UI framework that just works. Your valuable feedback made it happen.</h2> -->
                                <a class="btn btn-rounded btn-noborder btn-lg btn-primary animated bounceIn" data-toggle="appear" data-class="animated bounceIn" data-timeout="800" href="rowul.com">Conoce a Rowul.com</a>
                            </div>
                            <div class="row animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!-- <img class="img-responsive pull-b" src="<?php echo $_layoutParams['path_img']?>men-success.png" alt="" style="max-width:200px; margin:auto; bottom:0px; position:absolute;"> -->
                                </div>
                            </div>
                           
        </section>
    </div>
 </div>
        <!-- Page Content -->
        <div class="content">
        <div class="content content-boxed">