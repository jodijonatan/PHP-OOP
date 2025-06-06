<?php

interface HelloWorld {
    function sayHello (): void; 
}

$helloWorld = new class ("Jodi") implements HelloWorld {
    private string $name;

    function __construct(string $name) {
        $this->name = $name;
    }

    function sayHello(): void{
        echo "Hello $this->name, nice to meet you!" . PHP_EOL;
    }
};

$helloWorld->sayHello();