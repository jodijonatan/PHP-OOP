<?php

namespace Data;

class Shape {
    public function getCorner() {
        return 0;
    }
}

class Rectangle extends Shape {
    public function getCorner() {
        return 4;
    }

    public function getParentCorner() {
// untuk mengakses getCorner yang terdapat pada parent, kita cukup menambahkan kata kunci parent belakang getcorner
        return parent::getCorner();
    }
}