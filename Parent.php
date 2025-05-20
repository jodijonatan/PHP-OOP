<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape;
echo $shape->getCorner();

$rectangle = new Rectangle;
echo $rectangle->getCorner();
echo $rectangle->getParentCorner();
