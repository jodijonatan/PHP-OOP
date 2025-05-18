<?php

class Manager {
    public $name;

    public function sayHello(string $name) {
        echo "Hello $name, my name is $this->name. nice to meet you!" . PHP_EOL . PHP_EOL;
    }
}

class vicePresident extends Manager {
    public $age;
    public function myAge() {
        echo "my age is $this->age. I am younger than you";
    }
}