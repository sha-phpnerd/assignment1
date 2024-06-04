<?php
# This is a CLI application

/*
Given a sentence, keep the order of the words same, but reverse the characters of each word. 
For example, if the given sentence is: ‘I love programming’ 
The result should be: ‘I evol gnimmargorp’
*/

$input = readline("Input the sentence or default is \"I love programming\"\n");

$input = $input ?: "I love programming";

$input = strrev($input);

$input = explode(' ', $input);

$input = array_reverse($input);

$output = implode(' ', $input);

printf("The reversed outout is below :\n %s\n", $output);