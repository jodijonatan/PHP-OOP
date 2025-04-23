<?php

require_once "data/Person.php";

//menulis constanta
define ("CIHUY", "apa apa aja lah"); //cara lama
const slebew = "ehehehe"; //cara baru

echo CIHUY . PHP_EOL;
echo slebew . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;

$Creator = new Person;
$Creator->info();   
