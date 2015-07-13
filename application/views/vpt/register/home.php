<ul class="hidden log-header no-padding no-margin">
    <li class="current">Meal Plan</li>
    <li>Info &amp FAQ's</li>
    <li>Settings</li>
</ul>

<section>

<div class="container">

    <div class="row">
        <div class="col-lg-12">

            <div class="white-box relative cf">
   

    <div class="top-section text-center">

        <h1 class="blue">Welcome to Virtual PT!</h1>
        <div class="md-margin"></div>
        <p>Thank you for registering with Virtual PT. We've emailed you a copy of your username and password.</p>
        <div class="md-margin"></div>
        <i class="f-60 fa fa-newspaper-o"></i>
        <div class="md-margin"></div>
        <p>In order to create your persona plan, we will need you to tell us some information about your body, diet and activity levels.</p>
        <div class="md-margin"></div>
        <hr class="stroke">
    </div>

    <div class="text-center">
        <?php 
            $attributes = array('class' => 'reg_form form-horizontal');
            echo form_open('register/register_form',$attributes);
        ?>
        <div class="md-margin"></div>
        <h3 class="blue">1. User details</h3>
        <div class="md-margin"></div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >First name</label><input class="col-xs-12 col-sm-6" type="text" name="fname" placeholder="Enter your first name" required>
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Last name</label><input class="col-xs-12 col-sm-6" type="text" name="lname" placeholder="Enter your last name" required>
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Email</label><input class="col-xs-12 col-sm-6" type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Password</label><input class="col-xs-12 col-sm-6" type="password" name="pwd" placeholder="Enter a password" required>
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Gender</label>
                <select class="col-xs-12 col-sm-6 btn-select" name="gender" data-style="gender" required>
                    <option>Select your gender</option>
                    <option>M</option>
                    <option>F</option>
                </select>
        </div>

        <div class="md-margin"></div>
        <h3 class="blue">2. Personal details</h3>
        <div class="md-margin"></div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Weight</label><input class="col-xs-12 col-sm-6" type="text" name="weight" placeholder="Enter your weight in kg">
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Body fat %</label><input class="col-xs-12 col-sm-6" type="text" name="bfat" placeholder="Enter your body fat">
        </div>
         <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Activity level</label>
            <input class="col-xs-12 col-sm-6" type="text" name="alevel" placeholder="Enter your activity level">
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Somatotype</label>
            <select class="col-xs-12 col-sm-6 btn-select" name="stype" data-style="stype" required>
                <option>Select your somatotype</option>
                <option value="1.25">Ectomorph</option>
                <option value="1.1">Mesomorph</option>
                <option value="1">Endomorph</option>
            </select>
            
        </div>
         <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Gym experience</label><input class="col-xs-12 col-sm-6" type="text" name="gexp" placeholder="Enter your gym experience">
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Target goal</label>
            <select class="col-xs-12 col-sm-6 btn-select" name="tgoal" data-style="tgoal" required>
                <option>Choose your goal</option>
                <?php foreach ($goals as $goal): ?>
                    <option value="<?php echo $goal['Goal_ID'] ?>"><?php echo $goal['Goal'] ?></option>
                <?php endforeach ?>
            </select>
           
        </div>

        <div class="md-margin"></div>
        <h3 class="blue">3. Diet preferences</h3>
        <div class="md-margin"></div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" ># meals per day</label>
            <select class="col-xs-12 col-sm-6 btn-select" name="nmeals"  data-style="nmeals" required>
                <option>Choose your number of meals</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
            
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Diet type</label><input class="col-xs-12 col-sm-6" type="text" name="dtype" placeholder="Enter your diet type">
        </div>
        <!--<div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Allergies</label><input class="col-xs-12 col-sm-6" type="text" name="allergies" placeholder="Enter your allergies">
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Halal or Kosher</label><input class="col-xs-12 col-sm-6" type="text" name="hork" placeholder="Halal or Kosher">
        </div>-->

        <div class="md-margin"></div>
        <h3 class="blue">4. Training preferences</h3>
        <div class="md-margin"></div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" ># sessions per week</label><input class="col-xs-12 col-sm-6" type="text" name="sweek" placeholder="Enter your number of sessions per week">
        </div>
        <div class="form-group">
            <label class="col-xs-12 control-lablel col-sm-3 col-sm-offset-1" >Time of sessions</label><input class="col-xs-12 col-sm-6" type="text" name="tsess" placeholder="Enter your training time">
        </div>
        <div class="lg-margin"></div>
        <button class="btn complete">Generate plan</button>
        
        <?php 
            echo form_close();
        ?>
    </div>

</div>

        </div>
    </div>

</div>

</section>
