<?php
    if ($session_times == 3) {
        $rest = array("2", "4", "6", "7");
    }

    if ($session_times == 4) {
        $rest = array("3", "5", "7");
    }

    if ($session_times == 5) {
        $rest = array("3", "6");
    }

    if ($session_times == 6) {
        $rest = array("4");
    }

?>


<ul class="log-header no-margin js-log-header">
    <li id="D1" class="current">Meal Plan</li>
    <li id="D2">Info &amp FAQ's</li>
    <li id="D3">Settings</li>
</ul>

<section>
    <div class="container">


    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
<div class="white-box relative cf">

    
    <div class="D1">
        <div class="sub-header">
            <h3>Choose your week</h3>
            <ul class="sub-log-header main-plan no-padding js-sub-log-header">
                <?php 
                    $i = 1;
                    while ( $i < 13) {
                        ?>
                            <li class="<?php if($week == $i) { echo 'current'; } elseif ($current_week > $i) { echo 'complete'; } ?>" ><a href="/diet/<?php echo $i ?>"><?php echo $i ?></a></li>

                        <?php
                        $i++;
                    } 
                ?>
            </ul>
        </div>
         <div class="sub-content">
            <div class="white-box">
                <div class="">
                   <div class="row">
            <div class="col-lg-12">
                <div class="col-md-6 "></div>
                <div class="col-md-6">
                    <?php 

                        if ($week >= $current_week && $current_week < 13) {
                            ?>
                                <a class="btn green pull-right" href="/complete/diet">MARK WEEK AS COMPLETE</a>
                            <?php

                        }

                    ?>
                </div>

            </div>
        </div> 
                </div>
                <div class="activity-list">
                    <?php
                        $d = 1;
                        while ( $d <= 7) {
                            ?>
                                <div class="activity-list-item">
                                <input type="button" class="<?php if(($completed_day >= $d && $current_week == $week) || $current_week > $week){ echo "green"; } ?> btn js-activity-item meal" value="Day <?php echo $d ?> <?php if (in_array($d, $rest)) { echo '(REST)'; } else { echo '(TRAIN)'; } ?>" />
                                <div class="activity-list-item-dropdown cf dnone">
                                    <div class="row">
                                        <div class="col-xs-3 col-xs-offset-1">
                                            <ul class="meal-breakdown no-padding js-meal-breakdown">
                                                <?php 
                                                    $i = $j = 1;
                                                    if (in_array($d, $rest)) {
                                                        while ( $i <= $total_meal) {
                                                        ?> 
                                                            <li class="meal<?php echo $j ?>" id='<?php echo $i; ?>-<?php echo $d ?>-<?php echo $week ?>'>Meal <?php echo $i; ?></li> 
                                                        <?php
                                                                
                                                            $i += 1;
                                                            $j += 1;
                                                        } 
                                                        
                                                    } else {
                                                        while ( $i <= $total_meal) {
                                                            if ($train_id == $i) {
                                                                if ($i == 1) {
                                                                ?>
                                                                    <li class="meal<?php echo $j ?>" id='13-<?php echo $d ?>-<?php echo $week ?>'>PRE-WORKOUT</li>

                                                                    <li class="training">TRAINING</li>
                                                                <?php
                                                                } else {
                                                                ?>

                                                                    <li class="meal<?php echo $j ?>" id='11-<?php echo $d ?>-<?php echo $week ?>'>PRE-WORKOUT</li>

                                                                    <li class="training">TRAINING</li>
                                                                <?php
                                                            }

                                                            $j += 1;
                                                            } elseif($train_id + 1 == $i) 
                                                                {
                                                                    ?> 
                                                                        <li class="meal<?php echo $j ?>" id='12-<?php echo $d ?>-<?php echo $week ?>'>POST-WORKOUT</li> 
                                                                    <?php
                                                                } else {
                                                                    ?> 
                                                                        <li class="meal<?php echo $j ?>" id='<?php echo $i; ?>-<?php echo $d ?>-<?php echo $week ?>'>Meal <?php echo $i; ?></li> 
                                                                    <?php
                                                                }
                                                            $i += 1;
                                                            $j += 1;
                                                        } 
                                                    }

                                                    

                                                 ?>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-xs-7 diet<?php echo $d ?> diet-info">
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="activity-btn-actions cf">
                                        <?php 

                                            if ($week == $current_week && $completed_day < $d) {
                                                ?>
                                                    <button class="btn green js-day-complete">MARK DAY AS COMPLETE</button>
                                                    <input type="hidden" value="<?php echo $d ?>">
                                                <?php
                                            }

                                        ?>
                                            
                                        </div>
                                    </div>

                                </div>
                                
                                
                            </div>

                            <?php
                            $d++;
                        }
                     ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="D2 disnone">
        <div class="sub-header">
            <h3>Some frequently asked questions...</h3>
            <ul class="sub-log-header no-padding js-log-header">
                <li id="SD21" class="current">Information</li>
                <li id="SD22">FAQ's</li>
            </ul>
        </div>
        <div class="sub-content">
            <div class="white-box">
                <div class="SD21">
                    T
                </div>
                <div class="SD22 disnone">
                    U
                </div>
            </div>
        </div>
    </div>
    <div class="D3 disnone">
        <div class="sub-header">
            <h3>Manage all your diet settings here</h3>
            <ul class="sub-log-header no-padding js-log-header">
                <li id="SD31" class="current">Favourited Meals</li>
                <li id="SD32">Foods I don't like</li>
                <li id="SD33">Allergies &amp medical</li>
                <li id="SD34">Change my plan</li>
            </ul>
        </div>
        <div class="sub-content">
            <div class="white-box">
                <div class="SD31">
                    T
                </div>
                <div class="SD32 disnone">
                    U
                </div>
                <div class="SD33 disnone">
                    P
                </div>
                <div class="SD34 disnone">
                    E
                </div>
            </div>
        </div>
    </div>

</div>

   </div>
    </div>

</div>

</section>

