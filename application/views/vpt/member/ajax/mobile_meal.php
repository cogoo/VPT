<ul id="cd-gallery-items" class="active cd-container">
    <li>
        <ul class="cd-item-wrapper">

        <?php 
        $i = 1;
        foreach ($days_meals as $meals): 
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
                <div class="item">
                    <div class="item-i">
                        <div class="item-img"><img class="max" src="/images/food/Sirloin-Steak.jpg"></div>
                        <div class="inner text-left">
                            <h5 >Meal <?php echo $i; ?></h5>
                            <p><?php echo $meals['Protein_Name']; if (isset($meals['Carb_Name'])) { ?>, <?php echo $meals['Carb_Name']; } if (isset($meals['Fat_Name'])) { ?> &amp; <?php echo $meals['Fat_Name']; } ?></p>
                        </div>
                    </div>
                </div>
            </li>
        <?php $i += 1;
        endforeach ?>

        </ul> <!-- cd-item-wrapper -->
        <nav>
            <ul class="cd-item-navigation">
                <li><a class="cd-img-replace" href="#0">Prev</a></li>
                <li><a class="cd-img-replace visible" href="#0">Next</a></li>
            </ul>
        </nav>
    </li>

</ul> <!-- cd-gallery-items -->