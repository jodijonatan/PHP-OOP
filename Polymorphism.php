<?php

require_once "data/Programmer.php";

// walau kita buat tipe nya adalah Programmer, tapi kita tetap bisa mengakses class Programmer beserta 
//semua turunan dari class Programmer
$company = new Company;
$company->programmer = new Programmer("Jodi");
$company->programmer = new BackendProgrammer("Jonatan");
$company->programmer = new FrontendProgrammer("Karo karo");

sayHelloProgrammer(new Programmer("Jodi"));
sayHelloProgrammer(new BackendProgrammer("Jonatan"));
sayHelloProgrammer(new FrontendProgrammer("Karo karo"));