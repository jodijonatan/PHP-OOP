<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// kadang kita perlu mengimport beberapa class di satu namespace, daripada kita impoer namespace lalu nama class
// satu satu, kita bisa menggunakan grub use. kita tinggal menggunakan kurung kurawal dan nama class class nya
use Data\One\{Conflict as conflict1, Diego, Nethan};
use Data\Two\Conflict as conflict2;

use function Helper\helpMe as Help;
use const Helper\APLIKASI as APP;

$conflict1 = new conflict1();
$diego = new Diego();
$nethan = new Nethan();
$conflict2 = new Conflict2();

help();
echo APP;