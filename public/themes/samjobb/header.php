<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Our main CSS -->
        <link rel="stylesheet" href="<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>">
        <?php wp_head(); ?>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu:700,500" rel="stylesheet">

        <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <title>Samjobb</title>

    </head>
    <body>



        <nav class="navbar navbar-toggleable-md navbar-light bg-faded mb-3">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button><!-- /navbar-toggler -->
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img class="logotype-image" src="<?php echo get_template_directory_uri() ?>/assets/img/logotype.png"/>
                </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                        <ul class="navbar-nav ml-auto">

                            <?php
                            $pages = array (
                                'sort_order' => 'asc',
                                'sort_column' => 'post_date'
                                )
                             ?>
                            <?php foreach (get_pages($pages) as $page): ?>
                                <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                                    <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                                        <?php // echo $page->post_title; ?>

                                    </a><!-- /nav-link -->
                                </li><!-- /nav-item -->
                            <?php endforeach; ?>
                        </ul><!-- /navbar -->
                    </div><!-- /collapse -->
                </div>
        </nav><!-- /navbar -->

        <!-- Start of container div, ends in footer.php -->
        <div class="container">
