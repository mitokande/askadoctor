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
		<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<h2>404 <i class="icon_error-triangle_alt"></i></h2>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
						<form>
							<div class="search_bar_error">
								<input type="text" class="form-control" placeholder="What are you looking for?">
								<input type="submit" value="Search">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

    <?php Footer(); ?>
	
	<?php BaseJs(); ?>

</body>
</html>