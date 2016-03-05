<header>
    <div class="row">
        <div class="small-12 columns">
            <h5 class="float-left"><a href="/training/<?php echo $week; ?>"><i class="ion-ios-arrow-left"></i> Week <?php echo $week; ?></a></h5>

            <!--<img width="24px" height="24px" class="float-right" src="/img/icons/checkout@2x.png">-->
        </div>
    </div>
</header>

<div class="sm-margin"></div>

<div class="row">
    <div class="small-12 columns text-center">
        <h5>
            <?php echo base64_decode($act_name); ?>
        </h5>
    </div>
</div>

<div class="sm-margin"></div>

<div class="row exercise">
    <div class="small-12 columns no-ul-margin">
       
    <?php 
        $i = 1;
        foreach ($exercise as $act): 
        ?>

            <div class="white training_times text-center">
                <img class="training_times__image" src="/images/pullup.png" alt="Preview image">
                <h5 class="training_times__header" ><?php echo $act['Name'] ?></h5>
                <div class="sm-margin"></div>
                <a class="training_times__anchor blue" href="#">VIEW</a>
            </div>
            <div class="sm-margin"></div>

              
        <?php $i += 1;
        endforeach ?>
                
            </li>
        </ul>
    </div>
</div>