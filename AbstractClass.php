<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location();  Error: karena Location adalah abstract class

$city = new City;

$province = new Province;

$country = new Country;