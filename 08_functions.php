<?php

// Function which prints "Hello I am TheCodeholic"
function hello($name)
{
    echo "Hello I am " . $name . '<br>';
}
hello('Himel');
hello('Jihan');
hello('Hamim');
// Create sum of two functions
// function sum($a, $b)
// {
//     return $a + $b;
// }
// $sum = sum(45, 2);
// echo $sum;
// Create function to sum all numbers using ...$nums
function sum(...$num)
{
    $sum = 0;
    foreach ($num as $nums) {
        $sum += $nums;
    }
    return $sum;
}
$sum = sum(1, 2, 3, 4, 5);
echo $sum . '<br>';
function sum2(...$num)
{
    return array_reduce($num, fn ($sum, $item) => $sum + $item);
}

$sum2 = sum2(1, 2, 3, 4, 5);
echo $sum2;
// Arrow functions
