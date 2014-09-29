<?php

/*Variable that points to wordlist*/
$filename="dictionary/wordlist";


/*Set Password Length*/
$numWords=htmlspecialchars($_POST["passwordLength"]);

if ($numWords == "") {
	$numWords=rand(3,10);
}

$xkcdPassword="";

/*Load wordlist into array and ignore newlines in file */
$wordList=file($filename, FILE_IGNORE_NEW_LINES);

/*Get total number of elements in the wordlist*/
$arrayTotal=count($wordList) - 1;

/*Build password string*/
for ($i=0; $i<$numWords; $i++) {
	$xkcdPassword=$xkcdPassword . $wordList[rand(0, $arrayTotal)] . "-";
}

/*Remove trailing "-" from string*/
$xkcdPassword=trim($xkcdPassword, "-");
