<?php

include_once "data/Class.php";

$watermelon = new Fruit;
$watermelon->name = "Watermelom";
$watermelon->color = "Green";
$watermelon->size = "Big";
$watermelon->country = "United States";

echo "Name : " . $watermelon->name . PHP_EOL;
echo "Color : " . $watermelon->color . PHP_EOL;
echo "Size : " . $watermelon->size . PHP_EOL;
echo "Country : " . $watermelon->country . PHP_EOL . PHP_EOL;