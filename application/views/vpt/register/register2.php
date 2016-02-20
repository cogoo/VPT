<header class="login">
	<div class="row">
		<div class="small-12 columns text-center">
			<h5>Account created!</h5>
			<hr class="short-stroke blue">
			<p>Thanks for registering. We need a few details to complete your account and then it's time to create your plan.</p>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 columns">
		<div class="white login">
			<?php 
	            $attributes = array('class' => 'login');
	            echo form_open('register/register_part2_form',$attributes);
	        ?>
				<label>FIRST NAME</label>
				<input name="fname">
				<div class="sm-margin"></div>
				<label>LAST NAME</label>
				<input name="lname">
				<div class="sm-margin"></div>
				<label>CREATE A USERNAME</label>
				<input name="uname">
				<div class="sm-margin"></div>
				<label>GENDER</label>
				<div>
					<div class="sm-margin"></div>
					<input id="male" name="gender" value="M" type="radio"><label for="male">Male</label><input id="female" name="gender" value="F" type="radio"><label for="female">Female</label>
				</div>
				<div class="sm-margin"></div>
				<label>DATE OF BIRTH</label>
				<div class="sm-margin"></div>
				<select class="small-2 columns" name="day">
					<option>1</option>
				</select>
				<select class="small-5 small-offset-1 columns" name="month">
					<option>January</option>
				</select>
				<select class="small-3 small-offset-1 columns" name="year">
					<option>1991</option>
				</select>
				<div class="sm-margin clearfix"></div>
				<button class="btn" type="submit">CHOOSE PLAN</button>
			</form>

		</div>
		<div class="sm-margin"></div>
	</div>
</div>

