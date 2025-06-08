<?php

class Zero {
    private array $properties = []; 

    public function __get ($name) {
        return $this->properties[$name];
    }
     
    public function __set ($name, $value) {
        return $this->properties[$name] = $value;
    }

    public function __isset($name) {
        return isset($this->properties[$name]);
    }

    public function __unset($name) {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero;
$zero->firstName = "Jodi";
$zero->middleName = "Jonatan";
$zero->lastName = "Karo karo";

echo "First name : $zero->firstName" . PHP_EOL;
echo "Middle name : $zero->middleName" . PHP_EOL;
echo "Last name : $zero->lastName" . PHP_EOL;

$zero->sayHello ("Jodi", "Jonatan");
Zero::sayHello ("Jodi", "Jonatan");