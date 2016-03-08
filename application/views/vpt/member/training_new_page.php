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
                <a class="training_times__anchor blue js-show-ex" data-show="<?php echo $i; ?>">VIEW</a>

                <div style="display:none" id="sx<?php echo $i; ?>" class="ex-breakdown overlay">
                        <div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <i data-ex="<?php echo $i; ?>" class="ion-close-round float-right js-close-ex"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <h5><?php echo $i.'. '.$act['Name'] ?></h5>
                                </div>
                                <div class="sm-margin clearfix"></div>
                                <iframe src="https://player.vimeo.com/video/62723744" width="500" height="213" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                <div class="sm-margin clearfix"></div>
                                <div class="small-12 columns">
                                    <p>
                                        <?php echo $act['Description'] ?>
                                    </p>
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                <div class="small-12 columns">
                                    <hr>
                                    <h5>Muscles worked</h5>
                                    <div class="sm-margin"></div>
                                    <img src="/images/mw.jpg" alt="Preview image">
                                    
                                </div>
                                
                            </div>
                            <div class="meal-breakdown__swap text-center">
                                <span>PERFORM EXERCISE</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="sm-margin"></div>

              
        <?php $i += 1;
        endforeach ?>
                
            </li>
        </ul>
    </div>
</div>