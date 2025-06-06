<?php

namespace Data\Traits;

trait SayGoodBye {
    public function goodBye (?string $name): void {
        if (is_null($name)) {
            echo "Good Bye Broo" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello {
    public function hello (): void {
        echo "Heyy yoo $this->name" . PHP_EOL;
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run (): void;
}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun {
        //Trait Visibility Override 

        // hello as private;
        // goodBye as private;
    }
}

class Person {
    use All;

    function run (): void {
        echo "Person $this->name is running";
    }

    public function goodBye (?string $name): void {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello (?string $name): void {
        echo "Hello in Person" . PHP_EOL;
    }
}