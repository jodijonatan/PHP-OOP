<?php

class Hello {
    var $gelar;
    const AUTHOR = "Diego Nethan";

    function sayHello (?string $name) {
        if (is_null($name)) {
            echo "Heii, my name is $this->gelar" . PHP_EOL;
        } else {
            echo "Heii $name, my name is $this->gelar" . PHP_EOL;
        }
    }

    function helloAuthor () {
        echo "Hello, name Author is: " . self::AUTHOR;
    }
}   

$jodi = new Hello;
$jodi->gelar = "Jodi Jonatan";
$jodi->sayHello(null);
$jodi->helloAuthor();