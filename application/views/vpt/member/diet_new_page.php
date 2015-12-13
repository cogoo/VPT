<header>
    <div class="row">
        <div class="small-12 columns">
            <h5 class="pull-left"><a href="/diet/<?php echo $week; ?>"><i class="fa fa-angle-left"></i> Week <?php echo $week; ?></a></h5>

            <img width="24px" height="24px" class="pull-right" src="/img/icons/checkout@2x.png">
        </div>
    </div>
</header>

<div class="md-margin"></div>

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

<div class="md-margin"></div>

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
                                            <a href="#" class="blue">VIEW</a><i id="<?php echo $meals['Meal_No'].'-'.$meals['Day'].'-'.$meals['Week']; ?>" class="fa fa-refresh js-change"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php $i += 1;
                        endforeach ?>

                    <!--<li class="cd-item-front">
                        <a href="#0">
                            <div class="cd-i-item text-center">
                                <h5 class="text-left">Meal 1: Breakfast</h5>
                                <img src="/img/thumb-1.jpg" alt="Preview image">
                                <div class="sm-margin"></div>
                                <div class="meal">
                                    <p>Omlette with spinach</p>
                                    <a href="#">VIEW</a><i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="cd-item-middle">
                        <a href="#0">
                            <div class="cd-i-item text-center">
                                <h5 class="text-left">Meal 1: Breakfast</h5>
                                <img src="/img/thumb-1.jpg" alt="Preview image">
                                <div class="sm-margin"></div>
                                <div class="meal">
                                    <p>Omlette with spinach</p>
                                    <a href="#">VIEW</a><i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="cd-item-back">
                        <a href="#0">
                            <div class="cd-i-item text-center">
                                <h5 class="text-left">Meal 1: Breakfast</h5>
                                <img src="/img/thumb-1.jpg" alt="Preview image">
                                <div class="sm-margin"></div>
                                <div class="meal">
                                    <p>Omlette with spinach</p>
                                    <a href="#">VIEW</a><i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="cd-item-out">
                        <a href="#0">
                            <div class="cd-i-item text-center">
                                <h5 class="text-left">Meal 1: Breakfast</h5>
                                <img src="/img/thumb-1.jpg" alt="Preview image">
                                <div class="sm-margin"></div>
                                <div class="meal">
                                    <p>Omlette with spinach</p>
                                    <a href="#">VIEW</a><i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </a>
                    </li>-->
                    <!-- <li class="cd-item-out">...</li> -->
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