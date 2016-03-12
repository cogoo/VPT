<header>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu float-left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Training</span>
            </div>
        </div>
    </div>
</header>

<div class="sm-margin"></div>

<div class="row weeks">
    <div class="small-12 columns text-center">
        <h5>
        <?php 
            if ($week != 1) {
        ?>
                <a href="/training/<?php echo $week -1; ?>"><i class="ion-ios-arrow-left"></i></a>
        <?php
        } ?>WEEK <?php echo $week; ?>
        <?php 
            if ($week != 12) {
                ?>
                <a href="/training/<?php echo $week +1; ?>"><i class="ion-ios-arrow-right"></i></a>
                <?php
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
                        $an = 0;
                        $i = 0;
                        $j =  strtotime($user['WeekBegin']);
                        $days = strtotime("+7 day", strtotime($user['WeekBegin']));

                        while ($j < $days) {
                            if ($week <> $current_week || $days_dif > 6) {
                                ?>
                                    <li class="
                                    <?php 
                                        if ($i == 0) {
                                            echo "cd-item-front";
                                        } else {
                                            if ($i == 1) {
                                                echo "cd-item-middle";
                                            } else {
                                                if ($i == 2) {
                                                    echo "cd-item-back";
                                                } else {
                                                    echo "cd-item-out";
                                                }
                                            }
                                        }
                                    ?>
                                    ">
                                <?php
                            } else {
                                ?>
                                    <li class="
                                    <?php 
                                        if ($i == $days_dif) {
                                            echo "cd-item-front";
                                        } else {
                                            if ($days_dif > $i) {
                                                echo "move-right hidden";
                                            } else {
                                                if (($i == 1 + $days_dif) && $days_dif < 7) {
                                                    echo "cd-item-middle";
                                                } else {
                                                    if (($i == 2 + $days_dif) && $days_dif < 6) {
                                                        echo "cd-item-back";
                                                    } else {
                                                        echo "cd-item-out";
                                                    }
                                                }  
                                            }
                                        }
                                    ?>
                                    ">
                                <?php
                            }
                        ?>
                            
                                <div class="cd-i-item text-center v-center">
                                    <div class="animate ">

                                        <img class="calender" src="/assets/calender@2x.png">
                                        <div class='sm-margin'></div>

                                        <?php 

                                            echo "<h3>".date('l', $j)."<br>(Day ".($i + 1).")</h3>";
                                            echo "<div class='sm-margin'></div>";
                                            if (in_array(($i+1), $rest)) {
                                                echo "<a class='btn blue inverted'>REST DAY</a>";
                                            } else {
                                                echo "<a class='btn blue inverted' href='/gettraining/".$week."/".$activity[$an]['WorkOut_ID']."/".url_title(base64_encode($activity[$an]['Name']))."'>VIEW</a>";
                                                $an += 1;
                                            }

                                        ?>
                                        
                                    </div>
                                </div>
                            </li>
                        <?php 
                            $i += 1;
                            $j = strtotime("+1 day", $j);
                        } ?>
                </ul> <!-- cd-item-wrapper -->

                <nav class="cd-nav text-center">
                    <ul class="cd-item-navigation">
                        <li><a class="cd-img-replace" href="#0">Prev</a></li>
                        <li><a class="cd-img-replace visible" href="#0">Next</a></li>
                    </ul>
                </nav>

            </li>
        </ul>
    </div>
</div>