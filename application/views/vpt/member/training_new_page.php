<header>
    <div class="row">
        <div class="small-12 columns">
            <h5 class="pull-left"><a href="/training/<?php echo $week; ?>"><i class="fa fa-angle-left"></i> Week <?php echo $week; ?></a></h5>

            <!--<img width="24px" height="24px" class="pull-right" src="/img/icons/checkout@2x.png">-->
        </div>
    </div>
</header>

<div class="md-margin"></div>

<div class="row">
    <div class="small-12 columns text-center">
        <h5>
            Back &amp; Biceps
        </h5>
    </div>
</div>

<div class="md-margin"></div>

<div class="row exercise">
    <div class="small-12 columns no-ul-margin">
        <ul id="cd-gallery-items" class="active cd-container">
            <li class="text-center">
                <ul class="cd-item-wrapper">
                    <?php 
                        $i = 1;
                        foreach ($exercise as $act): 
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

                                        <h5 ><?php echo $act['Order'] ?>. <?php echo $act['Name'] ?></h5>
                                        <img src="/images/pullup.png" alt="Preview image">
                                        <div class="sm-margin"></div>
                                        <div class="meal">
                                            <p><?php echo $act['short_description'] ?></p>
                                            <a href="#" class="blue">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php $i += 1;
                        endforeach ?>

                </ul> <!-- cd-item-wrapper -->

                <nav class="cd-nav text-center">
                    <ul class="cd-item-navigation">
                        <li><a class="cd-img-replace" href="#0">Prev</a></li>
                        <li><a class="cd-img-replace visible" href="#0">Next</a></li>
                    </ul>
                </nav>

                <a class="cd-3d-trigger cd-img-replace" href="#0">Open</a>
                <?php  /*

                    if ($week == $current_week && $completed_day < $day) {
                        ?>
                            <a class="btn green js-day-complete">completed</a>
                            <input data-week="<?php echo $week ?>" type="hidden" value="<?php echo $day ?>">
                        <?php
                    }*/

                ?>
                
            </li>
        </ul>
    </div>
</div>