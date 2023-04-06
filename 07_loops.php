<?php

// while

// Loop with $counter

// do - while

// for

// foreach
$fruits = ['Apple', 'Jackfruit', 'Orange'];
foreach ($fruits as $i => $fruit) {
    echo $i . $fruit . '<br>';
}
// Iterate Over associative array.
$person = [
    'name' => 'Hasibul',
    'surname' => 'Islam',
    'age' => 24,
    'hobbies' => ['cricket', 'football', 'tennis']
];

foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $value . '<br>';
}
