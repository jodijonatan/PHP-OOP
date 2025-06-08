<?php

use Data\AnimalFood;
use Data\Cat;
use Data\Dog;
use Data\Food;

require_once "data/Animal.php";
require_once "data/Food.php";

$cat = new Cat;
$cat->eat(new AnimalFood);

$dog = new Dog;
$dog->eat(new Food);