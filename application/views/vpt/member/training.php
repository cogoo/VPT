<!--<ul class="log-header no-margin js-log-header">
    <li id="T1" class="current">Training Plan</li>
    <li id="T2">Info &amp FAQ's</li>
    <li id="T3">Settings</li>
</ul>-->

<section>
    <div class="container">

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">

<div class="white-box relative cf tab">
   
    
    <div class="T1">
        <div class="sub-header">
            <h3>Choose your week</h3>
            <div class="sm-margin"></div>
            <ul class="sub-log-header main-plan no-padding js-sub-log-header hidden-xs">
                <?php 
                    $i = 1;
                    while ( $i < 13) {
                        ?>
                            <li class="<?php if($week == $i) { echo 'current'; } elseif ($current_week > $i ) { echo 'complete'; } ?>" ><a href="/training/<?php echo $i ?>"><?php echo $i ?></a></li>

                        <?php
                        $i++;
                    } 
                ?>
            </ul>
            <div class="mobile-week visible-xs">
                <select class="cs-select cs-skin-slide">
                    <option <?php if($week == 1) { echo 'selected'; } ?> value="1" data-class="icon-calender">Week 1</option>
                    <option <?php if($week == 2) { echo 'selected'; } ?> value="2" data-class="icon-calender">Week 2</option>
                    <option <?php if($week == 3) { echo 'selected'; } ?> value="3" data-class="icon-calender">Week 3</option>
                    <option <?php if($week == 4) { echo 'selected'; } ?> value="4" data-class="icon-calender">Week 4</option>
                    <option <?php if($week == 5) { echo 'selected'; } ?> value="5" data-class="icon-calender">Week 5</option>
                    <option <?php if($week == 6) { echo 'selected'; } ?> value="6" data-class="icon-calender">Week 6</option>
                    <option <?php if($week == 7) { echo 'selected'; } ?> value="7" data-class="icon-calender">Week 7</option>
                    <option <?php if($week == 8) { echo 'selected'; } ?> value="8" data-class="icon-calender">Week 8</option>
                    <option <?php if($week == 9) { echo 'selected'; } ?> value="9" data-class="icon-calender">Week 9</option>
                    <option <?php if($week == 10) { echo 'selected'; } ?> value="10" data-class="icon-calender">Week 10</option>
                    <option <?php if($week == 11) { echo 'selected'; } ?> value="11" data-class="icon-calender">Week 11</option>
                    <option <?php if($week == 12) { echo 'selected'; } ?> value="12" data-class="icon-calender">Week 12</option>
                </select>
            </div>
            <div class="sm-margin"></div>
        </div>
         <div class="sub-content">
            <div class="white-box">
                 <div class="">
                   <div class="row">
            <div class="col-lg-12">
                <div class="col-md-6 "></div>
                <div class="col-md-3 col-md-offset-3">
                    <!--<a class="btn green" href="/complete/training">MARK WEEK AS COMPLETE</a>-->
                </div>

            </div>
        </div> 
                </div>
                <div class="activity-list">
                    <?php foreach ($activity as $act): ?>
                    <div class="activity-list-item">
                        <input type="button" id="<?php echo $act['WorkOut_ID'] ?>" class="btn js-activity-item exercise" value="<?php echo $act['Name'] ?>" />
                        <div id="ex<?php echo $act['WorkOut_ID'] ?>" class="activity-list-item-dropdown cf dnone">
                        </div>
                    </div>
                    <?php endforeach ?>
                   
                   
                </div>
            </div>
        </div>
        
    </div>
    <div class="T2 disnone">
        <div class="sub-header">
            <h3>Some frequently asked questions...</h3>
        </div>
        <div class="sub-content">
            <div class="white-box"></div>
        </div>
    </div>
    <div class="T3 disnone">
        
    </div>

</div>
<div class="md-margin"></div>
</div>
</div>
</div>
</section>
