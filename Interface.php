<?php

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza;
$car->drive();
$car->getTire();
$car->getBrand();
$car->isMaintenance();