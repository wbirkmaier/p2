<?php

/*Variable that points to wordlist*/
$filename="dictionary/wordlist";

/*Variable that points to special character list*/
$specialFilename="dictionary/speciallist";


/*Max password length*/
$maxPassword="10";

/*Set Password Length*/
$numWords=htmlspecialchars($_POST["passwordLength"]);

/*Initialize number characters boolean*/
$addNumber=htmlspecialchars($_POST["numberChar"]);

/*Initialize special characters boolean*/
$addSpecial=htmlspecialchars($_POST["specialChar"]);

/*Initialze number of words for password*/
if ($numWords == "" || $numWords > $maxPassword) {
	$numWords=rand(3,10);
}

/*Initialize xkcdPassword*/
$xkcdPassword="";

/*Load wordlist into array and ignore newlines in file */
$wordList=file($filename, FILE_IGNORE_NEW_LINES);

/*Load special character list into array and ignore newlines in file */
$specialList=file($specialFilename, FILE_IGNORE_NEW_LINES);

/*Get total number of elements in the wordlist*/
$arrayTotal=count($wordList) - 1;

/*Get total number of element in the special word list*/
$specialArrayTotal=count($specialList) - 1;

/*Build password string*/
for ($i=0; $i<$numWords; $i++) {
	$xkcdPassword=$xkcdPassword . $wordList[rand(0, $arrayTotal)] . "-";
}

/*Remove trailing "-" from string*/
$xkcdPassword=trim($xkcdPassword, "-");

/*Check if either option for special characters or numbers are checked*/
if ($addNumber == "true") {
	$xkcdPassword=$xkcdPassword . rand(0,9);
}
if ($addSpecial == "true") {
        $xkcdPassword=$xkcdPassword . $specialList[rand(0, $specialArrayTotal)];
}
