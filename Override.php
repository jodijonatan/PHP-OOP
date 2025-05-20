<?php

class Override {
    public $name;

    public function sayHello(string $name): void {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class Overriding extends Override {
    public function sayHello(string $name): void {
        echo "Hi $name, my name is Vice President $this->name" . PHP_EOL;
    }
}

$Jodi = new Override;
$Jodi->name = "Jodi";
$Jodi->sayHello("Diego");

$Jonatan = new Overriding;
$Jonatan->name = "Jonatan";
$Jonatan->sayHello("Diego");