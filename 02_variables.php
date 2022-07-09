<?php

$name = 'Jesse'; // String
$age = 30; // integer
$has_kids = false; // Boolean
$cash_on_hand = 20.75; // This is a float

echo $name, $age;
var_dump($has_kids);
var_dump($cash_on_hand);

// If we want to post something out we need to cancatanate 
// use a peroid ( . ) imbetween strings

echo $name . ' is ' . $age . ' years old';

echo "$name is $age years old";

echo "${name} is ${age} years old";

$x = '5' + '5';

var_dump($x);

echo 10 - 5;
echo 5 * 6;
echo 10 / 2;
echo 10 % 3;

// create a constant (something that WILL NOT change)

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
