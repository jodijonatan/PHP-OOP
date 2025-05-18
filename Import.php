<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APLIKASI;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

// Namespace Helper dari file Helper.php
helpMe();
echo APLIKASI;