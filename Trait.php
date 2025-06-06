<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person};

$person = new Person;
$person->name = "Jodi";
$person->goodBye(null);
$person->hello();
$person->run();