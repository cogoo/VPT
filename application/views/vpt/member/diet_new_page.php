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
            <h5 class="float-left"><a href="/diet/<?php echo $week; ?>"><i class="ion-ios-arrow-left"></i> Week <?php echo $week; ?></a></h5>
            <!--<img width="24px" height="24px" class="float-right" src="/img/icons/checkout@2x.png">-->
        </div>
    </div>
</header>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns text-center">
        <h5>
            <?php

                $day -= 1;
                $days = strtotime("+$day day", strtotime($user['WeekBegin']));
                echo date('l', $days);

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
                                <i data-meal="<?php echo $i; ?>" class="ion-close-round float-right js-close-meal"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <h5 >Meal <?php echo $i.": <span class='capitalize'>".$img_array[$i-1]."</span>"; ?></h5>
                            </div>
                            <div class="sm-margin clearfix"></div>
                            <img src="/img/thumb-1.jpg" alt="Preview image">
                            <div class="sm-margin clearfix"></div>
                            <div class="small-10 columns">
                                <h5><?php echo $meals['Protein_Name']; if (isset($meals['Carb_Name'])) { ?>, <?php echo $meals['Carb_Name']; } if (isset($meals['Fat_Name'])) { ?> &amp; <?php echo $meals['Fat_Name']; } ?></h5>
                                <div class="sm-margin"></div>
                                <ul>
                                    <li><?php echo $meals['Protein_Name'] .' - '. floor($meals['Protein_B1'] / $meals['Protein_Grams'] * 100) ?>g</li>
                                    <?php 
                                        if (isset($meals['Carb_Name'])) {
                                        ?>
                                        <li><?php echo $meals['Carb_Name'] .' - '. floor($meals['Carb_Meal12'] / $meals['Carb_Grams'] * 100) ?>g</li>
                                        <?php
                                        }

                                        if (isset($meals['Fat_Name'])) {
                                        ?>
                                        <li><?php echo $meals['Fat_Name'] .' - '. floor($meals['Fat_Meal1'] / $meals['Fat_Grams'] * 100) ?>g</li>
                                        <?php
                                        } 
                                    ?>
                                    
                                </ul>
                            </div>
                            <div class="meal-action small-2 columns">
                                <h5><i class="fav ion-ios-star-outline"></i></h5>
                                <h5><i class="del ion-close-round"></i></h5>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="small-12 columns">
                                <hr>
                                <h5>Nutritional breakdown</h5>
                                <div class="sm-margin"></div>
                                <div class="float-left canvas">
                                    <canvas class="pct-break" protein-pct="<?php echo $meals['Protein_B1'] ?>" carb-pct="<?php echo $meals['Carb_Meal12'] ?>" fat-pct="<?php echo $meals['Fat_Meal1'] ?>" width="100" height="100" style="width: 50px; height: 50px;"></canvas>
                                </div>
                                <div class="float-left">
                                    <ul>
                                        <li><span class="blue block"></span><?php echo $meals['Protein_B1'] ?>g protein</li>
                                        <li><span class="brown block"></span><?php echo $meals['Carb_Meal12'] ?>g carbohydrate</li>
                                        <li><span class="green block"></span><?php echo $meals['Fat_Meal1'] ?>g fat</li>
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

