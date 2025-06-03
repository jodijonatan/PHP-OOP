<?php

// PEWARISAN
require_once "data/Manager.php";

$jodi = new Manager("Jodi", "Manager");
$jodi->sayHello("Diego");

$jonatan = new vicePresident("Jonatan");
$jonatan->age = 16;
$jonatan->sayHello("Diego");
$jonatan->myAge();