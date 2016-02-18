<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="" />
        <title>Rômulo Pransteter | Blog Pragmático</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header>
            <div class="container-header">
                <div class="box-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo-demo.jpg">
                </div>
                <div class="box-btn-menu">
                    <img id="btn-mobile" class="btn-menu-mobile" src="<?php echo get_template_directory_uri(); ?>/imgs/mobile-icon.svg">
                </div>
            </div>
            <div class="container-menu">
                <?php wp_nav_menu(array('container' => '' , 'menu_id' => 'menu-principal')); ?>
            </div>
        </header>
        <section>
