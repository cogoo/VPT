<?php
// logic for image based on number of meals
// if number of meals = x .. then use this array

$img_array = [];
$num3 = ['breakfast','lunch','dinner'];
$num4 = ['breakfast','breakfast','lunch','dinner'];
$num5 = ['breakfast','breakfast','lunch','lunch','dinner'];
$num6 = ['breakfast','breakfast','lunch','lunch','dinner','dinner'];


?>

<header>
    <div class="row">
        <div class="small-12 columns">
            <h5 class="pull-left"><a href="/diet/<?php echo $week; ?>"><i class="fa fa-angle-left"></i> Week <?php echo $week; ?></a></h5>
            <img width="24px" height="24px" class="pull-right" src="/img/icons/checkout@2x.png">
        </div>
    </div>
</header>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns text-center">
        <h5>
            <?php

                switch ($day) {
                    case 1:
                        echo "Monday";
                        break;
                    case 2:
                        echo "Tuesday";
                        break;
                    case 3:
                        echo "Wednesday";
                        break;
                    case 4:
                        echo "Thursday";
                        break;
                    case 5:
                        echo "Friday";
                        break;
                    case 6:
                        echo "Saturday";
                        break;
                    case 7:
                        echo "Sunday";
                        break;
                    
                }

             ?>
        </h5>
    </div>
</div>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns no-ul-margin">
        <?php 
        $i = 1;
        switch (count($days_meals)) {
            case '3':
                $img_array = $num3;
                break;
            case '4':
                $img_array = $num4;
                break;
            case '5':
                $img_array = $num5;
                break;
            case '6':
                $img_array = $num6;
                break;
            
            
        }
        
        foreach ($days_meals as $meals): 
        ?>
            <div class="white meal_times text-center">
                <img src="/assets/<?php echo $img_array[$i-1]; ?>@2x.png">
                <div class="sm-margin"></div>
                <h4 class="meal_times__header capitalize"><?php echo $img_array[$i-1]; ?></h4>
                <a class="blue meal_times__anchor js-show-meal" data-show="<?php echo $i; ?>">CHOOSE</a>

                <div style="display:none" id="sm<?php echo $i; ?>" class="meal-breakdown overlay">
                    <div>
                        <div class="row">
                            <div class="small-12 columns">
                                <i data-meal="<?php echo $i; ?>" class="fa fa-times pull-right js-close-meal"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <h5 >Meal <?php echo $i.": <span class='capitalize'>".$img_array[$i-1]."</span>"; ?></h5>
                            </div>
                            <div class="sm-margin clearfix"></div>
                            <img src="/img/thumb-1.jpg" alt="Preview image">
                            <div class="sm-margin clearfix"></div>
                            <div class="small-12 columns">
                                <h5><?php echo $meals['Protein_Name']; if (isset($meals['Carb_Name'])) { ?>, <?php echo $meals['Carb_Name']; } if (isset($meals['Fat_Name'])) { ?> &amp; <?php echo $meals['Fat_Name']; } ?><i class="fav fa fa-star-o pull-right"></i></h5>
                                <div class="sm-margin"></div>
                                <ul>
                                    <li>x3 Large Eggs</li>
                                    <li>50g spinach</li>
                                    <li>1/2 red pepper</li>
                                    <li>x5 button mushrooms</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="small-12 columns">
                                <hr>
                                <h5>Nutritional breakdown</h5>
                                <div class="sm-margin"></div>
                                <div class="pull-left canvas">
                                    <canvas class="pct-break" protein-pct="25" carb-pct="24" fat-pct="4" width="100" height="100" style="width: 50px; height: 50px;"></canvas>
                                </div>
                                <div class="pull-left">
                                    <ul>
                                        <li><span class="blue block"></span>25g protein</li>
                                        <li><span class="brown block"></span>24g carbohydrate</li>
                                        <li><span class="green block"></span>4g fat</li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="meal-breakdown__swap text-center">
                            <span>SWAP MEAL</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sm-margin"></div>

        <?php $i += 1;
        endforeach ?>
    </div>
</div>

