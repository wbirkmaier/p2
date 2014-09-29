<?php

/*Variable that points to wordlist*/
$filename="dictionary/wordlist";


/*Set Password Length*/
$numWords=htmlspecialchars($_GET["passwordLength"]);

if ($numWords == "") {
	$numWords=rand(3,25);
}

$xkcdPassword="";

/*Load wordlist into array and ignore newlines in file */
$wordList=file($filename, FILE_IGNORE_NEW_LINES);

/*Get total number of elements in the wordlist*/
$arrayTotal=count($wordList) - 1;


for ($i=0; $i<=$numWords; $i++) {
	echo $wordList[rand(0, $arrayTotal)] . " ";
}

/* Code to test array works by outputting to screen */
/* foreach ($wordlist as $line_num => $wordlist) {
    echo "Line #<b>{$line_num}</b> : " . "<br />\n"; 
} */



