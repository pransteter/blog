<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="" />
        <title>Rômulo Pransteter | Blog Pragmático</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,600,600italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header>
            <div class="container-header">
                <div class="box-logo">
                    <img src="<?php echo get_template_directory_uri() ?>">
                </div>
                <div class="box-menu">
                <?php wp_nav_menu(array('container' => '')); ?>
                </div>
            </div>
        </header>
        <section>
