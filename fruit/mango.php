<?php

include_once "data/Class.php";

$mango = new Fruit;
$mango->name = "Mango";
$mango->color = "Orange";
$mango->size = "Small";
$mango->country = "Indonesia";

echo "Name : " . $mango->name . PHP_EOL;
echo "Color : " . $mango->color . PHP_EOL;
echo "Size : " . $mango->size . PHP_EOL;
echo "Country : " . $mango->country . PHP_EOL . PHP_EOL;
