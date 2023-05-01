<?php

// What is class and instance
require_once 'person.php';
require_once 'student.php';

// $p = new person('Himel', 23, null);


// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getSalary() . '<br>';
// echo $p->setSalary(100);
// echo $p->getSalary() . '<br>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
$student = new Student('Himel', '23', 101);
echo $student->name;
