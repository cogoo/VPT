<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>New Diet</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    

    <!--Page Related styles-->
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>
    <link href="/css/default.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/css/style2.css" />
    <link rel="stylesheet" type="text/css" href="/css/component.css" />

    <style type="text/css">
        .header {
            background-color: rgba(47,47,47,0.98);

        }
        .image-header {
            width: 30px;
            border-radius: 50%;
            margin-right: 20px;
            margin-top: 13.5px;
        }
        .sub-header {
            background-color: #444;
            padding: 20px;
        }
        ul li {
            display: inline-block;
            padding: 5px 20px;
            position: relative;
        }
        body {
            background-color: #f4f4f4;
        }
        a {
            color: #999;
            font-weight: 200;
        }
        .sub-header a:hover, .header  a:hover{
            color: #FFF;
        }
        
        @media (min-width: 768px) {
           a i {
                margin-right: 10px;
            } 
        }
        .nav li.current  {
            color: #fff;
        }

        .current i {
            font-size: 125%;
        }

        @media (max-width: 768px) {
            .nav li.current  {

            }
        }
        .nav li.current:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            bottom: -20px;
            width: 100%;
            border-bottom: 4px solid rgb(27,150,255);
            border-radius: 1px;
        }

        #home-feed2 {
          /* Prevent vertical gaps */
           
          -webkit-column-count: 4;
          -webkit-column-gap:   20px;
          -moz-column-count:    4;
          -moz-column-gap:      20px;
          column-count:         4;
          column-gap:           20px;  
        }

        #home-feed2 > div {
            margin-bottom: 20px;
            background-color: red;
            height: 250px;
            /*box-shadow: rgba(0,0,0,0.25) 0px 5px 7.2px 0.8px;*/

        }

        .inner {
            padding: 20px;
            background-color: #fff;
            color: #333;
            max-width: 80%;
            margin: 0 auto;
        }

        #home-feed2 img {
          /* Just in case there are inline attributes */
          width: 100% !important;
          height: auto !important;
        }


        @media (max-width: 800px) {
          #home-feed2 {
          -moz-column-count:    2;
          -webkit-column-count: 2;
          column-count:         2;
          }

        }
        @media (max-width: 500px) {
          #home-feed2 {
          -moz-column-count:    1;
          -webkit-column-count: 1;
          column-count:         1;
          }
        }

        

        .white {
            background-color: #fff;
            color: #444;
            box-shadow: rgba(0,0,0,0.25) 0px 0px 7.2px 0.8px;
        }

        .weeks {
            padding: 10px;
        }
        .header {
            line-height: 57px;
        }
        .logo {
            color: #fff;
            font-family: 'Montez', cursive;
            font-family: 'Megrim', cursive;
            font-size: 40px;
            text-decoration: none;
        }
        .logo:hover {
            text-decoration: none;
        }
        ul a:first-child li {
            padding-left: 0px;
        }
        .grid__item.blue {
            background-color: rgb(27,150,255);
            color: #fff;
        }

        .grid__item.green {
            background-color: #29B755;
            color: #fff;
        }
        
        .blue .loader, .green .loader {
            background-color: rgba(255,255,255,0.5);
        }
        #grid-house.full {
            width: 100%;
            padding: 0;
        }

        ul.meal-breakdown li {
            display: block;
            /* padding-left: 0; */
            background-color: rgba(179, 179, 179, 0.2);
            margin: 10px 0px;
            border: 1px solid rgba(125, 125, 125, 0.4);
            width: 155px;
            text-align: center;
            border-radius: 10px;
            height: 44px;
            line-height: 36px;
            cursor: pointer;
        }

        ul.meal-breakdown li.training {
            background-color: rgba(255,140,0,0.7);
            color: #fff;
            cursor: not-allowed;
            border: 1px solid rgba(255, 141, 0, 0.2);
        }

        .icons .fa {
            font-size: 30px;
        }

        .lil {
            float: left;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .lil.red {
            background-color: #F38630;
        }

        .lil.orange {
            background-color: #F4FA58;
        }

        .lil.yellow {
            background-color: #F34353;
        }

        div.lil + p {
            margin-top: 0 !important;
            font-size: 100% !important;
            font-weight: normal !important;
            margin-left: 10px !important;
        }

        .inner-canvas {
    background-color: white;
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    /* line-height: 52px; */
    text-align: center;
    top: 50px;
    left: 66px;
    padding-top: 28px;
    box-shadow: 0px 0px 23px rgba(0,0,0,0.35);
}
    </style>

    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

</head>
<!-- /Head -->
<!-- Body -->
<body>
   
   <!-- Navbar-->
   <div class="header">
    <div class="container">
        <a href="/" class="pull-left logo">VPT</a>
        <a class="logout pull-right" href="/logout">Logout</a>
        <img class="image-header pull-right" src="/images/placeholder/12.jpg">
    </div>
   </div>
    <!-- /Navbar -->
        <!-- Main Container -->
        <section class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav no-padding">
                            <a href="/home"><li class="<?php if ($title == 'Home') {
                                echo "current";
                            } ?>"><i class="fa fa-home"></i><span class="hidden-xs">Home</span></li></a>
                            <a href="/diet/<?php echo $current_week ?>"><li class="<?php if ($title == 'Diet') {
                                echo "current";
                            } ?>"><i class="fa fa-pie-chart"></i><span class="hidden-xs">Meal</span></li></a>
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
                </div>
            </div>
        </section>
        <section class="weeks text-center white">
            Week 1
        </section>

        <section id="grid-house" class="container" style="margin-top: 40px;">
            
                        <div id="theGrid" class="main">
                <section class="grid">
                    
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Monday...</h2>
                        <div class="loader"></div>
                        <span class="category">Begining of the week</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 6 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Tuesday...</h2>
                        <div class="loader"></div>
                        <span class="category">We are getting there</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 7 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Wednesday...</h2>
                        <div class="loader"></div>
                        <span class="category">It's a rest day for you today</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 8 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Thursday...</h2>
                        <div class="loader"></div>
                        <span class="category">I'm serious this time</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 9 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Friday...</h2>
                        <div class="loader"></div>
                        <span class="category">That friday feeling</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 10 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Saturday...</h2>
                        <div class="loader"></div>
                        <span class="category">It's another rest day for you</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 11 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Sunday...</h2>
                        <div class="loader"></div>
                        <span class="category">Finish this week on a high</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            <span class="meta__date"><i class="fa fa-calendar-o"></i> 12 Apr</span>
                            <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training Time: 10am</span>
                        </div>
                    </a>
                    <a class="grid__item green" href="#">
                        <h2 class="title title--preview">Go to next week</h2>
                        <div class="loader"></div>
                        <span class="category">What does the next week have in store</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                         
                        </div>
                    </a>
                    
                    
                </section>
                <section class="content">
                    <div class="scroll-wrap">
                        <article class="content__item">
                            <span class="category category--full">Meal 3</span>
                            <h2 class="title title--full">Ground beef, White rice, Udos oil + Broccoli</h2>
                            <div class="meta meta--full">
                                <h2 class="title title--preview">Week 1</h2>
                                <span class="meta__author">Day 1</span>
                                <span class="meta__date"><i class="fa fa-calendar-o"></i> 6 Apr</span>
                                <span class="meta__reading-time"><i class="fa fa-clock-o"></i> Training time: After Meal 1</span>
                                <span class="meta__misc meta__misc--seperator">Choose Meal:</span>
                                <!--<ul class="meal-breakdown no-padding js-meal-breakdown">
                                <li class="meal1" id="13-1-1">PRE-WORKOUT</li>  
                                <li class="training">TRAINING</li>
                                <li class="meal3" id="12-1-1">POST-WORKOUT</li> 
                                <li class="meal4" id="3-1-1">MEAL 3</li> 
                                <li class="meal5" id="4-1-1">MEAL 4</li>                         
                                </ul>-->
                                <section>
                                    <form class="ac-custom ac-radio ac-circle" autocomplete="off">
                                        <ul>
                                            <li><input id="r5" name="r2" type="radio"><label for="r5">PRE-WORKOUT</label></li>
                                            <li><input id="r6" name="r2" type="radio"><label for="r6">POST-WORKOUT</label></li>
                                            <li><input id="r7" name="r2" type="radio"><label for="r7">MEAL 3</label></li>
                                            <li><input id="r8" name="r2" type="radio"><label for="r8">MEAL 4</label></li>
                                        </ul>
                                    </form>
                                </section>
                                <nav class="article-nav">
                                    <button><i class="fa fa-angle-left"></i> <span>Previous</span></button>
                                    <button><span>Next</span> <i class="fa fa-angle-right"></i></button>
                                </nav>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>170g Ground beef<br><br>69g White rice<br><br>23g Udos Oil<br><br>+ Portion of Broccoli</p>
                                </div>
                                <div class="col-md-4">
                                    <img style="margin-top: 3em; border: 9px solid white; box-shadow: 2px 10px 18px rgba(0,0,0,0.15);" src="/images/food/Sirloin-Steak.jpg" class="pull-right">
                                </div>
                                <div class="col-md-4 text-center icons">
                                    <i style="margin-top:2.5em" class="fa fa-exchange"></i>
                                    <div class="sm-margin"></div>
                                    <i class="fa fa-star-o"></i>
                                    <div class="sm-margin"></div>
                                    <i class="fa fa-balance-scale"></i>
                                </div>
                            </div>
                            <div class="row">
                                <hr style="border-top: 3px solid rgba(0,0,0,0.15)">
                                <div class="md-margin"></div>
                                <div class="col-md-4">
                                    <canvas id="canvas" height="200" width="200"></canvas>
                                    <div class="inner-canvas">2000<br>Calories</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="sm-margin"></div>
                                    <div class="lil red"></div><p class="pull-left">Protein</p>
                                    <div class="sm-margin clearfix"></div>
                                    <div class="lil orange"></div><p class="pull-left">Carbs</p>
                                    <div class="sm-margin clearfix"></div>
                                    <div class="lil yellow"></div><p class="pull-left">Fat</p>
                                </div>
                            </div>
                            
                            
                            
                        </article>
                    
                    </div>
                    <button class="close-button"><i class="fa fa-close"></i><span>Close</span></button>
                </section>
            </div>
                 
        </section>








    <div class="footer-buffer"></div>
  
    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!--Custom JS-->
    <script src="/js/bootstrap-select.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/main2.js"></script>
    <script src="/js/svgcheckbx.js"></script>
    <script src="/js/Chart.js"></script>
    <script>
    $(document).ready(function () {
    var pieData = [{
                value : 30,
                color : "#1B96FF",
                label : 'Protein',
                labelColor : 'white',
                labelFontSize : '16'
            },
                  {
                value : 30,
                color : "#f7f7f7",
                label : 'Carbs',
                labelColor : 'white',
                labelFontSize : '16'
            },
                  {
                value : 30,
                color : "#f5f5f5",
                label : 'Fat',
                labelColor : 'white',
                labelFontSize : '16'
            }];

    var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(pieData, {                       
        animationSteps: 100,
        animationEasing: 'easeInOutQuart'   });
});
    </script>
    
   
</body>
<!--  /Body -->    
</html>

        
      
             
            
   