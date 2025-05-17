<?php

include_once "data/Person.php";

$person1 = new Person("Jodi", "Medan");
$person1->name = "Jodi";
$person1->address = "Medan";
$person1->country = "Indonesia";

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL . PHP_EOL;


$person2 = new Person("Jonatan", "Mardingding");
$person2->name = "Jonatan";
$person2->address = "New York";
$person2->country = "United States";

echo "name : $person2->name" . PHP_EOL;
echo "address : $person2->address" . PHP_EOL;
echo "country : $person2->country" . PHP_EOL . PHP_EOL;
echo Person::AUTHOR;