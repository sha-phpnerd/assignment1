<?php

# This is a CLI application

#Given an integer n, find the sum of the digits of the integer.

$actualInput = readline("Please enter the integer: ");

if (!is_numeric($actualInput)) {
	throw new Exception("Bad integer input", 1);
}
$integer = (int) $actualInput;
$sum = 0;

while ($integer > 0) {
	$rem = $integer % 10;
	$integer = ($integer - $rem)/10;
	$sum+=$rem;
}

printf("The sum of the digits of the integer %d is %d\n", $actualInput, $sum);
