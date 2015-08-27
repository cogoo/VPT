<ul class="hidden log-header no-padding no-margin">
    <li class="current">Meal Plan</li>
    <li>Info &amp FAQ's</li>
    <li>Settings</li>
</ul>

<section>

<div class="container">

    <div class="row">
        <div class="col-lg-10 col-md-offset-1">
<div class="white-box relative cf">
    <div class="text-center relative">
        <div class="relative">
        <h1 class="blue"><?php echo $full_name ?></h1>
        <div class="row">
            <div class="col-md-offset-2 col-md-2 text-center">
                <h3>Height</h3>
                <p>6ft</p>
            </div>
            <div class="col-md-2 text-center">
                <h3>Weight</h3>
                <p><?php echo $user['Weight'] ?>kg</p>
            </div>
            <div class="col-md-2 text-center">
                <h3>Body fat</h3>
                <p><?php echo $user['BodyFat'] ?>%</p>
            </div>
            <div class="col-md-2 text-center">
                <h3>Goal</h3>
                <p><?php echo $goal['Goal'] ?></p>
            </div>
        </div>
        <div class="lg-margin"></div>
        <div class="circle a">
            <img src="/images/placeholder/<?php echo $user['User_ID'] ?>.jpg">
        </div>   
        </div>
        <section class="bg-gray p-80 text-center home-sec-1">
       

                <div class="row">

                    <div class="col-md-4">
                        <div class="bg-blue first">
                            <h2>20th Feb</h2>
                            <h2>16:24</h2>
                            <p>What is scheduled for today</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="home-inner middle first">
                            <img class="max" src="/images/food/Sirloin-Steak.jpg">
                            <div>
                                <h3>Steak in holinday sauce</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="home-inner first">
                            <img class="max" src="/images/workout/work1.jpg">
                            <div>
                                <h3>Chest and Shoulders</h3>
                            </div>
                        </div>

                    </div>


            </div>

           
            

    


</section>
<div class="relative">
<div class="lg-margin"></div>
<div class="md-margin"></div>
    <div class="circle b">
        <h3>Week</h3>
        <h1 class="no-margin"><?php echo $current_week; ?></h1>
    </div>  
</div>
 <section class="bg-gray p-80 text-center home-sec-1">
    <div class="row">

        <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Total Calories</h5>

                            <div ibox-tools=""></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="300"></canvas>
                                <h1 class="blue">6,436</h1>
                                <p class="blue">calories consumed</p>

                                <button class="btn blue smaller">view meals</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Weekly Starting Weights</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div id="morris-line-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="243" version="1.1" width="423" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6514892578125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="319" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,319H398" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="245.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,245.5H398" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="172" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,172H398" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="98.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,98.5H398" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.03125,25H398" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="398" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="339.1987248973072" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="280.3974497946143" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="221.5961746919215" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="162.63380020538568" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="103.83252510269284" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="45.03125" y="331.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#1ab394" d="M45.03125,54.39999999999998C59.73156877567321,72.77499999999998,89.13220632701963,109.525,103.83252510269284,127.9C118.53284387836605,146.275,147.93348142971246,201.4,162.63380020538568,201.4C177.37439382701965,201.4,206.85558107028754,127.9,221.5961746919215,127.9C236.2964934675947,127.9,265.6971310189411,201.4,280.3974497946143,201.4C295.09776857028754,201.4,324.498406121634,146.27500000000003,339.1987248973072,127.9C353.8990436729804,109.52500000000002,383.29968122432683,72.77499999999998,398,54.39999999999998" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#54cdb4" d="M45.03125,25C59.73156877567321,43.375,89.13220632701963,80.125,103.83252510269284,98.5C118.53284387836605,116.875,147.93348142971246,172,162.63380020538568,172C177.37439382701965,172,206.85558107028754,98.5,221.5961746919215,98.5C236.2964934675947,98.5,265.6971310189411,172,280.3974497946143,172C295.09776857028754,172,324.498406121634,116.87500000000001,339.1987248973072,98.5C353.8990436729804,80.12500000000001,383.29968122432683,43.375,398,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.03125" cy="54.39999999999998" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="103.83252510269284" cy="127.9" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="162.63380020538568" cy="201.4" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="221.5961746919215" cy="127.9" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="280.3974497946143" cy="201.4" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="339.1987248973072" cy="127.9" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="398" cy="54.39999999999998" r="4" fill="#1ab394" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="45.03125" cy="25" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="103.83252510269284" cy="98.5" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="162.63380020538568" cy="172" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="221.5961746919215" cy="98.5" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="280.3974497946143" cy="172" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="339.1987248973072" cy="98.5" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="398" cy="25" r="4" fill="#54cdb4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 239.897449794614px; top: 85px; display: block;">
                               </div></div>
 <button class="btn blue smaller">update weight</button>
                        </div>
                    </div>
                </div>

              

               <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>12 Week Progress</h5>

                            <div ibox-tools=""></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart2" height="530"></canvas>
                                
                            </div>
                        </div>
                    </div>
                </div>

    </div>
   
</section>
        <!--<div class="circle"></div>-->
    </div>

</div>

</div>
</div>
</div>
</section>