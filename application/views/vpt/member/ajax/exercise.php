
    <div class="cf">
        <?php foreach ($exercise as $act): ?>
        <div class="white-box-activity">
            <h4><?php echo $act['Order'] ?>. <?php echo $act['Name'] ?></h4>
            <div class="cf">
                <div class="col-40">
                    <img class="full-image" src="<?php echo base_url();?>images/pullup.png" >
                </div>
                <div class="col-60">
                    <div class="box-workout">
                        <p><?php echo $act['Description'] ?></p>

                    </div>
                </div>
            </div>
            <p class="cf box-workout">Works all of your quads. Great for building a solid foundation.</p>

        </div>
        <?php endforeach ?>
      
    
    </div>
    <div class="activity-btn-actions cf">
        <a class="btn blue">DOWNLOAD AS PDF</a>
        <!--<a class="btn green">MARK AS COMPLETE</a>-->
    </div>

