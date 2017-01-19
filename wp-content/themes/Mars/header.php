<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href=" <?php bloginfo('template_url') ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" <?php bloginfo('template_url') ?>/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href=" <?php bloginfo('template_url') ?>/stylesheets/screen.css"/>\
</head>

<body>
<section class="top-section">
    <div class="gray"></div>
    <div class="red">
        <div>
            <img src="<?php bloginfo('template_url') ?>/images/dron.png" alt="" class="img-responsive">
        </div>
        <ul>
            <li>M</li>
            <li>A</li>
            <li>R</li>
            <li>S</li>
        </ul>    </div>

    <nav class="menu">
        <ul>
            <li><a href="#">Menu-1</a></li>
            <li><a href="#">Menu-2</a></li>
            <li><a href="#">Menu-3</a></li>
            <li><a href="#">Menu-4</a></li>
        </ul>
    </nav>

    <div class="container">
        <header>
            <div class="left-side-top">
                <a href="<?php echo home_url(); ?>"><h1>Mars<sup><img src="<?php bloginfo('template_url') ?>/images/red-dot.png" alt=""></sup></h1></a>

                <button><span class="glyphicon glyphicon-earphone"> +48 604 300 500</span></button>
            </div>
            <div class="right-side-top">
                <p>Buy now</p>
                <button id="button-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </header>



