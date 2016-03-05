<header class="home-header">
    <div class="shadowBG" style="right:<?php echo 100 - (($current_week / 12) * 100) ?>%"></div>
    <div class="row">
        <div class="small-12 columns">
            <div class="c-menu float-left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Home</span>
            </div>

            <img class="image-header float-right" src="/images/placeholder/<?php echo $user['User_ID'] ?>.jpg">
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="sm-margin"></div>
            <h3><?php echo date('l') .', '.date('d').date('S').' '.date('M')?></h3>
        </div>
    </div>
    <div class="sm-margin"></div>
    <div class="row">
        <div class="small-<?php echo $current_week; ?> columns">
            <span class="float-right">Week <?php echo $current_week; ?></span>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <div class="progress" role="progressbar" tabindex="0" aria-valuenow="50" aria-valuemin="0" aria-valuetext="50 percent" aria-valuemax="100">
              <div class="progress-meter" style="width: <?php echo (($current_week / 12) * 100) - 1 ?>%"></div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="stickMe">
            <div class="c-menu -left">
                <button class="menu">
                    <span class="lines"></span>
                </button>
                <span>Home</span>
            </div>

            <ul class="tabs" data-tabs id="example-tabs">
              <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Meals</a></li>
              <li class="tabs-title"><a href="#panel2">Training</a></li>
            </ul>
        </div>
    </div>
</header>

    
<div class="sm-margin"></div>
<div class="row">
    <div class="small-12 columns">
        <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
            <?php 

            $img_array = [];
            $num3 = ['breakfast','lunch','dinner'];
            $num4 = ['breakfast','breakfast','lunch','dinner'];
            $num5 = ['breakfast','breakfast','lunch','lunch','dinner'];
            $num6 = ['breakfast','breakfast','lunch','lunch','dinner','dinner'];

            $i = 1;
            switch (count($days_meals)) {
                case '3':
                    $img_array = $num3;
                    break;
                case '4':
                    $img_array = $num4;
                    break;
                case '5':
                    $img_array = $num5;
                    break;
                case '6':
                    $img_array = $num6;
                    break;
            }
        
            foreach ($days_meals as $meals): 
            ?>
            <div class="white meal_times text-center">
                <img src="/assets/<?php echo $img_array[$i-1]; ?>@2x.png">
                <div class="sm-margin"></div>
                <h4 class="meal_times__header capitalize"><?php echo $img_array[$i-1]; ?></h4>
                <a class="blue meal_times__anchor js-show-meal" data-show="<?php echo $i; ?>">CHOOSE</a>

                <div style="display:none" id="sm<?php echo $i; ?>" class="meal-breakdown overlay">
                    <div>
                        <div class="row">
                            <div class="small-12 columns">
                                <i data-meal="<?php echo $i; ?>" class="ion-close-round float-right js-close-meal"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <h5 >Meal <?php echo $i.": <span class='capitalize'>".$img_array[$i-1]."</span>"; ?></h5>
                            </div>
                            <div class="sm-margin clearfix"></div>
                            <img src="/img/thumb-1.jpg" alt="Preview image">
                            <div class="sm-margin clearfix"></div>
                            <div class="small-12 columns">
                                <h5><?php echo $meals['Protein_Name']; if (isset($meals['Carb_Name'])) { ?>, <?php echo $meals['Carb_Name']; } if (isset($meals['Fat_Name'])) { ?> &amp; <?php echo $meals['Fat_Name']; } ?><i class="fav ion-ios-star-outline float-right"></i></h5>
                                <div class="sm-margin"></div>
                                <ul>
                                    <li>x3 Large Eggs</li>
                                    <li>50g spinach</li>
                                    <li>1/2 red pepper</li>
                                    <li>x5 button mushrooms</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="small-12 columns">
                                <hr>
                                <h5>Nutritional breakdown</h5>
                                <div class="sm-margin"></div>
                                <div class="float-left canvas">
                                    <canvas class="pct-break" protein-pct="25" carb-pct="24" fat-pct="4" width="100" height="100" style="width: 50px; height: 50px;"></canvas>
                                </div>
                                <div class="float-left">
                                    <ul>
                                        <li><span class="blue block"></span>25g protein</li>
                                        <li><span class="brown block"></span>24g carbohydrate</li>
                                        <li><span class="green block"></span>4g fat</li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="meal-breakdown__swap text-center">
                            <span>SWAP MEAL</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sm-margin"></div>

            <?php $i += 1;
            endforeach 
            ?>
          </div>
          <div class="tabs-panel" id="panel2">
            <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
          </div>
        </div>
    </div>
</div>