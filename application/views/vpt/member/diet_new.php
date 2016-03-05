<header>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu float-left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Diet</span>
            </div>
            

            <img width="24px" height="24px" class="float-right" src="/assets/settings@2x.png">
        </div>
    </div>
</header>


<div class="sm-margin"></div>

<div class="row weeks">
    <div class="small-12 columns text-center">
        <h5><a href="/diet/<?php echo $week -1; ?>"><i class="ion-ios-arrow-left"></i></a>WEEK <?php echo $week; ?><a href="/diet/<?php echo $week +1; ?>"><i class="ion-ios-arrow-right"></i></a></h5>
    </div>
</div>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns no-ul-margin">
        <!--<ul class="days">
            <a href="/getdiet/<?php #echo $week?>/1"><li>Monday <?php #if(($completed_day >= 1 && $current_week == $week) || $current_week > $week){ #echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
        </ul>-->
        <ul id="cd-gallery-items" class="active cd-container">
            <li class="text-center">
                <ul class="cd-item-wrapper">
                    <?php 
                        $i = 1;
                        $days = 7;
                        while ($i <= $days) {
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
                                <div class="cd-i-item text-center v-center">
                                    <div class="animate ">

                                        <img class="calender" src="/assets/calender@2x.png">
                                        <div class='sm-margin'></div>

                                        <?php 

                                            switch ($i) {
                                                case '1':
                                                    echo "<h3>Monday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/1'>VIEW</a>";
                                                    break;
                                                
                                                case '2':
                                                    echo "<h3>Tuesday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/2'>VIEW</a>";
                                                    break;

                                                case '3':
                                                    echo "<h3>Wednesday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/3'>VIEW</a>";
                                                    break;
                                                
                                                case '4':
                                                    echo "<h3>Thursday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/4'>VIEW</a>";
                                                    break;
                                                
                                                case '5':
                                                    echo "<h3>Friday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/5'>VIEW</a>";
                                                    break;
                                                
                                                case '6':
                                                    echo "<h3>Saturday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/6'>VIEW</a>";
                                                    break;
                                                
                                                case '7':
                                                    echo "<h3>Sunday</h3>";
                                                    echo "<div class='sm-margin'></div>";
                                                    echo "<a class='btn blue inverted' href='/getdiet/".$week."/7'>VIEW</a>";
                                                    break;
                                            
                                            }

                                        ?>
                                        
                                    </div>
                                </div>
                            </li>
                        <?php $i += 1;
                        } ?>
                </ul> <!-- cd-item-wrapper -->

                <nav class="cd-nav text-center">
                    <ul class="cd-item-navigation">
                        <li><a class="cd-img-replace" href="#0">Prev</a></li>
                        <li><a class="cd-img-replace visible" href="#0">Next</a></li>
                    </ul>
                </nav>


                <?php 
                /*
                    if ($week == $current_week && $completed_day < $day) {
                        ?>
                            <a class="btn green js-day-complete">completed</a>
                            <input data-week="<?php echo $week ?>" type="hidden" value="<?php echo $day ?>">
                        <?php
                    }
                */
                ?>
                
            </li>
        </ul>
    </div>
</div>