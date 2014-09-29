<?php

/*Variable that points to wordlist*/
$filename="dictionary/wordlist";


/*Set Password Length*/
$numWords=htmlspecialchars($_GET["passwordLength"]);

if ($numWords == "") {
	$numWords=rand(3,25);
}

/*Load wordlist into array and ignore newlines in file */
$wordlist=file($filename, FILE_IGNORE_NEW_LINES);

/* Code to test array works by outputting to screen */
/* foreach ($wordlist as $line_num => $wordlist) {
    echo "Line #<b>{$line_num}</b> : " . "<br />\n"; 
} */

