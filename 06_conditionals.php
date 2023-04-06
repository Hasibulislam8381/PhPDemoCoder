<?php

$age = 12;
$salary = 300000;

// if condition

// if condition - else

// if condition1 AND condition2

// if condition1 OR condition2

// if condition1 - elseif condition2 - else

// if condition1 and condition2 - elseif condition1 and condition2 - else

// Ternary if
// echo $age < 20 ? 'Young' : ($age < 32 ? 'Not Yong' : 'Old');
// Null coalescing operator
// $myAge = isset($age) ? $age : 17;
// echo $myAge;
// Null coalescing assignment operator. Since PHP 7.4
$person = [
    'name' => 'Himel'
];
// if (!isset($person['name'])) {
//     $person['name'] = 'Anonymous';
// }
$person['name'] ??= 'Anonymous';
echo $person['name'] . '<br>';
// switch

$user = 'man';
switch ($user) {
    case 'admin':
        echo "You are admin";
        break;
    case 'editor':
        echo "You are editor";
        break;
    default:
        echo "you are not";
}
