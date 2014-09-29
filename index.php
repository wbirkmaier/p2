	<?php
        error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
        ini_set('display_errors', 1); # Display errors on page (instead of a log file)
        ?>

<!DOCTYPE html>

	<!--	Dynamic Web Applications Fall 2014  			-->
	<!--    Project Number 2		    			-->
	<!--    Wil Birkmaier			    			-->
	<!--    First Project with PHP creating a password Generator    -->

<html>

<head>

	<title>Project 2 - XKCD Password Generator</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<?php require "php/logic.php"; ?>

</head>

<body>
	<p>This page will generate a pasword based on the xkcd method</p>
	<br>

	<form action="index.php" method="post">

	<fieldset>

		<legend>XKCD Password Generator</legend>

		<label for="passwordLength"><b>Enter a number between 1 and 25 for password length below</b></label><br>
		<input type="text" id="passwordLength" name="passwordLength" placeholder="Enter Number"><br>

		<input type="checkbox" id="numberChar" name="numberChar" value="true">
		<label for="numberChar"> Use Numerical Characters</label><br>

		<input type="checkbox" id="specialChar" name="specialChar" value="true">
                <label for="specialChar"> Use Special Characters</label><br>

		<br>

	</fieldset>

<input type="submit" value="Generate Password">

</form>


</body>

</html>
