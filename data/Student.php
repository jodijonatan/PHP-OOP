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
}