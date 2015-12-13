<header>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu pull-left">
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
        <h5><a href="/training/<?php echo $week -1; ?>"><i class="fa fa-angle-left"></i></a>WEEK <?php echo $week; ?><a href="/training/<?php echo $week +1; ?>"><i class="fa fa-angle-right"></i></a></h5>
    </div>
</div>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns no-ul-margin">
        <ul class="days">
            <?php foreach ($activity as $act): ?>
            <a href="/gettraining/<?php echo $week?>/<?php echo $act['WorkOut_ID'] ?>"><li><?php echo $act['Name'] ?></li></a>
            <?php endforeach ?>
            
         
        </ul>
    </div>
</div>