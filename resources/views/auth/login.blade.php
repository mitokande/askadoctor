<?php

    require_once("imports/base-css.php");
	require_once("imports/base-js.php");
    require_once("components/Header.php");
    require_once("components/Footer.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php BaseCss(); ?>
</head>
<body>
    
    <?php MyHeader(); ?>

    <main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
					<h1>Please login to Findoctor!</h1>
					<form  method="POST" action="{{ __('login') }}">
						@csrf
						<div class="box_form clearfix">
							<div class="box_login">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
							</div>
							<div class="box_login last">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Your email address">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Your password" name="password" id="password">
									<a href="#0" class="forgot"><small>Forgot password?</small></a>
								</div>
								<div class="form-group">
									<input class="btn_1" type="submit" value="Login">
								</div>
							</div>
						</div>
					</form>
					<p class="text-center link_bright">Do not have an account yet? <a href="/register"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>

    <?php Footer(); ?>

	<?php BaseJs(); ?>
    
</body>
</html>