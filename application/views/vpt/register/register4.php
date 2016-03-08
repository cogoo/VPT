<header class="login">
	<div class="row">
		<div class="small-12 columns text-center">
			<h5>Customize your plan</h5>
			<hr class="short-stroke blue">
			<p>Almost there! The last thing we need is some of your personal details so we can taloir your plan to your exact needs.</p>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 columns">
		<div class="white login">
			<?php 
	            $attributes = array('class' => 'login');
	            echo form_open('register/register_part4_form',$attributes);
	        ?>
				<label>WEIGHT</label>
				<input class="small-10 columns force float-left" name="weight">
				<select class="small-2 columns clear" name="unit">
					<option>KG</option>
				</select>
				<div class="sm-margin clearfix"></div>
				<label>BODY FAT %</label>
				<div class="sm-margin clearfix"></div>
				<select class="small-5 columns" name="bfat">
					<option>5%</option>
				</select>
				<p class="small-7 columns">Unsure? <a class="blue" href="/">VIEW GUIDE</a></p>
				<div class="sm-margin clearfix"></div>

				<label>SOMATOTYPE</label>
				<div class="sm-margin clearfix"></div>
				<select class="small-5 columns" name="stype">
					<option value="1">Mesomorph</option>
				</select>
				<p class="small-7 columns">Unsure? <a class="blue" href="/">VIEW GUIDE</a></p>
				<div class="sm-margin clearfix"></div>

				<label>ACTIVITY LEVEL</label>
				<div class="sm-margin clearfix"></div>
				<select class="small-5 columns" name="alevel">
					<option>Light</option>
				</select>
				<p class="small-7 columns">Light daily activity</p>
				<div class="sm-margin clearfix"></div>

				<label>GYM EXPERIENCE</label>
				<div class="sm-margin clearfix"></div>
				<select class="small-5 columns" name="gex">
					<option>Intermediate</option>
				</select>
				<p class="small-7 columns">Unsure? <a class="blue" href="/">VIEW GUIDE</a></p>
				<div class="sm-margin clearfix"></div>
				
				<label>MEALS PER DAY</label>
				<div>
					<div class="sm-margin"></div>
					<input id="m5" name="meals" value="5" type="radio"><label for="m5">5</label><input id="m4" name="meals" value="4" type="radio"><label for="m4">4</label><input id="m3" name="meals" value="3" type="radio"><label for="m3">3 + snack</label>
					<p>*Warning: this cannot be changed!<br>*We recommend 5 meals, but you must chose the most practical solution for you</p>
				</div>
				<div class="sm-margin"></div>

				<label>TRAINING SESSIONS PER WEEK</label>
				<div>
					<div class="sm-margin"></div>
					<input id="t6" name="train" value="6" type="radio"><label for="t6">6</label><input id="t5" name="train" value="5" type="radio"><label for="t5">5</label><input id="t4" name="train" value="4" type="radio"><label for="t4">4</label>
					<p>*Warning: this cannot be changed!</p>
				</div>
				<div class="sm-margin"></div>
				<label>TRAINING TIME</label>
				<div class="sm-margin clearfix"></div>
				<select class="small-5 columns" name="ttime">
					<option value="1">First thing</option>
				</select>

				<div class="sm-margin clearfix"></div>
				<button class="btn" type="submit">CHOOSE PLAN</button>
			</form>

		</div>
		<div class="sm-margin"></div>
	</div>
</div>

