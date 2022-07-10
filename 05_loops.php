<?php

// for loop syntax

// for ($x = -129; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }

// while loop

// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' .  $x . '<br>';
//     $x = $x + 1;
// }

// do while loops
// the block of dcode will always run at least once as its before the condition

// $x = 1;

// do {
//     echo 'Number' . $x . '<br>';
//     $x++;
// } while ($x <= 5);

/*
//Foreach Loop Syntax
 // foreach ($array as $value) {
    //code to be executed
 }
 */

$posts = ['First', 'Second', 'Third'];

//  for($x = 0; $x <count($posts); $++){
//     echo $posts[$x];
//  }

// foreach ($posts as $index => $post) {
//     echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Jesse',
    'last_name' => 'Maddren',
    'email' => 'jesse@gmail.com',
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}
