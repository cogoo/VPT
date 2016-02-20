<header class="login">
	<div class="row">
		<div class="small-12 columns">
			<h5 class="text-center">Choose your fitness plan</h5>
			<hr class="short-stroke blue">
			<p>All of our plans are suitable for anyone at any level of experience. Select a plan below and then we'll ask you for the last few details so we can tailor it directly to your needs, preferences and current experience levels - your very own virtual personal trainer!</p>
		</div>
	</div>
</header>

<div class="row">
	<div class="small-12 columns">
		<?php 
			foreach ($goals as $goal) {
				?>

				<div class="white login js-plan-chooser">
					<h5 class="text-center"><?php echo $goal['Name'] ?></h5>
					<hr class="short-stroke blue">
					<div class="small-2 columns">
						<p>GOAL</p>
					</div>
					<div class="small-10 columns">
						<p class="lblue"><?php echo $goal['Goal'] ?></p>
					</div>
					<div class="xs-margin clearfix"></div>
					<div class="small-2 columns">
						<p>INFO</p>
					</div>
					<div class="small-10 columns">
						<p class="lblue">DGSGFGDHGHGHG GDHFHG H GGHHGH HHF H GHGHGHF</p>
					</div>
					<div class="sm-margin clearfix"></div>

					<button class="btn inverted blue">SELECT</button>
				</div>
				<div class="sm-margin"></div>

				<?php
			}
		?>
		<div class="sm-margin"></div>
		<a href="/register/4" class="btn blue skinny dp-block text-center m-auto">PURCHASE PLAN</a>
	</div>
</div>

