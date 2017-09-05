<?php require 'header.php'; ?>

<div class="container-fluid">
	<div class="container-card">

	<div class="animated fadeIn contain">

		<div class="nav-card">
			<div class="nav-card-header">
				<ul>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
				</ul>
			</div>
		</div>

		<center>
			<img class="img-responsive" src="img/logo.jpg" id="image">
		</center>

		<p id="container-card-note">Sign up now to get instant alerts and emails when an internship is posted pertinet to your field of study!</p>
		
		<form method="post" action="create_user.php">
		<div class="form" id="sign-up-form">
			<div class="row">
				<div class="col-sm-12">
					<input type="number" class="form-control" placeholder="ID Number" name="user_id" maxlength="7" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="email" class="form-control" placeholder="Email" name="email" autocomplete="email" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-6">
					<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
				<div class="col-sm-6 col-xs-6">
					<input type="password" class="form-control" placeholder="Confirm password" name="pwd" required>
				</div>
			</div>
			<div class="row">
				<center>
					<button type="submit" name="submit" class="btn sign-up-btn">Sign up</button>
				</center>
			</div>
		</div>
		</form>

		<div class="container-card-bottom"></div>

	</div>
		
	</div>
	
	<a class="creator-info" tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Founder & Purpose" data-content="Created by Sir. Garfield Gray to aid students blah blah blah internship blah blah enhanced user experience..."><i class="fa fa-question headmaster" aria-hidden="true" style="color:black;opacity: 0.9;margin-top:25px;"></i></a>

</div>

<?php require 'footer.php'; ?>