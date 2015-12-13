
    <h5 >Meal <?php #echo $i; ?></h5>
    <img src="/img/thumb-1.jpg" alt="Preview image">
    <div class="sm-margin"></div>
    <div class="meal">
        <p><?php echo $protein_f['Name']; if (isset($carb_f['Name'])) { ?>, <?php echo $carb_f['Name']; } if (isset($fat_f['Name'])) { ?> &amp; <?php echo $fat_f['Name']; } ?></p>
        <a href="#" class="blue">VIEW</a><i id="<?php echo $meal_no.'-'.$day.'-'.$week; ?>" class="fa fa-refresh js-change"></i>
    </div>
