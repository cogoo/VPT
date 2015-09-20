<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>New Home</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    

    <!--Page Related styles-->
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>
    <link href="/css/default.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
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

        .grid__item.orange {
            background-color: rgb(255,140,0);
            color: #fff;
        }
        
        .blue .loader, .orange .loader {
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
        .image-home {
            width: 80px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 13px;
            border: 1px solid;
        }
        canvas {
            width: 120px;
            height: 120px;
            margin: 10px auto;
        }

        .blue.light {
            background-color: #3DA7F3;
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
                    <a class="grid__item blue" href="#">
                        <h2 class="title title--preview"><?php echo date('j') . '<sup>' . date('S') . '</sup> '.date('F')?></h2>
                        <h3 class="time"></h3>
                        <div class="loader"></div>
                        <span class="category">What is scheduled for today</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                         
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <img class="image-home" src="/images/placeholder/12.jpg">
                        <span class="category">Height: 6ft</span>
                        <span class="category">Weight: 75kg</span>
                        <span class="category">Body fat: 16%</span>
                        <span class="category">Goal: Loose fat</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                        </div>
                    </a>
                    
                    
                    
                    
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Current week</h2>
                        <h1>2</h1>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                        </div>
                    </a>
                    <a class="grid__item " href="#">
                        <h2 class="title title--preview">Go to meal</h2>
                        <div class="loader"></div>
                        <span class="category">What we eating bruh</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Get shopping list</h2>
                        <div class="loader"></div>
                        <span class="category">Generate a shopping list for this week</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Calories</h2>
                        <canvas class="skill" skilled-pct="24" unskilled-color="#FFF" skilled-color="#FF8C00"></canvas>
                        <h2 class="category">15,382</h2>
                        <span class="category">Calories consumed</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                        </div>
                    </a>
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Progress</h2>
                        <canvas class="skill" skilled-pct="16" unskilled-color="#FFF" skilled-color="#29B755"></canvas>
                        <span class="category">12 Week Progress</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                        </div>
                    </a>
                    
                    <a class="grid__item" href="#">
                        <h2 class="title title--preview">Go to training</h2>
                        <div class="loader"></div>
                        <span class="category">Go get em'</span>
                        <div class="meta meta--preview">
                            <div class="md-margin"></div>
                            
                        </div>
                    </a>
                    
                    
                    
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
    <script src="/js/global.js"></script>
    <script src="/js/Chart.js"></script>
    <script type="text/javascript">
        //these options are common to all skills
        var options = {

            //prevents the text vanishing on redraw (when tooltip shows)
            showTooltips: false,

            //nicer than default bouncing
            animationEasing: "easeOut",

            //bit smoother with less steps
            animationSteps: 40,

            //do once on completion rather than every frame/draw cycle
            onAnimationComplete: function () {

                //setup the font and center it's position
                this.chart.ctx.font = 'Normal 18px Ariel';
                this.chart.ctx.fillStyle = '#999';
                this.chart.ctx.textAlign = 'center';
                this.chart.ctx.textBaseline = 'middle';

                //put the pabel together based on the given 'skilled' percentage
                var valueLabel = this.segments[0].value + '%';

                //find the center point
                var x = this.chart.canvas.clientWidth / 2;
                var y = this.chart.canvas.clientHeight / 2;

                //hack to center different fonts
                var x_fix = 0;
                var y_fix = 2;

                //render the text
                this.chart.ctx.fillText(valueLabel, x + x_fix, y + y_fix);
            }
        };

        $(document).ready(function () {

            //cycle through each skill
            $('.skill').each(function () {

                //get this skill's percentage
                var skilledPercentage = $(this).attr('skilled-pct');
                skilledPercentage = parseInt(skilledPercentage);
                var skilledColour = $(this).attr('skilled-color');
                var unskilledColour = $(this).attr('unskilled-color');

                //create a custom data set
                var data = [{
                    //the amount that represents 'skilled' percentage
                    value: skilledPercentage,
                    color: skilledColour
                }, {
                    //the amount that represents 'unskilled' percentage
                    value: 100 - skilledPercentage,
                    color: unskilledColour
                }];

                //now draw the chart on this skill canvas with the custom data set
                var ctx = $(this).get(0).getContext("2d");
                chart = new Chart(ctx).Doughnut(data, options);
            });
        });
    </script>
    
   
</body>
<!--  /Body -->    
</html>

        
      
             
            
   