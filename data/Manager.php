<?php

class Manager {
    public $name;

    public $title;

    public function __construct(string $name = "", string $title = ""){
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name) {
        echo "Hello $name, I am $this->title $this->name. nice to meet you!" . PHP_EOL . PHP_EOL;
    }
}

class vicePresident extends Manager {
    public $age;

    public function __construct(string $name = ""){
        parent::__construct($name, "Vice President");
    }

    public function myAge() {
        echo "my age is $this->age. I am younger than you";
    }
}