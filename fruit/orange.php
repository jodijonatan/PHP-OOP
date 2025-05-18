<?php

include_once "data/Class.php";

$orange = new Fruit;
$orange->name = "Orange";
$orange->color = "Orange";
$orange->size = "Small";
$orange->country = "Japan";

echo "Name : " . $orange->name . PHP_EOL;
echo "Color : " . $orange->color . PHP_EOL;
echo "Size : " . $orange->size . PHP_EOL;
echo "Country : " . $orange->country . PHP_EOL . PHP_EOL;