<?php

// Import alias sangat berguna ketika ada dua namspace yang kita import dengan nama class yang sama

require_once "data/Conflict.php";
require_once "data/Helper.php";

// contoh nya pada namespace di bawah ini yang memiliki nama class yang sama, kita bisa menggunakan alias
use Data\One\Conflict as conflict1;
use Data\Two\Conflict as conflict2;

// (opsional), kita juga bisa menambah alias pada class lain walau tidak punya nama class yang sama
use function Helper\helpMe as Help;
use const Helper\APLIKASI as APP;

$conflict1 = new conflict1();
$conflict2 = new Conflict2();

help();
echo APP;