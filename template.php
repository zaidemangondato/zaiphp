<!-- INCLUDES Site URL of the WebPage -->
<?php include('config/siteurl.php'); ?>
<!-- INCLUDES System FUNCTIONS -->
<?php include('services/systemfunctions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>- - -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include('phpmodules/imports.php'); ?>
</head>
<body>
	<?php include('phpmodules/header.php'); ?>


	<?php systemfunctions::myFunction(); ?>


	<?php include('phpmodules/footer.php'); ?>
</body>
</html>