<?php 

class Person {
    const AUTHOR = "JODI JONATAN";

    public ?string $name = "Anonymous";
    public ?string $address = null;
    public string $country = "Indonesia"; // Tambahkan nilai default

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function info() {
        echo "Hiii!, my name is $this->name" . PHP_EOL;
        echo "I from $this->address" . PHP_EOL . PHP_EOL;
    }

    function sayHello (?string $name) {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    // function info () {
    //     echo "AUTHOR adalah : " . Person::AUTHOR . PHP_EOL;
    // }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
