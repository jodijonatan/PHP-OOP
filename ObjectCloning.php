<?php

require_once "data/Student.php";

$student1 = new Student;
$student1->id = 1;
$student1->name = "Jodi";
$student1->value = 100;
$student1->setSample("Contoh sample");
var_dump($student1);

// cara clone keyword
$student2 = clone $student1;
var_dump($student2);

// cara clone manual
// $student2 = new Student;
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;
