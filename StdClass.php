<?php

$array = [
    "firstName" => "Jodi",
    "middleName" => "Jonatan",
    "lastName" => "Karo karo"
];

$object = (object)$array;

echo "First name : $object->firstName" . PHP_EOL;
echo "Middle name : $object->middleName" . PHP_EOL;
echo "Last name : $object->lastName" . PHP_EOL;