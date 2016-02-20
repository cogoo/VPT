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
        <ul id="cd-gallery-items" class="active cd-container">
            <li class="text-center">
                <ul class="cd-item-wrapper">
                    <?php 
                        $i = 1;
                        foreach ($days_meals as $meals): 
                        ?>


                            <li class="
                            <?php 
                                if ($i == 1) {
                                    echo "cd-item-front";
                                } else {
                                    if ($i == 2) {
                                        echo "cd-item-middle";
                                    } else {
                                        if ($i == 3) {
                                            echo "cd-item-back";
                                        } else {
                                            echo "cd-item-out";
                                        }
                                    }
                                }
                            ?>
                            ">
                                <div class="cd-i-item text-center">
                                    <div class="animate">

                                        <h5 >Meal <?php echo $i; ?></h5>
                                        <img src="/img/thumb-1.jpg" alt="Preview image">
                                        <div class="sm-margin"></div>
                                        <div class="meal">
                                            <p><?php echo $meals['Protein_Name']; if (isset($meals['Carb_Name'])) { ?>, <?php echo $meals['Carb_Name']; } if (isset($meals['Fat_Name'])) { ?> &amp; <?php echo $meals['Fat_Name']; } ?></p>
                                            <a class="js-show-meal blue" data-show="<?php echo $i; ?>">VIEW</a><i id="<?php echo $meals['Meal_No'].'-'.$meals['Day'].'-'.$meals['Week']; ?>" class="fa fa-refresh js-change"></i>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                        <?php $i += 1;
                        endforeach ?>
                </ul> <!-- cd-item-wrapper -->

                <nav class="cd-nav text-center">
                    <ul class="cd-item-navigation">
                        <li><a class="cd-img-replace" href="#0">Prev</a></li>
                        <li><a class="cd-img-replace visible" href="#0">Next</a></li>
                    </ul>
                </nav>


                <?php 

                    if ($week == $current_week && $completed_day < $day) {
                        ?>
                            <a class="btn green js-day-complete">completed</a>
                            <input data-week="<?php echo $week ?>" type="hidden" value="<?php echo $day ?>">
                        <?php
                    }

                ?>
                
            </li>
        </ul>
    </div>
</div>

<?php 
$i = 1;
foreach ($days_meals as $meals): 
?>
    <div style="display:none" id="sm<?php echo $i; ?>" class="meal-breakdown overlay">
        <div class="row">
            <div class="small-12 columns">
                <i data-meal="<?php echo $i; ?>" class="fa fa-times pull-right js-close-meal"></i>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns">
                <h5 >Meal <?php echo $i; ?></h5>
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
    </div>
<?php $i += 1;
endforeach ?>
