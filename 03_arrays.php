<?php
// Simple Array
$numbers = [1, 423, 12, 663];
$fruits = array('apple', 'orange', 'pear');

// var_dump($fruits);
// var_dump($numbers);

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    8 => 'green'
];

// echo $colors[4]; // this will print blue

// to print from a hex value

// echo $hex['blue'];

$person = [
    'first_name' => 'Jesse',
    'last_name' => 'Maddren',
    'email' => 'jesse@gmail.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Jesse',
        'last_name' => 'Maddren',
        'email' => 'jesse@gmail.com'
    ],
    [
        'first_name' => 'Stacy',
        'last_name' => 'Bum',
        'email' => 'stacy@gmail.com'
    ],
    [
        'first_name' => 'Pistolman',
        'last_name' => 'Winchester',
        'email' => 'jesse@rifle.com'
    ],

];

//echo $people[1]['email']; 
//the above will get the email of the 1st index of $person

//if we want to extrapolate json data from $people
var_dump(json_encode($people));
