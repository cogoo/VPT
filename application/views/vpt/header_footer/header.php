<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
    
    <link href="/css/inspina/animate.css" rel="stylesheet">
    <link href="/css/inspina/style.css" rel="stylesheet">

    <!--Page Related styles-->
   
    <link href="/css/global.css" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" > <!-- Resource style -->
    <link rel="stylesheet" type="text/css" href="/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="/css/cs-skin-slide.css" />
    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

</head>
<!-- /Head -->
<!-- Body -->
<body>
   
   <!-- Navbar-->
   <div class="header">
    <div class="container">

        <a class="logout float-right" href="/logout">Logout</a>
        <img class="image-header float-right" src="/images/placeholder/<?php echo $user['User_ID'] ?>.jpg">
    </div>
   </div>
    <!-- /Navbar -->
        <!-- Main Container -->
    <div id="wrapper">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
            <ul class="nav no-padding">
                <a href="/home"><li class="<?php if ($title == 'Home') {
                    echo "current";
                } ?>"><i class="fa fa-home"></i><span class="hidden-xs">Home</span></li></a>
                <a href="/diet/<?php echo $current_week ?>"><li class="<?php if ($title == 'Diet') {
                    echo "current";
                } ?>"><i class="fa fa-pie-chart"></i><span class="hidden-xs">Diet</span></li></a>
                <a href="/training/<?php echo $current_week ?>"><li class="<?php if ($title == 'Training') {
                    echo "current";
                } ?>"><i class="fa fa-trophy"></i><span class="hidden-xs">Training</span></li></a>
                <a href="/settings"><li class="<?php if ($title == 'Settings') {
                    echo "current";
                } ?>"><i class="fa fa-cogs"></i><span class="hidden-xs">Settings</span></li></a>
                <a href="/support"><li class="<?php if ($title == 'Support') {
                    echo "current";
                } ?> relative"><i class="fa fa-users"></i><span class="hidden-xs">Support</span><!--<span class="badge">1</span>--></li></a>
            </ul>
        </div>
        <div class="lg-margin hidden-xs"></div>
        <div class="sm-margin visible-xs"></div>
                    </div>
                </div>
            </div>
        </section>
        
      
             
            
   