<?php

namespace Data\Otomatis {
    // Iterator otomatis dengan foreach
    // foreach hanya bisa mengakses properties yang visibility nya public 
    class Data {
        public string $firstName = "Jodi"; // bisa diakses foreach, karena public 
        protected string $middleName = "Jonatan"; // tidak bisa diakses foreach
        private string $lastName = "Karo karo"; // tidak bisa diakses foreach
    }

    $data = new Data;

    echo "Otomatis" . PHP_EOL;
    foreach ($data as $key => $value) {
        echo "$key : $value" . PHP_EOL . PHP_EOL;
    }
};

namespace Data\Manual {
    use ArrayIterator;
    use IteratorAggregate;

    // Iterator manual
    class Data implements IteratorAggregate // Interface bawaan dari PHP
    {
        public string $firstName = "Jodi";
        protected string $middleName = "Jonatan";
        private string $lastName = "Karo karo";

        public function getIterator (): \Traversable {
            $array = [
                "First name" => $this->firstName,
                "Middle name" => $this->middleName,
                "Last name" => $this->lastName
            ];

            return new ArrayIterator($array);
        } 
    }

    $data = new Data;

    echo "Manual" . PHP_EOL;
    foreach ($data as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
}