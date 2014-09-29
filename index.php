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
	<h1>This page will generate a pasword based on the <a href='http://xkcd.com/936/'>XKCD Method</a> of password generation.</h1>
	<br>

	<form action="index.php" method="post">

	<fieldset>

		<legend>XKCD Password Generator</legend>

		<label for="passwordLength"><b>Enter a number between 1 and 10 or click generate when blank for a random length</b></label><br>
		<input type="text" id="passwordLength" name="passwordLength" placeholder="Enter Number"><br>
		<br>
		<input type="checkbox" id="numberChar" name="numberChar" value="true" <?php if(isset($_POST["numberChar"])) echo "checked='checked'"; ?> >
		<label for="numberChar"> Append Numerical Character</label><br>

		<input type="checkbox" id="specialChar" name="specialChar" value="true" <?php if(isset($_POST["specialChar"])) echo "checked='checked'"; ?> >
                <label for="specialChar"> Append Special Character</label><br>
		<br>

	</fieldset>

	<fieldset>
                <legend>Your Password is:</legend>
		<p id="passwordOut"><?=$xkcdPassword?></p>
	</fieldset>


	<input type="submit" value="Generate Password">
	<p id="footNote"> *A number larger than 10 will be ignored and a random number will be used</p>

	</form>

</body>

</html>
