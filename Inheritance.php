<?php

// PEWARISAN
require_once "data/Manager.php";

$jodi = new Manager;
$jodi->name = "Jodi";
$jodi->sayHello("Diego");

$jonatan = new vicePresident;
$jonatan->name = "Jonatan";
$jonatan->age = 16;
$jonatan->sayHello("Diego");
$jonatan->myAge();