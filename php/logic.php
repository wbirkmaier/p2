<?php
$filename="dictionary/wordlist";

$wordlist=file($filename, FILE_IGNORE_NEW_LINES);

foreach ($wordlist as $line_num => $wordlist) {
    echo "Line #<b>{$line_num}</b> : " . "<br />\n";
}

