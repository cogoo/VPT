<div class="diet-item" >
    <div class="meal-img relative">
        <div class="meal-title">
            <h4 class="no-margin" ><?php echo $protein_f['Name']; if (isset($carb_f['Name'])) { ?>, <?php echo $carb_f['Name']; } if (isset($fat_f['Name'])) { ?> &amp; <?php echo $fat_f['Name']; } ?></h4>
        </div>
    </div>
    <div class="diet-breakdown p-40">
        <div class="relative">
            <p><?php echo number_format($protein_b / $protein_f['Protein'] * 100) ?>g <?php echo $protein_f['Name']; ?></p>
            <p><?php if (isset($carb_f['Name'])) { echo number_format($Carb_Meal1 / $carb_f['Carbs'] * 100) ?>g <?php echo $carb_f['Name']; } ?></p>
            <p><?php if (isset($fat_f['Name'])) { echo number_format($Fat_Meal1 / $fat_f['Fat'] * 100) ?>g <?php echo $fat_f['Name']; } ?></p>
            <p><?php if (isset($veg_f['Name'])) { echo '+ '.$veg_f['Name']; } ?></p>
            <?php  

                if ($hate == 0) {
                    echo "<p>* A meal with your allergies could not be made<p>";
                } elseif ($hate == 2) {
                    echo "<p>* A favourite meal could not be made<p>";
                } elseif ($hate == 3) {
                    echo "<p>* A meal with you favourites nor allergies could be made<p>";
                }
            ?>
        </div>
        <hr>
        <?php if ($change) {
            ?>
                <button class="btn green change">Change Meal</button>
                <div class="xs-margin"></div>
                <button class="btn gold fav">Change to Favourites</button>
                <input type="hidden" class="meal-info">
            <?php
        } ?>
        
    </div>
</div>
