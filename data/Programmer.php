<?php

class Programmer {
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {}
class FrontendProgrammer extends Programmer {}

// walau kita buat tipe nya adalah Programmer, tapi kita tetap bisa mengakses class Programmer beserta 
//semua turunan dari class Programmer  
class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer (Programmer $programmer) {
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}