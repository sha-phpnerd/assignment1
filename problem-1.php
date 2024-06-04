<?php

# This is a CLI application
# Given a list of integers, find the minimum of their absolute values. 

$numberOfInputs = readline("Numbers of input: ");

if (!is_numeric($numberOfInputs)) {
	throw new Exception("Invalid input, please enter a number", 1);
}

$numberOfInputs = (int) $numberOfInputs;

$inputs = [];

for ($i=1; $i <= $numberOfInputs; $i++) {
	$inputs[] = abs((int)readline("input for position $i : ")); // absolute value kept only 
}

$min = min($inputs);

printf("The given value's absolute minimum is : $min\n");

