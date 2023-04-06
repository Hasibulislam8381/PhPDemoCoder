<?php

// Create array
$fruit = ['apple', 'orange', 'banana', 'graps'];

// Print the whole array
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// // Get element by index
// echo $fruit[0];
// // Set element by index
// $fruit[0] = 'Pine-Apple';
// // Check if array has element at index 2
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';
// // Append element
// $fruit[] = 'Graps';
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';

// // Print the length of the array
// echo count($fruit);

// // Add element at the end of the array
// array_push($fruit, 'Nut');
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';

// Remove element from the end of the array
// array_pop($fruit);
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';
// Add element at the beginning of the array
// array_unshift($fruit, 'graps');
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';
// // Remove element from the beginning of the array
// array_shift($fruit);
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';
// // Split the string into an array
// $string = "Cats,Dogs,Elephent";
// echo '<pre>';
// var_dump(explode(',', $string));
// echo '</pre>';
// // Combine array elements into string
// echo implode(',', $fruit) . '<br>';
// Check if element exist in the array
// var_dump(in_array('graps', $fruit)) . '<br>'; //search element from an array
// Search element index in the array
// echo array_search('Banana', $fruit);

// // Merge two arrays
// $vegetable = ['Potato', 'Cucumber'];
// echo '<pre>';
// var_dump([...$fruit, ...$vegetable]);
// echo '</pre>';
// Sorting of array (Reverse order also)
// rsort($fruit);
// echo '<pre>';
// var_dump($fruit);
// echo '</pre>';
// // Filter, map, reduce of array
// $numbers = [1, 2, 3, 4, 5, 6, 7, 8];
// $even = array_filter($numbers, fn ($k) => $k % 2 === 0);
// echo '<pre>';
// var_dump($even);
// echo '</pre>';
// // Array map
// $square = array_map(fn ($k) => $k * $k, $numbers);
// echo '<pre>';
// var_dump($square);
// echo '</pre>';
// //Array Reduce
// $sum = array_reduce($numbers, fn ($sum, $item) => $sum + $item);
// echo '<pre>';
// var_dump($sum);
// echo '</pre>';
// // https://www.php.net/manual/en/ref.array.php

// // ============================================
// // Associative arrays
// // ============================================

// // Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Jhon',
    'age' => 28,
    'hobbies' => ['Cricket', 'Football', 'Tennis']
];
// // Get element by key
// echo $person['name'] . '<br>';
// echo $person['age'] . '<br>';
// // Set element by key
// $person['address'] = 'America';
// echo '<pre>';
// var_dump($person);
// echo '</pre>';
// // Check if array has specific key
// isset($person['age']);
// // Print the keys of the array
// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';

// // Print the values of the array
// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';
// Sorting associative arrays by values, by keys
arsort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$multi = [
    [1, 2, 3, 4],
    [3, 4, 6, 7],
    [2, 5, 6, 3]
];
echo '<pre>';
var_dump($multi);
echo '</pre>';
