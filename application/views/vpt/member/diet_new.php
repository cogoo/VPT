<header>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu pull-left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Diet</span>
            </div>
            

            <img width="24px" height="24px" class="pull-right" src="/img/icons/checkout@2x.png">
        </div>
    </div>
</header>


<div class="sm-margin"></div>

<div class="row weeks">
    <div class="small-12 columns text-center">
        <h5><a href="/diet/<?php echo $week -1; ?>"><i class="fa fa-angle-left"></i></a>WEEK <?php echo $week; ?><a href="/diet/<?php echo $week +1; ?>"><i class="fa fa-angle-right"></i></a></h5>
    </div>
</div>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns no-ul-margin">
        <ul class="days">
            <a href="/getdiet/<?php echo $week?>/1"><li>Monday <?php if(($completed_day >= 1 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/2"><li>Tuesday <?php if(($completed_day >= 2 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/3"><li>Wednesday <?php if(($completed_day >= 3 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/4"><li>Thursday <?php if(($completed_day >= 4 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/5"><li>Friday <?php if(($completed_day >= 5 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/6"><li>Saturday <?php if(($completed_day >= 6 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
            <a href="/getdiet/<?php echo $week?>/7"><li>Sunday <?php if(($completed_day >= 7 && $current_week == $week) || $current_week > $week){ echo "<i class='fa fa-check-square-o green'></i>"; } ?></li></a>
        </ul>
    </div>
</div>