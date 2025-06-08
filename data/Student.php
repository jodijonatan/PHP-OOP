<?php 

class Student {
    public int $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample (string $sample) {
        $this->sample = $sample;
    }

    public function __clone() {
        unset ($this->sample);
    }

    public function __toString(): string {
        return "Student id: $this->id, name: $this->name, value: $this->value";
    }

    public function __invoke(...$argument) // parameter variadic (...) digunakan dalam deklarasi fungsi untuk mengumpulkan beberapa argument yang tidak diketahui menjadi array 
    {
        $join = join(", ", $argument); // join() digunakan untuk menggabungkan element element dari array menjadi satu string tunggal
        echo "Invoke Student with arguments $join";
    }

    public function __debugInfo() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Jonatan",
            "version" => 1.0
        ];
    } 
}