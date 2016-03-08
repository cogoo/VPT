<header>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu float-left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Diet</span>
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
                <a href="/diet/<?php echo $week -1; ?>"><i class="ion-ios-arrow-left"></i></a>
        <?php
        } ?>WEEK <?php echo $week; ?>
        <?php 
            if ($week != 12) {
                ?>
                <a class="invisible"><i class="ion-ios-arrow-right"></i></a>
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
                    <li class="cd-item-front">
                        <div class="cd-i-item text-center v-center">
                            <div class="animate padded">
                                <h1 class="blue">Not accessible</h1>
                                <div class="md-margin"></div>
                                <h3>This page is not accesscible until Week <?php echo $week_needed ?> is marked as complete.</h3>
                                <div class="md-margin"></div>
                                <a class="btn green" href="/diet/<?php echo $week_needed ?>">Go to Week <?php echo $week_needed ?></a>    
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
