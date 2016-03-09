<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0, height=device-height, minimum-scale=1.0, minimal-ui">
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/bower_components/foundation-sites/dist/foundation.min.css">
        <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="/css/vpt.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="show-for-small-only">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php if ($title <> 'Login / Register') {
        ?>
        <div class="off-canvas animate">
            <ul>
                <a><li class="menu"><i class="ion-arrow-left-c"></i></li></a>
                <a href="/"><li class="<?php if ($title == 'Home') {
                    echo "active";
                } ?>">Home</li></a>
                <a href="/diet/<?php echo $current_week ?>"><li class="<?php if ($title == 'Diet') {
                    echo "active";
                } ?>">Diet</li></a>
                <a href="/training/<?php echo $current_week ?>"><li class="<?php if ($title == 'Training') {
                    echo "active";
                } ?>">Training</li></a>
                <a href="/settings"><li class="<?php if ($title == 'Settings') {
                    echo "active";
                } ?>">Settings</li></a>
                <a href="/logout"><li>Logout</li></a>
                
            </ul>
        </div>
        <?php
        }
        ?>

        <!-- Add your site or application content here -->
        <div class="body">