<header class="login">
	<div class="row">
		<div class="small-12 columns text-center">
			<div class="logo"></div>
			<div class="sm-margin"></div>
			<h5>Welcome to VPT</h5>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 columns">
		<div class="white login">
			<?php 
	            $attributes = array('class' => 'login');
	            echo form_open('register/register_part1_form',$attributes);
	        ?>
				<label>EMAIL</label>
				<input name="email" type="text">
				<div class="sm-margin"></div>
				<label>PASSWORD</label>
				<input name="pwd" type="password">
				<div class="md-margin"></div>
				<button class="btn" type="submit">SIGN UP</button>
				<div class="sm-margin"></div>

				<p>Have an account? <a class="blue" href="login">LOG IN</a></p>
			</form>

		</div>
	</div>
</div>