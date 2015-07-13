<div class="diet-item" >
    <h4><?php if ($meal == 11) {
        echo 'PRE - WORKOUT';
    } elseif($meal == 12) { echo 'POST - WORKOUT'; } else { echo 'MEAL '.$meal;} ?></h4>
    <div class="diet-chart relative">
        <canvas id="chart-area" /><span><?php echo $calpd ?> Calories</span>
    </div>
    <div class="diet-breakdown cf">
        <div class="col-80 relative diet-separator">
            <h4 class="no-margin" ><?php echo $protein_f['Name']; if (isset($carb_f['Name'])) { ?>, <?php echo $carb_f['Name']; } if (isset($fat_f['Name'])) { ?> &amp; <?php echo $fat_f['Name']; } ?></h4>
            <p><?php echo number_format($protein_b / $protein_f['Protein'] * 100) ?>g <?php echo $protein_f['Name']; ?></p>
            <p><?php if (isset($carb_f['Name'])) { echo number_format($Carb_Meal1 / $carb_f['Carbs'] * 100) ?>g <?php echo $carb_f['Name']; } ?></p>
            <p><?php if (isset($fat_f['Name'])) { echo number_format($Fat_Meal1 / $fat_f['Fat'] * 100) ?>g <?php echo $fat_f['Name']; } ?></p>
        </div>
        <div class="col-20"></div>
    </div>
</div>

<!--<script>
<?php 
    /*if (!isset($carb_f['Name']) && $meal != $total_meal) {
        ?>
            $('#<?php echo $meal ?>').click();
        <?php
    }; */
?>
</script>-->