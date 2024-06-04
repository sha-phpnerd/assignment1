<?php
# This is a CLI application

/*

Print the following pattern based on the given number n (can be any number). 
Sample input: 5 
Sample output: 
    *
   ***
  *****
 *******
*********

*/

$inputRows = readline("Input number of rows for a pyramid: ");

if(!is_numeric($inputRows)){
	throw new Exception("Invalid pyramid rows, it should be a valid integer", 1);
}

$inputRows = ((int) $inputRows);

$loopTimes = $inputRows * 2;
for ($i=1; $i <= $loopTimes ; $i+=2) {
	$star = str_repeat('*', $i);
	$space = str_repeat(' ', (int)(($loopTimes-$i)/2));
	$str = $space . $star;
	printf("%s\n", $str);
}