<!-- /*

< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== not identical to
 -->


<!-- 
 if statement syntax
 if (condition {
    // code to be executed if conditon is true
 

*/ -->
<?php

$age = 20;

// if ($age >= 18) {
//     echo 'You are old enough to party';
// } else {
//     echo 'Sorry you aint old enough to party';
// }

$t = date("H");

// if ($t < 12) {
//     echo 'Good morning';
// } elseif ($t < 17) {
//     echo 'Good afternoon';
// } else {
//     echo 'Good evening';
// }


// $posts = ['First post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';
// This will do the same thing. the ? means echo posts if NOT empty, the : means ELSE echo no posts
// we HAVE to have an ELSE ':' or say ': null'
// using a coalescing operator '??'

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
$firstPost = $posts[0] ?? null; //coalescing operator

echo $firstPost;

$favColor = 'white';

// We can use 'case' in place of a whole bunch of 'elses'

switch ($favColor) {
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        break;
        echo 'Your favourite color is blue';
        break;
    case 'green':
        echo 'Your favourite color is green';
        break;
    case 'yellow':
        echo 'Your favourite color is yellow';
    default:
        echo 'Your favourite color is NOT Red, Green, Blue or Yellow.';
}
