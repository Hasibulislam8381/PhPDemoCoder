<?php

// What is a variable

// Variable types
// String
// integer
// boolean
// double 
// NULL

// Declare variables

use function PHPSTORM_META\type;

$name = "Himel";
$age = 25;
$isMale = true;
$salary = null;

// Print the variables. Explain what is concatenation
// echo $name . '<br>';
// echo $age . '<br>';
// echo $isMale . '<br>';
// echo $salary;
// Print types of the variables
// echo gettype($name) ."<br>";
// echo gettype($age) . '<br>';
// echo gettype($isMale). '<br>';
// echo gettype($salary). '<br>';
// Print the whole variable
// var_dump($name);
// var_dump($age);
// var_dump($isMale);
// var_dump($salary);
// Change the value of the variable
$name = 30;

// Print type of the variable
// echo $name;
// echo gettype($name) . '<br>';
// // Variable checking functions
// var_dump(is_string($name));
// var_dump(is_int($name));
// // Check if variable is defined
// var_dump(isset($name));
// Constants
// define('pi', 3.1416);
// echo pi;
// defined('pi');

// Using PHP built-in constants
echo PHP_INT_MAX;
