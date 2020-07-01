<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon/safari-pinned-tab.svg" color="#153099">
    <meta name="msapplication-TileColor" content="#153099">
    <meta name="theme-color" content="#ffffff">

    <!-- External -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lora:400,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/lsc3oqd.css">
    <link rel="stylesheet" href="https://use.typekit.net/tgt0age.css">
    <script src="https://kit.fontawesome.com/fe1690eee7.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/modal.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/anim.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/livenexx.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--
    <div class="loading">
        <div class="loader">
            <h2 class="loading-text cd-headline clip is-full-width">
                <span class="cd-words-wrapper">
                    <b class="is-visible waiting">Juste un instant :)</b>
                </span>
            </h2>
            <div class="loading-image"><img src="<?php bloginfo('template_directory'); ?>/assets/images/bltzr-loader.gif" alt=""></div>
        </div>
    </div>
    -->
    <div class="transition-overlay"></div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="<?php bloginfo('url'); ?>/">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/baltazare-logo-rose.png" alt="Baltazare" class="logo">
                    </a>
                    <div class="coor">
                        <span class="tel">
                            06 76 13 75 56
                        </span>
                        <a href="#" class="md-trigger" data-modal="id-bltzr-contact-form">
                            <span>
                                Nous contacter <img src="<?php bloginfo('template_directory'); ?>/assets/images/main.png" alt="">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <section class="intro goes-up">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content-intro align-text-bottom">
                        <h3>
                            Sites web • Application mobile • Social média
                        </h3>
                        <h1>
                            Baltazare
                        </h1>
                        <div class="signature">
                            <?php get_template_part('partial/svg_intro'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end intro -->