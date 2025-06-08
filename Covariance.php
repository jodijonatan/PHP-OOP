<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\AnimalFood;
use Data\catShelter;
use Data\dogShelter;
use Data\Food;

$catShelter = new catShelter;
$cat = $catShelter->adopt("Luna");

$dogShelter = new dogShelter;
$dog = $dogShelter->adopt("Doggy");