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
	<h1>This page will generate a pasword based on the xkcd method of password generation.</h1>
	<br>
	<p>XKCD is a an online web comic that once had a strip title <a href='http://xkcd.com/936/'>Password Strength</a>.  This particular strip detailed the dificulty of coming up with and memorizing a technically hard to guess password.  The comic goes on to explain how using a word, such as "workday" and transforming it into a password such as "W0rkd@y!3" by subsituting numbers and special characters still makes a hard to remember passowrd and is statiscally easy for a computer to crack by guesing combinations.  The arguement goes on to say that by taking a varity of works and forming a non-sensical sentance would be much harder to crack, and easier to remember, do to the sheer lengthing of the number of characters.</p>
	<br>
	<p>This site will take this method of password generation and create one for you based on your input.</p>
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
