<?php

    require_once("imports/base-css.php");
    require_once("imports/base-js.php");
    require_once("components/Header.php");
    require_once("components/Footer.php");
    require_once("components/Main2.php");
    require_once("components/Specialization.php");
    require_once("components/Appointment.php");
    require_once("components/AppSection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php BaseCss(); ?>
	
	<!-- Modernizr -->
	<script src="../js/modernizr.js"></script>

</head>
<body>
    
    <?php MyHeader(); ?>

    <main>

        <?php Main2(); ?>

        <?php SpecializationComponent(); ?>

        <?php AppointmentComponent(); ?>

        <?php AppSectionComponent(); ?>

    </main>

    <?php Footer(); ?>

    <?php BaseJs(); ?>
    
    <!-- SPECIFIC SCRIPTS -->
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
    
</body>
</html>