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
	@livewireStyles
    <?php BaseCss(); ?>

    <style>
        header.header_sticky{
            position: initial !important;
        }
    </style>

    <!-- SPECIFIC CSS -->
    <link href="../css/date_picker.css" rel="stylesheet">
	<!-- YOUR CUSTOM CSS -->
	<link href="../css/custom.css" rel="stylesheet">

</head>
<body>
    
    <?php MyHeader(); 
    
    ?>
    
	@livewire('doctorlisting',['doctors'=>$doctors])

    <?php Footer(); ?>

    <div id="toTop"></div>
	<!-- Back to top button -->

    <?php BaseJs(); ?>

    <!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="../js/markerclusterer.js"></script>
    <script src="../js/map_listing.js"></script>
    <script src="../js/infobox.js"></script>
    @livewireScripts
</body>
</html>