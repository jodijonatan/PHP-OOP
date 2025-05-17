<?php

require_once "data/Person.php";

$Diego = new Person("Diego Nethan", "United State");
$Diego->name = "Diego";
$Diego->address = "Las Vegas";
$Diego->country = "United State";

echo "I'm $Diego->name";
echo ", from $Diego->address";
echo ", My country is $Diego->country" . PHP_EOL . PHP_EOL;

$Diego->sayHello("Joo");
$Diego->info();