<?php

# This is a CLI application

/*
Given a few paragraphs in a file, read the file and count how many words are there. 
*/

$path = __DIR__.'/resources/problem-2/text.txt';


if (!file_exists($path)) {
	throw new Exception("Invalid file path $path", 1);
}

$contents = trim(file_get_contents($path)); // remove head or trailed space
$contents = preg_replace("/\s{2}+/"," ", $contents); // replace double spaces with single space
$contents = preg_replace("/\n/", " ", $contents); //remove newlines (\n)


$spaceCount = preg_match_all("/\s/", $contents);

printf("Total word count is: %s\n", ($spaceCount +1)); // total word count will be space count + 1